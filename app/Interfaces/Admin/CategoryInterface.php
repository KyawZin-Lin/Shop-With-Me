<?php
namespace App\Interfaces\Admin;

use App\Models\Category;

interface CategoryInterface {

    public function paginate();
    public function store();
    public function storeValidation();
    public function update(Category $category);
    public function updateValidation(Category $category);


}
