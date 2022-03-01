@extends("layouts.app")

@section("title", "Nevek")

@section("content")
    <h1>Nevek:</h1>
    <h3>
        <x-name 
            :names="$names"
        />
    </h3>
@endsection