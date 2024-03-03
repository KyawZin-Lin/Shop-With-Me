<?php
namespace App\Interfaces\Admin;

use App\Models\Brand;

interface BrandInterface {

    public function paginate();
    public function store();
    public function update(Brand $brand);

}
