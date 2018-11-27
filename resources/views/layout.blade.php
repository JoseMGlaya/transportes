@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			 <div class="container-fluid">
			 	<div class="panel panel-default">
			 		
			 		<div class="panel-heading">
			 			<h4><strong>Transportes</strong></h4>
			 		</div>

                   <div class="container-fluid">
                   	<div class="container-fluid">
                   	@yield('content')
                   </div>
                   </div>

			 	</div>
			 	
			 </div>



		</div>
	</div>
@endsection
