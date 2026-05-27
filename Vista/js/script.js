function consultarPaciente() {
    const url = "index.php?accion=consultarpaciente&documento=" + $("#asignarDocumento").val();
    $("#paciente").load(url);
}

$(document).ready(function () {
    $("#frmPaciente").dialog({
        autoOpen: false,
        height: 310,
        width: 400,
        modal: true,
        buttons: {
            "Insertar": function() { insertarPaciente(); },
                "Cancelar": function() { cancelar(); }
        }
    });
});

function mostrarFormulario() {
    const documento = $("#asignarDocumento").val();
    $("#pacDocumento").val(documento);
    $("#frmPaciente").dialog('open');
}

function insertarPaciente(){
    $(this).dialog("close");
    queryString=$("#agregarPaciente").serialize();
    url = "index.php?accion=ingresarpaciente&"+queryString;
    $("#paciente").load(url);
}

function cancelar(){
    $(this).dialog("close");
}

$(document).ready(function(){
    $("#fecha").datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true
    });
    $("#pacNacimiento").datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true
    });
});

function cargarHoras() {
    if ($("#medico").val() == -1 || $("#fecha").val() == "") {
        $("#hora").html("<option value='-1' selected='selected'>--- Seleccione la hora ---</option>");
    } else {
        const queryString = "medico=" + $("#medico").val() + "&fecha=" + $("#fecha").val();
        const url = "index.php?accion=consultarHora&" + queryString;
        $("#hora").load(url);
    }
}

function seleccionarHora() {
    if ($("#medico").val() == -1) {
        alert("Debe seleccionar un médico");
    }
    else if ($("#fecha").val() == ""){
        alert("Debe seleccionar una fecha");    
    }
}

function consultarCita(){
    const url="index.php?accion=consultarCita&consultarDocumento="+$("#consultarDocumento").val();
    $("#paciente2").load(url);
}

function cancelarCita(){
    const url="index.php?accion=cancelarCita&cancelarDocumento="+$("#cancelarDocumento").val();
    $("#paciente3").load(url);
}

function confirmarCancelar(numero){
    if(confirm("Estas seguro que desea cancelar la cita "+numero+ "?")){
        $.get("index.php",{accion:'confirmarCancelar',numero: numero}, function(mensaje){
            alert(mensaje);
            $("#cancelarConsulta").trigger("click");
            });
    }
}