<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProduitController extends Controller
{
    public function index()
    {
        return view('produit.index');
    }
}
