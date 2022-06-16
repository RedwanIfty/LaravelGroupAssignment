@extends('layouts.main')
@section('content')
    <h3>Department</h3>
    @foreach($student as $st)
    Name:{{$st->name}}<br>
    ID:{{$st->id}}<br>
    @endforeach
@endsection
@section('department')
    <h3>Student</h3>
    @foreach($department as $dp)
    Name:{{$dp->name}}<br>
    ID:{{$dp->id}}<br>
    @endforeach
@endsection