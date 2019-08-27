//Grafica de cantidad
function Graficos() {
    let form = new FormData(document.getElementById('Grafico_can'))
    form.append("","")
    
    
    $.ajax({
        type: "POST",
        dataType: "html",
        url: "../main/produ.php",
        data: form,
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            
            var graficos = JSON.parse(response);
            var labels = [];
            var quantities = [];
            
            graficos.forEach(function(item) {
                labels.push(item.nombre);
                quantities.push(item.cantidad_producto );

                
            }, this);
            var cantidad = quantities.map(parseFloat);
            		

            $(function () { 
                var myChart = Highcharts.chart('container', {
                    chart: {
                        type: 'line'
                        
                    },
                    title: {
                        text: 'Cantidad de producto'
                    },
                    xAxis: {
                        categories: labels
                    },
                    yAxis: {
                        title: {
                            text: 'Productos agregados'
                        },
                    },
                    series: [{
                        name: 'Existencia de productos',
                        data:cantidad,
                        color: '#ffff00'
                    }]
                });
            });

        }
    })
}
//Grafica de mas comentados 
function Graficos_com() {
    let form = new FormData(document.getElementById('grafico_com'))
    form.append("","")
    
    
    $.ajax({
        type: "POST",
        dataType: "html",
        url: "../main/produ_comen.php",
        data: form,
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            
            var graficos = JSON.parse(response);
            var labels = [];
            var quantities = [];
            
            graficos.forEach(function(item) {
                labels.push(item.nombre);
                quantities.push(item.comen);

                
            }, this);
            var cantidad = quantities.map(parseFloat);
            		

            $(function () { 
                var myChart = Highcharts.chart('grafico_com', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Los 5 productos más comentados'
                    },
                    xAxis: {
                        categories: labels
                    },
                    yAxis: {
                        title: {
                            text: 'más comentados'
                        },
                    },
                    series: [{
                        name: 'Productos',
                        color: '#ff0000',
                        data:cantidad
                    }]
                });
            });

        }
    })
}
//Grafica de mas comentados 
function Graficos_en() {
    let form = new FormData(document.getElementById('grafico_en'))
    form.append("","")
    
    
    $.ajax({
        type: "POST",
        dataType: "html",
        url: "../main/entradas.php",
        data: form,
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            
            var graficos = JSON.parse(response);
            var labels = [];
            var quantities = [];
            
            graficos.forEach(function(item) {
                labels.push(item.dia);
                quantities.push(item.entradas);

                
            }, this);
            var cantidad = quantities.map(parseFloat);
            		

            $(function () { 
                var myChart = Highcharts.chart('grafico_en', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Entradas de usuarios por día'
                    },
                    xAxis: {
                        categories: labels
                    },
                    yAxis: {
                        title: {
                            text: 'numero de entradas'
                        },
                    },
                    series: [{
                        name: 'Entradas de usuarios por día',
                        color: '#ffff00',
                        data:cantidad
                    }]
                });
            });

        }
    })
}
//Grafica de mas comentados 
function Graficos_prove() {
    let form = new FormData(document.getElementById('grafico_prove'))
    form.append("","")
    
    
    $.ajax({
        type: "POST",
        dataType: "html",
        url: "../main/prove.php",
        data: form,
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            
            var graficos = JSON.parse(response);
            var labels = [];
            var quantities = [];
            
            graficos.forEach(function(item) {
                labels.push(item.apellido1_proveedor);
                quantities.push(item.produ);

                
            }, this);
            var cantidad = quantities.map(parseFloat);
            		

            $(function () { 
                var myChart = Highcharts.chart('grafico_prove', {
                    chart: {
                        type: 'bar'
                    },
                    title: {
                        text: 'Los 5 proveedor que proporcionan mas productos'
                    },
                    xAxis: {
                        categories: labels
                    },
                    yAxis: {
                        title: {
                            text: 'Productos asociados a esos proveedores'
                        },
                    },
                    series: [{
                        name: 'Proveedores',
                        color: '#ff0000',
                        data:cantidad
                    }]
                });
            });

        }
    })
}
//Grafica de mas comentados 
function Graficos_tipo() {
    let form = new FormData(document.getElementById('grafico_tipo'))
    form.append("","")
    
    
    $.ajax({
        type: "POST",
        dataType: "html",
        url: "../main/tipo.php",
        data: form,
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            
            var graficos = JSON.parse(response);
            var labels = [];
            var quantities = [];
            
            graficos.forEach(function(item) {
                labels.push(item.nombre_rubro);
                quantities.push(item.tipo);

                
            }, this);
            var cantidad = quantities.map(parseFloat);
            		

            $(function () { 
                var myChart = Highcharts.chart('grafico_tipo', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Las 3 categorias con mas productos'
                    },
                    xAxis: {
                        categories: labels
                    },
                    yAxis: {
                        title: {
                            text: 'Cantidad de productos'
                        },
                    },
                    series: [{
                        name: 'Productos',
                        color: '#ffff00',
                        data:cantidad
                    }]
                });
            });

        }
    })
}
    