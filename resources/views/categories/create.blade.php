@extends('layouts.app')
@section('content')
        <h1 class="text-center">Create Category</h1>

        {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
                <div class="form-group" style="width:90%; margin:auto">
                    {{Form::label('description', 'Description')}}
                   {{ Form::text('description','',['class'=>'form-control'])}}
                 
                </div>
                <div class="text-center" style="width:90%; margin:auto; padding-top:5px">
                   {{Form::submit('Save Category',['class' =>'btn btn-success'])}}
                </div>
        {!! Form::close() !!}

@endsection