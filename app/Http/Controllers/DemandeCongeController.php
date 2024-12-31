<?php

namespace App\Http\Controllers;

use App\Models\DemandeConge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DemandeCongeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $demandes_conges = DemandeConge::all();
        return response()->json($demandes_conges);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données entrantes
        // $validated = $request->validate([
        //     'employe_id' => 'required|exists:employes,id',
        //     'nbr_jours_demandes' => 'required|integer|min:1',
        //     'motif_conge' => 'required|in:vacances,maladie,congé maternité,congé paternité,
        //         congé évènement familial,congé naissance enfant,congé sabbatique,congé formation,
        //         congé personnel,congé voyage affaires,congé sante mentale,congé fin année,
        //         congé déménagement,congé mariage,congé adoption,congé études,congé sans solde,
        //         congé deuil,congé solidarité familiale,congé religieux',
        //     'date_debut' => 'required|date|after_or_equal:today',
        //     'date_fin' => 'required|date|after_or_equal:date_debut',
        //     'statut' => 'required|in:en_attente,accepte,refuse',
        // ]);

        $validated = $request->all();
        $demandeConge = DemandeConge::create($validated);
        return response()->json([
            'message' => 'Demande de congé crée avec succès.',
            'demande_conge' => $demandeConge
        ], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $demandeConge = DemandeConge::findOrFail($id);
        return response()->json($demandeConge);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $demandeConge = DemandeConge::findOrFail($id);
        $demandeConge->update($data);
        return response()->json($demandeConge);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $demandeConge = DemandeConge::findOrFail($id);
        $demandeConge->delete();
        return response()->json($demandeConge);
    }
}
