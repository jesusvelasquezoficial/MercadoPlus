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
tablaDatosOTC(5);
