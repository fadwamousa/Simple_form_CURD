@extends('layouts.app')
@section('title','FormPage')
@section('content')
<h2 style="color:red">Update Post Now</h2>

 {!! Form::open(['method'=>'PATCH', 'action'=>['PostsController@update', $post->id]]) !!}
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-grop">
            {!! Form::label('title', 'Title : ') !!}
            {!! Form::text('title', $post->title , ['class'=>'form-control']) !!}
        </div>
        <div class="form-grop">
            {!! Form::label('content', 'Content : ') !!}
            {!! Form::textarea('content', $post->body, ['class'=>'form-control']) !!}
        </div>
        <div class="form-grop">
            {!! Form::submit('Update Post', ['name'=>'submit', 'class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}


{!!Form::model($post,['method'=>'DELETE','action'=>['PostsController@destroy',$post->id]])!!}
	{{csrf_field()}}
	
	<div class="form-grop">
            {!! Form::submit('Update Post', ['name'=>'submit', 'class'=>'btn btn-danger']) !!}
        </div>
</form>
@endsection