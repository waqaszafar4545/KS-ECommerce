<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Product;
use DB;

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
        // $Product = Product::all();
        // return view('home')->with('Product', $Product);
        $Product = DB::table('products')
            // ->select('product.id','product.name','product.title')
            ->join('images', 'products.id', '=', 'images.id')
            ->join('categories', 'categories.id', '=', 'images.id')
            ->select('images.*', 'products.*', 'categories.title as category_title', 'images.description as images_description')            // ->where(['something' => 'something', 'otherThing' => 'otherThing'])
            ->get();
        return view('home')->with('Product', $Product);
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
