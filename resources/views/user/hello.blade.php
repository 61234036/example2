@extends('layout.master')
@section('title', 'Hello')
@section('content')
<h1>Hello</h1>
<h2>{{"สวัสดีคุณ $name $surname คุณอายุ $age ปี"}}</h2>
<hr>
@endsection
