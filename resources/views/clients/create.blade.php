@extends('layouts.app')

@section('content')
    <h2>Créer un client</h2>

    <form action="/clients" method="POST">
        @csrf
        <div class="field">
            <label>Nom</label><br>
            <input type="text" name="nom" required>
        </div>
        <div class="field">
            <label>Prénom</label><br>
            <input type="text" name="prenom" required>
        </div>
        <div class="field">
            <label>Âge</label><br>
            <input type="number" name="age" min="1" required>
        </div>
        <div class="field">
            <label>Solde</label><br>
            <input type="number" name="solde" value="0" step="0.01" required>
        </div>
        <div class="field">
            <label>Agence</label><br>
            <select name="id_agence" required>
                <option value="">Choisir une agence</option>
                @foreach ($agences as $agence)
                    <option value="{{ $agence->id }}">{{ $agence->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Enregistrer</button>
    </form>
@endsection
