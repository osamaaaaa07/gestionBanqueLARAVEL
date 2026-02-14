@extends('layouts.app')

@section('content')
    <h2>Modifier agence #{{ $agence->id }}</h2>

    <form action="{{ '/agences/' . $agence->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="field">
            <label>Nom</label><br>
            <input type="text" name="nom" value="{{ $agence->nom }}" required>
        </div>
        <div class="field">
            <label>Ville</label><br>
            <input type="text" name="ville" value="{{ $agence->ville }}" required>
        </div>
        <div class="field">
            <label>Adresse</label><br>
            <input type="text" name="adresse" value="{{ $agence->adresse }}" required>
        </div>
        <button type="submit">Mettre à jour</button>
    </form>
@endsection
