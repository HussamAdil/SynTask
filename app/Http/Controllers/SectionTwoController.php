<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionTwoController extends Controller
{

    public function index(){

        return view('section_two.index');
    }

    public function articles(){

        return view('section_two.articles');
    }

    public function cats(){

        return view('section_two.categories');
    }

    public function read($id){

        return view('section_two.single_article');
    }

    public function fags(){

        return view('section_two.fags');
    }
}
