@extends('layouts.app')
@section('title','FormPage')
@section('content')
<h2 style="color:red">Create Post Now</h2>
<form method="post" action="{{url('/posts')}}">
	{{csrf_field()}}
	<input type="text" name="title">
	<TEXTAREA name="body"></TEXTAREA>
	<input type="submit" name="submit">
</form>
@endsection