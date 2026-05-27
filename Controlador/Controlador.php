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
    public function cargarAsignar() {
        $gestorCita = new GestorCita();
        $result=$gestorCita->consultarMedicos();
        $result2=$gestorCita->consultarConsultorios();
        require_once "Vista/html/asignar.php";
    }
    public function consultarHorasDisponibles($medico,$fecha) {
        $gestorCita = new GestorCita();
        $result=$gestorCita->consultarHorasDisponibles($medico,$fecha);
        require_once "Vista/html/consultarHoras.php";
    }
    public function verCita($cita) {
        $gestorCita = new GestorCita();
        $result=$gestorCita->consultarCitaPorld($cita);
        require_once "Vista/html/confirmarCitas.php";
    }
    public function confirmarCancelarCita($cita) {
        $gestorCita = new GestorCita();
        $registros=$gestorCita->cancelarCita($cita);
        if($registros > 0){
            echo "La cita se ha cancelado con exito";
        }
        else{
            echo "Error al cancelar cita, intente de nuevo";
        }
    }
    public function generarReporte($cita) {
        $gestorCita = new GestorCita();
        $result=$gestorCita->consultarCitaPorld($cita);
        ob_start();
        require_once "Vista/html/reporteCita.php";
        $content=ob_get_clean();
        require_once "vendor/autoload.php";
        $html2pdf = new \Spipu\Html2Pdf\Html2Pdf('P','A4','es');
        $html2pdf->pdf-> SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content);
        $html2pdf->output("Informacion de la cita.pdf");
        
    }
}
