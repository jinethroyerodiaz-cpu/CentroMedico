<?php
class Medicos
{
    // Atributos
    private $idMedico;
    private $nombreMedico;
    private $apellidosMedico;
    private $fechaNacimiento;
    private $sexo;
    private $mp_medico;
    private $telefono;
    private $correo;
    private $Conexion;

    // Constructor
    public function __construct($idMedico,$nombreMedico,$apellidosMedico,$fechaNacimiento,$sexo,$mp_medico,$telefono,$correo)
    {
        $this->idMedico = $idMedico;
        $this->nombreMedico = $nombreMedico;
        $this->apellidosMedico = $apellidosMedico;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->sexo = $sexo;
        $this->mp_medico = $mp_medico;
        $this->telefono = $telefono;
        $this->correo = $correo;
    }

    // CRUD
    public function agregarMedico()
    {   
        $this->Conexion = Conectarse();
        $sql = "INSERT INTO medicos (idMedico, nombreMedico, apellidosMedico, fechaNacimiento, sexo, mp_medico, telefono, correo)
                VALUES ('$this->idMedico','$this->nombreMedico','$this->apellidosMedico','$this->fechaNacimiento','$this->sexo','$this->mp_medico','$this->telefono','$this->correo')";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;   
    }

    public function consultarMedico($idMedico)
    {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM medicos WHERE idMedico='$idMedico'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;   
    }

    public function actualizarMedico()
    {   
        $this->Conexion = Conectarse();
        $sql = "UPDATE medicos 
                SET nombreMedico='$this->nombreMedico',
                    apellidosMedico='$this->apellidosMedico',
                    fechaNacimiento='$this->fechaNacimiento',
                    sexo='$this->sexo',
                    mp_medico='$this->mp_medico',
                    telefono='$this->telefono',
                    correo='$this->correo'
                WHERE idMedico='$this->idMedico'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;   
    }

    public function listarMedicos()
    {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM medicos";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;   
    }   
}
?>

