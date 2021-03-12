@extends('layouts.app')

@section('content')
        {!! Form::open(['route' => 'createUser', 'enctype' => 'multipart/form-data']) !!}
            {{ Form::label('name', 'Name', ['class' => 'awesome']) }}
            {!! Form::text('name', ' ',['class' => 'form-control']) !!}

            {{ Form::label('email', 'E-Mail Address', ['class' => 'awesome']) }}
            {!! Form::email('email', ' ',['class' => 'form-control']) !!}

            {{ Form::label('rate', 'Rate', ['class' => 'awesome']) }}
            {!! Form::text('rate', ' ',['class' => 'form-control']) !!}

            {{ Form::label('currency', 'Currency', ['class' => 'awesome']) }}
            {!! Form::select('currency', array('GBP' => 'GBP', 'USD' => 'USD', 'EUR' => 'EUR'), 'GBP', ['class' => 'form-control']) !!}

            {!! Form::submit('Create', ['class' => 'btn btn-success mt-2']) !!}
            <a href="{{url("/")}}" class="btn btn-danger mt-2">Cancel</a>
        {{ Form::close() }}
@stop