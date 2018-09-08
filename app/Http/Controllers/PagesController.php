<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
 	public function index() {
		 $title = 'Welcome to out site!!';
		 // return view('pages.index', compact('title'));
		 return view('pages.index')->with('title', $title);
		 
 	}

 	public function about() {
		 $title = 'Who we are?!';
		 return view('pages.about')->with('title', $title);
 	}

 	public function services() {
		 $data = array(
			 'title' => 'Sevices',
			 'services' => ['Web Desing', 'Programming', 'SEO']
		 ); // this will be an assosiative array 
 		return view('pages.services')->with($data); // here we pass in data 
 	}
}
