<?php
// Incluimos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

class Materias
{
    // Constructor
    public function __construct()
    {
        
    }

    // Método para insertar una nueva materia
    public function insertar($nombre, $profesor)
    {
        $sql = "INSERT INTO materia (nombre, profesor) VALUES ('$nombre', '$profesor')";
        return ejecutarConsulta($sql);
    }

    // Método para editar una materia
    public function editar($id, $nombre, $profesor)
    {
        $sql = "UPDATE materia SET nombre='$nombre', profesor='$profesor' WHERE id='$id'";
        return ejecutarConsulta($sql);
    }

    // Método para eliminar una materia
    public function eliminar($id)
    {
        $sql = "DELETE FROM materia WHERE id='$id'";
        return ejecutarConsulta($sql);
    }

    // Método para mostrar los datos de una materia
    public function mostrar($id)
    {
        $sql = "SELECT * FROM materia WHERE id='$id'";
        return ejecutarConsultaSimpleFila($sql);
    }

    // Método para listar todas las materias
    public function listar()
    {
        $sql = "SELECT * FROM materia";
        return ejecutarConsulta($sql);
    }

    // Método para buscar materias por nombre
    public function buscar($nombre)
    {
        $sql = "SELECT * FROM materia WHERE nombre LIKE '%$nombre%'";
        return ejecutarConsulta($sql);
    }
}
?>
