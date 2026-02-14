@extends('layouts.app')

@section('content')
    <h2>Détail agence #{{ $agence->id }}</h2>

    <p><strong>Nom:</strong> {{ $agence->nom }}</p>
    <p><strong>Ville:</strong> {{ $agence->ville }}</p>
    <p><strong>Adresse:</strong> {{ $agence->adresse }}</p>

    <h3>Clients de cette agence</h3>
    <ul>
        @forelse ($clients as $client)
            <li>
                <a href="{{ '/clients/' . $client->id }}">{{ $client->nom }} {{ $client->prenom }}</a>
            </li>
        @empty
            <li>Aucun client.</li>
        @endforelse
    </ul>
@endsection
