<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\SubCategoryInterface;
use App\Models\SubCategory;

class SubCategoryRepository implements SubCategoryInterface
{

    public function paginate()
    {
        return SubCategory::paginate(10);
    }

    public function storeValidation()
    {
        return request()->validate([
            'name' => 'required',
            'category_id' => 'required',
        ]);
    }
    public function store()
    {
        $subCategory = new SubCategory();
        $subCategory->name = request()->name;
        $subCategory->category_id = request()->category_id;

        $subCategory->save();
    }


    public function updateValidation(SubCategory $subCategory)
    {
        return request()->validate([
            'name' => 'required',
            'category_id' => 'required',

        ]);
    }

    public function update(SubCategory $subCategory)
    {
        $subCategory->name = request()->name;
        $subCategory->category_id = request()->category_id;
        $subCategory->update();
    }
}
