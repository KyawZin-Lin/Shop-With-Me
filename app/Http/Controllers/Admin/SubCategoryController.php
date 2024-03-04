<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\Admin\SubCategoryInterface;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{

    public function __construct(private SubCategoryInterface $subCategoryInterface)
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subCategories = $this->subCategoryInterface->paginate();
        return view('admin.sub-categories.index',compact('subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.sub-categories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->subCategoryInterface->storeValidation();
        $this->subCategoryInterface->store();
        return redirect('admin/subCategories');

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
    public function edit(SubCategory $subCategory)
    {
        $categories = Category::all();
        return view('admin.sub-categories.edit',compact('categories','subCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        $this->subCategoryInterface->updateValidation($subCategory);
        $this->subCategoryInterface->update($subCategory);
        return redirect('admin/subCategories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return redirect('admin/subCategories');
    }
}
