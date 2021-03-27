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
<<<<<<< HEAD

    public function create() {
        return Inertia::render('Projet/ProjetCreate');
    }


=======
    public function create()
    {
        return Inertia::render('Projet/ProjetCreate');
    }
>>>>>>> c8eee893b3d24b2abae6724aaa334750691cc558
}
