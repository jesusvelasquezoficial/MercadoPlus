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
tablaDatosOficiales(3);
