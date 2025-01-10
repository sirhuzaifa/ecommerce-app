<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Category index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $data = $request->except('_token');
        Category::create($data);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return "Category show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return "Category edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        return "Category update";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        return "Category destroy";
    }
}
