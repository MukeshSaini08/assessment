var Hchart1=$('#chart1').val();
var Hchart2=$('#chart2').val();
var Hchart3=$('#chart3').val();
var Hchart4=$('#chart4').val();
var Hchart5=$('#chart5').val();

Highcharts.chart('Chart_1', {
    chart: {
        type: 'area',
        animation: true
    },
    title: {
        text: 'Chart title goes here',
        align: 'center'
    },
    subtitle: {
        text: '15 April - 21 April',
        align: 'center'
    },
    yAxis: {
        title: {
            useHTML: false,
            text: ''
        }
    },
    xAxis: {
        categories: ['15 April', '16 April', '17 April', '18 April', '19 April', '20 April', '21 April']
    },

    tooltip: {
        shared: true,
        headerFormat: '<span style="font-size:12px"><b>{point.key}</b></span><br>'
    },
    plotOptions: {
        series: {
            marker: {
                enabled: false,
                states: {
                    hover: {
                        enabled: true
                    }
                }
            }
        }
    },
    series: [{
        name: 'Point 01',
        data: [490, 650, 590, 350, 300, 450, 475]
    }, {
        name: 'Point 02',
        data: [250, 650, 500, 300, 250, 210, 400]

    }]
});


Highcharts.setOptions({
    lang: {
        decimalPoint: '.',
        thousandsSep: ',',
    }
});
// -----------------------------------------------------------------------------------------------------
// Create the chart
chart = new Highcharts.Chart({
    chart: {
        renderTo: 'chart_2',
        type: 'pie',
    },
    exporting: {
        enabled: false,
    },
    credits: {
        enabled: false,
    },
    title: {
        text: 'Chart title',
        align: 'center'
    },
    subtitle: {
        text: '76%',
        align: 'center',
        verticalAlign: 'middle',
    },
    plotOptions: {
        pie: {
            shadow: false,
            borderWidth: 1,
        },
    },

    tooltip: {
        //pointFormat: '${point.val:,.0f}',
        headerFormat: '',
        pointFormat: '<span style="color:{point.color}">\u25CF</span>  {point.name}: <b>${point.val:,.0f}</b><br/>',
    },
    series: [{
        name: 'Spend',
        data: [{
            name: "",
            y: 80,
            val: 700,
        }, {
            name: "",
            y: 20,
            val: 300,
        }],
        size: '77%',
        innerSize: '65%',
        showInLegend: true,
        colors: ['#5d6c80', '#8bc34a'],
        dataLabels: {
            enabled: false,
        }
    }]
});
// -------------------------------------------------------------------------------------
Highcharts.chart('chart_3', {
    chart: {
        type: 'areaspline'
    },
    title: {
        text: 'Chart title goes here',
        align: 'center'
    },
    subtitle: {
        text: '15 April - 21 April',
        align: 'center'
    },
    yAxis: {
        title: {
            useHTML: false,
            text: ''
        }
    },
    xAxis: {
        categories: ['M', 'T', 'W', 'T', 'F', 'S', 'S']
    },

    tooltip: {
        shared: true,
        headerFormat: '<span style="font-size:12px"><b>{point.key}</b></span><br>'
    },

    plotOptions: {
        series: {
            marker: {
                enabled: false,
                states: {
                    hover: {
                        enabled: true
                    }
                }
            }
        }
    },
    series: [{
        data: [490, 650, 590, 350, 300, 450, 475],
        showInLegend: false,
    }]
});
// --------------------------------------------------------------------------------------------

Highcharts.chart('chart_4', {
    chart: {
        type: 'spline'
    },
    title: {
        text: 'Chart title goes here',
        align: 'center'
    },
    subtitle: {
        text: '15 April - 21 April',
        align: 'center'
    },

    yAxis: {
        title: {
            useHTML: false,
            text: ''
        }
    },
    xAxis: {
        categories: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN']
    },

    plotOptions: {
        series: {
            marker: {
                enabled: false,
                states: {
                    hover: {
                        enabled: true
                    }
                }
            }
        }
    },
    series: [{
        data: [490, 650, 590, 350, 300, 450],
        showInLegend: false,
    }]
});
// ----------------------------------------------------------------------------------
Highcharts.chart('chart_5', {
    chart: {
        type: 'areaspline',
        animation: true
    },
    title: {
        text: 'Chart title goes here',
        align: 'center'
    },
    subtitle: {
        text: '15 April - 21 April',
        align: 'center'
    },
    yAxis: {
        title: {
            useHTML: false,
            text: ''
        }
    },
    xAxis: {
        categories: ['15 April', '16 April', '17 April', '18 April', '19 April', '20 April', '21 April']
    },

    tooltip: {
        shared: true,
        headerFormat: '<span style="font-size:12px"><b>{point.key}</b></span><br>'
    },
    plotOptions: {
        series: {
            marker: {
                enabled: false,
                states: {
                    hover: {
                        enabled: true
                    }
                }
            }
        }
    },
    series: [{
        name: 'Point 01',
        data: [490, 650, 590, 350, 300, 450, 475]
    }, {
        name: 'Point 02',
        data: [250, 650, 500, 300, 250, 210, 400]

    }]
});