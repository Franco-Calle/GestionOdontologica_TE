<?php $fila = $result->fetch_object(); ?>
<h1 style="text-align: center;">Información de la Cita</h1>
<table style="border: 1px solid #000; font-size: 12pt; width: 100%;" align="center" cellpadding="5" cellspacing="0">
    <tr> <th colspan="2" style="border: 1px solid #000; text-align: center; background-color: #f2f2f2;">Datos del Paciente</th></tr>
    <tr><td style="width: 40%;">Documento</td><td style="width: 60%;"><?php echo $fila->PacIdentificacion; ?></td></tr>
    <tr><td>Nombre</td><td><?php echo $fila->PacNombres . " " . $fila->PacApellidos; ?></td></tr>    
    <tr><th colspan="2" style="border: 1px solid #000; text-align: center; background-color: #f2f2f2;">Datos del Médico</th></tr>
    <tr><td>Documento</td><td><?php echo $fila->MedIdentificacion; ?></td></tr>
    <tr><td>Nombre</td><td><?php echo $fila->MedNombres . " " . $fila->MedApellidos; ?></td></tr>    
    <tr><th colspan="2" style="border: 1px solid #000; text-align: center; background-color: #f2f2f2;">Datos de la Cita</th></tr>
    <tr><td>Número</td> <td><?php echo $fila->CitNumero; ?></td> </tr>
    <tr><td>Fecha</td> <td><?php echo $fila->CitFecha; ?></td> </tr>
    <tr><td>Hora</td> <td><?php echo $fila->CitHora; ?></td> </tr>
    <tr><td>Número de Consultorio</td> <td><?php echo $fila->ConNumero; ?></td> </tr>
    <tr><td>Nombre del Consultorio</td> <td><?php echo $fila->ConNombre; ?></td> </tr>
    <tr><td>Estado</td> <td><?php echo $fila->CitEstado; ?></td> </tr>
    <tr><td>Observaciones</td> <td><?php echo $fila->CitObservaciones; ?></td> </tr>
</table>