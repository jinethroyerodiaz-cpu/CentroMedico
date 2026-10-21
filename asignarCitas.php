<?php
class Cita
{
    // Atributos
    private $idCita;
    private $nombres;
    private $apellidos;
    private $telefono;
    private $correo;
    private $idMedico;
    private $idConsultorio;
    private $direccionPaciente;
    private $horaCita;
    private $fechaCita;
    private $Conexion;

    // Constructor
    public function __construct($idCita,$nombres,$apellidos,$telefono,$correo,$idMedico,$idConsultorio,$direccionPaciente,$horaCita,$fechaCita)
    {
        $this->idCita = $idCita;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->idMedico = $idMedico;
        $this->idConsultorio = $idConsultorio;
        $this->direccionPaciente = $direccionPaciente;
        $this->horaCita = $horaCita;
        $this->fechaCita = $fechaCita;
    }

    // CRUD
    public function agregarCita()
    {   
        $this->Conexion = Conectarse();
        $sql = "INSERT INTO citas (idCita, nombres, apellidos, telefono, correo, idMedico, idConsultorio, direccionPaciente, horaCita, fechaCita)
                VALUES ('$this->idCita','$this->nombres','$this->apellidos','$this->telefono','$this->correo','$this->idMedico','$this->idConsultorio','$this->direccionPaciente','$this->horaCita','$this->fechaCita')";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;   
    }

    public function consultarCita($idCita)
    {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM citas WHERE idCita='$idCita'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;   
    }

    public function actualizarCita()
    {   
        $this->Conexion = Conectarse();
        $sql = "UPDATE citas 
                SET nombres='$this->nombres',
                    apellidos='$this->apellidos',
                    telefono='$this->telefono',
                    correo='$this->correo',
                    idMedico='$this->idMedico',
                    idConsultorio='$this->idConsultorio',
                    direccionPaciente='$this->direccionPaciente',
                    horaCita='$this->horaCita',
                    fechaCita='$this->fechaCita'
                WHERE idCita='$this->idCita'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;   
    }

    public function listarCitas()
    {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM citas";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;   
    }   
}
?>