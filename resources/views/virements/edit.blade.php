@extends('layouts.app')

@section('content')
    <h2>Modifier virement #{{ $virement->id }}</h2>

    <form action="{{ '/virements/' . $virement->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="field">
            <label>Motif</label><br>
            <input type="text" name="motif" value="{{ $virement->motif }}" required>
        </div>
        <div class="field">
            <label>Montant</label><br>
            <input type="number" name="montant" value="{{ $virement->montant }}" step="0.01" required>
        </div>
        <div class="field">
            <label>Client</label><br>
            <select name="id_client" required>
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}" @selected($virement->id_client == $client->id)>
                        {{ $client->nom }} {{ $client->prenom }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit">Mettre à jour</button>
    </form>
@endsection
