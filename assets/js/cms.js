// (CMS) fecha y hora para datos OTC y oficiales
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
fechayhora();
// (CMS) Recibe 3 campos
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
