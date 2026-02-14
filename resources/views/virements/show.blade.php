@extends('layouts.app')

@section('content')
    <h2>Détail virement #{{ $virement->id }}</h2>

    <p><strong>Motif:</strong> {{ $virement->motif }}</p>
    <p><strong>Montant:</strong> {{ $virement->montant }}</p>
    <p><strong>Client:</strong> {{ $client?->nom }} {{ $client?->prenom }}</p>
@endsection
