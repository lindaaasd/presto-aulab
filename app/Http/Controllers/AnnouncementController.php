<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function categoryAnnouncement($name, $category_id)
    {
        $category=Category::find($category_id);
        $announcements=$category->announcements()->orderBy('created_at', 'desc')->paginate(5);
        return view('announcements.category_announcement', compact('category','announcements'));
    }


    public function formAnnouncement()
    {
        
        return view('announcements.form_announcements');
    }

    public function createAnnouncement(Request $request)
    {
        $announcement = Auth::user()->announcements()->create([
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'img' => $request->file('img')->store('public/img'),
            'category_id' => $request->category,
        ]);
        // dd($request->category);

        return redirect(route('welcome'))->with('message', 'il tuo annuncio é stato inserito correttamente');
    }

    public function detailsAnnouncement(Announcement $announcement){
        return view('announcements.details_announcements', compact('announcement'));
    }
}
