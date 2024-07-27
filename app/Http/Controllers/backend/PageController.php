<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::get();
        return view('backend.page.index', compact('pages'));
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
        $input = new Page();
        $input->name = $request->name;
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
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $page = Page::find($id);
        return view('backend.page.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = Page::find($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
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
        $page = Page::find($id);
        @unlink($page->image);
        $page->delete();

        return redirect()->back();
    }
}
