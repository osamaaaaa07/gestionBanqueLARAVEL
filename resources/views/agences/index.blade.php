@extends('layouts.app')

@section('content')
    <h2>Liste des agences</h2>
    <a href="/agences/create">Nouvelle agence</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Ville</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($agences as $agence)
                <tr>
                    <td>{{ $agence->id }}</td>
                    <td>{{ $agence->nom }}</td>
                    <td>{{ $agence->ville }}</td>
                    <td>{{ $agence->adresse }}</td>
                    <td class="actions">
                        <a href="{{ '/agences/' . $agence->id }}">Voir</a>
                        <a href="{{ '/agences/' . $agence->id . '/edit' }}">Modifier</a>
                        <form class="inline" action="{{ '/agences/' . $agence->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">Aucune agence.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
