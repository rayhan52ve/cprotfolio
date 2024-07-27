<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = Banner::latest()->first();
        return view('backend.banners.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $banner = Banner::latest()->first();

        $input = empty($banner) ? new Banner() : Banner::find($banner->id);

        $input->home_banner_link1 = $request->home_banner_link1;
        $input->home_banner_link2 = $request->home_banner_link2;
        $input->home_banner_link3 = $request->home_banner_link3;
        $input->banner_link4 = $request->banner_link4;
        // $input->banner_link5 = $request->banner_link5;

        $destinationPath = 'upload/';

        if ($image = $request->file('homebanner1')) {
            @unlink($input->homebanner1);
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = date('YmdHis') . '_' . rand(1000, 9999) . '.' . $imageExtension;
            $image->move($destinationPath, $imageName);
            $input->homebanner1 = $destinationPath . $imageName;
        }

        if ($image = $request->file('homebanner2')) {
            @unlink($input->homebanner2);
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = date('YmdHis') . '_' . rand(1000, 9999) . '.' . $imageExtension;
            $image->move($destinationPath, $imageName);
            $input->homebanner2 = $destinationPath . $imageName;
        }

        if ($image = $request->file('homebanner3')) {
            @unlink($input->homebanner3);
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = date('YmdHis') . '_' . rand(1000, 9999) . '.' . $imageExtension;
            $image->move($destinationPath, $imageName);
            $input->homebanner3 = $destinationPath . $imageName;
        }

        if ($image = $request->file('banner4')) {
            @unlink($input->banner4);
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = date('YmdHis') . '_' . rand(1000, 9999) . '.' . $imageExtension;
            $image->move($destinationPath, $imageName);
            $input->banner4 = $destinationPath . $imageName;
        }

        // if ($image = $request->file('banner5')) {
        //     @unlink($input->banner5);
        //     $imageName = date('YmdHis') . '.' . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $imageName);
        //     $input->banner5 = $destinationPath . $imageName;
        // }

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
