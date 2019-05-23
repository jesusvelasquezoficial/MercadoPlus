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

mostrarDatosOficiales(3);
