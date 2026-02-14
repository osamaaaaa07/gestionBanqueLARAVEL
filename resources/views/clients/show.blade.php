@extends('layouts.app')

@section('content')
    <h2>Profil du client #{{ $client->id }}</h2>

    <p><strong>Nom:</strong> {{ $client->nom }}</p>
    <p><strong>Prénom:</strong> {{ $client->prenom }}</p>
    <p><strong>Âge:</strong> {{ $client->age }}</p>
    <p><strong>Solde:</strong> {{ $client->solde }}</p>
    <p><strong>Agence:</strong> {{ $agence?->nom }}</p>

    <h3>Liste des virements</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Motif</th>
                <th>Montant</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($virements as $virement)
                <tr>
                    <td>{{ $virement->id }}</td>
                    <td>{{ $virement->motif }}</td>
                    <td>{{ $virement->montant }}</td>
                </tr>
            @empty
                <tr><td colspan="3">Aucun virement pour ce client.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
