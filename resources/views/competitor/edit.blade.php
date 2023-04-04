@extends('layouts.competitors')
@section('content')
    <h1>Edit competitor</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{URL::to('competitors') .'/' . $competitor->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <label>Name: <input name="name" type="text" value="{{$competitor->name}}"></label>
        <br>
        <label>Sex: <input name="sex" type="text" value="{{$competitor->sex}}"></label>
        <br>
        <label>Age: <input name="age" type="number" value="{{$competitor->age}}"></label>
        <br>
        <label>Country: <input name="country" type="text" value="{{$competitor->country}}"></label>
        <br>
        <label>Competition id: <input name="competition_id" type="number" value="{{$competitor->competition_id}}"></label>
        <br>
        <button type="submit">
            Edit
        </button>
    </form>
@endsection
