@extends('layouts.app')
@section('title','HomePage')
@section('content')
<ul>
	<a href="{{route('posts.edit',$post->id)}}">{{$post->title}}</a>
</ul>
@endsection