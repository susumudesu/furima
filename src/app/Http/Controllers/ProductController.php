<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Product_Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $items = Product::all();
        return view('index',compact('items'));
    }

    public function find(Request $request)
    {
        $keyword = $request->input('keyword');

        $items = Product::query()
            ->when($keyword, function($q) use($keyword){
                $q->where('name', 'LIKE', "%{$keyword}%");
        })->get();

        return view('index', compact('items', 'keyword'));
    }

    public function show($itemId)
    {
        $item = Product::find($itemId);
        return view('show')->with('item',$item);
    }

    public function create() 
    {
        $categories = Category::all();

        return view('sell',compact('categories'));
    }

    public function store(Request $request) 
    {
        $product = $request->only(['name','image','status','description','price']);
        Product::create($product);

        $category_id = $request->category_id;

        $product->categories()->attach($category_id);

        $file_name = $request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('',$file_name);

        return view('index');
    }
}
