@extends('layouts.app')

@section('content')
    <h2>Modifier client #{{ $client->id }}</h2>

    <form action="{{ '/clients/' . $client->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="field">
            <label>Nom</label><br>
            <input type="text" name="nom" value="{{ $client->nom }}" required>
        </div>
        <div class="field">
            <label>Prénom</label><br>
            <input type="text" name="prenom" value="{{ $client->prenom }}" required>
        </div>
        <div class="field">
            <label>Âge</label><br>
            <input type="number" name="age" value="{{ $client->age }}" min="1" required>
        </div>
        <div class="field">
            <label>Solde</label><br>
            <input type="number" name="solde" value="{{ $client->solde }}" step="0.01" required>
        </div>
        <div class="field">
            <label>Agence</label><br>
            <select name="id_agence" required>
                @foreach ($agences as $agence)
                    <option value="{{ $agence->id }}" @selected($client->id_agence == $agence->id)>{{ $agence->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Mettre à jour</button>
    </form>
@endsection
