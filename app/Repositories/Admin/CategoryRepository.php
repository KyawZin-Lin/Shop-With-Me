<?php
namespace App\Repositories\Admin;

use App\Interfaces\Admin\CategoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryInterface{

    public function paginate()
    {
        return Category::paginate(10);
    }

    public function store()
    {   $category=new Category();
        $category->name = request()->name;
        $category->save();
    }

    public function update(Category $category)
    {
        $category->name = request()->name;
        $category->update();
    }

}
