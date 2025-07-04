<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
      public function index()
    {

        return  view('pages.index');
    }
      public function about()
    {

        return  view('pages.about');
    }
       public function portfolio()
    {

        return  view('pages.portfolio');
    }
       public function blog()
    {

        return  view('pages.blog');
    }
        public function dart()
    {

        return  view('pages.dart.index');
    }
          public function flutter()
    {

        return  view('pages.flutter.index');
    }
            public function php()
    {

        return  view('pages.php.index');
    }

}
