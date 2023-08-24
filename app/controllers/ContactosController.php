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

    public function borrar($id)
    {
        Contactos::destroy($id);
        return response()->redirect('/');
    }


    public function editar($id)
    {
        $datosContacto = Contactos::find($id);
        // print_r($datosContacto);

        return view('contactos/editar', ['contacto' => $datosContacto]);
    }


    public function actualizar($id)
    {
        $nombre = app()->request()->get('nombre');
        $primer_apellido = app()->request()->get('primer_apellido');
        $segundo_apellido = app()->request()->get('segundo_apellido');
        $correo = app()->request()->get('correo');

        $contacto = Contactos::findOrFail($id);

        $contacto->nombre = ($nombre != '') ? $nombre : $contacto->nombre;
        $contacto->primer_apellido = ($primer_apellido != '') ? $primer_apellido : $contacto->primer_apellido;;
        $contacto->segundo_apellido = ($segundo_apellido != '') ? $segundo_apellido : $contacto->segundo_apellido;;
        $contacto->correo = ($correo != '') ? $correo : $contacto->correo;
        $contacto->update();
        return response()->redirect('/');
    }
}
