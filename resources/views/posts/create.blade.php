@extends('layouts.app')
@section('content')

<div class="container">
        <h2 class="text-center">Create Post</h2>
        {!! Form::open(['route' => 'posts.store', 'method' => 'POST','enctype'=>'multipart/form-data']) !!}
                <div class="form-group" style="width:90%; margin:auto">
                    {{Form::label('post_title', 'Title')}}
                   {{ Form::text('post_title','',['class'=>'form-control','placeholder'=>'Enter Title Here'])}}
                </div>
                <div class="form-group" style="width:90%; margin:auto">
                {{Form::label('categories_id', 'Category')}}
                {{Form::select('categories_id', App\Category::pluck('description', 'id'), '', ['class'=>'form-control','placeholder' => 'Select Category'])}}
                </div>
                <div class="form-group" style="width:90%; margin:auto">
                    {{Form::label('post_body', 'Body')}}
                   {{ Form::textarea('post_body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>''])}}
                </div>
                <div class="form-group" style="width:90%; margin:auto">
                        {{Form::file('cover_image')}}
                </div>
                <div class="form-group" style="width:90%; margin:auto; padding-top:5px">
                   {{Form::submit('Post', ['class' =>'btn btn-primary'])}}
                </div>
        {!! Form::close() !!}
</div>
@endsection