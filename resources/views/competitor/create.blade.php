@extends('layouts.competitors')
@section('content')
    <h1 class="text-3xl font-bold mb-6">Create a new competitor</h1>

    <form action="{{URL::to('competitors')}}" method="post" class="w-full max-w-md">
        @csrf
        <div class="flex flex-wrap mb-6">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
            <input id="name" name="name" type="text" class="w-full px-4 py-2 leading-tight border border-gray-400 rounded appearance-none focus:outline-none focus:border-blue-500">
        </div>
        <div class="flex flex-wrap mb-6">
            <label for="sex" class="block text-gray-700 font-bold mb-2">Sex:</label>
            <input id="sex" name="sex" type="text" class="w-full px-4 py-2 leading-tight border border-gray-400 rounded appearance-none focus:outline-none focus:border-blue-500">
        </div>
        <div class="flex flex-wrap mb-6">
            <label for="age" class="block text-gray-700 font-bold mb-2">Age:</label>
            <input id="age" name="age" type="number" class="w-full px-4 py-2 leading-tight border border-gray-400 rounded appearance-none focus:outline-none focus:border-blue-500">
        </div>
        <div class="flex flex-wrap mb-6">
            <label for="country" class="block text-gray-700 font-bold mb-2">Country:</label>
            <input id="country" name="country" type="text" class="w-full px-4 py-2 leading-tight border border-gray-400 rounded appearance-none focus:outline-none focus:border-blue-500">
        </div>
        <div class="flex flex-wrap mb-6">
            <label for="competition_id" class="block text-gray-700 font-bold mb-2">Competition id:</label>
            <input id="competition_id" name="competition_id" type="number" class="w-full px-4 py-2 leading-tight border border-gray-400 rounded appearance-none focus:outline-none focus:border-blue-500">
        </div>
        <div class="flex justify-end">
            <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded focus:outline-none focus:shadow-outline">Create</button>
        </div>
    </form>
@endsection
