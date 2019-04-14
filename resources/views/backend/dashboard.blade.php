@extends('backend.app')

@section('content')
    <div class="col s12">

		<div class="row">

		    <div class="col s12 m6 l4">
		      <div class="card hoverable">
		        <div class="card-image">
		          <img src="{{ asset('assets/images/dashboard/users.jpg') }}">
		          <span class="card-title">Usuarios</span>
		          <a class="btn-floating halfway-fab waves-effect waves-light grey darken-3"><i class="material-icons">add</i></a>
		        </div>
		        <div class="card-content">
		          <p>Agrega, editar o eliminar usuarios directamente de la base de datos. En esta lista encontrarás todos los empleados/usuarios de tu empresa.</p>
		        </div>
		      </div>
		    </div>

		    <div class="col s12 m6 l4 center-align">
		    	<img src="{{ asset('assets/images/dashboard/chart.png') }}">
		    </div>

		    <div class="col s12 m6 l4">
		    	<div class="card hoverable">
		    		<div class="card-image">
		          <img src="{{ asset('assets/images/dashboard/documents.jpg') }}">
		          <span class="card-title">Documentos</span>
		          <a class="btn-floating halfway-fab waves-effect waves-light grey darken-3"><i class="material-icons">add</i></a>
		        </div>
		        <div class="card-content">
		          <p>Los documentos almacenados en este apartado serán visibles solamente para el administrador y para el usuario propietario.</p>
		        </div>
		    	</div>
		    </div>

	 	</div>
	</div>
@endsection