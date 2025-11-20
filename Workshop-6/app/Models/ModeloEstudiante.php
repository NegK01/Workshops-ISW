<?php

namespace App\Models;

use CodeIgniter\Model;

class ModeloEstudiante extends Model
{
    protected $table = 'estudiantes';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nombre', 'id_carrera'];
    protected $useTimestamps = false;

    public function obtenerEstudiantes()
    {
        return $this->select('estudiantes.id, estudiantes.nombre, carreras.nombre as nombre_carrera')
        ->join('carreras', 'carreras.id = estudiantes.id_carrera')
        ->orderBy('estudiantes.id', 'ASC')
        ->findAll();
    }

    public function guardarEstudiante($data)
    {
        return $this->insert($data);
    }

    public function obtenerEstudiante($id)
    {
        return $this->where('estudiantes.id', $id)
            ->select('estudiantes.id, estudiantes.nombre, estudiantes.id_carrera')
            ->first();
    }

    public function actualizarEstudiante($id, $data)
    {
        return $this->update($id, $data);
    }
}
