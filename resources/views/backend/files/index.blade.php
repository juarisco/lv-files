@extends('backend.app')

@section('content')
    
    <div class="container">
        <div class="col s12">
            <table class="centered responsive-table highlight">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        </thead>

        <tbody>
            @foreach ($PostFiles as $PostFile)
                <tr>
                    <td>{{ $PostFile->id }}</td>
                    <td>{{ $PostFile->name }}</td>
                    <td><a class="waves-effect waves-light blue lighten-2 btn"><i class="material-icons left">edit</i> Editar</a></td>
                    <td><a class="waves-effect waves-light red darken-1 btn"><i class="material-icons left">delete</i> Borrar</a></td>
                </tr>
            @endforeach              

        </tbody>
    </table>

    <div class="space"></div>

    <div class="center-align">
        <ul class="pagination">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li class="waves-effect"><a href="#!">2</a></li>
                    <li class="waves-effect"><a href="#!">3</a></li>
                    <li class="waves-effect"><a href="#!">4</a></li>
                    <li class="waves-effect"><a href="#!">5</a></li>
                    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
            </ul>
    </div>

        </div>
    </div>
    
@endsection
    
