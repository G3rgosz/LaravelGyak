@extends("layouts.app")

@section("title", "Rólunk")

@section("content")
    <h1>Rólunk oldal dinamikusan</h1>
    <h3>
        <x-message 
            type="Hiba!" 
            message="Hiba üzenet" 
            :page="$page"
        />
    </h3>
    <x-alert>
        <x-slot name="title">
            Rólunk oldal komponens
        </x-slot>
            Adatok Rólunk
    </x-alert>
@endsection