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
mostrarDatosOTC(5);
