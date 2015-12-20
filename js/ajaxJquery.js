function punto1(){

    var pagina = "./nexo.php";
	
    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "html",
        data: {
			queHago : "punto1"
		},
        async: true
    })
	.done(function (tabla) {
		$("#divCuerpo").html(tabla);
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });    
}

function guardarPunto1(){	
	//IMPLEMENTAR  
}

function punto2(){

    var pagina = "./nexo.php";
	
    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "html",
        async: true
    })
	.done(function (tabla) {
		//IMPLEMENTAR
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });    
}

function punto3(){
	
    var pagina = "./nexo.php";
    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {
			queHago : "punto3"
		},
        async: true
    })
	.done(function (html) {
		$("#divCuerpo").html(html);
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });    
}
function mostrarPunto3(titulo){
	//IMPLEMENTAR
}

function punto4(){
	//IMPLEMENTAR
}

function punto5(){
	
    var pagina = "./nexo.php";
    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {
			queHago : "punto5"
		},
        async: true
    })
	.done(function (html) {
		$("#divCuerpo").html(html);
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });    

}

function traerJson(idCd){
	//IMPLEMENTAR, AL OBTENER EL OBJ. JSON, INVOCAR 'MOSTRARFORMULARIOJSON'
}

function mostrarFormularioJson(objJson){

    var pagina = "./nexo.php";
    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "html",
        data: {
			queHago : "formularioPunto5",
			objJson : objJson
		},
        async: true
    })
	.done(function (html) {
		$("#divCuerpo").html(html);
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });    		
}

function guardarModificacion(){
	//IMPLEMENTAR
}