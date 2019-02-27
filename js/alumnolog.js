$(document).on('click','#boton', function(event)
{
    event.preventDefault();
   
   var info = {usuario: $('#usuario').val(), password: $('#password').val()};

    $.ajax({
        url:'routes/routeUsuarios.php',
        type:'POST',
        data: {info: info, action: "login"},
        dataType:'JSON',
        beforeSend: function(){
            alert("filtro");
            //showSpinner();
        },
        error: function(error){
            console.log(error);
            //toast1("Error!", error, 8000, "error");
            //removeSpinner();
        },
        success: function(data){

            console.log(data);
            //removeSpinner();

            if(data == true){
                window.location = 'Screen.php';
            }
            else{
               alert("Usuario y/o contraseña incorrectos");
            }
        }
    });
    
});