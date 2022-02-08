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

    public function indexAnnouncement()
    {
        $announcements = Announcement::all();
        return view('announcements.index_announcement', compact('announcements'));
    }


    public function formAnnouncement()
    {
        $categories= Category::all();
        return view('announcements.form_announcements', compact('categories'));
    }

    public function createAnnouncement(Request $request)
    {
        $announcement= Auth::user()->announcements()->create([
            'title'=> $request->title,
            'price'=>$request->price,
            'description'=>$request->description,
            'img'=>$request->file('img')->store('public/img'),
            'category_id'=>$request->category,
        ]);

        
        
        return redirect (route('announcement.index'))
        ;
        }

    }

