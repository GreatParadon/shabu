<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Content;
use Illuminate\Http\Request;

use App\Http\Requests;

class WebController extends Controller
{
    public function index()
    {
        $content = Content::where('active', 1)->get();
        return view('web.index', compact('content'));
    }

    public function about()
    {
        $about = About::first();
        return view('web.about', compact('about'));
    }
}
