
@extends('layouts.competitors')
@section('content')
    <p>
        Competitor {{$competitor->name}} was deleted
    </p>

    <p>
        <a href="{{URL::to('competitorcs')}}"> Return </a> to competitor list
    </p>
@endsection
