<?php

namespace App\Http\Controllers;

use App\Jobs\ResizeImage;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\AnnouncementImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AnnouncementController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function categoryAnnouncement($id)
    {
        $announcements= Announcement::where('category_id', $id)->get();
        return view('announcements.category_announcement', compact('announcements'));
    }


    public function formAnnouncement(Request $request)
    {
        $secret = $request->old(
            'secret',
             base_convert (sha1(uniqid(mt_rand())), 16, 36));

        return view('announcements.form_announcements', compact('secret'));
    }



    public function createAnnouncement(Request $request)
    {
    
            $announcement = Auth::user()->announcements()->create([
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category,
        ]);

        $secret=$request->input('secret');

        $images=session()->get("images.{$secret}", []);
        $removedImages = session()->get("removedimages.{$secret}", []);

        $images = array_diff($images, $removedImages);

        foreach($images as $image){

            $i = new AnnouncementImage();

            $fileName= basename($image);
            $newFileName= "public/announcements/{$announcement->id}/{$fileName}";
            Storage::move($image, $newFileName);

            dispatch(new ResizeImage(
                $newFileName,
                300,
                150
            ));

            $i->file = $newFileName;
            $i->announcement_id = $announcement->id;

            $i->save();

        }

        File::deleteDirectory(storage_path("/app/public/temp/{$secret}"));

        return redirect(route('welcome'))->with('message', 'il tuo annuncio é stato inserito correttamente');
    }

    // function upload images

    public function uploadImage(Request $request){
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

    public function removeImage(Request $request){

        $secret = $request->input('secret');
        $fileName = $request->input('id');

        session()->push("removedimages.{$secret}", $fileName);

        Storage::delete($fileName);

        return response()->json('ok');
    }

    public function getImages(Request $request){
        $secret = $request->input('secret');

        $images = session()->get("images.{$secret}", []);
        $removedImages = session()->get("removedimages.{$secret}", []);

        $images = array_diff($images, $removedImages);

        $data = [];

        foreach( $images as $image){
            $data[] = [
                'id' => $image,
                'src' => AnnouncementImage::getUrlByFilePath($image, 80, 80)
            ];
        }

        return response()->json($data);
    }


    public function detailsAnnouncement(Announcement $announcement){
        return view('announcements.details_announcements', compact('announcement'));
    }

}