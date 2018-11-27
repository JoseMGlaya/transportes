@extends('layout')

@section('content')

<div class="col-xs-12 col-sm-8"> 
 <h4>
  <strong> Editar Vehiculo</strong> 
  <a href="{{ route('vehiculos.index') }}" class="btn btn-default pull-right">		Regresar
			</a>
</h4> <br>
@include('vehiculos.fragment.error')
{!! Form::model($vehiculos,['route' => ['vehiculos.update',$vehiculos->id], 'method' => 'PUT','files' => 'true'])!!}  

@include('vehiculos.fragment.form')

{!! Form::close() !!} 
</div>





<div class="col-sm-4">

	@include('vehiculos.fragment.aside')
</div>


@endsection