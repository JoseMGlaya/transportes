<div class="form-group">

{!! Form::label('apodo','Nombre del vehiculo') !!}
{!! Form::text('apodo',null,['class'=>'form-control']) !!}

</div> 

<div class="form-group"> 

{!! Form::label('modelo','Modelo del vehiculo') !!}
{!! Form::text('modelo',null,['class'=>'form-control']) !!}

</div> 

<div class="form-group"> 

{!! Form::label('año','Año de fabricacion') !!}
{!! Form::text('año',null,['class'=>'form-control']) !!}

</div> 

<div class="form-group"> 

{!! Form::label('file','Imagen') !!}
{!! Form::file('file') !!}

</div> 
<div class="form-group"> 

{!! Form::submit('ENVIAR',['class'=>'btn btn-primary']) !!}

</div>