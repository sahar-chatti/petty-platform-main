(function($) {
	
	//basic bar chart
	if(jQuery('#barChart_1').length > 0 ){
		const barChart_1 = document.getElementById("barChart_1").getContext('2d');
		
		barChart_1.height = 100;

		new Chart(barChart_1, {
			type: 'bar',
			data: {
				defaultFontFamily: 'Poppins',
				labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
				datasets: [
					{
						label: "My First dataset",
						data: [65, 59, 80, 81, 56, 55, 40],
						borderColor: 'rgba(54, 149, 235, 1)',
						borderWidth: "0",
						backgroundColor: 'rgba(54, 149, 235, 1)'
					}
				]
			},
			options: {
				legend: false, 
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}],
					xAxes: [{
						// Change here
						barPercentage: 0.5
					}]
				}
			}
		});
	}
	
	// Composite
	if(jQuery('#composite-bar').length > 0 ){
		$("#composite-bar").sparkline([73, 53, 50, 67, 3, 56, 19, 59, 37, 32, 40, 26, 71, 19, 4, 53, 55, 31, 37, 67, 10, 21], {
			type: "bar",
			height: "200",
			barWidth: "10",
			resize: !0,
			// barSpacing: "7",
			barColor: "rgb(54, 149, 235)", 
			width: '100%'
		});
	}		

	// Bar Chart
	if(jQuery('#spark-bar').length > 0 ){	
		$("#spark-bar").sparkline([33, 22, 68, 54, 8, 30, 74, 7, 36, 5, 41, 19, 43, 29, 38], {
			type: "bar",
			height: "200",
			barWidth: 6,
			barSpacing: 7,
			barColor: "rgb(54, 149, 235)"
		});
	}	
	if(jQuery('#sparkline8').length > 0 ){	
		$("#sparkline8").sparkline([79, 72, 29, 6, 52, 32, 73, 40, 14, 75, 77, 39, 9, 15, 10], {
			type: "line",
			width: "100%",
			height: "50",
			lineColor: "rgb(54, 149, 235)",
			fillColor: "rgba(54, 149, 235, .5)",
			minSpotColor: "rgb(54, 149, 235)",
			maxSpotColor: "rgb(54, 149, 235)",
			highlightLineColor: "rgb(54, 149, 235)",
			highlightSpotColor: "rgb(54, 149, 235)"
		});
	}
	if(jQuery('#sparkline9').length > 0 ){	
    $("#sparkline9").sparkline([27, 31, 35, 28, 45, 52, 24, 4, 50, 11, 54, 49, 72, 59, 75], {
        type: "line",
        width: "100%",
        height: "50",
        lineColor: "rgb(54, 149, 235)",
        fillColor: "rgba(54, 149, 235, .5)",
        minSpotColor: "#3695eb",
        maxSpotColor: "#3695eb",
        highlightLineColor: "rgb(54, 149, 235)",
        highlightSpotColor: "#3695eb"
    });
	}
	if(jQuery('#radar_chart').length > 0 ){
		//radar chart
		const radar_chart = document.getElementById("radar_chart").getContext('2d');

		const radar_chartgradientStroke1 = radar_chart.createLinearGradient(500, 0, 100, 0);
		radar_chartgradientStroke1.addColorStop(0, "rgba(54, 149, 235, .5)");
		radar_chartgradientStroke1.addColorStop(1, "rgba(54, 149, 235, .5)");

		const radar_chartgradientStroke2 = radar_chart.createLinearGradient(500, 0, 100, 0);
		radar_chartgradientStroke2.addColorStop(0, "rgba(54, 149, 235, .5");
		radar_chartgradientStroke2.addColorStop(1, "rgba(54, 149, 235, .5");

		// radar_chart.height = 100;
		new Chart(radar_chart, {
			type: 'radar',
			data: {
				defaultFontFamily: 'Poppins',
				labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
				datasets: [
					{
						label: "My First dataset",
						data: [65, 59, 66, 45, 56, 55, 40],
						borderColor: '#3695eb',
						borderWidth: "1",
						backgroundColor: radar_chartgradientStroke2
					},
					{
						label: "My Second dataset",
						data: [28, 12, 40, 19, 63, 27, 87],
						borderColor: '#3695eb',
						borderWidth: "1",
						backgroundColor: radar_chartgradientStroke1
					}
				]
			},
			options: {
				legend: false,
				maintainAspectRatio: false, 
				scale: {
					ticks: {
						beginAtZero: true
					}
				}
			}
		});
	}
	
		
})(jQuery);

/* const wt = new PerfectScrollbar('.widget-todo'); */
const wtl = new PerfectScrollbar('.widget-timeline');