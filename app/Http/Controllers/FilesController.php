<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\File;

class FilesController extends Controller
{
    public function index()
    {
        return view('backend.files');
    }

    public function store(Request $request)
    {
        $name = $request->file->getClientOriginalName();

        $request->file->storeAs('public', $name);

        $file = new File();
        $file->name = $name;
        $file->save();

        return back()->withInput();
    }

    public function show()
    {
        return Storage::files('public');
    }
}
