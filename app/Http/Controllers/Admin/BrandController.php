<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\Admin\BrandInterface;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function __construct(private BrandInterface $brandInterface )
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands=$this->brandInterface->paginate();
        return view('admin.brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , Brand $brand)
    {
        $this->brandInterface->store();
        return redirect('admin/brands');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('admin.brands.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Brand $brand)
    {
        $this->brandInterface->update($brand);
        return redirect('admin/brands');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect('admin/brands');
    }
}
