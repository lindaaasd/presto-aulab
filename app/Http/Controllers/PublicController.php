<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;


class PublicController extends Controller
{   
    public function home(){
        $announcements = Announcement::orderBy('created_at', 'desc')->take(5)->get();
        return view('welcome', compact('announcements'));
    }

    public function search(Request $request){
        $q=$request->input('q');
        $announcements= Announcement::search('q')->where('visible', true)->get();
        return view('search.search_result', compact('q', 'announcements'));
    }
    
}
