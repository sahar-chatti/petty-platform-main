(function($) {
    "use strict";

    $(".counter").counterUp({
        delay: 30,
        time: 3000
    });

    //     const wc = new PerfectScrollbar('.widget-chat');
    //     const wt = new PerfectScrollbar('.widget-todo');
    //   const wtm = new PerfectScrollbar(".widget-team");
    //     const wtl = new PerfectScrollbar('.widget-timeline');
    //     const wcm = new PerfectScrollbar('.widget-comments');
    var gdpData = {
        "us": 34.56,
        "in": 34.56,
        "gb": 34.56,
        "tr": 34.56,
        "ru": 34.56,
    }

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
                    "02:00",
                    "03:00",
                    "04:00",
                    "05:00",
                    "06:00",
                    "07:00",
                    "08:00"
                ],
                datasets: [{
                        label: "Active",
                        backgroundColor: "rgba(54, 149, 235, 1)",
                        borderColor: "rgba(54, 149, 235, 1)",
                        data: activityData[0].first,
                        borderWidth: 2,
                    },
                    {
                        label: "Inactive",
                        backgroundColor: 'rgba(54, 149, 235, 0.5)',
                        borderColor: "rgba(54, 149, 235, 0.5)",
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
                            color: "rgba(54, 149, 235,0.1)",
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

    /* var nk = document.getElementById("sold-product");
    // nk.height = 50
    new Chart(nk, {
        type: 'pie',
        data: {
            defaultFontFamily: 'Poppins',
            datasets: [{
                data: [45, 25, 20, 10],
                borderWidth: 0,
                backgroundColor: [
                    "rgba(85, 139, 47, .9)",
                    "rgba(85, 139, 47, .7)",
                    "rgba(85, 139, 47, .5)",
                    "rgba(85, 139, 47, .07)"
                ],
                hoverBackgroundColor: [
                    "rgba(85, 139, 47, .9)",
                    "rgba(85, 139, 47, .7)",
                    "rgba(85, 139, 47, .5)",
                    "rgba(85, 139, 47, .07)"
                ]

            }],
            labels: [
                "one",
                "two",
                "three",
                "four"
            ]
        },
        options: {
            responsive: true,
            legend: false,
            maintainAspectRatio: false
        }
    }); */

    var data = {
        labels: ["0", "1", "2", "3", "4", "5", "6", "0", "1", "2", "3", "4", "5", "6"],
        datasets: [{
            label: "My First dataset",
            backgroundColor: "rgba(54,149,235,1)",
            strokeColor: "rgba(54,149,235,1)",
            pointColor: "rgba(0,0,0,0)",
            pointStrokeColor: "rgba(0,0,0,0)",
            pointHighlightFill: "rgba(54,149,235,1)",
            pointHighlightStroke: "rgba(54,149,235,1)",
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
                        zeroLineColor: "#3695eb"
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



    ////////////
    function r(t, r) {
        return Math.floor(Math.random() * (r - t + 1) + t);
    }
    var interval = 2e3,
        variation = 5,
        c = r(5, 2e3);
    $("#counter").text(c),
        setInterval(function() {
            var t = r(-variation, variation);
            (c += t), $("#counter").text(c);
        }, interval);


//#chart_widget_9
if(jQuery('#chart_widget_9').length > 0 ){

    const chart_widget_9 = document.getElementById("chart_widget_9").getContext('2d');
    new Chart(chart_widget_9, {
        type: "line",
		height: 200,
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "January", "February", "March", "April"],
            datasets: [{
                label: "Sales Stats",
                backgroundColor: "#61b1f9",
                borderColor: '#3695eb',
                pointBackgroundColor: '#3695eb',
                pointBorderColor: '#3695eb',
                pointHoverBackgroundColor: '#3695eb',
                pointHoverBorderColor: '#3695eb',
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
	
	
})(jQuery);

/* const wt = new PerfectScrollbar('.widget-todo'); */
const wtl = new PerfectScrollbar('.widget-timeline');