<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Sistema de Gestion Odontologica</title>

        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css"
    </head>
    <body>
        <div id="contenedor">
            <div id="encabezado">
                <h1>Sistema de Gestion Odontologica</h1>
            </div>
            <ul id="menu">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php?accion=asignar">Asignar cita</a></li>
                <li><a href="index.php?accion=consultar">Consultar cita</a></li>
                <li class="activa"><a href="index.php?accion=cancelar">Cancelar cita</a></li>
            </ul>
            <div id="contenido">
                <h2>Documento del paciente</h2>
                <form action="index.php?accion=cancelarCita" method="post" id="frmcancelar">
                    <table>
                        <tr>
                            <td>Documento del paciente</td>
                            <td><input type="text" name="cancelarDocumento" id="cancelarDocumento"/></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="cancelarConsultar" value="Consultar" id="cancelarConsultar"/>
                            </td>
                        </tr>
                        <tr><td colspan="2"><div id="paciente3"></div></td></tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>
