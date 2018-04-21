@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="form-group">
            {!! Form::open(['method'=>'POST','action'=>'AdminUserController@store','files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('name','Name:') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection