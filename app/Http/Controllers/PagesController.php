<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To Laravel';
        return view('pages.index',compact('title'));
    }

    public function about(){
        $title = 'About Page';
        return view('pages.about', compact('title'));
    }

    public function service(){
        $data = array(
            'title'     => 'Services',
            'services'  => ['Web', 'Computer Networking', 'Mobile Apss']
        ); 

        return view('pages.service')->with($data);
    }
}
