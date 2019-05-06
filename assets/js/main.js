// $('#myTab a').on('click', function (e) {
//   e.preventDefault()
//   $('#myTab li a').tab('show');
// });

$(document).ready(function() {
  fechayhora();
  tablaDatosOficiales(3);
  mostrarDatosOficiales(3);
  tablaDatosOTC(5);
  mostrarDatosOTC(5);
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

function fechayhora() {
  var datetime = new Date();
  var year = datetime.getFullYear();
  var mes = (datetime.getMonth()+1);
  if (mes < 9) {
    mes = "0"+mes;
  }

  var dia = datetime.getDate();

  if (dia < 10) {
    dia = "0"+dia;
  }

  var fecha = year + "-" + mes + "-" + dia;

  $('#fechaDO').val(fecha);
  $('#fechaOTC').val(fecha);

  // HORA
  /////////////////////////////////
  var hora = datetime.getHours();
  var min = datetime.getMinutes();
  var tip = "AM"

  if (hora < 10) {
    hora = "0"+hora;
  }

  if (hora > 12) {
    tip = "PM";
    hora = hora - 12;
    if (hora < 10) {
      hora = "0"+hora;
    }
  }

  if (min < 10) {
    min = "0"+min;
  }

  var time = hora + ":" + min + " " + tip;

  $('#horaDO').val(time);
  $('#horaOTC').val(time);

}

function promediar(precioCompra, precioVenta, promedio) {
  var valorCompra = precioCompra.value;
  var valorVenta = precioVenta.value;
  var idPromedio = "#"+promedio.id;

  if (valorCompra != "" && valorVenta != "") {
    var Compra = parseFloat(valorCompra.replace(",", ""));
    var Venta = parseFloat(valorVenta.replace(",", ""));

    var calculoPromedio = (Compra + Venta) / 2;

    console.log(Compra, Venta, calculoPromedio.toFixed(2), idPromedio);

    console.log();
    $(idPromedio).mask('#,###.##',{ reverse: true });
    $(idPromedio).val(calculoPromedio.toFixed(2)).mask('#,###.##');
    if (idPromedio != "#oroPromedio" && idPromedio != "#bitcoinPromedio") {
      promedioTotalOTC(promedio);
    }

  }else{
    promedio.value = '';
  }

}

function valorPetroleo(precioCompra, precioVenta, promedio) {
  var valorCompra = precioCompra.value;
  var valorVenta = precioVenta.value;
  var idPromedio = "#"+promedio.id;

  if (valorCompra != "" && valorVenta != "") {
    var Compra = parseFloat(valorCompra.replace(",", ""));
    var Venta = parseFloat(valorVenta.replace(",", ""));

    var calculoPromedio = (Compra + Venta) / 2;

    console.log(Compra, Venta, calculoPromedio.toFixed(2), idPromedio);

    $(idPromedio).mask('##,###.##', { reverse: true });
    $(idPromedio).val(calculoPromedio.toFixed(2)).mask('##,###.##');

  }else{
    promedio.value = '';
  }
}

function valorEuroDolar(precioDolar, precioEuro,valorED) {
  var dolar = precioDolar.value;
  var euro = precioEuro.value;
  var idEuroDolar = "#"+valorED.id;

  if (dolar != "" && euro != "") {
    var d = parseFloat(dolar.replace(",", ""));
    var e = parseFloat(euro.replace(",", ""));

    var euroDolar = e / d;

    console.log(d, e, euroDolar.toFixed(2), idEuroDolar);

    $(idEuroDolar).mask('#,###.##', { reverse: true });
    $(idEuroDolar).val(euroDolar.toFixed(2)).mask('#,###.##');
    calcularPromedioTotal();

  }else {
    valorED.value = '';
  }

}

function petroPlanAhorroYCrypto(precioDolar, precioPetro, petroPAyC) {
  var dolar = precioDolar.value;
  var petro = precioPetro.value;
  var idPetroPAyC = "#"+petroPAyC.id;

  console.log(dolar,petro,idPetroPAyC);

  if (dolar != "" && petro != "") {
    var d = parseFloat(dolar.replace(",", ""));
    var p = parseFloat(petro.replace(",", ""));

    var valorPetroPAyC = d * p;

    console.log(d, p, valorPetroPAyC.toFixed(2), idPetroPAyC);

    $(idPetroPAyC).mask('###,###.##', { reverse: true });
    $(idPetroPAyC).val(valorPetroPAyC.toFixed(2)).mask('###,###.##');

  }else {
    petroPAyC.value = '';
  }
}

function promedioTotalOTC(data) {
  // 1.1 Cremos las variables capturando el "id" del campo y el "valor"
  var idPromedio = data.id;
  var valorPromedio = data.value;

  // 1- Construimos la estructura del Objeto Promedio que recibe 2 parametros (id,valor)
  function objPromedio(id,valor) {
    this.id = id;
    this.valor = valor;
  }

  // 2- Creamos un nuevo Objeto Promedio y le pasamos los datos capturados en la function
  // como parametros (idPromedio, valorPromedio)
   promedio = new objPromedio(idPromedio,valorPromedio);
   // 3- Ejecutamos la function "agregar" enviando el Objeto Promedio como parametro
   agregar();

 }

// PROMEDIOS ARRAY
var promedios = [];

// 2.1 Construimos la function "agregar" que recibe el parametro (promedio)
function agregar() {
  // console.log(promedio);
  // 3.1 Si la DataBase "promedios" esta vacia entonces entra.
  if (promedios == "") {
    // console.log("Agrego Nuevo");
    promedios.push(promedio);
    // console.log(promedios);
    calcularPromedioTotal();

  }else{
    console.log("Verifica si es una correccion o un nuevo Promedio para Agregarlo");
    for (var i = 0; i < promedios.length; i++) {
      if (promedios[i].id == promedio.id) {
        // console.log("Realiza una correccion de un promedio existente");
        promedios[i] = promedio;
        // console.log(promedios);
        calcularPromedioTotal();
        return;

      }
    }
    // console.log("Los datos no existen");
    // console.log("Se Agrego nuevo promedio al arreglo Promedios");
    promedios.push(promedio);
    // console.log(promedios);

    calcularPromedioTotal();
  }
}

function calcularPromedioTotal() {
  var suma = 0;
  var divisor = promedios.length;

  for (var i = 0; i < promedios.length; i++) {
    var valor = promedios[i].valor;
    var num = valor.replace(",", "");
    suma += parseFloat(num);
    // console.log("valor"+i+": "+ valor);
    if (parseFloat(num) == 0) {
      console.log("encontro 0 y resta al divisor");
      divisor -= 1;
    }
  }

  var promedioFinal = suma / divisor;

  console.log("divisor: "+divisor);
  console.log("PROMEDIO TOTAL : " + promedioFinal.toFixed(2));

  $('#promedioTotal').mask('#,###.##', {reverse:true});
  $('#promedioTotal').val(promedioFinal.toFixed(2)).mask('#,###.##');

  // DOLAR COMPRA | VENTA
  var dolarBuy = promedioFinal - ((promedioFinal * 5) / 100);
  var dolarSell = promedioFinal + ((dolarBuy * 5) / 100);

  $('#dolarC').mask('#,###.##', {reverse:true});
  $('#dolarC').val(dolarBuy.toFixed(2)).mask('#,###.##');
  $('#dolarV').mask('#,###.##', {reverse:true});
  $('#dolarV').val(dolarSell.toFixed(2)).mask('#,###.##');

  // EURO COMPRA | VENTA
  var euroDolar = $('#euroDolar').val();
  console.log(euroDolar);

  var euro = parseFloat(promedioFinal) * parseFloat(euroDolar.replace(",", "."));
  console.log(euro);
  console.log(euro.toFixed(2));

  var euroBuy =  euro - ((euro) * 5 / 100);
  $('#euro').mask('#,###.##', {reverse:true});
  $('#euro').val(euro.toFixed(2)).mask('#,###.##');
  console.log(euroBuy);
  console.log(euroBuy.toFixed(2));

  var euroSell = euro + ((euroBuy) * 5 / 100);
  console.log(euroSell);
  console.log(euroSell.toFixed(2));

  $('#euroC').mask('#,###.##', {reverse:true});
  $('#euroC').val(euroBuy.toFixed(2)).mask('#,###.##');
  $('#euroV').mask('#,###.##', {reverse:true});
  $('#euroV').val(euroSell.toFixed(2)).mask('#,###.##');

}

function formatoCajaInstagram() {
  $('#cajaContenido').toggleClass('formatoCaja');
}

function tablaDatosOficiales(num) {
  $.ajax({
    url: 'core/core.php',
    dataType: 'json',
    type:'POST',
    data: {
      node: num,
    }
  }).done(function(response) {
     long = Object.keys(response).length;
    var bodyTable = '';

    if (long != 0) {
      var fondoFila = "";
      for (var i in response) {
        bodyTable += '<tr class="'+ fondoFila +'">';
        bodyTable += '<th scope="row">' + response[i].fecha + '</th>';
        bodyTable +='<th>' + response[i].hora + '</th>';
        bodyTable +='<th>' + response[i].dolardicom + '</th>';
        bodyTable +='<th>' + updown(response[i].pctvdolardicom) + '</th>';
        bodyTable +='<th>' + response[i].eurodicom + '</th>';
        bodyTable +='<th>' + updown(response[i].pctveurodicom) + '</th>';
        bodyTable +='<th>' + response[i].eurodolar + '</th>';
        bodyTable +='<th>' + updown(response[i].pctveurodolar) + '</th>';
        bodyTable +='<th>' + response[i].bitcoinpromedio + '</th>';
        bodyTable +='<th>' + updown(response[i].pctvbitcoinpromedio) + '</th>';
        bodyTable +='<th>' + response[i].petro + '</th>';
        bodyTable +='<th>' + updown(response[i].pctvpetro) + '</th>';
        bodyTable +='<th>' + response[i].petro1 + '</th>';
        bodyTable +='<th>' + updown(response[i].pctvpetro1) + '</th>';
        bodyTable +='<th>' + response[i].petro2 + '</th>';
        bodyTable +='<th>' + updown(response[i].pctvpetro2) + '</th>';
        bodyTable +='<th>' + response[i].petroleo + '</th>';
        bodyTable +='<th>' + updown(response[i].pctvpetroleo) + '</th>';
        bodyTable +='<th>' + response[i].oropromedio + '</th>';
        bodyTable +='<th>' + updown(response[i].pctvoropromedio) + '</th>';
        bodyTable +='</tr>';

        fondoFila = (fondoFila == "") ? "fondoFila" : "";

      }

      $('#bodyTableDO').html(bodyTable);

    }else{
      console.log('la respuesta esta en 0');
    }
    console.log("RESPUESTA:\n");
    console.log(response);

  }).fail(function(xhr, status, error) {

    console.log("ERROR:\n");
    console.log(xhr.responseText);

  }).always(function(response) {

    console.log("COMPLETE:\n");

  });
}

function tablaDatosOTC(num) {
  $.ajax({
    url: 'core/core.php',
    data: {
      node: num,
    },
    type:'POST',
    dataType: 'json'
  }).done(function(response) {
    long = Object.keys(response).length;
    var bodyTable = '';

    if (long != 0) {
      var fondoFila = "";
      for (var i in response) {
        bodyTable += '<tr class="'+ fondoFila +'">';
        bodyTable += '<th scope="row">' + response[i].fecha + '</th>';
        bodyTable +='<th>' + response[i].hora + '</th>';
        bodyTable +='<th>' + response[i].dolartodaypromedio + '</th>';
        bodyTable +='<th>' + updown(response[i].pctvdolartodaypromedio) + '</th>';
        bodyTable +='<th>' + response[i].dolartodaybtcpromedio + '</th>';
        bodyTable +='<th>' + updown(response[i].pctvdolartodaybtcpromedio) + '</th>';
        bodyTable +='<th>' + response[i].airtmpromedio + '</th>';
        bodyTable +='<th>' + updown(response[i].pctvairtmpromedio) + '</th>';
        bodyTable +='<th>' + response[i].dolartruepromedio + '</th>';
        bodyTable +='<th>' + updown(response[i].pctvdolartruepromedio) + '</th>';
        bodyTable +='<th>' + response[i].monitordolarvzlapromedio + '</th>';
        bodyTable +='<th>' + updown(response[i].pctvmonitordolarvzlapromedio) + '</th>';
        bodyTable +='<th>' + response[i].mkambiopromedio + '</th>';
        bodyTable +='<th>' + updown(response[i].pctvmkambiopromedio) + '</th>';
        bodyTable +='<th>' + response[i].dolargoldpromedio + '</th>';
        bodyTable +='<th>' + updown(response[i].pctvdolargoldpromedio) + '</th>';
        bodyTable +='<th>' + response[i].dolarftpromedio + '</th>';
        bodyTable +='<th>' + updown(response[i].pctvdolarftpromedio) + '</th>';
        bodyTable +='<th>' + response[i].promediototal + '</th>';
        bodyTable +='<th>' + updown(response[i].pctvpromediototal) + '</th>';
        bodyTable +='<th>' + response[i].dolarc + '</th>';
        bodyTable +='<th>' + updown(response[i].pctvdolarc) + '</th>';
        bodyTable +='<th>' + response[i].dolarv + '</th>';
        bodyTable +='<th>' + updown(response[i].pctvdolarv) + '</th>';
        bodyTable +='<th>' + response[i].euro + '</th>';
        bodyTable +='<th>' + updown(response[i].pctveuro) + '</th>';
        bodyTable +='<th>' + response[i].euroc + '</th>';
        bodyTable +='<th>' + updown(response[i].pctveuroc) + '</th>';
        bodyTable +='<th>' + response[i].eurov + '</th>';
        bodyTable +='<th>' + updown(response[i].pctveurov) + '</th>';
        bodyTable +='</tr>';

        fondoFila = (fondoFila == "") ? "fondoFila" : "";
      }

      $('#bodyTableOTC').html(bodyTable);

    }else{
      console.log('la respuesta esta en 0');
    }
    console.log("RESPUESTA:\n");
    console.log(response);

  }).fail(function(xhr, status, error) {

    console.log("ERROR:\n");
    console.log(xhr.responseText);

  }).always(function(response) {

    console.log("COMPLETE\n");

  });
}

function mostrarDatosOTC(num){
  $.ajax({
    url: 'core/core.php',
    data: {
      node: num
    },
    type: 'POST',
    dataType: 'json'
  }).done(function(response) {
    long = Object.keys(response).length;
    var bodyTasasMercados = '';

    if (long != 0) {
      bodyTasasMercados += '<tr>';
      bodyTasasMercados += '<td class="h3 font-italic"> <i class="fe fe-check-circle text-success"></i> DolarToday </td>';
      bodyTasasMercados +='<td class="text-center h2 font-weight-bold" data-mask="#.000,00" data-mask-reverse="true" style="font-family:courier;color:orange;"><span class="h2 fe fe-dollar-sign mb-0"></span>'+ response[1].dolartodaypromedio +'</td>';
      bodyTasasMercados +='<td class="h2 text-sm-right ">'+ updown(response[1]["pctvdolartodaypromedio"]) +'</td>';
      bodyTasasMercados +='</tr><tr>';
      bodyTasasMercados += '<td class="h3 font-italic"> <i class="fe fe-check-circle text-success"></i> DolarToday (BTC) </td>';
      bodyTasasMercados +='<td class="text-center h2 font-weight-bold" data-mask="#.000,00" data-mask-reverse="true" style="font-family:courier;color:orange;"><span class="h2 fe fe-dollar-sign mb-0"></span>'+ response[1].dolartodaybtcpromedio +'</td>';
      bodyTasasMercados +='<td class="h2 text-sm-right ">'+ updown(response[1]["pctvdolartodaybtcpromedio"]) +'</td>';
      bodyTasasMercados +='</tr><tr>';
      bodyTasasMercados += '<td class="h3 font-italic"> <i class="fe fe-check-circle text-success"></i> TheAirTM </td>';
      bodyTasasMercados +='<td class="text-center h2 font-weight-bold" data-mask="#.000,00" data-mask-reverse="true" style="font-family:courier;color:orange;"><span class="h2 fe fe-dollar-sign mb-0"></span>'+ response[1].airtmpromedio +'</td>';
      bodyTasasMercados +='<td class="h2 text-sm-right ">'+ updown(response[1]["pctvairtmpromedio"]) +'</td>';
      bodyTasasMercados +='</tr><tr>';
      bodyTasasMercados += '<td class="h3 font-italic"> <i class="fe fe-check-circle text-success"></i> DolarTrue_ </td>';
      bodyTasasMercados +='<td class="text-center h2 font-weight-bold" data-mask="#.000,00" data-mask-reverse="true" style="font-family:courier;color:orange;"><span class="h2 fe fe-dollar-sign mb-0"></span>'+ response[1].dolartruepromedio +'</td>';
      bodyTasasMercados +='<td class="h2 text-sm-right ">'+ updown(response[1]["pctvdolartruepromedio"]) +'</td>';
      bodyTasasMercados +='</tr><tr>';
      bodyTasasMercados += '<td class="h3 font-italic"> <i class="fe fe-check-circle text-success"></i> MonitorDolarVZLA </td>';
      bodyTasasMercados +='<td class="text-center h2 font-weight-bold" data-mask="#.000,00" data-mask-reverse="true" style="font-family:courier;color:orange;"><span class="h2 fe fe-dollar-sign mb-0"></span>'+ response[1].monitordolarvzlapromedio +'</td>';
      bodyTasasMercados +='<td class="h2 text-sm-right ">'+ updown(response[1]["pctvmonitordolarvzlapromedio"]) +'</td>';
      bodyTasasMercados +='</tr><tr>';
      bodyTasasMercados += '<td class="h3 font-italic"> <i class="fe fe-check-circle text-success"></i> MKambio </td>';
      bodyTasasMercados +='<td class="text-center h2 font-weight-bold" data-mask="#.000,00" data-mask-reverse="true" style="font-family:courier;color:orange;"><span class="h2 fe fe-dollar-sign mb-0"></span>'+ response[1].mkambiopromedio +'</td>';
      bodyTasasMercados +='<td class="h2 text-sm-right ">'+ updown(response[1]["pctvmkambiopromedio"]) +'</td>';
      bodyTasasMercados +='</tr><tr>';
      bodyTasasMercados += '<td class="h3 font-italic"> <i class="fe fe-check-circle text-success"></i> Dolar_Gold </td>';
      bodyTasasMercados +='<td class="text-center h2 font-weight-bold" data-mask="#.000,00" data-mask-reverse="true" style="font-family:courier;color:orange;"><span class="h2 fe fe-dollar-sign mb-0"></span>'+ response[1].dolargoldpromedio +'</td>';
      bodyTasasMercados +='<td class="h2 text-sm-right ">'+ updown(response[1]["pctvdolargoldpromedio"]) +'</td>';
      bodyTasasMercados +='</tr><tr>';
      bodyTasasMercados += '<td class="h3 font-italic"> <i class="fe fe-check-circle text-success"></i> Dolar_FT </td>';
      bodyTasasMercados +='<td class="text-center h2 font-weight-bold" data-mask="#.000,00" data-mask-reverse="true" style="font-family:courier;color:orange;"><span class="h2 fe fe-dollar-sign mb-0"></span>'+ response[1].dolarftpromedio +'</td>';
      bodyTasasMercados +='<td class="h2 text-sm-right ">'+ updown(response[1]["pctvdolarftpromedio"]) +'</td>';
      bodyTasasMercados +='</tr>';
      bodyTasasMercados +='<tr class="text-white" style="background-color:#f95d02;">';
      bodyTasasMercados +='<td class="pb-0 " style="font-size:2.5em;"> <h1 class="pt-2 pl-sm-5">PROMEDIO</h1> </td>';
      bodyTasasMercados +='<td class="pb-0 pt-2 text-center font-weight-bold" data-mask="#.000,00" data-mask-reverse="true" style="font-size:2.5em;font-weight:bold!important;"> <h1 class="pt-3"><span class="h1 fe fe-dollar-sign mb-0"></span>'+ response[1].promediototal +'</h1></td>';
      bodyTasasMercados +='<td class="pb-0 text-sm-right text-white" style="font-size:1.9em;"><h1>'+ updown(response[1]["pctvpromediototal"],true) +'</h1></td>';
      bodyTasasMercados +='</tr>';

      $('#bodyTasasMercados').html(bodyTasasMercados);

      var promediosDia = '';
          promediosDia += '<div class="row p-4 border ">';
          promediosDia += '<div class="col-12">';
          promediosDia += '<div class="display-4" style="font-size:1.8em;">DOLAR</div>';
          promediosDia += '</div><div class="col-6">';
          promediosDia += '<h3 class="mb-1"> COMPRA </h3>';
          promediosDia += '<div class="display-4 border-success text-success" style="font-size:1.7em;"><span class="h1 fe fe-dollar-sign mb-0"></span>'+ response[1]["dolarc"] +'</i></div>';
          promediosDia += '<small">'+ updown(response[1]["pctvdolarc"]) +'</small>';
          promediosDia += '</div><div class="col-6">';
          promediosDia += '<h3 class="mb-1"> VENTA </h3>';
          promediosDia += '<div class="display-4 border-danger text-danger" style="font-size:1.7em;"><span class="h1 fe fe-dollar-sign mb-0"></span>'+ response[1]["dolarv"] +'</i></div>';
          promediosDia += '<small">'+ updown(response[1]["pctvdolarv"]) +'</small></div></div>';
          promediosDia += '<div class="row p-4 border mt-4">';
          promediosDia += '<div class="col-12">';
          promediosDia += '<div class="display-4" style="font-size:1.8em;">EURO</div>';
          promediosDia += '</div><div class="col-6">';
          promediosDia += '<h3 class="mb-1"> COMPRA </h3>';
          promediosDia += '<div class="display-4 border-success text-success" style="font-size:1.7em;"><span class="h1 fe fe-dollar-sign mb-0"></span>'+ response[1]["euroc"] +'</div>';
          promediosDia += '<small">'+ updown(response[1]["pctveuroc"]) +'</small>';
          promediosDia += '</div><div class="col-6">';
          promediosDia += '<h3 class="mb-1"> VENTA </h3>';
          promediosDia += '<div class="display-4 border-danger text-danger" style="font-size:1.7em;"><span class="h1 fe fe-dollar-sign mb-0"></span>'+ response[1]["eurov"] +'</div>';
          promediosDia += '<small">'+ updown(response[1]["pctveurov"]) +'</small></div></div>';

      $('#promediosDia').html(promediosDia);

      fechayhoraOTC = '<li class="list-group-item p-0 border-0 display-4"><i class="fe fe-calendar"></i> '+ response[1]["fecha"] +'</li>';
      fechayhoraOTC += '<li class="list-group-item p-0 border-0 h2"><i class="fe fe-clock"></i> '+ response[1]["hora"] +'</li>';

      $('#fechayhoraOTC').html(fechayhoraOTC);

    }else {
      console.log('la respuesta esta en 0');
    }
  }).fail(function(xhr, status, error) {
    console.log("ERROR:\n");
    console.log(xhr.responseText);
  }).always(function(response) {
    console.log("COMPLETE\n");
  });
}

function mostrarDatosOficiales(num){
  $.ajax({
    url: 'core/core.php',
    data: {
      node: num
    },
    type: 'POST',
    dataType: 'json'
  }).done(function(response) {
    long = Object.keys(response).length;
    var bodyTasasMercados = '';

    if (long != 0) {
      bodyTasasMercados += '<div class="col-12 col-lg-6"><div class="card text-center text-sm-left"><div class="card-body"><div class="row align-items-center"><div class="col-12 col-sm-6">';
      bodyTasasMercados += '<h4 class="card-title text-uppercase mb-2">Tasa del Dolar Dicom</h4>';
      bodyTasasMercados +='<span class="h2 mb-0 text-muted">Tasa Establecida por BCV</span>';
      bodyTasasMercados +='</div><div class="col-12 col-sm-6 align-items-center justify-content-center"><div class="text-sm-right">';
      bodyTasasMercados +='<h2 class="m-0 p-0 font-weight-bold" style="font-family:courier;color:orange;"> <span class="h2 fe fe-bold mb-0">s.</span> '+ response[1]["dolardicom"] +" "+ updown(response[1]["pctvdolardicom"]) + '</h2>';
      bodyTasasMercados += '</div></div></div></div></div></div>';

      bodyTasasMercados += '<div class="col-12 col-lg-6"><div class="card text-center text-sm-left"><div class="card-body"><div class="row align-items-center"><div class="col-12 col-sm-6">';
      bodyTasasMercados += '<h4 class="card-title text-uppercase mb-2">Tasa del Euro Dicom</h4>';
      bodyTasasMercados +='<span class="h2 mb-0 text-muted">Tasa Establecida por BCV</span>';
      bodyTasasMercados +='</div><div class="col-12 col-sm-6 align-items-center justify-content-center"><div class="text-sm-right">';
      bodyTasasMercados +='<h2 class="m-0 p-0 font-weight-bold" style="font-family:courier;color:orange;"> <span class="h2 fe fe-bold mb-0">s.</span> '+ response[1]["eurodicom"] +" "+ updown(response[1]["pctveurodicom"]) + '</h2>';
      bodyTasasMercados += '</div></div></div></div></div></div>';

      bodyTasasMercados += '<div class="col-12 col-lg-6"><div class="card text-center text-sm-left"><div class="card-body"><div class="row align-items-center"><div class="col-12 col-sm-6">';
      bodyTasasMercados += '<h4 class="card-title text-uppercase mb-2">Valor del</h4>';
      bodyTasasMercados +='<span class="h2 mb-0 text-muted">Euro | Dolar</span>';
      bodyTasasMercados +='</div><div class="col-12 col-sm-6 align-items-center justify-content-center"><div class="text-sm-right">';
      bodyTasasMercados +='<h2 class="m-0 p-0 font-weight-bold" style="font-family:courier;color:orange;"> '+ response[1]["eurodolar"] +" "+ updown(response[1]["pctveurodolar"]) + '</h2>';
      bodyTasasMercados += '</div></div></div></div></div></div>';

      bodyTasasMercados += '<div class="col-12 col-lg-6"><div class="card text-center text-sm-left"><div class="card-body"><div class="row align-items-center"><div class="col-12 col-sm-6">';
      bodyTasasMercados += '<h4 class="card-title text-uppercase mb-2">Valor del</h4>';
      bodyTasasMercados +='<span class="h2 mb-0 text-muted">Bitcoin | Dolar</span>';
      bodyTasasMercados +='</div><div class="col-12 col-sm-6 align-items-center justify-content-center"><div class="text-sm-right">';
      bodyTasasMercados +='<h2 class="m-0 p-0 font-weight-bold" style="font-family:courier;color:orange;"> <span class="h2 fe fe-dollar-sign mb-0"></span> '+ response[1]["bitcoinpromedio"] +" "+ updown(response[1]["pctvbitcoinpromedio"]) + '</h2>';
      bodyTasasMercados += '</div></div></div></div></div></div>';

      bodyTasasMercados += '<div class="col-12 col-lg-6"><div class="card text-center text-sm-left"><div class="card-body"><div class="row align-items-center"><div class="col-12 col-sm-6">';
      bodyTasasMercados += '<h4 class="card-title text-uppercase mb-2">Valor del Petro</h4>';
      bodyTasasMercados +='<span class="h2 mb-0 text-muted">Salario minimo | Tramite</span>';
      bodyTasasMercados +='</div><div class="col-12 col-sm-6 align-items-center justify-content-center"><div class="text-sm-right">';
      bodyTasasMercados +='<h2 class="m-0 p-0 font-weight-bold" style="font-family:courier;color:orange;"> <span class="h2 fe fe-bold mb-0">s.</span> '+ response[1]["petro1"] +" "+ updown(response[1]["pctvpetro1"]) + '</h2>';
      bodyTasasMercados += '</div></div></div></div></div></div>';

      bodyTasasMercados += '<div class="col-12 col-lg-6"><div class="card text-center text-sm-left"><div class="card-body"><div class="row align-items-center"><div class="col-12 col-sm-6">';
      bodyTasasMercados += '<h4 class="card-title text-uppercase mb-2">Valor del Petro</h4>';
      bodyTasasMercados +='<span class="h2 mb-0 text-muted">Plan de Ahorro | Crypto</span>';
      bodyTasasMercados +='</div><div class="col-12 col-sm-6 align-items-center justify-content-center"><div class="text-sm-right">';
      bodyTasasMercados +='<h2 class="m-0 p-0 font-weight-bold" style="font-family:courier;color:orange;"> <span class="h2 fe fe-bold mb-0">s.</span> '+ response[1]["petro2"] +" "+ updown(response[1]["pctvpetro2"]) + '</h2>';
      bodyTasasMercados += '</div></div></div></div></div></div>';

      bodyTasasMercados += '<div class="col-12 col-lg-6"><div class="card text-center text-sm-left"><div class="card-body"><div class="row align-items-center"><div class="col-12 col-sm-6">';
      bodyTasasMercados += '<h4 class="card-title text-uppercase mb-2">Valor del Petroleo</h4>';
      bodyTasasMercados +='<span class="h2 mb-0 text-muted">WTI | BRENT (USD)</span>';
      bodyTasasMercados +='</div><div class="col-12 col-sm-6 align-items-center justify-content-center"><div class="text-sm-right">';
      bodyTasasMercados +='<h2 class="m-0 p-0 font-weight-bold" style="font-family:courier;color:orange;"> <span class="h2 fe fe-dollar-sign mb-0"></span> '+ response[1]["petroleo"] +" "+ updown(response[1]["pctvpetroleo"]) + '</h2>';
      bodyTasasMercados += '</div></div></div></div></div></div>';

      bodyTasasMercados += '<div class="col-12 col-lg-6"><div class="card text-center text-sm-left"><div class="card-body"><div class="row align-items-center"><div class="col-12 col-sm-6">';
      bodyTasasMercados += '<h4 class="card-title text-uppercase mb-2">Valor del Oro</h4>';
      bodyTasasMercados +='<span class="h2 mb-0 text-muted">Precio Internacional (USD)</span>';
      bodyTasasMercados +='</div><div class="col-12 col-sm-6 align-items-center justify-content-center"><div class="text-sm-right">';
      bodyTasasMercados +='<h2 class="m-0 p-0 font-weight-bold" style="font-family:courier;color:orange;"> <span class="h2 fe fe-dollar-sign mb-0"></span> '+ response[1]["oropromedio"] +" "+ updown(response[1]["pctvoropromedio"]) + '</h2>';
      bodyTasasMercados += '</div></div></div></div></div></div>';

      $('#bodyTasasMercadosOficiales').html(bodyTasasMercados);

      fechayhora = '<li class="list-group-item p-0 border-0 display-4"><i class="fe fe-calendar"></i> '+ response[1]["fecha"] +'</li>';
      fechayhora += '<li class="list-group-item p-0 border-0 h2"><i class="fe fe-clock"></i> '+ response[1]["hora"] +'</li>';

      $('#fechayhora').html(fechayhora);

    }else {
      console.log('la respuesta esta en 0');
    }
  }).fail(function(xhr, status, error) {
    console.log("ERROR:\n");
    console.log(xhr.responseText);
  }).always(function(response) {
    console.log("COMPLETE\n");
  });
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
