@extends('layouts.app')

@section('content')
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center" style="font-size: 40px;font-weight: bold;">
            Welcome Assessment
        </div>
        <div class="mt-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">

                <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <figure class="highcharts-figure">
                        <div id="Chart_1"></div>
                        <p class="highcharts-description">

                        </p>
                    </figure>
                </div>

                <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div id="chart_2" style="min-width: 300px; height: 300px; margin: 0 auto"></div>
                </div>

                <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div id="chart_3"></div>
                </div>
                <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div id="chart_4"></div>
                </div>
                <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div id="chart_5"></div>
                </div>



            </div>
        </div>

        <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
            <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                <div class="flex items-center gap-4">
                    <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                        Sponsor
                    </a>
                </div>
            </div>

            <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">

            </div>
        </div>
    </div>
</div>

@endsection

@section('page-script')
<script>
    // --------------------------------------chart 1-------------------------------------------
    Highcharts.chart('Chart_1', {
        chart: {
            type: 'area',
            animation: true
        },
        title: {
            text: 'Chart 1',
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
            color: '#EC6666',
            data: [<?= $chart_data['chart_1']['val1'] ?>]
        }, {
            name: 'Point 02',
            color: '#147AD6',
            data: [<?= $chart_data['chart_1']['val2'] ?>]

        }]
    });


    Highcharts.setOptions({
        lang: {
            decimalPoint: '.',
            thousandsSep: ',',
        }
    });
    // ------------------------------------------Chart 2-----------------------------------------------------------
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
            text: 'Chart 2',
            align: 'center'
        },
        subtitle: {
            text: '<?= $chart_data['chart_2']['subtitle'] ?>%',
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
                color: '#147AD6',
                y: <?= $chart_data['chart_2']['val1'][0] ?>,
                val: <?= $chart_data['chart_2']['val1'][1] ?>,
            }, {
                name: "",
                color: '#7388A95A',
                y: <?= $chart_data['chart_2']['val2'][0] ?>,
                val: <?= $chart_data['chart_2']['val2'][1] ?>,
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
    // ---------------------------------------CHART 3----------------------------------------------
    Highcharts.chart('chart_3', {
        chart: {
            type: 'areaspline'
        },
        title: {
            text: 'Chart 3',
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
            color:"#EC6666",
            data: [<?= $chart_data['chart_3']['val'] ?>],
            showInLegend: false,
        }]
    });
    // --------------------------------------------------------------------------------------------

    Highcharts.chart('chart_4', {
        chart: {
            type: 'spline'
        },
        title: {
            text: 'Chart 4',
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
            color:'#147AD6',
            data: [<?= $chart_data['chart_4']['val'] ?>],
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
            text: 'Chart 5',
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
            color: '#EC6666',
            data: [<?= $chart_data['chart_5']['val1'] ?>]
        }, {
            name: 'Point 02',
            color: '#147AD6',
            data: [<?= $chart_data['chart_5']['val2'] ?>]

        }]
    });


</script>
@endsection