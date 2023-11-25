<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAboutUsRequest;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::first();


        return view('welcome', compact('aboutUs'));
    }

    public function create()
    {
        $aboutUs = AboutUs::first();

        return view('about', compact('aboutUs'));
    }

    public function update(UpdateAboutUsRequest $request, AboutUs $aboutUs)
    {
        $aboutUs->update($request->except('image') + ['image' => $request->file('image')->store('aboutUs', 'public')]);

        return redirect()->route('about.create');
    }

}
