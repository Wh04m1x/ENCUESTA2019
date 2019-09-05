function enviartexto() {

    /////////////////////DEL EMPLEADO//////////////////////////////////////
    var texto1 = document.getElementById("name").value;
    var texto2 = document.getElementById("apepa").value;
    var texto3 = document.getElementById("apema").value;
    var res = texto1 + ' ' + texto2 + ' ' + texto3;
    //texto1.concat(texto2, texto3);
    $('#validname span').html(res);
    ////////////////////////////////////////////////////////////////////
    var texto_edad = document.getElementById("edad").value;
    $('#validedad span').html(texto_edad);
    ////////////////////////////////////////////////////////////////////
    var textoes = document.getElementById("estado").value;
    $('#validcivil span').html(textoes);
    ////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////
    var textosex = document.getElementById("sexo").value;
    $('#validsex span').html(textosex);
    ////////////////////////////////////////////////////////////////////
    var textodom = document.getElementById("domicilio").value;
    $('#validdom span').html(textodom);
    ////////////////////////////////////////////////////////////////////
     var textoc = document.getElementById("curp").value;
     $('#validcurp span').html(textoc);
     ////////////////////////////////////////////////////////////////////
     var textorf = document.getElementById("rfc").value;
     $('#validrfc span').html(textorf);
     ////////////////////////////////////////////////////////////////////
     var textonss = document.getElementById("nss").value;
     $('#validnss span').html(textonss);
     ////////////////////////////////////////////////////////////////////
    //////////////// DEL PUESTO //////////////////////////////////
    var textop = document.getElementById("puesto").value;
    $('#validpuesto span').html(textop);
    ///////////////////////////////////////////////////////
    var textot = document.getElementById("tipo").value;
    $('#validtipo span').html(textot);

    /////////////////////////////////////////////////////////////////////
    var texto2 = document.getElementById("numero_empleado").value;
    $('#validid span').html(texto2);
    /////////////////////////////////////////////////////////////
    var textod = document.getElementById("dias").value;
    $('#validdias span').html(textod);
    /////////////////////////////////////////
    var textos = document.getElementById("salario").value;
    $('#validsalario span').html(textos);
    /////////////////////////////////////////////////
    var textoa = document.getElementById("text").value;
    $('#validacti span').html(textoa);
    ///////////////////////////////////////////
}

function limpiarNumero(obj) {
    /* El evento "change" sólo saltará si son diferentes */
    obj.value = obj.value.replace(/\D/g, '');
  }