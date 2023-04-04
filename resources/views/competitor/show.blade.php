@extends('layouts.competitors')

@section('content')

    <h1 class="text-3xl font-bold"> Show competitor </h1>

    <div class="bg-gray-100 p-4 rounded-md">
        <h3 class="text-xl font-semibold"> {{$competitor->name}}</h3>
        <p class="text-gray-600">Sex: {{$competitor->sex}}</p>
        <p class="text-gray-600">Age: {{$competitor->age}}</p>
        <p class="text-gray-600">Country: {{$competitor->country}}</p>
    </div>

@endsection
