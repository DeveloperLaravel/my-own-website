<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
      public function index()
    {

        return  view('pages.intro.index');
    }
      public function about()
    {

        return  view('pages.intro.about');
    }
       public function portfolio()
    {

        return  view('pages.intro.portfolio');
    }
       public function blog()
    {

        return  view('pages.intro.blog');
    }
        public function dart()
    {

        return  view('pages.dart.index');
    }
    
          public function flutter()
    {

        return  view('pages.flutter.index');
    }
            public function laravel()
    {

        return  view('pages.php.index');
    }

}
