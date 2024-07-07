//#chart_widget_1
(function($) {
    "use strict"
if(jQuery('#activity').length > 0 ){
	 /*======== 16. ANALYTICS - ACTIVITY CHART ========*/
    var activity = document.getElementById("activity");
    if (activity !== null) {
        var activityData = [{
                first: [0, 65, 52, 115, 98, 165, 125],
                second: [40, 100, 90, 150, 140, 200, 160]
            },
            {
                first: [0, 65, 77, 33, 49, 100, 100],
                second: [20, 85, 97, 53, 69, 120, 120]
            },
            {
                first: [0, 40, 77, 55, 33, 116, 50],
                second: [30, 70, 107, 85, 73, 146, 80, ]
            },
            {
                first: [0, 44, 22, 77, 33, 151, 99],
                second: [60, 32, 120, 55, 19, 134, 88]
            }
        ];

        activity.height = 100;

        var config = {
            type: "line",
            data: {
                labels: [
                    "4 Jan",
                    "5 Jan",
                    "6 Jan",
                    "7 Jan",
                    "8 Jan",
                    "9 Jan",
                    "10 Jan"
                ],
                datasets: [{
                        label: "Active",
                        backgroundColor: "rgba(21, 101, 192, 1)",
                        borderColor: "rgba(21, 101, 192, 1)",
                        data: activityData[0].first,
                        borderWidth: 2,
                    },
                    {
                        label: "Inactive",
                        backgroundColor: 'rgba(21, 101, 192, 0.61)',
                        borderColor: "rgba(21, 101, 192, 0.61)",
                        data: activityData[0].second,
                        
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            color: "rgba(89, 59, 219,0.1)",
                            drawBorder: true
                        },
                        ticks: {
                            fontColor: "#999",
                        },
                    }],
                    yAxes: [{
                        gridLines: {
                            display: false,
                            zeroLineColor: "transparent"
                        },
                        ticks: {
                            stepSize: 50,
                            fontColor: "#999",
                            fontFamily: "Nunito, sans-serif"
                        }
                    }]
                },
                tooltips: {
                    mode: "index",
                    intersect: false,
                    titleFontColor: "#888",
                    bodyFontColor: "#555",
                    titleFontSize: 12,
                    bodyFontSize: 15,
                    backgroundColor: "rgba(256,256,256,0.95)",
                    displayColors: true,
                    xPadding: 10,
                    yPadding: 7,
                    borderColor: "rgba(220, 220, 220, 0.9)",
                    borderWidth: 2,
                    caretSize: 6,
                    caretPadding: 5
                }
            }
        };



        var ctx = document.getElementById("activity").getContext("2d");
        var myLine = new Chart(ctx, config);

        var items = document.querySelectorAll("#user-activity .nav-tabs .nav-item");
        items.forEach(function(item, index) {
            item.addEventListener("click", function() {
                config.data.datasets[0].data = activityData[index].first;
                config.data.datasets[1].data = activityData[index].second;
                myLine.update();
            });
        });
    }
	
	
}
if(jQuery('#activeUser').length > 0 ){
	var data = {
        labels: ["0", "1", "2", "3", "4", "5", "6", "0", "1", "2", "3", "4", "5", "6"],
        datasets: [{
            label: "My First dataset",
            backgroundColor: "rgba(0,131,143,1)",
            strokeColor: "rgba(0,131,143,1)",
            pointColor: "rgba(0,0,0,0)",
            pointStrokeColor: "rgba(0,0,0,0)",
            pointHighlightFill: "rgba(0,131,143,1)",
            pointHighlightStroke: "rgba(0,131,143,1)",
            data: [65, 59, 80, 81, 56, 55, 40, 65, 59, 80, 81, 56, 55, 40]
        }]
    };

    var ctx = document.getElementById("activeUser").getContext("2d");
    var chart = new Chart(ctx, {
        type: "bar",
        data: data,
        options: {
            responsive: !0,
            maintainAspectRatio: false,
            legend: {
                display: !1
            },
            tooltips: {
                enabled: false
            },
            scales: {
                xAxes: [{
                    display: !1,
                    gridLines: {
                        display: !1
                    },
                    barPercentage: 0.9,
                    categoryPercentage: 1
                }],
                yAxes: [{
                    display: !1,
                    ticks: {
                        padding: 10,
                        stepSize: 10,
                        max: 100,
                        min: 0
                    },
                    gridLines: {
                        display: !0,
                        drawBorder: !1,
                        lineWidth: 1,
                        zeroLineColor: "#0277bd"
                    }
                }]
            }
        }
    });
	
	setInterval(function() {
        chart.config.data.datasets[0].data.push(
            Math.floor(10 + Math.random() * 80)
        );
        chart.config.data.datasets[0].data.shift();
        chart.update();
    }, 2000);
	
}
if(jQuery('#chart_widget_1').length > 0 ){
	
    const chart_widget_1 = document.getElementById("chart_widget_1").getContext('2d');
    //generate gradient
    // const gradientStroke = chart_widget_1.createLinearGradient(0, 0, 0, 250);
    // gradientStroke.addColorStop(0, "#00abc5");
    // gradientStroke.addColorStop(1, "#000080");

    // chart_widget_1.attr('height', '100');

    new Chart(chart_widget_1, {
        type: 'bar',
        data: {
            defaultFontFamily: 'Poppins',
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
            datasets: [
                {
                    label: "My First dataset",
                    data: [65, 59, 80, 81, 56, 55, 40],
                    borderColor: 'rgba(255, 255, 255, .8)',
                    borderWidth: "0",
                    backgroundColor: 'rgba(255, 255, 255, .8)', 
                    hoverBackgroundColor: 'rgba(255, 255, 255, .8)'
                }
            ]
        },
        options: {
            legend: false,
            responsive: true, 
            maintainAspectRatio: false,  
            scales: {
                yAxes: [{
                    display: false, 
                    ticks: {
                        beginAtZero: true, 
                        display: false, 
                        max: 100, 
                        min: 0, 
                        stepSize: 10
                    }, 
                    gridLines: {
                        display: false, 
                        drawBorder: false
                    }
                }],
                xAxes: [{
                    display: false, 
                    barPercentage: 0.5, 
                    gridLines: {
                        display: false, 
                        drawBorder: false
                    }, 
                    ticks: {
                        display: false
                    }
                }]
            }
        }
    });

}

//#chart_widget_2
if(jQuery('#chart_widget_2').length > 0 ){
	
    const chart_widget_2 = document.getElementById("chart_widget_2").getContext('2d');
    //generate gradient
    const chart_widget_2gradientStroke = chart_widget_2.createLinearGradient(0, 0, 0, 250);
    chart_widget_2gradientStroke.addColorStop(0, "#c00a27");
    chart_widget_2gradientStroke.addColorStop(1, "#ce1d76");

    // chart_widget_2.attr('height', '100');

    new Chart(chart_widget_2, {
        type: 'bar',
        data: {
            defaultFontFamily: 'Poppins',
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [
                {
                    label: "My First dataset",
                    data: [65, 59, 80, 81, 56, 55, 40, 88, 45, 95, 54, 76],
                    borderColor: chart_widget_2gradientStroke,
                    borderWidth: "0",
                    backgroundColor: chart_widget_2gradientStroke, 
                    hoverBackgroundColor: chart_widget_2gradientStroke
                }
            ]
        },
        options: {
            legend: false,
            responsive: true, 
            maintainAspectRatio: false,  
            scales: {
                yAxes: [{
                    display: false, 
                    ticks: {
                        beginAtZero: true, 
                        display: false, 
                        max: 100, 
                        min: 0, 
                        stepSize: 10
                    }, 
                    gridLines: {
                        display: false, 
                        drawBorder: false
                    }
                }],
                xAxes: [{
                    display: false, 
                    barPercentage: 0.1, 
                    gridLines: {
                        display: false, 
                        drawBorder: false
                    }, 
                    ticks: {
                        display: false
                    }
                }]
            }
        }
    });

}

//#chart_widget_3

	if(jQuery('#chart_widget_3').length > 0 ){
    const chart_widget_3 = document.getElementById("chart_widget_3").getContext('2d');
    
    // chart_widget_3.height = 100;

    let barChartData = {
        defaultFontFamily: 'Poppins',
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            label: 'Expense',
            backgroundColor: '#f91035',
            hoverBackgroundColor: '#f91035', 
            data: [
                '20',
                '14',
                '18',
                '25',
                '27',
                '22',
                '12', 
                '24', 
                '20', 
                '14', 
                '18', 
                '16'
            ]
        }, {
            label: 'Earning',
            backgroundColor: '#F1F3F7',
            hoverBackgroundColor: '#F1F3F7', 
            data: [
                '12',
                '18',
                '14',
                '7',
                '5',
                '10',
                '20', 
                '8', 
                '12', 
                '18', 
                '14', 
                '16'
            ]
        }]

    };

    new Chart(chart_widget_3, {
        type: 'bar',
        data: barChartData,
        options: {
            legend: {
                display: false
            }, 
            title: {
                display: false
            },
            tooltips: {
                mode: 'index',
                intersect: false
            },
            responsive: true,
            maintainAspectRatio: false, 
            scales: {
                xAxes: [{
                    display: false, 
                    stacked: true,
                    barPercentage: .2, 
                    ticks: {
                        display: false
                    }, 
                    gridLines: {
                        display: false, 
                        drawBorder: false
                    }
                }],
                yAxes: [{
                    display: false, 
                    stacked: true, 
                    gridLines: {
                        display: false, 
                        drawBorder: false
                    }, 
                    ticks: {
                        display: false
                    }
                }]
            }
        }
    });
	}



//#chart_widget_4

	if(jQuery('#chart_widget_4').length > 0 ){

    const chart_widget_4 = document.getElementById("chart_widget_4").getContext('2d');
    
    // chart_widget_4.height = 100;

    let barChartData2 = {
        defaultFontFamily: 'Poppins',
        labels: ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'forteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen', 'twenty'],
        datasets: [{
            label: 'Expense',
            backgroundColor: '#75B432',
            hoverBackgroundColor: '#75B432', 
            data: [
                '20',
                '14',
                '18',
                '25',
                '27',
                '22',
                '12', 
                '24', 
                '20', 
                '14', 
                '18', 
                '16', 
                '34', 
                '32', 
                '43', 
                '36', 
                '56', 
                '12', 
                '23', 
                '34'
            ]
        }, {
            label: 'Earning',
            backgroundColor: '#F1F3F7',
            hoverBackgroundColor: '#F1F3F7', 
            data: [
                '32',
                '58',
                '34',
                '37',
                '15',
                '41',
                '24', 
                '38', 
                '52', 
                '38', 
                '24', 
                '19', 
                '54', 
                '34', 
                '23', 
                '34', 
                '35', 
                '22', 
                '43', 
                '33'
            ]
        }]

    };

    new Chart(chart_widget_4, {
        type: 'bar',
        data: barChartData2,
        options: {
            legend: {
                display: false
            }, 
            title: {
                display: false
            },
            tooltips: {
                mode: 'index',
                intersect: false
            },
            responsive: true,
            maintainAspectRatio: false, 
            scales: {
                xAxes: [{
                    display: false, 
                    stacked: true,
                    barPercentage: 1, 
                    barThickness: 5, 
                    ticks: {
                        display: false
                    }, 
                    gridLines: {
                        display: false, 
                        drawBorder: false
                    }
                }],
                yAxes: [{
                    display: false, 
                    stacked: true, 
                    gridLines: {
                        display: false, 
                        drawBorder: false
                    }, 
                    ticks: {
                        display: false, 
                        max: 100, 
                        min: 0
                    }
                }]
            }
        }
    });

	}


//#chart_widget_5


if(jQuery('#chart_widget_5').length > 0 ){
		
    new Chartist.Line("#chart_widget_5", {
        labels: ["1", "2", "3", "4", "5", "6", "7", "8"],
        series: [
            [4, 5, 1.5, 6, 7, 5.5, 5.8, 4.6]
        ]
    }, {
        low: 0,
        showArea: 1,
        showPoint: !0,
        showLine: !0,
        fullWidth: !0,
        lineSmooth: !1,
        chartPadding: {
            top: 4,
            right: 0,
            bottom: 0,
            left: 0
        },
        axisX: {
            showLabel: !1,
            showGrid: !1,
            offset: 0
        },
        axisY: {
            showLabel: !1,
            showGrid: !1,
            offset: 0
        }
    });
}



//#chart_widget_6


if(jQuery('#chart_widget_6').length > 0 ){
	
    new Chartist.Line("#chart_widget_6", {
        labels: ["1", "2", "3", "4", "5", "6", "7", "8"],
        series: [
            [4, 5, 3.5, 5, 4, 5.5, 3.8, 4.6]
        ]
    }, {
        low: 0,
        showArea: 1,
        showPoint: !0,
        showLine: !0,
        fullWidth: !0,
        lineSmooth: !1,
        chartPadding: {
            top: 4,
            right: 0,
            bottom: 0,
            left: 0
        },
        axisX: {
            showLabel: !1,
            showGrid: !1,
            offset: 0
        },
        axisY: {
            showLabel: !1,
            showGrid: !1,
            offset: 0
        }
    });
}



//#chart_widget_7

	if(jQuery('#chart_widget_7').length > 0 ){

    const chart_widget_7 = document.getElementById("chart_widget_7").getContext('2d');
    //generate gradient
    const chart_widget_7gradientStroke = chart_widget_7.createLinearGradient(0, 0, 0, 250);
    chart_widget_7gradientStroke.addColorStop(0, "#c00a27");
    chart_widget_7gradientStroke.addColorStop(1, "#000080");

    // chart_widget_7.attr('height', '100');

    new Chart(chart_widget_7, {
        type: 'bar',
        data: {
            defaultFontFamily: 'Poppins',
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [
                {
                    label: "My First dataset",
                    data: [65, 59, 80, 81, 56, 55, 40, 88, 45, 95, 54, 76],
                    borderColor: chart_widget_7gradientStroke,
                    borderWidth: "0",
                    backgroundColor: chart_widget_7gradientStroke, 
                    hoverBackgroundColor: chart_widget_7gradientStroke
                }
            ]
        },
        options: {
            legend: false,
            responsive: true, 
            maintainAspectRatio: false,  
            scales: {
                yAxes: [{
                    display: false, 
                    ticks: {
                        beginAtZero: true, 
                        display: false, 
                        max: 100, 
                        min: 0, 
                        stepSize: 10
                    }, 
                    gridLines: {
                        display: false, 
                        drawBorder: false
                    }
                }],
                xAxes: [{
                    display: false, 
                    barPercentage: 0.6, 
                    gridLines: {
                        display: false, 
                        drawBorder: false
                    }, 
                    ticks: {
                        display: false
                    }
                }]
            }
        }
    });

	}



//#chart_widget_8

if(jQuery('#chart_widget_8').length > 0 ){
	
    new Chartist.Line("#chart_widget_8", {
        labels: ["1", "2", "3", "4", "5", "6", "7", "8"],
        series: [
            [4, 5, 1.5, 6, 7, 5.5, 5.8, 4.6]
        ]
    }, {
        low: 0,
        showArea: !1,
        showPoint: !0,
        showLine: !0,
        fullWidth: !0,
        lineSmooth: !1,
        chartPadding: {
            top: 4,
            right: 0,
            bottom: 0,
            left: 0
        },
        axisX: {
            showLabel: !1,
            showGrid: !1,
            offset: 0
        },
        axisY: {
            showLabel: !1,
            showGrid: !1,
            offset: 0
        }
    });

}


//#chart_widget_9

	if(jQuery('#chart_widget_9').length > 0 ){

    const chart_widget_9 = document.getElementById("chart_widget_9").getContext('2d');

    new Chart(chart_widget_9, {
        type: "line",
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "January", "February", "March", "April"],
            datasets: [{
                label: "Sales Stats",
                backgroundColor: "#d2f5f9",
                borderColor: '#00abc5',
                pointBackgroundColor: '#00abc5',
                pointBorderColor: '#00abc5',
                pointHoverBackgroundColor: '#00abc5',
                pointHoverBorderColor: '#00abc5',
                data: [20, 10, 18, 15, 32, 18, 15, 22, 8, 6, 12, 13, 10, 18, 14, 24, 16, 12, 19, 21, 16, 14, 24, 21, 13, 15, 27, 29, 21, 11, 14, 19, 21, 17]
            }]
        },
        options: {
            title: {
                display: !1
            },
            tooltips: {
                intersect: !1,
                mode: "nearest",
                xPadding: 10,
                yPadding: 10,
                caretPadding: 10
            },
            legend: {
                display: !1
            },
            responsive: !0,
            maintainAspectRatio: !1,
            hover: {
                mode: "index"
            },
            scales: {
                xAxes: [{
                    display: !1,
                    gridLines: !1,
                    scaleLabel: {
                        display: !0,
                        labelString: "Month"
                    }
                }],
                yAxes: [{
                    display: !1,
                    gridLines: !1,
                    scaleLabel: {
                        display: !0,
                        labelString: "Value"
                    },
                    ticks: {
                        beginAtZero: !0
                    }
                }]
            },
            elements: {
                line: {
                    tension: .15
                },
                point: {
                    radius: 2,
                    borderWidth: 1
                }
            },
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 5,
                    bottom: 0
                }
            }
        }
    });

	}



//#chart_widget_10


	if(jQuery('#chart_widget_10').length > 0 ){

    const chart_widget_10 = document.getElementById("chart_widget_10").getContext('2d');

    new Chart(chart_widget_10, {
        type: "line",
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            datasets: [{
                label: "Sales Stats",
                backgroundColor: "#75B432",
                borderColor: '#75B432',
                pointBackgroundColor: '#75B432',
                pointBorderColor: '#75B432',
                pointHoverBackgroundColor: '#75B432',
                pointHoverBorderColor: '#75B432',
                borderWidth: 0, 
                data: [20, 10, 18, 10, 32, 15, 15, 22, 18, 6, 12, 13]
            }]
        },
        options: {
            title: {
                display: !1
            },
            tooltips: {
                intersect: !1,
                mode: "nearest",
                xPadding: 10,
                yPadding: 10,
                caretPadding: 10
            },
            legend: {
                display: !1
            },
            responsive: !0,
            maintainAspectRatio: !1,
            hover: {
                mode: "index"
            },
            scales: {
                xAxes: [{
                    display: !1,
                    gridLines: !1,
                    scaleLabel: {
                        display: !0,
                        labelString: "Month"
                    }
                }],
                yAxes: [{
                    display: !1,
                    gridLines: !1,
                    scaleLabel: {
                        display: !0,
                        labelString: "Value"
                    },
                    ticks: {
                        beginAtZero: !0
                    }
                }]
            },
            elements: {
                line: {
                    tension: .7
                },
                point: {
                    radius: 0,
                    borderWidth: 0
                }
            },
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 5,
                    bottom: 0
                }
            }
        }
    });

	}



//#chart_widget_11

	if(jQuery('#chart_widget_11').length > 0 ){
	
    const chart_widget_11 = document.getElementById("chart_widget_11").getContext('2d');

    new Chart(chart_widget_11, {
        type: "line",
        data: {
            labels: ["January", "February", "March", "April", "May", "June"],
            datasets: [{
                label: "Sales Stats",
                backgroundColor: "rgba(192, 10, 39, .5)",
                borderColor: '#c00a27',
                pointBackgroundColor: '#c00a27',
                pointBorderColor: '#c00a27',
                pointHoverBackgroundColor: '#c00a27',
                pointHoverBorderColor: '#c00a27',
                data: [0, 18, 14, 24, 16, 30]
            }]
        },
        options: {
            title: {
                display: !1
            },
            tooltips: {
                intersect: !1,
                mode: "nearest",
                xPadding: 5,
                yPadding: 5,
                caretPadding: 5
            },
            legend: {
                display: !1
            },
            responsive: !0,
            maintainAspectRatio: !1,
            hover: {
                mode: "index"
            },
            scales: {
                xAxes: [{
                    display: !1,
                    gridLines: !1,
                    scaleLabel: {
                        display: !0,
                        labelString: "Month"
                    }, 
                    ticks: {
                        max: 30, 
                        min: 0
                    }
                }],
                yAxes: [{
                    display: !1,
                    gridLines: !1,
                    scaleLabel: {
                        display: !0,
                        labelString: "Value"
                    },
                    ticks: {
                        beginAtZero: !0
                    }
                }]
            },
            elements: {
                line: {
                    tension: .15
                },
                point: {
                    radius: 2,
                    borderWidth: 1
                }
            },
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            }
        }
    });

	}

//#chart_widget_14

	if(jQuery('#chart_widget_14').length > 0 ){

    const chart_widget_14 = document.getElementById("chart_widget_14");
    
    chart_widget_14.height = 200;

    new Chart(chart_widget_14, {
        type: 'line',
        data: {
            defaultFontFamily: 'Poppins',
            labels: ["Jan", "Febr", "Mar", "Apr", "May", "Jun", "Jul"],
            datasets: [
                {
                    label: "My First dataset",
                    data: [55, 30, 90, 41, 86, 45, 80],
                    borderColor: '#00abc5',
                    borderWidth: "2",
                    backgroundColor: 'transparent',  
                    pointBackgroundColor: '#00abc5', 
                    pointRadius: 0
                }
            ]
        },
        options: {
            legend: false, 
            responsive: true, 
            maintainAspectRatio: false, 
            scales: {
                yAxes: [{
                    display: false, 
                    ticks: {
                        beginAtZero: true, 
                        max: 100, 
                        min: 0, 
                        stepSize: 20, 
                        padding: 0, 
                        display: false, 
                    }, 
                    gridLines: {
                        drawBorder: false, 
                        display: false
                    }
                }],
                xAxes: [{
                    display: false, 
                    ticks: {
                        padding: 0, 
                        display: false
                    }, 
                    gridLines: {
                        display: false, 
                        drawBorder: false
                    }
                }]
            }
        }
    });


	}

//#chart_widget_15

	if(jQuery('#chart_widget_15').length > 0 ){

    const chart_widget_15 = document.getElementById("chart_widget_15");
    
    chart_widget_15.height = 200;

    new Chart(chart_widget_15, {
        type: 'line',
        data: {
            defaultFontFamily: 'Poppins',
            labels: ["Jan", "Febr", "Mar", "Apr", "May", "Jun", "Jul"],
            datasets: [
                {
                    label: "My First dataset",
                    data: [25, 60, 30, 71, 26, 85, 50],
                    borderColor: '#75B432',
                    borderWidth: "2",
                    backgroundColor: 'transparent',  
                    pointBackgroundColor: '#75B432', 
                    pointRadius: 0
                }
            ]
        },
        options: {
            legend: false, 
            responsive: true, 
            maintainAspectRatio: false, 
            scales: {
                yAxes: [{
                    display: false, 
                    ticks: {
                        beginAtZero: true, 
                        max: 100, 
                        min: 0, 
                        stepSize: 20, 
                        padding: 0, 
                        display: false, 
                    }, 
                    gridLines: {
                        drawBorder: false, 
                        display: false
                    }
                }],
                xAxes: [{
                    display: false, 
                    ticks: {
                        padding: 0, 
                        display: false
                    }, 
                    gridLines: {
                        display: false, 
                        drawBorder: false
                    }
                }]
            }
        }
    });

	}


//#chart_widget_16

if(jQuery('#chart_widget_16').length > 0 ){

    const chart_widget_16 = document.getElementById("chart_widget_16");
    
    chart_widget_16.height = 345;

    new Chart(chart_widget_16, {
        type: 'line',
        data: {
            defaultFontFamily: 'Poppins',
            labels: ["Jan", "Febr", "Mar", "Apr", "May", "Jun", "Jul"],
            datasets: [
                {
                    label: "My First dataset",
                    data: [25, 60, 30, 71, 26, 85, 50],
                    borderColor: 'rgba(52, 191, 163, 1)',
                    borderWidth: "2",
                    backgroundColor: 'rgba(52, 191, 163, 1)',  
                    pointBackgroundColor: 'rgba(52, 191, 163, 1)', 
                    pointRadius: 0
                }
            ]
        },
        options: {
            legend: false, 
            responsive: true, 
            maintainAspectRatio: false,
            tooltips: {
                intersect: !1,
                mode: "nearest",
                xPadding: 10,
                yPadding: 10,
                caretPadding: 10
            }, 
            scales: {
                yAxes: [{
                    display: false, 
                    ticks: {
                        beginAtZero: true, 
                        max: 100, 
                        min: 0, 
                        stepSize: 20, 
                        padding: 0, 
                        display: false, 
                    }, 
                    gridLines: {
                        drawBorder: false, 
                        display: false
                    }
                }],
                xAxes: [{
                    display: false, 
                    ticks: {
                        padding: 0, 
                        display: false, 
                        beginAtZero: true
                    }, 
                    gridLines: {
                        display: false, 
                        drawBorder: false
                    }
                }]
            }
        }
    });

		}


//#chart_widget_17
if(jQuery('#chart_widget_17').length > 0 ){

    let data = [];
    const totalPoints = 50;

	function getRandomData() {
		if (data.length > 0)
			data = data.slice(1);
		while (data.length < totalPoints) {
			var prev = data.length > 0 ? data[data.length - 1] : 50,
				y = prev + Math.random() * 10 - 5;
			if (y < 0) {
				y = 0;
			} else if (y > 100) {
				y = 100;
			}
			data.push(y);
		}
		const res = [];
		for (let i = 0; i < data.length; ++i) {
			res.push([i, data[i]])
		}
		return res;
	}

	// Set up the control widget
	const updateInterval = 1000;

		if(jQuery('#chart_widget_17').length > 0 ){
	
	const chart = $.plot('#chart_widget_17', [getRandomData()], {
		colors: ['#00abc5'],
		series: {
			lines: {
				show: true,
				lineWidth: 0,
				fill: 0.9
			},
			shadowSize: 0	// Drawing is faster without shadows
		},
		grid: {
			borderColor: 'transparent',
			borderWidth: 0,
            labelMargin: 0
		},
		xaxis: {
			color: 'transparent',
			font: {
				size: 10,
				color: '#fff'
            }
		},
		yaxis: {
			min: 0,
			max: 100,
			color: 'transparent',
			font: {
				size: 10,
				color: '#fff'
            }
		}
	});

		function update_chart() {
		chart.setData([getRandomData()]);
		chart.draw();
		setTimeout(update_chart, updateInterval);
		}
    
		update_chart();
		
	}
	
	
}

})(jQuery);

