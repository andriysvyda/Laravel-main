@extends('layouts.competitors')

@section('content')


    <a href="{{URL::to('competitors') . '/create'}}" class="text-2xl text-blue-600 underline hover:text-blue-800 mb-4 inline-block">
        Create new competitor
    </a>

    <h1 class="text-3xl font-bold mb-8">Competitors</h1>

    @forelse($competitors as $competitor)
        <div class="bg-white rounded-lg shadow-md p-6 mb-8 min-w-[50%]">
            <div class="flex justify-between items-center">
                <h3 class="text-2xl font-bold">
                    <a href="{{URL::to('competitors') . '/' . $competitor->id}}" class="text-blue-600 underline hover:text-blue-800">
                        {{$competitor->name}}
                    </a>
                </h3>
                <div class="flex space-x-4">
                    <a href="{{URL::to('competitors') . '/' . $competitor->id . '/edit'}}" class="text-gray-600 hover:text-gray-800">
                        Edit
                    </a>
                    <form action="{{URL::to('competitors') . '/' . $competitor->id}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="text-red-600 hover:text-red-800">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
            <div class="mt-4">
                <p class="text-lg font-medium">Sex: {{$competitor->sex}}</p>
                <p class="text-lg font-medium">Age: {{$competitor->age}}</p>
                <p class="text-lg font-medium">Country: {{$competitor->country}}</p>
            </div>
        </div>
    @empty
        <p class="text-lg font-medium">
            No competitors found.
        </p>
    @endforelse

    <h2 class="text-3xl font-bold mb-8">Competitions</h2>

    @forelse($competitions as $competition)
        <article class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h3 class="text-2xl font-bold">
                <a href="{{URL::to('competitions') . '/' . $competition->id}}" class="text-blue-600 underline hover:text-blue-800">
                    {{$competition->competition_name}}
                </a>
            </h3>
        </article>
    @empty
        <p class="text-lg font-medium">
            No competitions found.
        </p>
    @endforelse


@endsection
