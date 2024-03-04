<?php
namespace App\Interfaces\Admin;

use App\Models\Product;

interface ProductInterface {

    public function paginate();
    public function store();
    public function storeValidation();
    public function update(Product $product);
    public function updateValidation(Product $product);


}
