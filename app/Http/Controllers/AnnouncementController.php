<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\AnnouncementImage;
use App\Jobs\GoogleVisionWatermark;
use App\Jobs\GoogleVisionLabelImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Jobs\GoogleVisionRemoveFaces;
use Illuminate\Support\Facades\Storage;
use App\Jobs\GoogleVisionSafeSearchImage;

class AnnouncementController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function categoryAnnouncement($id)
    {
        $announcements = Announcement::where('category_id', $id)->get();
        return view('announcements.category_announcement', compact('announcements'));
    }


    public function formAnnouncement(Request $request)
    {
        $secret = $request->old(
            'secret',
            base_convert(sha1(uniqid(mt_rand())), 16, 36)
        );

        return view('announcements.form_announcements', compact('secret'));
    }



    public function createAnnouncement(Request $request)
    {
        $ad = Announcement::create([
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category,
        ]);


        $prova = $ad->id;
        // dichiaraziioni variabili segreto
        $secret = $request->input('secret');
        // dichiarazione variabile img
        $images = session()->get("images.{$secret}", []);
        // elimina img
        $removeImages = session()->get("removedimages.{$secret}", []);

        // calcolo diff img e img delete

        $images = array_diff($images, $removeImages, []);

        foreach ($images as $image) {

            $i = new AnnouncementImage();
            $fileName = basename($image);
            $newFileName = "public/announcements/{$prova}/{$fileName}";

            Storage::move($image, $newFileName);
            $i->file = $newFileName;
            $i->announcement_id = $ad->id;


            dispatch(new ResizeImage(
                        $newFileName,
                        500,
                        500
                    ));
            $i->save();

            dispatch(new GoogleVisionSafeSearchImage($i->id));
            
            
            
            $job = (new GoogleVisionSafeSearchImage($i->id));
            $job -> withChain([
                new GoogleVisionLabelImage($i->id),
                new GoogleVisionRemoveFaces($i->id),
                new GoogleVisionWatermark($i->id),
                new ResizeImage(
                    $i->file,
                    300,
                    150
                ),
                new ResizeImage (
                    $i->file,
                    400,
                    300
                ),
            ])->dispatch($i->id);
    
        }

        File::deleteDirectory(storage_path("/public/temp/{$secret}"));

        return redirect(route('welcome'))->with('message', 'Il tuo annuncio e stato inserito correttamente, attendi un revisore per finalizzare la pubblicazione. ');
    }

    // function upload images

    public function uploadImage(Request $request)
    {
        $secret = $request->input('secret');
        $fileName = $request->file('file')->store("public/temp/{$secret}");

        dispatch(new ResizeImage(
            $fileName,
            80,
            80,
        ));


        session()->push("images.{$secret}", $fileName);

        return response()->json(

            [
                'id' => $fileName
            ]

        );

        //    session()->get("images.{$secret}"
    }

    public function removeImage(Request $request)
    {

        $secret = $request->input('secret');
        $fileName = $request->input('id');

        session()->push("removedimages.{$secret}", $fileName);

        Storage::delete($fileName);

        return response()->json('ok');
    }

    public function getImages(Request $request)
    {
        $secret = $request->input('secret');

        $images = session()->get("images.{$secret}", []);
        $removedImages = session()->get("removedimages.{$secret}", []);

        $images = array_diff($images, $removedImages);

        $data = [];

        foreach ($images as $image) {
            $data[] = [
                'id' => $image,
                'src' => AnnouncementImage::getUrlByPath($image, 150, 150)
            ];
        }

        return response()->json($data);
    }


    public function detailsAnnouncement(Announcement $announcement)
    {
        return view('announcements.details_announcements', compact('announcement'));
    }
}
