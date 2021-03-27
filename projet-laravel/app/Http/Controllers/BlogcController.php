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
}
