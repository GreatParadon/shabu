<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

use App\Http\Requests;

class ContentController extends Controller
{
    public function index($id)
    {
        $content = Content::find($id);
        return view('web.content', compact('content'));
    }
}
