@extends('layouts.app')

@section('content')
    <a href="{{url('users/create')}}" class="btn-success p-2">Create User</a>
    <a href="{{url('users/view')}}" class="btn-warning p-2">View Users</a>
@stop