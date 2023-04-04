@extends('layouts.app')

@section('title', 'Laravel')

@section('header')
    <nav class="underline bg-green-400 p-2">
        <a href="{{URL::to('competitors')}}">
            Home
        </a>
    </nav>
@endsection

@section('footer')
    2023
@endsection
