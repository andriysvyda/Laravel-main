@extends('layouts.competitors')
@section('content')
    <p>
        Post {{$competitor->name}} was updated
    </p>

    <p>
        <a href="{{URL::to('competitors')}}" class="underline"> Return </a> to competitors list
    </p>
@endsection
