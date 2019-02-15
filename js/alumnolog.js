jQuery(document).on('submit', '#formlogin', function(event)
{
event.preventDefault();

jQuery.ajax({
	url: '../metodos/loginALumno.php',
	type: 'POST',
	dataType: 'json',
	data: $(this).serialize(),
	beforeSend:function()
	{

	}
})
.done(function(respuesta) {
	console.log(respuesta);
	if (|respuesta.error) {
		if (respuesta) {}
	}
})
.fail(function(resp) {
	console.log(resp.responseText);
})
.always(function() {
	console.log("complete");
});

})