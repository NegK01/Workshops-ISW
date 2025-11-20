<?php 

namespace App\Models;

use CodeIgniter\Model;

class ModeloCarrera extends Model
{
    protected $table = 'carreras';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nombre'];
    protected $useTimestamps = false;

    public function obtenerCarreras()
    {
        return $this->findAll();
    }

    public function guardarCarrera($data)
    {
        return $this->insert($data);
    }

    public function obtenerCarrera($id)
    {
        return $this->find($id);
    }

    public function actualizarCarrera($id, $data)
    {
        return $this->update($id, $data);
    }

}
