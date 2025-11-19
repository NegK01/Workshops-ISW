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

}
