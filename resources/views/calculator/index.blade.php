@extends('layout.master')
@section('title', 'Calculator')
@section('content')
<h1>Calculator</h1>
<h2>{{$num1}} + {{$num2}} = {{$num1 + $num2}}</h2>
<hr>
@endsection
