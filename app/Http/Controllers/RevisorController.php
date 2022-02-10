<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.revisor');
    }

    public function index()
    {
        $announcement = Announcement::where('is_accepted', null)
	    ->orderBy('created_at', 'desc')
	    ->first();

    Return view('revisor.revisor_welcome', compact('announcement'));
    }

    Private function ifAccepted($id, $value) {
        $announcement = Announcement::find($id);
        $announcement->is_accepted = $value;
        $announcement->save();
        
        return redirect (route('revisor.welcome'));
        }

        Public function accept ($id) {

            return $this->setAccepted($id, true);
        }
            
        Public function reject ($id) {

            return $this->setAccepted($id, false);
        }
            


}
