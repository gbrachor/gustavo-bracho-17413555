<?php
namespace DataBase;

require_once("autoload.php");


use PDO;
class Conexion {

    private $servidor = "localhost";
    private $db = "idiomas";
    private $password = "Zoe0103.";
    private $usuario = "root";
    protected $conn;

    private function abrirConexion()
    {
        $stringConexion = "mysql:hos=".$this->servidor."; dbname=".$this->db;
        try{
            $this->conn = new PDO($stringConexion, $this->usuario, $this->password);
        }catch(Exception $e){
            $this->conn = "Error de conexión";
            echo $e->getMessage();
        }
    }

    public function consulta(string $tabla, string $param):array{

        $this->abrirConexion();
        $select = ""; 
        $class = "";

        if($tabla == 'examenes'){
            $class = "Examen";
            $select = "SELECT e.descripcion as descripcion, te.descripcion as tipo
            FROM examenes as e
            INNER JOIN tipos_examen as te ON te.id = e.id
            WHERE e.descripcion LIKE '%".str_replace(' ', '%', $param)."%'";

        }else if($tabla == 'clases'){
            $class = "Clase";
            $select = "SELECT descripcion, ponderacion FROM clases
            WHERE descripcion LIKE '%".str_replace(' ', '%', $param)."%'";
        }

        $resultado = $this->conn->query($select);
        $data = $resultado->fetchAll(PDO::FETCH_CLASS, 'Models\\'.$class);
        $this->conn = null;

        return $data;
    }

}

?>