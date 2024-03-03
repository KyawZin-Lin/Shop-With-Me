<?php
namespace App\Interfaces\Admin;

use App\Models\Category;

interface CategoryInterface {

    public function paginate();
    public function store();
    public function update(Category $category);

}
