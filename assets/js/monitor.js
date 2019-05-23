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
            }]
          },
        options: {
          response: true
        }
    });

  }).fail(function(xhr,status,error) {
      console.log("ERROR");
  }).always(function(response) {
      console.log("COMPLETE");
  });


}

chart1();

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
      console.log("ERROR");
  }).always(function(response) {
      console.log("COMPLETE");
  });


}

chart2();

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
          }]
        },
        options: {
          response: true
        }
    });

  }).fail(function(xhr,status,error) {
      console.log("ERROR");
  }).always(function(response) {
      console.log("COMPLETE");
  });


}

chart3();

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
          }]
        },
        options: {
          response: true
        }
    });

  }).fail(function(xhr,status,error) {
      console.log("ERROR");
  }).always(function(response) {
      console.log("COMPLETE");
  });


}

chart4();

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
          }]
        },
        options: {
          response: true
        }
    });

  }).fail(function(xhr,status,error) {
      console.log("ERROR");
  }).always(function(response) {
      console.log("COMPLETE");
  });
}

chart5();
