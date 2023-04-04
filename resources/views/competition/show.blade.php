@extends('layouts.competitors')

@section('content')

    <h1> Show competitor </h1>

    @forelse($competitors as $competitor)
        <div class="m-2 border-1 border-black">
            <h3>
                <a href="{{URL::to('competitors') . '/' . $competitor->id}}" class="underline">
                    {{$competitor->name}}
                </a>
            </h3>
            <p>Sex: {{$competitor->sex}}</p>
            <p>Age: {{$competitor->age}}</p>
            <p>Country: {{$competitor->country}}</p>
            <p>Competition: {{$competitor->competition_name}}</p>
        </div>
    @empty
        <p>
            No competitors
        </p>
    @endforelse

@endsection
