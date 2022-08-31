@extends('layouts.app')

@section('title')
    Accueil
@endsection

@section('content')
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <h2 class="text-2xl font-semibold leading-tight">Top 100 des Crypto-Monnaies par capitalisation de marché</h2>
            <livewire:top-coins-cards />
            <livewire:coins-table />
        </div>
    </div>
@endsection
