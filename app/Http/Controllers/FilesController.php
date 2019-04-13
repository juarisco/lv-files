<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function index()
    {
        return view('backend.files');
    }

    public function store(Request $request)
    {
        $request->file('file');

        return $request->file->store('public');
    }
}
