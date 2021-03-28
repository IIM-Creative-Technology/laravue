<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;
use Inertia\Inertia;


class BlogpController extends Controller
{

    public function index()
    {
        return Inertia::render('Blogp', [
            "projets" => Projet::all()
        ]);
    }


   


    public function create()
    {
        return Inertia::render('Projet/ProjetCreate');

    }
    public function store(Request $request) {
        $this->validate($request, [
            'client' => ['required'],
            'name_responsable' => ['required'],
            'prénom_responsable' => ['required'],
            'tel_responsable' => ['required'],
            'email_responsable' => ['required'],
            'title' => ['required'],
            'description' => ['required'],
            'date_debut' => ['required'],
            'date_fin' => ['required'],
            'etat' => ['required'],
            'nombre_jours_vendus' => ['required'],
        ]);

Projet::create($request->only('client', 'name_responsable', 'prénom_responsable','tel_responsable','email_responsable', 'title','description','date_debut','date_fin','etat','nombre_jours_vendus'));
return redirect()->back();
    }

}
