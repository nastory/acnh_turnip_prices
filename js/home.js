$(document).ready(function() {
	getData();
});

$(window).resize(function() {
	console.log('resize');
	Plotly.Plots.resize('ts-this-week-plot');
	Plotly.Plots.resize('price-hist-chart');
});
