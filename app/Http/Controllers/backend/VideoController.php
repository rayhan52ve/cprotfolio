<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Video;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();
        $subCategories = SubCategory::get();
        $posts = Video::with('category', 'subCategory', 'userCreator')->get();

        return view('backend.video.index', compact('categories', 'posts', 'subCategories'));
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
        $input = new Video();
        if (Auth::check()) {
            $input->post_creator = Auth::id();
        }
        $url = $request->video;
        $pattern = '/(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/';
        preg_match($pattern, $url, $matches);

        $videoId = isset($matches[1]) ? $matches[1] : null;
        $input->category_id = $request->category_id;
        $input->sub_category_id = $request->sub_category_id;
        $input->title = $request->title;
        $input->slug = Str::slug($request->title);
        $input->description = $request->description;
        $input->video = $videoId;
        $input->save();
        return redirect()->back();
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
    public function edit(string $id)
    {
        $posts = Video::find($id);
        $categories = Category::get();
        $subCategories = SubCategory::get();
        return view('backend.video.edit', compact('posts', 'categories', 'subCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = Video::find($id);
        if (Auth::check()) {
            $input->post_creator = Auth::id();
        }

        $url = $request->video;
        $pattern = '/(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/';
        preg_match($pattern, $url, $matches);

        $videoId = isset($matches[1]) ? $matches[1] : null;

        $input->category_id = $request->category_id;
        $input->sub_category_id = $request->sub_category_id;
        $input->title = $request->title;
        $input->slug = Str::slug($request->title);
        $input->description = $request->description;
        $input->video = $videoId;
        $input->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Video::find($id);

        $post->delete();

        return redirect()->back();
    }

}
