<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{ // landing Page views
  public function index()
  {
    return view('landing_page.index');
  }
  
  public function services()
  {
    return view('landing_page.services');
  }
  /*
  public function functions()
  {
    return view('landing_page.functions');
  }
  */
  public function blog()
  {
    
    return view('landing_page.blog')
        ->with('posts', Post::orderBy('id', 'DESC')
        ->get())
    ;
  }

  public function contact()
  {
    return view('landing_page.contact');
  }
  
}

