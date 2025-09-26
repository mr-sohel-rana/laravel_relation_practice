<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

 class ProductController extends Controller
{
    // Display all products
    public function index()
    {
        $products = Product::all();
        return view('resource.index', ['products' => $products]);
    }

    // Show create form
    public function create()
    {
        return view('resource.create');
    }

    // Store new product
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'brand' => 'required|string|max:255',
        ]);

        Product::create($validated);

        return redirect()->route('product.index')
                         ->with('success', 'Product created successfully!');
    }

    // Show single product
    public function show(Product $product)
    {
        return view('resource.show', compact('product'));
    }

    // Show edit form
    public function edit(Product $product)
    {
        return view('resource.edit', compact('product'));
    }

    // Update product
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'brand' => 'required|string|max:255',
        ]);

        $product->update($validated);

        return redirect()->route('product.index')
                         ->with('success', 'Product updated successfully!');
    }

    // Delete product
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index')
                         ->with('success', 'Product deleted successfully!');
    }
}
