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

        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
        <link rel="stylesheet" href="Vista/jquery/dialog/jquery-ui.css">
        <link rel="stylesheet" href="Vista/jquery/dialog/jquery-ui.structure.css">
        <link rel="stylesheet" href="Vista/jquery/dialog/jquery-ui.theme.css">
        <script type="text/javascript" src="Vista/jquery/jquery-3.7.1.min.js"></script>
        <script src="Vista/jquery/dialog/jquery-ui.js"></script>
        <script type="text/javascript" src="Vista/js/script.js"></script>
        
    </head>
    <body>
        <div id="contenedor">
            <div id="encabezado">
                <h1>Sistema de Gestion Odontologica</h1>
            </div>
            <ul id="menu">
                <li><a href="index.php">Inicio</a></li>
                <li class="activa"><a href="index.php?accion=asignar">Asignar cita</a></li>
                <li><a href="index.php?accion=consultar">Consultar cita</a></li>
                <li><a href="index.php?accion=cancelar">Cancelar cita</a></li>
            </ul>
            <div id="contenido">
                <h2>Asignar Cita</h2>
            
                <form action="index.php?accion=guardarCita"method="post"id="frmasignar">
                    <table>
                        <tr>
                            <td>Documento del Paciente</td>
                            <td><input type="text" name="asignarDocumento" id="asignarDocumento"/></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="button" name="asignarconsulta" value="Consulta" id="asignarConsulta" onClick="consultarPaciente()"/>
                            </td>
                        </tr>
                        <tr><td colspan="2"><div id="paciente"></div></td></tr>
                        <tr>
                            <td>Medico</td>
                            <td>
                                <select id="medico" name="medico">
                                    <option value="-1" selected="selected">---Seleccion de medico---</option>
                                    <option value="12345">12345 Camilo Robledo</option>
                                    <option value="67890">67890 Esteban Salgado</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Fecha</td>
                            <td><input type="text" name="fecha" id="fecha"/></td>
                        </tr>
                        <tr>
                            <td>Hora</td>
                            <td>
                                <select id="hora" name="hora">
                                    <option value="-1" selected="selected">---Seleccione la hora---</option>
                                    <option>08:00:00</option>
                                    <option>08:20:00</option>
                                    <option>08:40:00</option>
                                    <option>09:00:00</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Consultorio</td>
                            <td>
                                <select id="consultorio" name="consultorio">
                                    <option value="-1" selected="selected">---Seleccione el consultorio---</option>
                                    <option value="1">1 Consulta1</option>
                                    <option value="2">2 Tratamientos2</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="asignarEnviar" value="Enviar" id="asignarEnviar"/>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div id="frmPaciente" style="display: none;" title="Agregar nuevo paciente">
            <form id= agregarPaciente >
                <table>
                    <tr>
                        <td>Documento</td>
                        <td><input type="text" name="pacDocumento" id="pacDocumento" readonly="readonly" /></td>
                    </tr>
                    <tr>
                        <td>Nombres</td>
                        <td><input type="text" name="pacNombres" id=pacNombres" /></td>
                    </tr>
                    <tr>
                        <td>Apellidos</td>
                        <td><input type="text" name="pacApellidos" id="pacApellidos" /></td>
                    </tr>
                    <tr>
                        <td>Fecha de Nacimiento</td>
                        <td><input type="text" name="pacNacimiento" id="pacNacimiento" /></td>
                    </tr>
                    <tr>
                        <td>Sexo</td>
                        <td>
                            <select id="pac Sexo" name="pacSexo">
                                <option value="-1" selected="selected">---Seleccione Sexo---</option>
                                <option>m</option>
                                <option>f</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
