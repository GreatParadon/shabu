<?php

namespace App\Http\Controllers\Web;

use App\Models\Branch;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branch = Branch::where('active', 1)->get();
        return view('web.branch', compact('branch'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $branch = Branch::find($id);
//        dd($branch);
        return view('web.branch_detail', compact('branch'));

    }

}
