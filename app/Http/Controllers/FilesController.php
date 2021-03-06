<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostFile;
use App\Category;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
    public function index()
    {
        // $PostFiles = PostFile::all();
        // $PostFiles->load('category');
        $PostFiles = PostFile::where('user_id', auth()->id())->get();

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
            $name = $request->file->getClientOriginalName();

            // $name = $request->get('name');
            $category = $request->get('category');

            $request->file->storeAs('public', $name);

            $file = new PostFile();
            $file->name = $name;
            $file->category_id = $category;
            $file->user_id = auth()->id();
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

    public function delete($name)
    {
        Storage::delete($name);
        unlink(Storage_path('app/public/' . $name));

        return 'El archivo fue eliminado éxitosamente del sistema';
    }

    public function hide($id)
    {
        PostFile::where('id', $id)->delete();

        return 'El archivo se encuentra oculto y no está disponible ni en la base de datos';
    }
}
