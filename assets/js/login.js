// Inicio de sesion
function Iniciar_Sesion() {
  // Capturamos los valores de los campos en variables.
  var email = $('#email').val();
  var pass = $('#pass').val();

  // verificamos que no esten vacios.
  if (email != "" && pass != "") {
    // validamos el formato del email
    if (validarEmail(email)) {
      // Enviamos los datos al core con ajax,
      $.ajax({
        url: 'core/core.php',
        data:{
          node: 'Iniciar_Sesion',
          email: email,
          pass: pass
        },
        method:'post',
        type:'post'
      }).done(function (response){
        // Recibimos un obj y redireccionamos si todo esta correcto.
        if (response.codigo > 0) {
          console.log(response);
          window.location = "index.php";
        }else{
          // Enviamos msj de error
          msjBox("Error",response.mensaje);
          console.log(response);
        }
      }).fail(function(xhr,status,error) {
        console.log("Error");
      }).always(function(response) {
        console.log("Enviado");
      });
    }else{
      // Mostrar Mensaje de Campos Vacios
      msjBox('Advertencia','Formato de email invalido','warning');
      console.log('Formato de email invalido','warning.');
    }
  }else{
    // Mostrar Mensaje de Campos Vacios
    msjBox('Advertencia','Los campos estan vacios.','warning');
    console.log('Los campos estan vacios.');
  }
}
