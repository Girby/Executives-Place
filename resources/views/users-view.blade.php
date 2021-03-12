@extends('layouts.app')

@section('content')
        <table style="width:100%">
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Currency</th>
              <th>Rate</th>
            </tr>

            @foreach ($users as $user)
            <tr>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->currency}}</td>
              <td>{{$user->rate}}</td>
              <td><a href="../users/get/{{$user->id}}" class="btn-warning">View</a></td>
            </tr>  
            @endforeach
              
          </table>
          <div>
            <a href="{{url("/")}}" class="btn-danger p-2">Cancel</a>
          </div> 
@stop