<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subCategory = SubCategory::with('category')->get();
        $categories = Category::get();
        return view('backend.sub-category.index', compact('categories', 'subCategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = new SubCategory();
        $input->name = $request->name;
        $input->category_id = $request->category_id;
        $input->slug = Str::slug($request->name);

        if ($image = $request->file('image')) {
            $destinationPath = 'upload/';
            $categoryImage = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $categoryImage);
            $input->image = $destinationPath . $categoryImage;
        }

        $input->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = Category::get();
        $SubCategory = SubCategory::find($id);
        return view('backend.sub-category.edit', compact('categories', 'SubCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = SubCategory::find($id);

        $category->name = $request->name;
        $category->slug = Str::slug($request->name);

        $category->category_id = $request->category_id;
        if ($image = $request->file('image')) {
            @unlink($category->image);
            $destinationPath = 'upload/';
            $newImageName = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $newImageName);

            $category->image = $destinationPath . $newImageName;
        }

        // Set the old_image field before saving the category
        $category->image = $category->image;

        $category->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $subCategory = SubCategory::find($id);

        if ($subCategory && isset($subCategory->image) && file_exists($subCategory->image)) {
            unlink($subCategory->image);
        }
        $subCategory->delete();

        return redirect()->back();
    }
}
