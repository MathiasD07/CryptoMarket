@extends('layouts.app')

@section('title')
    Accueil
@endsection

@section('content')
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            @livewire('coin-details', ['id' => Request::route('id')])
        </div>
    </div>
@endsection
