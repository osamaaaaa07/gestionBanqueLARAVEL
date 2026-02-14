@extends('layouts.app')

@section('content')
    <h2>Liste des virements</h2>
    <a href="/virements/create">Nouveau virement</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Motif</th>
                <th>Montant</th>
                <th>Client</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($virements as $virement)
                <tr>
                    <td>{{ $virement->id }}</td>
                    <td>{{ $virement->motif }}</td>
                    <td>{{ $virement->montant }}</td>
                    <td>{{ $virement->client?->nom }} {{ $virement->client?->prenom }}</td>
                    <td class="actions">
                        <a href="{{ '/virements/' . $virement->id }}">Voir</a>
                        <a href="{{ '/virements/' . $virement->id . '/edit' }}">Modifier</a>
                        <form class="inline" action="{{ '/virements/' . $virement->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">Aucun virement.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
