$(document).on('ready',principal);

function principal(){
	$('.triangulito').on('click',desplegar);
	$('#enviar').on('submit',enviarDatos);
}

function desplegar(){
	$('.centrar').toggle('fast');
}

function enviarDatos(){
	$.ajax({
		type:'GET',
		url:'insertar.php',
		beforeSend:function(){
			$('.mensaje').fadeIn(500).html('enviando la peticion...');
		},
		data: $('#enviar').serialize(),
		success:function(contenido){
			$('.mensaje').fadeIn(500).html(contenido);
		}

	});

	$('#nombre').val('');
	$('#apellido').val('');
	$('#cedula').val('');
	$('#correo').val('');
	return false;
}