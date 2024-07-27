<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;

use App\Models\Page;
use App\Models\Section;
use Illuminate\Http\Request;
class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::get();

        $sections = Section::get();
        return view('backend.section.index', compact('pages', 'sections'));
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
        $input = new Section();
        $input->page_id = $request->page_id;
        $input->title = $request->title;
        $input->sub_title = $request->sub_title;
        $input->description = $request->description;

        if ($image = $request->file('image')) {
            $destinationPath = 'upload/';
            $categoryImage = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $categoryImage);
            $input->image = $destinationPath . $categoryImage;
        }

        if ($image = $request->file('bg_image')) {
            $destinationPath = 'upload/';
            $categoryImage = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $categoryImage);
            $input->bg_image = $destinationPath . $categoryImage;
        }

        $input->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pages = Page::get();
        $section = Section::find($id);
        return view('backend.section.edit', compact('section', 'pages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $input = Section::find($id);
        $input->page_id = $request->page_id;
        $input->title = $request->title;
        $input->sub_title = $request->sub_title;
        $input->description = $request->description;

        if ($image = $request->file('image')) {
            @unlink($input->image);
            $destinationPath = 'upload/';
            $categoryImage = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $categoryImage);
            $input->image = $destinationPath . $categoryImage;
        }

        if ($image = $request->file('bg_image')) {
            @unlink($input->bg_image);
            $destinationPath = 'upload/';
            $categoryImage = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $categoryImage);
            $input->bg_image = $destinationPath . $categoryImage;
        }

        $input->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $section = Section::find($id);
        @unlink($section->image);
        @unlink($section->bg_image);
        $section->delete();

        return redirect()->back();
    }
}
