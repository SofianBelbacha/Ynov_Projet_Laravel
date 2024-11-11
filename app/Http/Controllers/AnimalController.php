<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    
    /**
     * Afficher la liste des animaux.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $animals = Animal::all(); // Récupérer tous les enregistrements d'animaux
        return view('animals.index', compact('animals'));
    }

    /**
     * Afficher le formulaire pour créer un nouvel animal.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('animals.create');
    }

    /**
     * Enregistrer un nouvel animal dans la base de données.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'deathday' => 'nullable|date|after_or_equal:birthday',
            'color' => 'required|string|max:255',
        ]);

        // Créer un nouvel enregistrement dans la table animals
        Animal::create([
            'name' => $request->name,
            'birthday' => $request->birthday,
            'deathday' => $request->deathday,
            'color' => $request->color,
        ]);

        // Rediriger avec un message de succès
        return redirect()->route('animals.create')->with('success', 'Animal ajouté avec succès !');
    }
}
