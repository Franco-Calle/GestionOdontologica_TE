<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'Controlador/Controlador.php';
require_once 'Modelo/GestorCita.php';
require_once 'Modelo/Cita.php';
require_once 'Modelo/Paciente.php';
require_once 'Modelo/Conexion.php';

$controlador = new Controlador();
$accion = $_GET['accion'] ?? 'inicio';

if ($accion === 'asignar') {
    $controlador->cargarAsignar();
} elseif ($accion === 'consultar') {
    $controlador->verPagina('Vista/html/consultar.php');
} elseif ($accion === 'cancelar') {
    $controlador->verPagina('Vista/html/cancelar.php');
} elseif ($accion === 'guardarCita') {
    $controlador->agregarCita(
        $_POST["fecha"],
        $_POST["hora"],
        $_POST["asignarDocumento"],
        $_POST["medico"],
        $_POST["consultorio"]
    );
} elseif ($accion === 'consultarCita') {
    $controlador->consultarCitas($_GET["consultarDocumento"]);
} elseif ($accion === 'cancelarCita') {
    $controlador->cancelarCitas($_GET["cancelarDocumento"]);
} elseif ($accion === 'consultarpaciente') {
    $controlador->consultarPaciente($_GET["documento"]);
} elseif ($accion === 'ingresarpaciente') {
    $controlador->agregarPaciente(
        $_GET["pacDocumento"],
        $_GET["pacNombres"],
        $_GET["pacApellidos"],
        $_GET["pacNacimiento"],
        $_GET["pacSexo"]
    );
} elseif ($accion === 'consultarHora') {
    $controlador->consultarHorasDisponibles($_GET["medico"], $_GET["fecha"]);
} elseif ($accion === 'verCita') {
    $controlador->verCita($_GET['numero']);
} elseif ($accion === "confirmarCancelar") {
    $controlador->confirmarCancelarCita($_GET['numero']);
} elseif ($accion === 'reporte') {
    $controlador->generarReporte($_GET["numero"]);
} else {
    $controlador->verPagina('Vista/html/inicio.php');
}
