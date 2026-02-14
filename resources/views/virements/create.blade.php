@extends('layouts.app')

@section('content')
    <h2>Créer un virement</h2>

    <form action="/virements" method="POST">
        @csrf
        <div class="field">
            <label>Motif</label><br>
            <input type="text" name="motif" required>
        </div>
        <div class="field">
            <label>Montant</label><br>
            <input type="number" name="montant" step="0.01" required>
        </div>
        <div class="field">
            <label>Client</label><br>
            <select name="id_client" required>
                <option value="">Choisir un client</option>
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}">
                        {{ $client->nom }} {{ $client->prenom }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit">Enregistrer</button>
    </form>
@endsection
