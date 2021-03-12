@extends('layouts.app')

@section('content')
        <table style="width:100%">
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Rate</th>
              <th>GBP</th>
              <th>EUR</th>
              <th>USD</th>
            </tr>

            <tr>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{round($user->rate, 2)}}</td>
              <td>{{json_decode($currency)->gbp}}</td>
              <td>{{json_decode($currency)->eur}}</td>
              <td>{{json_decode($currency)->usd}}</td>
              <td></td>
            </tr>  
            
          </table>
          <a href="{{url("/")}}" class="btn btn-danger mt-2">Cancel</a>
@stop