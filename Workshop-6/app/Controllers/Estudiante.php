<?php

namespace App\Controllers;

use App\Models\ModeloCarrera;
use App\Models\ModeloEstudiante;

class Estudiante extends BaseController
{
    protected $modelo;
    protected $modeloCarrera;

    public function __construct()
    {
        $this->modelo = new ModeloEstudiante(); // cada que se construye la clase se crea un nuevo modelo 
        $this->modeloCarrera = new ModeloCarrera();
    }

    public function index()
    {
        $data['estudiantes'] = $this->modelo->obtenerEstudiantes();
        return view('estudiantes/index', $data);
    }

    public function crear()
    {
        $data['carreras'] = $this->modeloCarrera->obtenerCarreras(); // necesitamos renderizar las carreras en el select
        return view('estudiantes/crear', $data);
    }

    public function editar($id)
    {
        $data['estudiante'] = $this->modelo->obtenerEstudiante($id);

        if (!$data['estudiante']) {
            return redirect()->to('estudiantes/index');
        }

        $data['carreras'] = $this->modeloCarrera->obtenerCarreras();

        return view('estudiantes/editar', $data);
    }

    public function guardar()
    {
        $datos = [
            'nombre' => $this->request->getPost('nombre'),
            'id_carrera' => $this->request->getPost('id_carrera')
        ];

        $this->modelo->guardarEstudiante($datos);

        // se redirecciona en lugar de crear la vista: enviamos al listado de estudiantes (post -> redirect -> get)
        return redirect()->to('estudiantes/index');
    }

    public function actualizar()
    {
        $id = $this->request->getPost('id');

        $datos = [
            'nombre' => $this->request->getPost('nombre'),
            'id_carrera' => $this->request->getPost('id_carrera')
        ];

        $this->modelo->actualizarEstudiante($id, $datos);

        return redirect()->to('estudiantes/index');
    }
}
