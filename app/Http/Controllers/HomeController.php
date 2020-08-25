<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function exhibitionList()
    {
        return view('organiser.exhibitionsList');
    }

    public function organiserindex()
    { 
         return view('organiser.index');
    }
    
    
    public function exhibitorDetail()
    {
        return view('organiser.exdetail');
    }
    public function exhibitor()
    {
        return view('organiser.exhibitor');
    }

   

   public function showguide()
    {
        return view('organiser.showguide');
    }

   public function letrature()
    {
        return view('organiser.letrature');
    }

   public function semiranlist()
    {
        return view('organiser.seminarlist');
    }

   public function semiranadd()
    {
        return view('organiser.semiranadd');
    }

   public function software()
    {
        return view('organiser.software');
    }
}
