<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Client;
use Illuminate\Http\Request;

class AgenceController extends Controller
{
    public function index()
    {
        $agences = Agence::latest()->get();
        return view('agences.index', compact('agences'));
    }

    public function create()
    {
        return view('agences.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'ville' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
        ]);

        Agence::create($validated);

        return redirect('/agences');
    }

    public function show(Agence $agence)
    {
        $clients = Client::where('id_agence', $agence->id)->get();
        return view('agences.show', compact('agence', 'clients'));
    }

    public function edit(Agence $agence)
    {
        return view('agences.edit', compact('agence'));
    }

    public function update(Request $request, Agence $agence)
    {
        $validated = $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'ville' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
        ]);

        $agence->update($validated);

        return redirect('/agences');
    }

    public function destroy(Agence $agence)
    {
        $agence->delete();

        return redirect('/agences');
    }
}
