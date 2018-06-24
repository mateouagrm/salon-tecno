
function cambiar_fecha_grafica(){

    var anio_sel=$("#anio_sel").val();
    var mes_sel=$("#mes_sel").val();

    cargar_grafica_barras(anio_sel,mes_sel);
    cargar_grafica_lineas(anio_sel,mes_sel);
}

function cargar_grafica_barras(anio,mes){

var options={
	 chart: {
	 	    renderTo: 'div_grafica_barras',
            type: 'column'
        },
        title: {
            text: 'Numero de Registros de Usuarios en el Mes'
        },
        subtitle: {
            text: 'Materia: Tecnologia Web'
        },
        xAxis: {
            categories: [],
             title: {
                text: 'dias del mes'
            },
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'REGISTROS AL DIA'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'registros',
            data: []

        }]
}

$("#div_grafica_barras").html( $("#cargador_empresa").html() );

var url = "grafica_registros/"+anio+"/"+mes+"";


$.get(url,function(resul){
    console.log(resul);
var datos= jQuery.parseJSON(resul);
    console.log(datos);
var totaldias=datos.totaldias;
var registrosdia=datos.registrosdia;
var i=0;
	for(i=1;i<=totaldias;i++){
	options.series[0].data.push( registrosdia[i] );
	options.xAxis.categories.push(i);
	}

 //options.title.text="aqui e podria cambiar el titulo dinamicamente";
 chart = new Highcharts.Chart(options);

})


}

function cargar_grafica_lineas(anio,mes){

var options={
     chart: {
            renderTo: 'div_grafica_lineas',
           
        },
          title: {
            text: 'Numero de Registros de Usuarios en el Mes',
            x: -20 //center
        },
        subtitle: {
            text: 'Materia: Tecnologia Web',
            x: -20
        },
        xAxis: {
            categories: []
        },
        yAxis: {
            title: {
                text: 'REGISTROS POR DIA'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ' registros'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'registros',
            data: []
        }]
}

$("#div_grafica_lineas").html( $("#cargador_empresa").html() );
var url = "grafica_registros/"+anio+"/"+mes+"";
$.get(url,function(resul){
var datos= jQuery.parseJSON(resul);
var totaldias=datos.totaldias;
var registrosdia=datos.registrosdia;
var i=0;
    for(i=1;i<=totaldias;i++){
    
    options.series[0].data.push( registrosdia[i] );
    options.xAxis.categories.push(i);


    }
 //options.title.text="aqui e podria cambiar el titulo dinamicamente";
 chart = new Highcharts.Chart(options);
})

}




function cambiar_fecha_grafica_citas(){

    var anio_sel=$("#anio_sel").val();
    var mes_sel=$("#mes_sel").val();

    cargar_grafica_barras_citas(anio_sel,mes_sel);
    cargar_grafica_lineas_citas(anio_sel,mes_sel);
}

function cargar_grafica_barras_citas(anio,mes){

    var options={
        chart: {
            renderTo: 'div_grafica_barras',
            type: 'column'
        },
        title: {
            text: 'Numero de Registros de citas en el Mes'
        },
        subtitle: {
            text: 'Materia: Tecnologia Web'
        },
        xAxis: {
            categories: [],
            title: {
                text: 'dias del mes'
            },
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'REGISTROS AL DIA'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'registros',
            data: []

        }]
    }

    $("#div_grafica_barras").html( $("#cargador_empresa").html() );

    var url = "listado_graficas_citas/"+anio+"/"+mes+"";


    $.get(url,function(resul){
        var datos= jQuery.parseJSON(resul);
        var totaldias=datos.totaldias;
        var registrosdia=datos.registrosdia;
        var i=0;
        for(i=1;i<=totaldias;i++){

            options.series[0].data.push( registrosdia[i] );
            options.xAxis.categories.push(i);


        }


        //options.title.text="aqui e podria cambiar el titulo dinamicamente";
        chart = new Highcharts.Chart(options);

    })


}

function cargar_grafica_lineas_citas(anio,mes){

    var options={
        chart: {
            renderTo: 'div_grafica_lineas',

        },
        title: {
            text: 'Numero de Registros de citas en el Mes',
            x: -20 //center
        },
        subtitle: {
            text: 'Materia: Tecnologia Web',
            x: -20
        },
        xAxis: {
            categories: []
        },
        yAxis: {
            title: {
                text: 'REGISTROS POR DIA'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ' registros'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'registros',
            data: []
        }]
    }

    $("#div_grafica_lineas").html( $("#cargador_empresa").html() );
    var url = "listado_graficas_citas/"+anio+"/"+mes+"";
    $.get(url,function(resul){
        var datos= jQuery.parseJSON(resul);
        var totaldias=datos.totaldias;
        var registrosdia=datos.registrosdia;
        var i=0;
        for(i=1;i<=totaldias;i++){

            options.series[0].data.push( registrosdia[i] );
            options.xAxis.categories.push(i);

        }
        //options.title.text="aqui e podria cambiar el titulo dinamicamente";
        chart = new Highcharts.Chart(options);

    })

}




function cambiar_fecha_grafica_ventas(){

    var anio_sel=$("#anio_sel").val();
    var mes_sel=$("#mes_sel").val();

    cargar_grafica_barras_ventas(anio_sel,mes_sel);
    cargar_grafica_lineas_ventas(anio_sel,mes_sel);
}

function cargar_grafica_barras_ventas(anio,mes){

    var options={
        chart: {
            renderTo: 'div_grafica_barras',
            type: 'column'
        },
        title: {
            text: 'Numero de Registros de ventas en el Mes'
        },
        subtitle: {
            text: 'Materia: Tecnologia Web'
        },
        xAxis: {
            categories: [],
            title: {
                text: 'dias del mes'
            },
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'REGISTROS AL DIA'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'registros',
            data: []

        }]
    }

    $("#div_grafica_barras").html( $("#cargador_empresa").html() );

    var url = "listado_graficas_ventas/"+anio+"/"+mes+"";


    $.get(url,function(resul){
        var datos= jQuery.parseJSON(resul);
        var totaldias=datos.totaldias;
        var registrosdia=datos.registrosdia;
        var i=0;
        for(i=1;i<=totaldias;i++){

            options.series[0].data.push( registrosdia[i] );
            options.xAxis.categories.push(i);


        }


        //options.title.text="aqui e podria cambiar el titulo dinamicamente";
        chart = new Highcharts.Chart(options);

    })


}

function cargar_grafica_lineas_ventas(anio,mes){

    var options={
        chart: {
            renderTo: 'div_grafica_lineas',

        },
        title: {
            text: 'Numero de Registros de ventas en el Mes',
            x: -20 //center
        },
        subtitle: {
            text: 'Materia: Tecnologia Web',
            x: -20
        },
        xAxis: {
            categories: []
        },
        yAxis: {
            title: {
                text: 'REGISTROS POR DIA'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ' registros'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'registros',
            data: []
        }]
    }

    $("#div_grafica_lineas").html( $("#cargador_empresa").html() );
    var url = "listado_graficas_ventas/"+anio+"/"+mes+"";
    $.get(url,function(resul){
        var datos= jQuery.parseJSON(resul);
        var totaldias=datos.totaldias;
        var registrosdia=datos.registrosdia;
        var i=0;
        for(i=1;i<=totaldias;i++){

            options.series[0].data.push( registrosdia[i] );
            options.xAxis.categories.push(i);

        }
        //options.title.text="aqui e podria cambiar el titulo dinamicamente";
        chart = new Highcharts.Chart(options);

    })

}



