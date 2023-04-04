@extends('layouts.competitors')
@section('content')
    <p>
        Employee {{$competitor->name}} was stored
    </p>

    <p>
        <a href="{{URL::to('competitors')}}" class="underline"> Return </a> to competitors list
    </p>
@endsection
