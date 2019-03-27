<!-- JAVASCRIPT
================================================== -->
<!-- Libs JS -->
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/chart.js/dist/Chart.min.js"></script>
<script src="assets/libs/highlightjs/highlight.pack.min.js"></script>
<script src="assets/libs/flatpickr/dist/flatpickr.min.js"></script>
<script src="assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
<script src="assets/libs/list.js/dist/list.min.js"></script>
<script src="assets/libs/quill/dist/quill.min.js"></script>
<script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="assets/libs/select2/dist/js/select2.min.js"></script>
<script src="assets/libs/chart.js/Chart.extension.min.js"></script>

<!-- Theme JS -->
<script src="assets/js/theme.min.js"></script>

<script type="text/javascript">
  // $('#myTab a').on('click', function (e) {
  //   e.preventDefault()
  //   $('#myTab li a').tab('show');
  // });

  $(document).ready(function() {
    fechayhora();

  });

  $('body').scrollspy(
    { target: '#principal' }
  );

  function fechayhora() {
    var datetime = new Date();
    var year = datetime.getFullYear();
    var mes = (datetime.getMonth()+1);
    if (mes < 9) {
      mes = "0"+mes;
    }
    var dia = datetime.getDate();

    var fecha = year + "-" + mes + "-" + dia;

    $('#fecha-DO').val(fecha);
    $('#fecha-OTC').val(fecha);

    // HORA
    /////////////////////////////////
    var hora = datetime.getHours();
    var min = datetime.getMinutes();
    var tip = "PM"

    if (hora > 12) {
      tip = "AM";
      hora = hora - 12;
      hora = "0"+hora;
    }

    var time = hora + ":" + min + " " + tip;

    $('#hora-DO').val(time);
    $('#hora-OTC').val(time);

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

      $(idPromedio).val(calculoPromedio.toFixed(2)).mask('#,###.##');

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

      $(idPromedio).val(calculoPromedio.toFixed(2)).mask('#,###.##', { reverse: true });

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

      $(idEuroDolar).val(euroDolar.toFixed(2)).mask('#,###.##');

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

      $(idPetroPAyC).val(valorPetroPAyC.toFixed(2)).mask('###,###.##');

    }else {
      petroPAyC.value = '';
    }
  }

</script>
