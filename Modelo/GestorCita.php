<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of GestorCita
 *
 * @author franc
 */
class GestorCita {

    public function agregarCita(Cita $cita) {
        $conexion = new Conexion();
        $conexion->abrir();
        $fecha = $cita->obtenerFecha();
        $hora = $cita->obtenerHora();
        $paciente = $cita->obtenerPaciente();
        $medico = $cita->obtenerMedico();
        $consultorio = $cita->obtenerConsultorio();
        $estado = $cita->obtenerEstado();
        $observaciones = $cita->obtenerObservaciones();
        $sql = "INSERT INTO citas VALUES (null, '$fecha', '$hora',
'$paciente', '$medico', '$consultorio', '$estado', '$observaciones')";
        $conexion->consulta($sql);
        $citald = $conexion->obtenerCitald();
        $conexion->cerrar();
        return $citald;
    }

    public function consultarCitaPorld($id) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT pacientes.*, medicos.*, consultorios.*, citas.*
FROM pacientes, medicos, consultorios, citas
WHERE citas. CitPaciente = pacientes.PacIdentificacion
AND citas.CitMedico = medicos.MedIdentificacion
AND citas.CitConsultorio = consultorios.ContNumero
AND citas. CitNumero = $id";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }

    public function consultarCitasPorDocumento($doc) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT*
FROM citas
WHERE CitPaciente = '$doc'
AND CitEstado='Solicitada'";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }

    public function consultarPaciente($doc) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT *
FROM pacientes
WHERE PacIdentificacion = '$doc'";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }
    
    public function agregarPaciente(Paciente $paciente) {
        $conexion = new Conexion();
        $conexion->abrir();
        $ide  = $paciente->obtenerldentificacion();
        $nom = $paciente->obtenerNombres();
        $ape = $paciente->obtenerApellidos();
        $fNa = $paciente->obtenerFechaNacimiento();
        $sex = $paciente->obtenerSexo();
        $sql = "INSERT INTO pacientes VALUES ('$ide ', '$nom', '$ape',
'$fNa', '$sex')";
        $conexion->consulta($sql);
        $fillasAfectadas = $conexion->obtenerFilasAfectadas();
        $conexion->cerrar();
        return $fillasAfectadas;
    }
    
    public function consultarMedicos() {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT *
FROM medicos";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }
}
