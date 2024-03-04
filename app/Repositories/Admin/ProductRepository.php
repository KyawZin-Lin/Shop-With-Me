<?php

namespace App\Repositories\Admin;

use App\Models\Product;
use App\Interfaces\Admin\ProductInterface;

class ProductRepository implements ProductInterface
{

    public function paginate()
    {
        return Product::paginate(10);
    }

    public function storeValidation()
    {
        return request()->validate([
            'name' => 'required',
            'brand_id' => 'required',
            'category_id' => 'required',
            'sub_category_id' => 'required',

        ]);
    }
    public function store()
    {
        $product = new Product();
        $product->name = request()->name;
        $product->brand_id = request()->brand_id;
        $product->category_id = request()->category_id;
        $product->sub_category_id = request()->sub_category_id;
        $product->original_price = request()->original_price;
        $product->selling_price = request()->selling_price;


        if (request()->hasFile('product_image')) {
            $image = request()->file('product_image');
            $customFilename = 'product_image_' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/product-image', $customFilename);
            $product->product_image= $customFilename;
        }


        $product->save();
    }


    public function updateValidation(Product $product)
    {
        return request()->validate([
            'name' => 'required'
        ]);
    }

    public function update(Product $product)
    {
        $product->name = request()->name;
        $product->update();
    }
}
