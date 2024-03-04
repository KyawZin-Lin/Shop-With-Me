<?php
namespace App\Interfaces\Admin;

use App\Models\SubCategory;

interface SubCategoryInterface {

    public function paginate();
    public function store();
    public function storeValidation();
    public function update(SubCategory $subCategory);
    public function updateValidation(SubCategory $subCategory);


}
