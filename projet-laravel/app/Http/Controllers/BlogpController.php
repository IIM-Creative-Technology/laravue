<?php

namespace App\Http\Controllers;
use App\Models\Projet;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogpController extends Controller
{
    public function index() {
        return Inertia::render('Blogp',[
            "projets" => Projet::all()
        ]);
    }
}
