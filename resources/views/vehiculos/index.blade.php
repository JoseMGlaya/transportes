@extends('layout')

@section('content')

<div class="col-sm-8"> 

 <h5><strong>Listado de Vehiculos</strong>
 	<a href="{{route('vehiculos.create')}}" class="btn btn-primary pull-right">Nuevo</a>
</h5>

@include('vehiculos.fragment.info')
<table class="table table-hover table-striped">
	<thead>
		
<tr align="center">
	<th width="20px">Nro</th>
	<th >Nombre</th>
	
	<th >Opciones</th>
	
</tr>
	</thead>
   @foreach($vehiculos as $vehiculo)
	<tbody>
		<tr>
			<td>{{$vehiculo->id}}</td>
			<td><a class="btn btn-link" href="{{action('VehiculoController@show',$vehiculo->id)}}"> {!! $vehiculo->apodo !!}</a></td>
			<td><a class="btn btn-block btn-primary btn-xs" href="{{route('vehiculos.show',$vehiculo->id)}}">ver</a></td>
		    <td><a class="btn btn-block btn-success btn-xs" href="{{route('vehiculos.edit',$vehiculo->id)}}">editar</a></td>
		    <td> 

             <form action="{{route('vehiculos.destroy',$vehiculo->id)}}" method="POST">
             {{ csrf_field() }}
             <input type="hidden" name="_method" value="DELETE"></input>
             <button  class="btn btn-block btn-danger btn-xs">borrar</button>
             </form>

		    </td>
		</tr>
	</tbody>
@endforeach

</table> 
{!!$vehiculos->render()!!}



 </div>

<div class="col-sm-4">
	
	@include('vehiculos.fragment.aside')
</div>


@endsection