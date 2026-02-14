@extends('layouts.app')

@section('content')
    <h2>Liste des clients</h2>
    <a href="/clients/create">Nouveau client</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Âge</th>
                <th>Solde</th>
                <th>Agence</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->nom }}</td>
                    <td>{{ $client->prenom }}</td>
                    <td>{{ $client->age }}</td>
                    <td>{{ $client->solde }}</td>
                    <td>{{ $client->agence?->nom }}</td>
                    <td class="actions">
                        <a href="{{ '/clients/' . $client->id }}">Profil</a>
                        <a href="{{ '/clients/' . $client->id . '/edit' }}">Modifier</a>
                        <form class="inline" action="{{ '/clients/' . $client->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="7">Aucun client.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
