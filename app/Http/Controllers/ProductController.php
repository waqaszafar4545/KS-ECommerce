<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use Illuminate\Http\Request;
use Session;
use App\Http\Models\Product;
use App\Http\Models\Image;
use App\Http\Models\Category;

class ProductController extends Controller
{
    protected $productService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
        // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProducts()
    {
        return $this->productService->getProducts();
    }
    public function createProducts()
    {
        // dd('test');
        // return $this->productService->createProducts();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'product_price' => 'required',
            'product_description' => 'required',
            'image_title' => 'required',
            'image_description' => 'required',
            'product_image' => 'required',
            'categoty_title' => 'required'
        ]);
        $category = new Category;
        $category->title = $request->categoty_title;
        $category_result = $category->save();
        $image = new Image;
        $file = $request->file('product_image');
        $file_name = $file->getClientOriginalName();
        $destinationPath = 'uploads';
        $file_path = $destinationPath . "/" . $file_name;
        $file->move($destinationPath, $file->getClientOriginalName());
        $image->title = $request->image_title;
        $image->description = $request->image_description;
        $image->path = $file_path;
        $image_result = $image->save();
        $category_id = Category::orderBy('id', 'desc')->first();
        $image_id = Image::orderBy('id', 'desc')->first();
        $product = new Product;
        $product->name = $request->product_name;
        $product->description = $request->product_description;
        $product->image_id = $image_id->id;
        $product->price = $request->product_price;
        $product->category_id = $category_id->id;
        $product_result = $product->save();
        if ($category_result && $image_result && $product_result) {
            $request->session()->flash('status', 'Product Added Successfully');
            return redirect('home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
