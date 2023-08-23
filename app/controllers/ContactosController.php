<?php

namespace Controllers;

use Models\Contactos;

class ContactosController extends Controller
{
    public function index()
    {
        return view('contactos/index', ['contactos' => Contactos::all()]);
    }

    public function crear()
    {
        return view('contactos/crear');
    }

    public function agregar()
    {
        $contacto = new Contactos;
        $contacto->nombre = (app()->request()->get('nombre'));
        $contacto->primer_apellido = (app()->request()->get('primer_apellido'));
        $contacto->segundo_apellido = (app()->request()->get('segundo_apellido'));
        $contacto->correo = (app()->request()->get('correo'));
        $contacto->save();

        return response()->redirect('/');
    }
}
