@extends('layouts.app')
@section('title','HomePage')
@section('content')
<h3>This is Home Page</h3>
<ul>
	
	@foreach($posts as $post)
	   <li>
	   	<a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a>
	   </li>
	@endforeach
	
</ul>
@endsection
