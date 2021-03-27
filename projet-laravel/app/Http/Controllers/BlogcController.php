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
}
