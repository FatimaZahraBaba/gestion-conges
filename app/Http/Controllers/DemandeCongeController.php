<?php

namespace App\Http\Controllers;

use App\Models\DemandeConge;
use Illuminate\Http\Request;

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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DemandeConge $demandeConge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DemandeConge $demandeConge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DemandeConge $demandeConge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DemandeConge $demandeConge)
    {
        //
    }
}
