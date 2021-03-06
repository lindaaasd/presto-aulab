<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;


class PublicController extends Controller
{   
    public function home(){
        $announcements = Announcement::orderBy('created_at', 'desc')->take(4)->get();
        return view('welcome', compact('announcements'));
    }

    public function search(Request $request){
        $q = $request->input('q');

        $announcements= Announcement::where('title','LIKE','%'.$q.'%')->get();
        // dd($announcements);

        return view('search.search_result', compact('q', 'announcements'));
    }
    
    public function locale($locale){
        session()->put('locale', $locale);
        return redirect()->back();
    }

    
}
