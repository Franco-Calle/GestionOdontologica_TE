<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Controlador
 *
 * @author franc
 */
class Controlador {
    public function verPagina($ruta){
        require_once $ruta;
    }
    public function agregarCita($fec, $hor, $doc, $med, $con){
        $cita = new Cita(null, $fec, $hor, $doc, $med, $con, "Solicitada", "Ninguna");
        $gestorCita = new GestorCita();
        $id = $gestorCita->agregarCita($cita);
        $result = $gestorCita->consultarCitaPorld($id);
        require_once"Vista/html/confirmarCitas.php";
    }
    public function consultarCitas($doc) {
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarCitasPorDocumento($doc);
        require_once"Vista/html/consultarCitas.php";
    }
    public function cancelarCitas($doc) {
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarCitasPorDocumento($doc);
        require_once"Vista/html/cancelarCitas.php";
    }
    public function consultarPaciente($doc){
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarPaciente($doc);
        require_once"Vista/html/consultarPaciente.php";
    }
    public function agregarPaciente($ide, $nom, $ape, $fNa, $sex){
        $paciente = new Paciente($ide, $nom, $ape, $fNa, $sex);
        $gestorCita = new GestorCita();
        $result = $gestorCita->agregarPaciente($paciente);
        if($result > 0){
            echo "Paciente Insertado con Exito";
        }
        else{
            echo "Error al insertar ek paciente, intente de nuevo";
        }
    }
}
