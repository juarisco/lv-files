<?php

namespace App\Http\Controllers;

class FilesController extends Controller
{
    public function index()
    {
        return view('backend.files');
    }

    public function store()
    {
        return 'store';
    }
}
