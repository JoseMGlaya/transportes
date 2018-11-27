@extends('layout')

@section('content')

<div class="col-xs-12 col-sm-8"> 
 <h4>
 <strong> Nuevo Vehiculo</strong>
  <a href="{{ route('vehiculos.index') }}" class="btn btn-default pull-right">		Listado
			</a>
</h4> 

@include('vehiculos.fragment.error')


{!! Form::open(['route' => 'vehiculos.store','files' => 'true'])!!}

@include('vehiculos.fragment.form')

{!! Form::close() !!} 
 </div>

<div class="col-sm-4">

	@include('vehiculos.fragment.aside')
</div>

 
@endsection