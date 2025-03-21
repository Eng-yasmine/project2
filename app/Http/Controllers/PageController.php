<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index()
  {
    return view('pages.home');
  }
  public function major()
  {
    return view('pages.majors');
  }
  public function doctor()
  {
    return view('pages.doctors');
  }
  public function contact()
  {
    return view('pages.contact');
  }
  public function ContactAction(Request $request)
  {
    //dd($request->all());
    return redirect()->route('pages.contact')->with('success','your message has been sent');
  }
}
