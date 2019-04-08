@extends('layouts.app')
@section('title','FormPage')
@section('content')
<h2 style="color:red">Update Post Now</h2>
<form method="post" action="{{url('/posts/'.$post->id)}}">

	{{csrf_field()}}
	<input type="hidden" name="_method" value="PUT">
	<input type="text" name="title" value="{{$post->title}}">

	<TEXTAREA name="body">{{$post->body}}</TEXTAREA>

	<input type="submit" name="submit">
</form>

<form method="post" action="{{url('/posts/'.$post->id)}}">
	{{csrf_field()}}
	<input type="hidden" name="_method" value="DELETE">
	<input type="submit" name="submit" value="delete">
</form>
@endsection