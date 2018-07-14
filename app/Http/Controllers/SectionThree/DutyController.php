<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DutyController extends Controller
{


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function duties(){

        return view('section_three.duties');
    }
}
