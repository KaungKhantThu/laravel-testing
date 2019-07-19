<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	 return view('welcome')-> with([
    	'greeting'=> 'Hello',
    	'names'=> [
    		'aung aung',
    		'mg mg',
    		'ma ma'
    	]
        ]);
    }

    public function contact()
    {
    	 return view('contact');
    }

    public function about()
    {
    	 return view('about');
    }


    
}
