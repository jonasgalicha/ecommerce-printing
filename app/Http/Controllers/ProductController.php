<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('productImages', 'user')->get();

        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(StoreProductRequest $request)
    {
        $product = Product::create($request->except('product_image') + ['user_id' => auth()->id(), 'price' => 0, 'status' => 0 ]);

        if ($request->hasFile('product_image')) {
            foreach ($request->file('product_image') as $image) {
                // Store the image in the public disk (storage/app/public)
                $path = $image->store('products', 'public');

                // Insert each image path with the corresponding product_id into the product_images table
                ProductImage::create([
                    'product_id' => $product->id,
                    // Change the path from 'public/products' to 'storage/products'
                    'image_path' => str_replace('public/', 'storage/', $path)
                ]);
            }
        }

        alert()->success('Product has been added');
        return redirect()->route('product.index');
    }

    public function normalProduct(Product $product)
    {
        $product->update(['status' => 1]);

        return redirect()->route('product.index');
    }

    public function mainProduct(Product $product)
    {
        $product->update(['status'=> 2]);

        return redirect()->route('product.index');
    }

    public function activeProduct(Product $product)
    {
        $product->update(['status'=> 3]);

        return redirect()->route('product.index');
    }

    public function marketplace()
    {
        $products = Product::with('productImages', 'user')->where('status', 1)->get();
        $mainProducts = Product::with('productImages','user')->where('status', 2)->get();
        $activeProduct = Product::with('productImages','user')->where('status', 3)->first();

        return view('client.marketplace.index', compact('products', 'mainProducts', 'activeProduct'));
    }

}
