<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogcController extends Controller
{

    public function index() {
        return Inertia::render('Blogc',[

            "clients" => Client::all()
        ]);
    }
    public function create()
    {
        return Inertia::render('Client/ClientCreate');
    }
    public function store(Request $request) {
        $this->validate($request, [
            'description' => ['required'],
            'raison_social' => ['required'],
            'statut_juridique' => ['required'],
            'capital' => ['required'],
            'numero_siret' => ['required'],
            'code_naf' => ['required'],
            'pays' => ['required'],
            'adresse' => ['required'],
            'code_postal' => ['required'],
            'ville' => ['required'],
            ]);
        Client::create($request->only('description', 'raison_social', 'statut_juridique','capital','numero_siret', 'code_naf','pays','adresse','code_postal','ville'));
return redirect()->back();
    }
}

