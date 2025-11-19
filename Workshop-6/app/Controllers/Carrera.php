<?php

namespace App\Controllers;

use App\Models\ModeloCarrera;

class Carrera extends BaseController
{
    protected $modelo;

    public function __construct()
    {
        $this->modelo = new ModeloCarrera(); // cada que se construye la clase se crea un nuevo modelo 
    }

    public function index()
    {
        $data['carreras'] = $this->modelo->obtenerCarreras();
        return view('carreras/index', $data);
    }

    public function crear()
    {
        return view('carreras/crear');
    }

    public function guardar()
    {
        $datos = [
            'nombre' => $this->request->getPost('nombre')
        ];

        $this->modelo->guardarCarrera($datos);

        // se redirecciona en lugar de crear la vista pues para usar la vista se requiere de los datos para construirse/renderizarse, en cambio redireccionar lo envia a esa url y el enrutador se encarga de utilizar el controlador y metodo correspondiente, así se cargan los datos nuevos y se evita que se duplique el registro si la página se refresca (post -> redirect -> get)
        return redirect()->to('carreras/index');
    }
}