@extends('layout.master')
@section('title', 'Activity')
@section('content')
<h1>Activity</h1>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Menu</th>
            <th>Created At</th>
            <th>Updated</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $i)
        <tr>
            <td>{{$i->id}}</td>
            <td>{{$i->name}}</td>
            <td>{{$i->created_at}}</td>
            <td><a href="#">Edit</a> | <a href="/delete_activity/{{$i->id}}">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<hr>
@endsection
