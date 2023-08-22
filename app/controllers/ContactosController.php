<?php

namespace Controllers;

use Models\Contactos;

class ContactosController extends Controller
{
    public function index()
    {
        return view('contactos/index', ['contactos' => Contactos::all()]);
    }
}