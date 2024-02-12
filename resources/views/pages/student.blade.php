@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>
        [
            {{ $student -> id }}
        ]
        {{ $student -> name }}
        {{ $student -> surname }}
    </h1>
    <span>{{ $student -> fiscal_code }}</span>
@endsection
