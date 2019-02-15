jQuery(document).on('submit', '#formlogin', function(event)
{
event.preventDefault();

jQuery.ajax({
	url: '../metodos/LogSesionesAdmin.php',
	type: 'POST',
	dataType: 'json',
	data: $(this).serialize(),
	beforeSend:function()
	{
		$('.botonlogin').val('Autenticando..');
	}
})
.done(function(respuesta) {
	console.log(respuesta);
	if (!respuesta.error) {
		if (respuesta.tipo = 'Admin') 
		{
			location.href = '../MenuPrincipal.php';
		}
		else if (respuesta.tipo = 'Usuario') 
		{
			location.href = '../MenuPrincipal.php'		
		}
	}
	else {
		$('.error').slideDown('slow');
		setTimeout(function()
		{
			
		})
	}
})
.fail(function(resp) {
	console.log(resp.responseText);
})
.always(function() {
	console.log("complete");
});

})