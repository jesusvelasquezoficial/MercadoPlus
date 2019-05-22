function Registrarse() {
  // Capturamos los valores de los campos en variables.
  var nombre = $('#nombre').val();
  var apellido = $('#apellido').val();
  var email = $('#email').val();
  var pass1 = $('#pass1').val();
  var pass2 = $('#pass2').val();
  var tyc = $('#tyc').prop('checked');
  // verificamos que no esten vacios.
  if (nombre != '' && apellido != '' && email != '' && pass1 != '' && pass2 != '' && tyc != false) {
    // validamos el formato del email
    if (validarEmail(email)) {
      // Verificar que coincidan los passwords
      if (pass1 == pass2) {
        // Enviamos los datos por ajax
        $.ajax({
          url: 'core/core.php',
          data:{
            node: 'Registrarse',
            nombre: nombre,
            apellido: apellido,
            email: email,
            pass: pass1,
            tyc: tyc
          },
          method:'post',
          type:'post'
        }).done(function (response) {
          // Recibimos un obj y redireccionamos si todo esta correcto.
          if (response.codigo > 0) {
            console.log(response);
            window.location = "index.php";
          }else{
            // Enviamos el mensaje a la caja msjError
            msjBox("Error",response.mensaje);
            console.log(response);
          }
        }).fail(function(xhr,status,error) {
          console.log("Error");
        }).always(function(response) {
          console.log("Enviado");
        });
      }else{
        // Enviamos mensaje a la caja de msj
        msjBox("Error",'El Password no coincide.');
        // Mostrar Mensaje del Password no Coincide.
        console.log('El Password no coincide.');
      }
    }else{
      // Mostrar Mensaje de Formato Invalido
      msjBox('Advertencia','Formato de email invalido','warning');
      console.log('Formato de email invalido','warning.');
    }
  }else{
    // Mostrar Mensaje de Campos Vacios
    msjBox("Advertencia",'Los campos estan vacios.','warning');
    console.log('Los campos estan vacios.');
  }
}
