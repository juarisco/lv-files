<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostFile;
use App\Category;

class FilesController extends Controller
{
    public function index()
    {
        $PostFiles = \DB::table('post_files')->get();
        return view('backend.files.index', compact('PostFiles'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('backend.files.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            // $name = $request->file->getClientOriginalName();

            $name = $request->get('name');
            $category = $request->get('category');

            $request->file->storeAs('public', $name);

            $file = new PostFile();
            $file->name = $name;
            $file->category_id = $category;
            $file->save();

            return 'El archivo se subió exitosamente a la base de datos';
        } else {
            return back()->withInput();
        }
    }

    public function show($name)
    {
        return response()->download(Storage_path('app/public/' . $name), null, [], null);
    }
}
