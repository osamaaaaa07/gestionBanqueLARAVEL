<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Client;
use App\Models\Virement;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::with('agence')->latest()->get();
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        $agences = Agence::orderBy('nom')->get();
        return view('clients.create', compact('agences'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'age' => ['required', 'integer', 'min:1'],
            'solde' => ['required', 'numeric'],
            'id_agence' => ['required', 'exists:agences,id'],
        ]);

        Client::create($validated);

        return redirect('/clients');
    }

    public function show(Client $client)
    {
        $agence = Agence::find($client->id_agence);
        $virements = Virement::where('id_client', $client->id)->get();

        return view('clients.show', compact('client', 'agence', 'virements'));
    }

    public function edit(Client $client)
    {
        $agences = Agence::orderBy('nom')->get();
        return view('clients.edit', compact('client', 'agences'));
    }

    public function update(Request $request, Client $client)
    {
        $validated = $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'age' => ['required', 'integer', 'min:1'],
            'solde' => ['required', 'numeric'],
            'id_agence' => ['required', 'exists:agences,id'],
        ]);

        $client->update($validated);

        return redirect('/clients');
    }

    public function destroy(Client $client)
    {
        $client->delete();

        return redirect('/clients');
    }
}
