@extends('layouts.app')

@section('content')
    <h2>Créer une agence</h2>

    <form action="/agences" method="POST">
        @csrf
        <div class="field">
            <label>Nom</label><br>
            <input type="text" name="nom" required>
        </div>
        <div class="field">
            <label>Ville</label><br>
            <input type="text" name="ville" required>
        </div>
        <div class="field">
            <label>Adresse</label><br>
            <input type="text" name="adresse" required>
        </div>
        <button type="submit">Enregistrer</button>
    </form>
@endsection
