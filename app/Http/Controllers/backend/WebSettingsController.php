<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;

use App\Models\WebSettings;
use Illuminate\Http\Request;

class WebSettingsController extends Controller
{
    public function index()
    {
        $WebSettings = WebSettings::latest()->first();
        return view('backend.web-settings.index', compact('WebSettings'));
    }

    public function store(Request $request)
    {
        $WebSettings = WebSettings::latest()->first();

        $input = empty($WebSettings) ? new WebSettings() : WebSettings::find($WebSettings->id);
        $input->title = $request->title;
        $input->sub_title = $request->sub_title;
        $input->breaking_news = $request->breaking_news;
        $input->description = $request->description;
        $input->contact_1 = $request->contact_1;
        $input->contact_2 = $request->contact_2;
        $input->email_1 = $request->email_1;
        $input->email_2 = $request->email_2;
        $input->address_1 = $request->address_1;
        $input->address_2 = $request->address_2;
        $html = $request->map;
        $startPos = strpos($html, 'src="') + strlen('src="');
        $endPos = strpos($html, '"', $startPos);
        $maplink = substr($html, $startPos, $endPos - $startPos);
        $input->map = $maplink;
        $input->social_link_1 = $request->social_link_1;
        $input->social_link_2 = $request->social_link_2;
        $input->social_link_3 = $request->social_link_3;
        $input->social_link_4 = $request->social_link_4;
        $input->social_link_5 = $request->social_link_5;
        $input->working_time = $request->working_time;
        $input->copyright = $request->copyright;

        if ($image = $request->file('fav_icon')) {
            @unlink($input->fav_icon);
            $destinationPath = 'upload/';
            $imageName = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input->fav_icon = $destinationPath . $imageName;
        }

        if ($image = $request->file('bg_image')) {
            @unlink($input->bg_image);
            $destinationPath = 'upload/';
            $imageName = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input->bg_image = $destinationPath . $imageName;
        }

        if ($image = $request->file('logo')) {
            @unlink($input->logo);
            $destinationPath = 'upload/';
            $imageName = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input->logo = $destinationPath . $imageName;
        }

        if ($image = $request->file('mobile_logo')) {
            @unlink($input->mobile_logo);
            $destinationPath = 'upload/';
            $imageName = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input->mobile_logo = $destinationPath . $imageName;
        }
        $input->save();
        return redirect()->back();
    }
}
