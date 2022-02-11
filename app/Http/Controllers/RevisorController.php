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

    private function ifAccepted($announcement_id, $value) {
            $announcement = Announcement::find($announcement_id);
            $announcement->is_accepted = $value;
            $announcement->save();
            return redirect (route('revisor.welcome'));
        }

        Public function accept ($announcement_id) {

            return $this->ifAccepted($announcement_id, true);
        }
            
        Public function reject ($announcement_id) {

            return $this->ifAccepted($announcement_id, false);
        }
            


}
