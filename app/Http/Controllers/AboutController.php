<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LadingPageConfig;

class AboutController extends Controller
{
    public function index()
    {
        return view('admin.about.index');
    }

    public function update($config, Request $request)
    {
        $instance = LadingPageConfig::getInstance();

        $params = $request->all();

        if ($request->about_image) {
            $fileName = time() . $request->about_image->getClientOriginalName();
            $file = $request->file('about_image');
            $file->move(public_path('images'), $fileName);
            $params['about_image'] = $fileName;
        }

        if ($request->about_image_1) {
            $fileName = time() . $request->about_image_1->getClientOriginalName();
            $file = $request->file('about_image_1');
            $file->move(public_path('images'), $fileName);
            $params['about_image_1'] = $fileName;
        }

        if ($request->about_image_2) {
            $fileName = time() . $request->about_image_2->getClientOriginalName();
            $file = $request->file('about_image_2');
            $file->move(public_path('images'), $fileName);
            $params['about_image_2'] = $fileName;
        }

        $instance->update($params);

        return redirect()->route('about.index');
    }
}
