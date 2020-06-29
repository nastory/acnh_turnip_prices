function tsPlot(tsData, div) {

	var data = [];

	for (let [user, vals] of Object.entries(tsData)) {
		var trace = {
		    x: vals['date'],
		    y: vals['price'],
		    type: 'scatter',
		    mode: 'lines+markers',
		    line: {shape: 'spline'},
		    name: user
		};

		data.push(trace);
	}

	layout = {
		margin: {
			t: 20,
			b: 50,
			l: 50,
			r: 25
		},
		legend: {
			x: 0,
			y: 1
		}

	};

	var config = {responsive: true};

	Plotly.newPlot(div, data, layout, config);

}

function histoPrice(histData) {

	var trace = {
		x: histData,
		type: 'histogram',
	};

	layout = {
		margin: {
			t: 0,
			b: 25,
			l: 25,
			r: 25
		}
	};

	var data = [trace];

	Plotly.newPlot('price-hist-chart', data, layout);

}
