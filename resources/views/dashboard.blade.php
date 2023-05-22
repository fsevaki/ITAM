@extends('layout')
@section('title','Overview')
@section('content')
 <div class="panel panel-default">
     <div class="panel-heading" id="panel-heading" > Overview </div>
     <div class="panel-body">
         <hr>
         <div style="width: 32%; display: inline-block;">
             <div id="DeviceCharts"></div>
         </div>
         <div style="width: 32%; display: inline-block;">
             <div id="SoftwareCharts"></div>
         </div> 
         <div style="width: 32ca%; display: inline-block;">
             <div id="DataCharts"></div>
         </div>  
     </div>
     <hr>
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

     <script src="{{ URL::asset('script/highcharts.js') }}"></script>
     
     <script>  
         Highcharts.chart('DeviceCharts', {
             chart: {
                 type: 'bar',
                 style: {
                         fontSize:'17px'
                    }
                },
             title: {
                    text: 'Workstation'
                },
             subtitle: {
                    text: 'Source: IT Asset'
                },
             xAxis: {
                    categories: {!! json_encode($Device->labels)!!}
                },
             yAxis: {
                    title: {
                        text: 'Number of Device'
                    }
                },
             legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle'
                },
             plotOptions: {
                    series: {
                        allowPointSelect: true
                    } 
                },
             series: [{
                    name: 'Device',
                    data: {!! json_encode($Device->dataset)!!}
                }],
             responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom',
                                fontsize: '12'
                            }
                        }
                    }]
                }
        });
     </script>

     <script>
         Highcharts.chart('SoftwareCharts', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie',
                    style: {
                        fontSize:'17px'      
                    }
                },
                title: {
                    text: 'Software'
                },  
                    subtitle: {
                        align: 'center',
                        text: 'Source: IT Asset'
                    },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {
                     allowPointSelect: true,
                     cursor: 'pointer',
                     dataLabels: {
                         enabled: true,
                         format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                        }
                    }
                },
                series: [{
                    name: 'Software',
                    colorByPoint: true,
                    data: {!! json_encode($Data)!!}
                }]
           });
     </script>

     <script>  
         Highcharts.chart('DataCharts', {
             chart: {
                 type: 'line',
                 style: {
                         fontSize:'17px'
                    }
                },
             title: {
                    text: 'Data'
                },
             subtitle: {
                    text: 'Source: IT Asset'
                },
             xAxis: {
                    categories: {!! json_encode($Device->labels)!!}
                },
             yAxis: {
                    title: {
                        text: 'Number of Data'
                    }
                },
             legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle'
                },
             plotOptions: {
                    series: {
                        allowPointSelect: true
                    } 
                },
             series: [{
                    name: 'Data',
                    data: {!! json_encode($Device->dataset)!!}
                }],
             responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom',
                                fontsize: '12'
                            }
                        }
                    }]
                }
        });
     </script>
 </div>
@endsection