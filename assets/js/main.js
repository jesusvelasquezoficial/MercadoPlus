// $('#myTab a').on('click', function (e) {
//   e.preventDefault()
//   $('#myTab li a').tab('show');
// });

$(document).ready(function() {

  tablaDatosOficiales(3);
  tablaDatosOTC(5);
  pushAlert();
  chart1();
  chart2();
  chart3();
  chart4();
  chart5();
});

$('div').scrollspy({
  target: '#principal'
});


function formatoCajaInstagram() {
  $('#cajaContenido').toggleClass('formatoCaja');
}
function updown(num,boolean) {
  num = parseFloat(num);
  num = (num == 0 || isNaN(num)) ? 0 : num;

  if (num > 0) {
    colorBlanco = (boolean) ? 'text-white' : 'text-success';
    return '<i class="fe fe-arrow-up '+colorBlanco+'">'+ num.toFixed(2) +'%</i>';
  }else if (num == 0) {
    return '<span class="text-white" style="font-family:courier;">=</span>';
  }else if (isNaN(num)) {
    return '<span class="text-white" style="font-family:courier;">=</span>';
  }else{
    colorBlanco = (boolean) ? 'text-white' : 'text-danger';
    result = num * -1;
    return '<i class="fe fe-arrow-down '+colorBlanco+'">'+ result.toFixed(2) +'%</i>';
  }
}

function pushAlert() {
  $.ajax({
    url: 'core/core.php',
    data:{
      node: 6
    },
    type: 'POST',
    dataType: 'json'
  }).done(function(response) {
    Push.Permission.request();
    Push.create("Mensaje Importante", {
      body: response,
      icon: 'assets/img/logo.png',
      timeout: 4000,
      onClick: function () {
          window.focus();
          this.close();
      }
    });
  }).fail(function(xhr,status,error) {

  }).always(function(response) {

  });
}

function numFloatandReplace(num,long,v1,v2,v3 = null){
  rem = (v2 == null) ? v3 : v2;
  return result = (num.length > long) ? parseFloat(num.replace(v1,rem)) : parseFloat(num.replace(v2,rem));
}

function chart1() {
  $.ajax({
    url: 'core/core.php',
    data:{
      node: 7
    },
    typo: 'POST',
    dataType: 'json'
  }).done(function(response) {

    long = Object.keys(response).length;
    console.log(response);

    fechas = [];
    precios = [];
    precios2 = [];
    nro = 1;

    for (var i = 0; i < long; i++) {

      fechas[i] = response[nro][0];
      precios[i] = numFloatandReplace(response[nro][1],4,",","",".");
      precios2[i] = numFloatandReplace(response[nro][2],4,",","",".");
      // precios2[i] = parseFloat(response[nro][2]);
      nro += 1;
    }


    var ctx = $('#myChart');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: fechas, // FECHAS
            datasets: [{
                label: 'DOLAR OFICIAL', // NOMBRE
                data: precios, // PRECIOS
                backgroundColor: 'rgba(50, 255, 240, 1)',
                borderColor: 'rgba(50, 255, 240, 1)',
                borderWidth: 2,
                fill: false
            },{
                label: 'DOLAR OTC', // NOMBRE
                data: precios2, // PRECIOS
                backgroundColor: 'rgba(50, 100, 255, 1)',
                borderColor: 'rgba(50, 100, 255, 1)',
                borderWidth: 2,
                fill: false
            }]},
        options: {
          response: true
        }
    });

  }).fail(function(xhr,status,error) {

  }).always(function(response) {

  });


}

function chart2() {
  $.ajax({
    url: 'core/core.php',
    data:{
      node: 8
    },
    typo: 'POST',
    dataType: 'json'
  }).done(function(response) {

    long = Object.keys(response).length;
    console.log(response);

    fechas = [];
    precios3 = [];
    precios4 = [];
    nro = 1;

    for (var i = 0; i < long; i++) {
      fechas[i] = response[nro][0];
      precios3[i] = numFloatandReplace(response[nro][1],4,",","",".");
      precios4[i] = numFloatandReplace(response[nro][2],4,",","",".");
      nro += 1;
    }


    var ctx = $('#myChart2');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: fechas, // FECHAS
            datasets: [{
                label: 'EURO OFICIAL', // NOMBRE
                data: precios3, // PRECIOS
                backgroundColor: 'rgba(150, 50, 255, 1)',
                borderColor: 'rgba(150, 50, 255, 1)',
                borderWidth: 2,
                fill: false
            },{
                label: 'EURO OTC', // NOMBRE
                data: precios4, // PRECIOS
                backgroundColor: 'rgba(255, 50, 150, 1)',
                borderColor: 'rgba(255, 50, 150, 1)',
                borderWidth: 2,
                fill: false
            }],
        options: {
          response: true,
          scales: {
            xAxes: [{
              ticks: {
                min: 0,
                max: 1
              }
            }]
          }
        }
        }
    });

  }).fail(function(xhr,status,error) {

  }).always(function(response) {

  });


}

function chart3() {
  $.ajax({
    url: 'core/core.php',
    data:{
      node: 9
    },
    typo: 'POST',
    dataType: 'json'
  }).done(function(response) {

    long = Object.keys(response).length;
    console.log(response);

    fechas = [];
    precios5 = [];
    nro = 1;

    for (var i = 0; i < long; i++) {

      fechas[i] = response[nro][0];
      precios5[i] = numFloatandReplace(response[nro][1],4,",",".");


      nro += 1;
    }


    var ctx = $('#myChart3');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: fechas, // FECHAS
            datasets: [{
              label: 'PETROLEO', // NOMBRE
              data: precios5, // PRECIOS
              backgroundColor: 'rgba(0, 0, 0, 1)',
              borderColor: 'rgba(0, 0, 0, 1)',
              borderWidth: 2,
              fill: false
            }],
        options: {
          response: true,
          legend: {
            display: true
          }
        }
        }
    });

  }).fail(function(xhr,status,error) {

  }).always(function(response) {

  });


}

function chart4() {
  $.ajax({
    url: 'core/core.php',
    data:{
      node: 10
    },
    typo: 'POST',
    dataType: 'json'
  }).done(function(response) {

    long = Object.keys(response).length;
    console.log(response);

    fechas = [];
    precios6 = [];
    nro = 1;

    for (var i = 0; i < long; i++) {

      fechas[i] = response[nro][0];
      precios6[i] = numFloatandReplace(response[nro][1],4,",","",".");
      nro += 1;
    }


    var ctx = $('#myChart4');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: fechas, // FECHAS
            datasets: [{
                label: 'ORO', // NOMBRE
                data: precios6, // PRECIOS
                borderColor: 'rgba(255, 255, 0, 1)',
                backgroundColor: 'rgba(255, 255, 0, 1)',
                borderWidth: 2,
                fill: false
            }],
        options: {
          response: true,
          legend: {
            display: true
          }
        }
        }
    });

  }).fail(function(xhr,status,error) {

  }).always(function(response) {

  });


}

function chart5() {
  $.ajax({
    url: 'core/core.php',
    data:{
      node: 11
    },
    typo: 'POST',
    dataType: 'json'
  }).done(function(response) {

    long = Object.keys(response).length;
    console.log(response);

    fechas = [];
    precios7 = [];
    nro = 1;

    for (var i = 0; i < long; i++) {

      fechas[i] = response[nro][0];
      precios7[i] = numFloatandReplace(response[nro][1],4,",","",".");
      nro += 1;
    }


    var ctx = $('#myChart5');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: fechas, // FECHAS
            datasets: [{
                label: 'BITCOIN', // NOMBRE
                data: precios7, // PRECIOS
                borderColor: 'rgba(0, 255, 0, 1)',
                backgroundColor: 'rgba(0, 255, 0, 1)',
                borderWidth: 2,
                fill: false
            }],
        options: {
          response: true,
          legend: {
            display: true
          }
        }
        }
    });

  }).fail(function(xhr,status,error) {

  }).always(function(response) {

  });


}

function paso2() {
  $('#datosOficiales-tab').removeClass('active');
  $('#datosOTC-tab').addClass('active');
  setTimeout(function () {
    $('#btnSiguiente-tab').removeClass('active');
  }, 1000);
}

function cargarDatos() {
  $('form-datos').submit();
  $('#datosOTC-tab').removeClass('active');
  $('#tablaDatosOficiales-tab').addClass('active');
  setTimeout(function () {
    $('#btnGuardar-tab').removeClass('active');
  }, 1000);
}

function enviarMsjChat() {
  var mensaje = $('#msjChat').val();
  if (mensaje != "") {
    $.ajax({
      url: 'core/core.php',
      data:{
        node: 13,
        msj: mensaje
      },
      method: 'POST',
      type: 'POST'
      // dataType: 'json'
    }).done(function (response) {
      pushAlert();
      mostrarMsjChat();
    }).fail(function(xhr,status,error) {
      console.log("Error");
    }).always(function(response) {
      console.log("Enviado");
    });
    $('#msjChat').val("");
  }
}

function formatHora(date) {
  if (date) {
    return date.slice(10, -3);
  }
}

var long2 = [];

function mostrarMsjChat(){
  $.ajax({
    url: 'core/core.php',
    data:{
      node: 14
    },
    method: 'POST',
    type: 'POST'
    // dataType: 'json'
  }).done(function (response) {
    var long = Object.keys(response).length;

    while(long2 != long) {
      console.log(response);

      var textMsj = '';
      for (var i in response) {
        if (response[i].user_id != response[i].session_id) {
          textMsj += '<div class="comment mb-3">';
          textMsj += '<div class="row">';
          // textMsj += '<div class="col-auto">';
          // textMsj += '<a class="avatar avatar-sm" href="profile-posts.html"> <img src="assets/img/avatars/profiles/avatar-'+response[i].user_id+'.jpg" alt="..." class="avatar-img rounded-circle"> </a>';
          // textMsj += '</div>';
          textMsj += '<div class="col ml-n2">';
          textMsj += '<div class="comment-body">';
          textMsj += '<div class="row">';
          textMsj += '<div class="col">';
          textMsj += '<h5 class="comment-title">'+response[i].user_nombre+' '+response[i].user_apellido+'</h5>';
          textMsj += '</div>';
          textMsj += '<div class="col-auto">';
          textMsj += '<time class="comment-time">'+formatHora(response[i].fecha);+'</time>';
          textMsj += '</div>';
          textMsj += '</div>';
          textMsj += '<p class="comment-text">'+response[i].msj+'</p>';
          textMsj += '</div>';
          textMsj += '</div>';
          textMsj += '</div>';
          textMsj += '</div>';
          textMsj += '';
        }else{
          textMsj += '<div class="comment mb-3">';
          textMsj += '<div class="row d-flex justify-content-end">';
          textMsj += '<div class="col-auto ml-n2">';
          textMsj += '<div class="comment-body">';
          textMsj += '<div class="row">';
          textMsj += '<div class="col">';
          textMsj += '<h5 class="comment-title">'+response[i].user_nombre+' '+response[i].user_apellido+'</h5>';
          textMsj += '</div>';
          textMsj += '<div class="col-auto">';
          textMsj += '<time class="comment-time"> '+formatHora(response[i].fecha);+' </time>';
          textMsj += '</div>';
          textMsj += '</div>';
          textMsj += '<p class="comment-text">'+response[i].msj+'</p>';
          textMsj += '</div>';
          textMsj += '</div>';
          // textMsj += '<div class="col-auto">';
          // textMsj += '<a class="avatar avatar-sm" href="profile-posts.html"> <img src="assets/img/avatars/profiles/avatar-'+response[i].user_id+'.jpg" alt="..." class="avatar-img rounded-circle"> </a>';
          // textMsj += '</div>';
          textMsj += '</div>';
          textMsj += '</div>';
          textMsj += '';
        }
      }

      $('#boxMsjChat').html(textMsj);
      $('#bodyChat').scrollTop(100000);
      beepSound(4);
      long2[0] = long;
    }

  }).fail(function(xhr,status,error) {
    console.log("Error");
  }).always(function(response) {
  });
}

function beepSound(msj) {
  switch (msj) {
    case 1:
      var snd = new Audio("assets/beep.mp3");
      snd.play();
    break;
    case 2:
      var snd = new Audio("assets/smsnew.mp3");
      snd.play();
    break;
    case 3:
      var snd = new Audio("assets/fsms.mp3");
      snd.play();
    break;
    case 4:
      var snd = new Audio("assets/tono1.mp3");
      snd.play();
    break;
    case 5:
      var snd = new Audio("assets/tono2.mp3");
      snd.play();
    break;
    default:

  }
}

function chatBot_promediosDia(){
  $.ajax({
    url: 'core/core.php',
    data:{
      node: 'chatBot_promediosDia'
    },
    method: 'POST',
    type: 'POST'
    // dataType: 'json'
  }).done(function (response) {
    mostrarMsjChat();
  }).fail(function(xhr,status,error) {
    console.log("Error");
  }).always(function(response) {
    console.log("Enviado");
  });
  $('#msjChat').val("");
}
// Validacion de Email para Iniciar_Sesion y Registrarse
function validarEmail(email) {
  if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(email)){
   // alert("La dirección de email " + email + " es correcta!.");
   return true;
  } else {
    return false;
    // alert("La dirección de email es incorrecta!.");
  }
}

function msjBox(titulo, msj, tipo = null) {
  tipo = (tipo == null) ? 'danger' : tipo;
  var contenido = '';
  contenido += '<div class="alert alert-'+tipo+' alert-dismissible fade show" role="alert">';
  contenido +='<strong>¡'+titulo+'!</strong> '+msj+' ';
  contenido +='<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
  contenido +='<span aria-hidden="true">&times;</span>';
  contenido +='</button></div>';
  contenido += '';
  // Enviamos el mensaje a la caja msjError
  $('#msjBox').html(contenido);
}
