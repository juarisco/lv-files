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
        if ($request->hasFile('file')) {
            $name = $request->file->getClientOriginalName();

            $request->file->storeAs('public', $name);

            $file = new File();
            $file->name = $name;
            $file->save();

            return 'El archivo se subió exitosamente a la base de datos';
        } else {
            return back()->withInput();
        }
    }

    public function show()
    {
        return Storage::files('public');
    }
}
