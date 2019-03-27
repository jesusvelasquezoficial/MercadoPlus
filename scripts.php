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


  $('body').scrollspy(
    { target: '#principal' }
  );

  function promediar(precioCompra, precioVenta, promedio) {
    var valorCompra = precioCompra.value;
    var valorVenta = precioVenta.value;
    var idPromedio = "#"+promedio.id;

    if (valorCompra != "" && valorVenta != "") {
      var Compra = parseFloat(valorCompra.replace(",", ""));
      var Venta = parseFloat(valorVenta.replace(",", ""));

      var calculoPromedio = (Compra + Venta) / 2;

      console.log(Compra, Venta, calculoPromedio.toFixed(2), idPromedio);

      $(idPromedio).val(calculoPromedio.toFixed(2)).mask('#,###.00');

    }else{
      promedio.value = '';
    }

  }

  function valorEuroDolar(precioDolar, precioEuro,valorEuroDolar) {
    var dolar = precioDolar.value;
    var euro = precioEuro.value;
    var idEuroDolar = "#"+valorEuroDolar.id;

    if (dolar != "" && euro != "") {
      var d = parseFloat(dolar.replace(",", ""));
      var e = parseFloat(euro.replace(",", ""));

      var valorED = e / d;

      console.log(valorED.toFixed(2));

      $(idEuroDolar).val(valorED.toFixed(2)).mask('#,###.00');

    }else {
      valorEuroDolar.value = '';
    }


  }

</script>
