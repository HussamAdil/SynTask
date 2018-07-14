<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{

    public function announcements(){

        return view('section_three.announcements');
    }
}
