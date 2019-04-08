@extends('layouts.app')
@section('title','FormPage')
@section('content')
<h2 style="color:red">Create Post Now</h2>

{!!Form::open(['method'=>'POST','action'=>'PostsController@store'])!!}

	{{csrf_field()}}

	<div class="form-group">


		{{Form::label("title","Title")}}
		{{Form::text('title',null,['placeholder'=>'Title','class'=>'form-control'])}}


	</div>

	<div class="form-group">

		{{Form::label("Content",null)}}

		{{Form::textarea('body',null,['class'=>'form-control'])}}
	</div>

	{{Form::submit('Create',['class'=>'btn btn-primary'])}}


	


{!!Form::close()!!}

@if(count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		  <li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif
@endsection