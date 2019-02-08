$(function()
{
	alert();
	$("#id_alumno").onautocomplete(
		function()	
			{
				source: "../precargarDatosAlumno.php",
				
				select: function(event, ui)
				{
					event.preventDefault();
					$('#Nombre').val(ui.item.Nombre);
					$('#Telefono').val(ui.item.Telefono);
					$('#Carrera').val(ui.item.Carrera);
					$('#usuario_alumno').val(ui.item.usuario_alumno);
					$('#pass_alumno').val(ui.item.pass_alumno);
				}
			}

	);
});