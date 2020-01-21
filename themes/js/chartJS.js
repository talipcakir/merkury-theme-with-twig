$(function () {
	var totalSales = 4530;

	var salesDoughnutChartDirect = new CanvasJS.Chart("sales-doughnut-chart-direct", {
		animationEnabled: true,
		backgroundColor: "transparent",
		title: {
			fontColor: "#5484ff",
			fontSize: 22,
			horizontalAlign: "center",
			text: "45%",
			verticalAlign: "center"
		},
		toolTip: {
			backgroundColor: "#ffffff",
			borderThickness: 0,
			cornerRadius: 0,
			fontColor: "#424242",
		},
		data: [
			{
				explodeOnClick: false,
				innerRadius: "75%",
				radius: "70%",
				startAngle: 260,
				type: "doughnut",
				dataPoints: [
					{ y: 55, color: "#dadee7", toolTipContent: null, },
					{ y: 45, color: "#5484ff", toolTipContent: "Direct Sales: $<span>" + CanvasJS.formatNumber(Math.round(45 * totalSales / 100), '#,###,###') + "</span>" }
				]
			}
		]
	});
	var salesDoughnutChartChannel = new CanvasJS.Chart("sales-doughnut-chart-channel", {
		animationEnabled: true,
		backgroundColor: "transparent",
		title: {
			fontColor: "#aa5fb9",
			fontSize: 22,
			horizontalAlign: "center",
			text: "20%",
			verticalAlign: "center"
		},
		toolTip: {
			backgroundColor: "#ffffff",
			borderThickness: 0,
			cornerRadius: 0,
			fontColor: "#424242"
		},
		data: [
			{
				explodeOnClick: false,
				innerRadius: "75%",
				radius: "70%",
				startAngle: 88,
				type: "doughnut",
				dataPoints: [
					{ y: 19, color: "#aa5fb9", toolTipContent: "Channel Sales: $<span>" + CanvasJS.formatNumber(Math.round(20 * totalSales / 100), '#,###,###') + "</span>" },
					{ y: 81, color: "#dadee7", toolTipContent: null }
				]
			}
		]
	});

	var salesDoughnutChartChannel2 = new CanvasJS.Chart("sales-doughnut-chart-channel-2", {
		animationEnabled: true,
		backgroundColor: "transparent",
		title: {
			fontColor: "#f83c7b",
			fontSize: 22,
			horizontalAlign: "center",
			text: "25%",
			verticalAlign: "center"
		},
		toolTip: {
			backgroundColor: "#ffffff",
			borderThickness: 0,
			cornerRadius: 0,
			fontColor: "#424242"
		},
		data: [
			{
				explodeOnClick: false,
				innerRadius: "75%",
				radius: "70%",
				startAngle: 88,
				type: "doughnut",
				dataPoints: [
					{ y: 25, color: "#f83c7b", toolTipContent: "Channel Sales: $<span>" + CanvasJS.formatNumber(Math.round(25 * totalSales / 100), '#,###,###') + "</span>" },
					{ y: 75, color: "#dadee7", toolTipContent: null }
				]
			}
		]
	});

	// CanvasJS spline chart
	var usersSplineChart = new CanvasJS.Chart("users-spline-chart", {
		animationEnabled: true,
		backgroundColor: "white",
		/*
		title: {
			text: "Active Users",
			fontColor: "#8492af",
			horizontalAlign: "left"
		},
		*/
		axisX: {
			labelFontColor: "transparent",
			lineColor: "transparent",
			tickColor: "transparent"
		},
		axisY: {
			gridThickness: 0,
			includeZero: false,
			labelFontColor: "gray",
			lineColor: "transparent",
			tickColor: "transparent"
		},
		toolTip: {
			borderThickness: 1,
			cornerRadius: 0,
			fontStyle: "normal"
		},
		data: [
			{
				color: "orange",
				lineThickness: 5,
				markerSize: 0,
				type: "spline",
				dataPoints: [
					{ x: new Date("1 Jan 2019"), y: 100 },
					{ x: new Date("1 Feb 2019"), y: 130 },
					{ x: new Date("1 Mar 2019"), y: 90 },
					{ x: new Date("1 Apr 2019"), y: 150 },
					{ x: new Date("1 May 2019"), y: 140 },
					{ x: new Date("1 Jun 2019"), y: 350 },
					{ x: new Date("1 Jul 2019"), y: 150 },
					{ x: new Date("1 Aug 2019"), y: 160 },
					{ x: new Date("1 Sep 2019"), y: 90 },
					{ x: new Date("1 Oct 2019"), y: 130 },
					{ x: new Date("1 Nov 2019"), y: 90 },
					{ x: new Date("1 Dec 2019"), y: 80 }
				]
			}
		]
	});
	usersSplineChart.render(),
		salesDoughnutChartDirect.render(),
		salesDoughnutChartChannel.render(),
		salesDoughnutChartChannel2.render();
});
$(document).ready(function () {
	$('[data-toggle="tooltip"]').tooltip();
});