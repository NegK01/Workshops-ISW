<?php
class Conexion
{
    private $server = "localhost"; // POO Encapsulacion
    private $user = "root";
    private $pass = "";
    private $db = "workshop4";
    public $conn;

    public function __construct(){
        $this->conn = new mysqli($this->server, $this->user, $this->pass, $this->db);
        if ($this->conn->connect_errno) {
            die("Error de conexión: " . $this->conn->connect_error);
        }
    }
}

// POO Abstraccion
abstract class ModeloConexion
{
    protected $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    abstract public function guardar();
}


// POO Abstraccion + Herencia
class Provincia extends ModeloConexion {
    public function guardar() {} 
    public function mostrar() {
        $sql = "SELECT * FROM provincias";
        $result = $this->conexion->conn->query($sql);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['nombre']}</option>";
            }
        } else {
            echo "<option disabled>No hay provincias</option>";
        }
    }
}
