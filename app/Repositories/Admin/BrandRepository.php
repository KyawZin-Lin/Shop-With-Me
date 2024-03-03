<?php
namespace App\Repositories\Admin;

use App\Interfaces\Admin\BrandInterface;
use App\Models\Brand;

class BrandRepository implements BrandInterface{

    public function paginate()
    {
        return Brand::paginate(10);
    }

    public function store()
    {   $brand=new Brand();
        $brand->name = request()->name;
        $brand->save();
    }

    public function update(Brand $brand)
    {
        $brand->name = request()->name;
        $brand->update();
    }

}
