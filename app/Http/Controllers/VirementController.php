<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Virement;
use Illuminate\Http\Request;

class VirementController extends Controller
{
    public function index()
    {
        $virements = Virement::with('client')->latest()->get();
        return view('virements.index', compact('virements'));
    }

    public function create()
    {
        $clients = Client::orderBy('nom')->orderBy('prenom')->get();
        return view('virements.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'motif' => ['required', 'string', 'max:255'],
            'montant' => ['required', 'numeric'],
            'id_client' => ['required', 'exists:clients,id'],
        ]);

        Virement::create($validated);

        return redirect('/virements');
    }

    public function show(Virement $virement)
    {
        $client = Client::find($virement->id_client);
        return view('virements.show', compact('virement', 'client'));
    }

    public function edit(Virement $virement)
    {
        $clients = Client::orderBy('nom')->orderBy('prenom')->get();
        return view('virements.edit', compact('virement', 'clients'));
    }

    public function update(Request $request, Virement $virement)
    {
        $validated = $request->validate([
            'motif' => ['required', 'string', 'max:255'],
            'montant' => ['required', 'numeric'],
            'id_client' => ['required', 'exists:clients,id'],
        ]);

        $virement->update($validated);

        return redirect('/virements');
    }

    public function destroy(Virement $virement)
    {
        $virement->delete();

        return redirect('/virements');
    }
}
