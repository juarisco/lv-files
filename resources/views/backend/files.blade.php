@extends('backend.app')

@section('content')
    
    <div class="container">
        <div class="row">

            <div class="col s6 left">
                <h1>Esta es la página para usbir archivos</h1>
            </div>

            <div class="col s6 right">
                <form action="{{ route('admin.files.store') }}" id="upload"  method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Seleccionar</span>
                            <input type="file" name="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Save
                        <i class="material-icons right">save</i>
                    </button>
                </form>
            </div>

        </div>
    </div>
    
@endsection
    
