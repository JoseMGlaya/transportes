@if (count($errors))
<div class="alert alert-danger">
	
<button type="button" class="close" data-dismiss="alert"> 
&times;
</button>
@foreach($errors->all() as $error)

<ul>
	
<li>
	
{{ $error}}

</li>
@endforeach
</ul>


</div>

@endif 
