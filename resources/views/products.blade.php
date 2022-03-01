@extends("layouts.app")
@section("title", "Termékek")
@section("content")
    <h1>Termékek oldal saját dinamikusan</h1>
    <h3>
        <x-message 
        type="Siker!" 
        message="Siker üzenet"
        :page="$page"
        />
    </h3>
    <x-alert>
        <x-slot name="title">
            Termék oldal komponens
        </x-slot>
        Adatok a termékről
    </x-alert>
@endsection
