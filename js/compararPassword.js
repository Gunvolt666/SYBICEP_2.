$('#boton').click(function()
{
    
    var contrasena = $("#contrasena").val();
    var confirContrasena = $("#confirContrasena").val();

    //console.log(contrasena+"   "+confirContrasena);

    if (contrasena !='' && confirContrasena != '') {

        if (contrasena === confirContrasena) {

            $("#noCoinciden").html('<h6 class="text-success">Los campos coinciden.</h6>');
        }else{

            $("#noCoinciden").html('<h6 class="text-danger"><strong>Lo siento!</strong>, los campos no coinciden.</h6>');
        }
    }else{
      $("#noCoinciden").html('<h6 class="text-warning"><strong>Hey!</strong> No dejes los campos vacios</h6>');
    }
        
});