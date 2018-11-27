@extends('layout')

@section('content')

<div class="col-xs-12 col-sm-8"> 
 <h6>
  
  <strong>{{ $vehiculos->id }} {{ $vehiculos->apodo}}</strong>
  <a href="{{ route('vehiculos.index') }}" class="btn btn-default pull-right">		Regresar
			</a>
</h6> 

<p>
	{{ $vehiculos->modelo }}
</p>
<p>
	{{ $vehiculos->año }}
</p>

 </div>

<div class="col-sm-4">
	 <!--td><a href="{{route('vehiculos.edit',$vehiculos->id)}}" class="btn btn-default pull-right">editar</a></td-->
	@include('vehiculos.fragment.aside')
</div>


@endsection