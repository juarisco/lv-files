@extends('backend.app')

@section('content')
    
    <div class="container">
        <div class="col s12">
            <table class="centered responsive-table highlight">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo de archivo</th>
                    <th>Ver</th>
                    <th>Ocultar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>

                <tbody>
                    @foreach ($PostFiles as $PostFile)
                        <tr>
                            <td>{{ $PostFile->id }}</td>
                            <td>{{ $PostFile->name }}</td>
                            <td>{{ $PostFile->category->name }}</td>
                            <td><a href="{{ route('admin.files.show', $PostFile->name) }}" target="_blank" class="waves-effect waves-light green accent-4 btn"><i class="material-icons left">remove_red_eye</i> Ver</a></td>

                            <td><a href="{{ route('admin.files.hide', $PostFile->id) }}" class="waves-effect waves-light blue lighten-2 btn"><i class="material-icons left">visibility_off</i> Ocultar</a></td>
                            
                            <td><a href="{{ route('admin.files.delete', $PostFile->name) }}" class="waves-effect waves-light red darken-1 btn"><i class="material-icons left">delete</i> Borrar</a></td>
                        </tr>
                    @endforeach              

                </tbody>
            </table>
        </div>
    </div>

    <div class="space"></div>

    {{-- <div class="center-align">
        <ul class="pagination">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li class="waves-effect"><a href="#!">2</a></li>
                    <li class="waves-effect"><a href="#!">3</a></li>
                    <li class="waves-effect"><a href="#!">4</a></li>
                    <li class="waves-effect"><a href="#!">5</a></li>
                    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
            </ul>
    </div> --}}

        
    
@endsection
    
