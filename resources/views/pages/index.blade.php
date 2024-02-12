@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Students</h1>
    <ul>
        @foreach ($students as $student)
            <li>
                {{ $student -> name }}
                {{ $student -> surname }}
            </li>
        @endforeach
    </ul>
@endsection
