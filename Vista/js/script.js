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
    $("#fecha").datepicker();
    $("#pacNacimiento").datepicker();
})