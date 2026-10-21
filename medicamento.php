<?php
class Medicamento
{
    // Atributos
    private $idMedicamento;
    private $nombreMedicamento;
    private $dosis;
    private $uso;
    private $Conexion;

    // Constructor
    public function __construct($idMedicamento,$nombreMedicamento,$dosis,$uso)
    {
        $this->idMedicamento = $idMedicamento;
        $this->nombreMedicamento = $nombreMedicamento;
        $this->dosis = $dosis;
        $this->uso = $uso;
        
    }

    // CRUD
    public function agregarMedicamento()
    {   
        $this->Conexion = Conectarse();
        $sql = "INSERT INTO Medicamento (idMedicamento, nombreMedicamento, dosis, uso)
                VALUES ('$this->idMedicamento','$this->nombreMedicamento','$this->dosis','$this->uso')";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;   
    }

    public function consultarMedicamento($idMedicamento)
    {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM Medicamento WHERE idMedicamento='$idMedicamento'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;   
    }

    public function actualizarMedicamento()
    {   
        $this->Conexion = Conectarse();
        $sql = "UPDATE Medicamento 
                SET nombreMedicamento='$this->nombres',
                    dosis='$this->dosis',
                    uso='$this->uso',
                    
                WHERE idMedicamento='$this->idMedicamento'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;   
    }

    public function listarMedicamento()
    {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM Medicamentos";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;   
    }   
}
?>