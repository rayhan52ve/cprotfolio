<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;
use App\Models\Video;
use App\Models\WebSettings;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $webSettings = WebSettings::first();
        $videos = Video::all();
        $banner = Banner::first();
        $categories = Category::with(['posts' => function ($query) {
            $query->latest()->take(30);
        }])->get();

        // $politics = Post::Where('category_id', 10)
        //     ->latest()
        //     ->take(5)
        //     ->get();
        // $international = Post::Where('sub_category_id', 5)
        //     ->latest()
        //     ->take(5)
        //     ->get();
        // $business = Post::Where('category_id', 8)
        //     ->latest()
        //     ->take(5)
        //     ->get();
        // $technology = Post::Where('category_id', 11)
        //     ->latest()
        //     ->take(5)
        //     ->get();
        $recent_news = Post::latest()
            ->take(11)
            ->get();

            $breaking = Post::where('check',1)->latest()->take(5)->get();
        return view('frontend.home.index', compact('recent_news', 'categories','webSettings', 'banner','videos','breaking'));
    }

    public function subCategoryPages($id)
    {
        $banner = Banner::first();

        $webSettings = WebSettings::first();

        $subCategory = SubCategory::with(['posts' => function ($query) {
            $query->latest();
        }])->find($id);

        $posts = $subCategory->posts()->latest()->paginate(20);

        $recent_news = Post::latest()
            ->take(5)
            ->get();

        return view('frontend.home.subCategoryPages', compact('subCategory', 'posts', 'recent_news','webSettings','banner'));
    }

    public function postDetails($id)
    {
        $banner = Banner::first();

        $webSettings = WebSettings::first();

        $subCategories = SubCategory::all();

        $recent_news = Post::latest()
            ->take(11)
            ->get();
        $post = Post::find($id);
        return view('frontend.home.post_details', compact('post', 'recent_news', 'subCategories','webSettings','banner'));
    }
}
