<?php
class Consultorio
{
    // Atributos
    private $idConsultorio;
    private $nombre;
    private $Conexion;

    // Constructor
    public function __construct($idConsultorio, $nombre)
    {
        $this->idConsultorio = $idConsultorio;
        $this->nombre = $nombre;
    }

    // Getters y Setters
    public function setIdConsultorio($idConsultorio)
    {
        $this->idConsultorio = $idConsultorio;
    }

    public function getIdConsultorio()
    {
        return $this->idConsultorio;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    // CRUD
    public function agregarConsultorio()
    {   
        $this->Conexion = Conectarse();
        $sql = "INSERT INTO consultorios (idConsultorio, nombre)
                VALUES ('$this->idConsultorio','$this->nombre')";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;   
    }

    public function consultarConsultorio($idConsultorio)
    {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM consultorios WHERE idConsultorio='$idConsultorio'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;   
    }

    public function actualizarConsultorio()
    {   
        $this->Conexion = Conectarse();
        $sql = "UPDATE consultorios 
                SET nombre='$this->nombre' 
                WHERE idConsultorio='$this->idConsultorio'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;   
    }

    public function listarConsultorios()
    {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM consultorios";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;   
    }   
}
?>
