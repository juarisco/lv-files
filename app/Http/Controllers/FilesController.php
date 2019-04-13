<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
    public function index()
    {
        return view('backend.files');
    }

    public function store(Request $request)
    {
        $request->file('file');

        return $request->file->storeAs('public', $request->file->getClientOriginalName());
    }

    public function show()
    {
        return Storage::files('public');
    }
}
