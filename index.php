<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once'Controlador/Controlador.php';
        require_once'Modelo/GestorCita.php';
        require_once'Modelo/Cita.php';
        require_once'Modelo/Paciente.php';
        require_once'Modelo/Conexion.php';

        $controlador = new Controlador();
        $accion = $_GET['accion'] ?? 'inicio';

        if ($accion === 'asignar') {
            $controlador->verPagina('Vista/html/asignar.php');
        } elseif ($accion === 'consultar') {
            $controlador->verPagina('Vista/html/consultar.php');
        } elseif ($accion === 'cancelar') {
            $controlador->verPagina('Vista/html/cancelar.php');
        } elseif ($accion === 'guardarCita') {
            $controlador->agregarCita($_POST["fecha"],$_POST["hora"],
                    $_POST["asignarDocumento"],$_POST["medico"],$_POST["consultorio"]);
        } elseif ($accion === 'consultarCita') {
            $controlador->consultarCitas($_POST["consultarDocumento"]); 
        } elseif ($accion === 'cancelarCita') {
            $controlador->cancelarCitas($_POST["cancelarDocumento"]);
        } elseif ($accion === 'consultarpaciente') {
            $controlador->consultarPaciente($_GET["documento"]);
        } elseif ($accion === 'ingresarpaciente') {
            $controlador->agregarPaciente($_GET["pacDocumento"], $_GET["pacNombres"],
                    $_GET["pacApellidos"], $_GET["pacNacimiento"], $_GET["pacSexo"]);
        } 
        else {
            $controlador->verPagina('Vista/html/inicio.php');
        }
        ?>
    </body>
</html>
