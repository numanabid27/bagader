<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->latest()->paginate(10);
        return view('dashboard.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('uploads'), $imageName);
            $product->image = 'uploads/' . $imageName;
        } else {
            $product->image = 'placeholder.jpg';
        }

        $product->is_active = $request->has('is_active');
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('dashboard.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
            'is_active' => 'boolean',
        ]);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($product->image && $product->image !== 'placeholder.jpg' && file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('uploads'), $imageName);
            $product->image = 'uploads/' . $imageName;
        }

        $product->is_active = $request->has('is_active');
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        if ($product->image && $product->image !== 'placeholder.jpg' && file_exists(public_path($product->image))) {
            unlink(public_path($product->image));
        }

        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
