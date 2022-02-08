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
       
        return view('announcements.index_announcement');
    }


    public function formAnnouncement()
    {
        // $categories = Category::all('name');
        return view('announcements.form_announcements');
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
        // dd($request->category);

        return redirect (route('welcome'))->with('message', 'il tuo annuncio é stato inserito correttamente');
        }

    }

