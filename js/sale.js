	var jan = $('div.hidden').data('jan');	var janp = $('div.hidden').data('janp');
	var feb = $('div.hidden').data('feb');	var febp = $('div.hidden').data('febp');
	var mar = $('div.hidden').data('mar');	var marp = $('div.hidden').data('marp');
	var apr = $('div.hidden').data('apr');	var aprp = $('div.hidden').data('aprp');
	var may = $('div.hidden').data('may');	var mayp = $('div.hidden').data('mayp');
	var jun = $('div.hidden').data('jun');	var junp = $('div.hidden').data('junp');
	var jul = $('div.hidden').data('jul');	var julp = $('div.hidden').data('julp');
	var aug = $('div.hidden').data('aug');	var augp = $('div.hidden').data('augp');
	var sep = $('div.hidden').data('sep');	var sepp = $('div.hidden').data('sepp');
	var oct = $('div.hidden').data('oct');	var octp = $('div.hidden').data('octp');
	var nov = $('div.hidden').data('nov');	var novp = $('div.hidden').data('novp');
	var dec = $('div.hidden').data('dec');	var decp = $('div.hidden').data('decp');
	
	var janv = $('div.hidden').data('janv');
	var febv = $('div.hidden').data('febv');
	var marv = $('div.hidden').data('marv');
	var aprv = $('div.hidden').data('aprv');
	var mayv = $('div.hidden').data('mayv');
	var junv = $('div.hidden').data('junv');
	var julv = $('div.hidden').data('julv');
	var augv = $('div.hidden').data('augv');
	var sepv = $('div.hidden').data('sepv');
	var octv = $('div.hidden').data('octv');
	var novv = $('div.hidden').data('novv');
	var decv = $('div.hidden').data('decv');
	var ctxL = document.getElementById('lineChart').getContext('2d');
	var myLineChart = new Chart(ctxL, {
		type: 'line',
		data: {
			labels: ["Январь","Февраль","Март","Апрель","Май","Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
			datasets: [
			{
				label: "2019",
				fillColor: "black",
				backgroundColor: "rgba(83, 214, 42, 0.3)",
				borderColor: "rgba(0, 0, 0, 0.1)",
				borderJoinStyle: 'miter',
				strokeColor: "red",
				pointColor: "green",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "yellow",
				data: [jan,feb,mar,apr,may,jun,jul,aug,sep,oct,nov,dec]
			},
			{
				label: "2018",
				fillColor: "blue",
				backgroundColor: "rgba(255, 13, 0, 0.3)",
				strokeColor: "red",
				pointColor: "green",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "yellow",
				data: [1243,3078,3502,6600,5523,4044,5012,7490,6700,3900,5600,7200]
			},
			]
		}
	})

	var ctxL2 = document.getElementById('lineChart2').getContext('2d');
	var myLineChart = new Chart(ctxL2, {
		type: 'line',
		data: {
			labels: ["Январь","Февраль","Март","Апрель","Май","Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
			datasets: [
			{
				label: "Процессоры",
				fillColor: "black",
				backgroundColor: "rgba(46, 22, 177, 0.3)",
				borderColor: "rgba(0, 0, 0, 0.1)",
				borderJoinStyle: 'miter',
				strokeColor: "red",
				pointColor: "green",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "yellow",
				data: [janp,febp,marp,aprp,mayp,junp,julp,augp,sepp,octp,novp,decp]
			},
			{
				label: "Видеокарты",
				fillColor: "blue",
				backgroundColor: "rgba(255, 211, 0, 0.3)",
				strokeColor: "red",
				pointColor: "green",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "yellow",
				data: [janv,febv,marv,aprv,mayv,junv,julv,augv,sepv,octv,novv,decv]
			},
			]
		}
	})
