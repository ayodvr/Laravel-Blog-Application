@extends('layouts.app')
@section('content')

<div class="container">
        <h1 class="text-center">Edit Post</h1>
        {!! Form::open(['route' => ['posts.update', $post->id], 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
                <div class="form-group" style="width:90%; margin:auto">
                    {{Form::label('post_title', 'Title')}}
                   {{ Form::text('post_title',$post->post_title,['class'=>'form-control','placeholder'=>'Enter Title Here'])}}
                </div>
                <div class="form-group" style="width:90%; margin:auto">
                {{Form::label('categories_id', 'Category')}}
                {{Form::select('categories_id', App\Category::pluck('description', 'id'),$post->categories_id,['class'=>'form-control','placeholder' => 'Select Category'])}}
                </div>
                <div class="form-group" style="width:90%; margin:auto">
                    {{Form::label('post_body', 'Body')}}
                   {{ Form::textarea('post_body',$post->post_body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>''])}}
                </div>
                <div class="form-group" style="width:90%; margin:auto">
                        {{Form::file('cover_image')}}
                </div>
                {{Form::hidden('_method','PUT')}}
                <div class="form-group" style="width:90%; margin:auto; padding-top:5px">
                   {{Form::submit('Update', ['class' =>'btn btn-primary'])}}
                </div>
        {!! Form::close() !!}
</div>
@endsection