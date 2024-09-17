<?php

namespace App\Http\Controllers;

use App\Models\Auther;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::paginate(10);

        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $authers = Auther::select('id', 'auther_name')->get();
        $categories = Category::select('id', 'category_name')->get();
        return view('product.create', compact('authers', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'product_name' => 'required|string|min:3|unique:products,product_name',
            'product_price' => 'required|integer|min:0',
            'description' => 'nullable|string|min:10',
            'product_auther' => 'required|integer|exists:authers,id',
            'product_category' => 'required|integer|exists:categories,id',

        ]);

        Product::create([
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_description' => $request->description,
            'auther_id' => $request->product_auther,
            'category_id' => $request->product_category,
        ]);

        return redirect()->route('product.index')->with('message','Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        return view('product.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        return view('product.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect()->route('product.index')->with('message', 'deleted successfully');
    }
}
