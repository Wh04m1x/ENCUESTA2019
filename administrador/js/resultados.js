
var c = new Array();

for (var x = 0; x < 100; x++) {

				c[x] = document.getElementsByClassName("tamaño")[x].value;

				if (c[x] == 1) {
			
					var valor1 = document.getElementsByClassName("valor1")[x].value;
					
				

					var titulo1 = document.getElementsByClassName("titulo1")[x].value;
			
				

					var oilCanvas = document.getElementsByClassName("oilChart")[x];

					Chart.defaults.global.defaultFontFamily = "Lato";
					Chart.defaults.global.defaultFontSize = 18;

					var oilData = {
					    labels: [
					        titulo1
					    ],
					    datasets: [
					        {
					            data: [valor1],
					            backgroundColor: [
					                "#567845"
					            ]
					        }]
					};

					var pieChart = new Chart(oilCanvas, {
					type: 'pie',
					data: oilData
					}); 
			    
				} else if (c[x] == 2) {

					var valor1 = document.getElementsByClassName("valor1")[x].value;
					var valor2 = document.getElementsByClassName("valor2")[x].value;
				

					var titulo1 = document.getElementsByClassName("titulo1")[x].value;
					var titulo2 = document.getElementsByClassName("titulo2")[x].value;
				

					var oilCanvas = document.getElementsByClassName("oilChart")[x];

					Chart.defaults.global.defaultFontFamily = "Lato";
					Chart.defaults.global.defaultFontSize = 18;

					var oilData = {
					    labels: [
					        titulo1,
					        titulo2
					    ],
					    datasets: [
					        {
					            data: [valor1, valor2],
					            backgroundColor: [
					                "#FF6384",
					                "#567845"
					            ]
					        }]
					};

					var pieChart = new Chart(oilCanvas, {
					type: 'pie',
					data: oilData
					}); 
				} else if (c[x] == 3) {

					var valor1 = document.getElementsByClassName("valor1")[x].value;
					var valor2 = document.getElementsByClassName("valor2")[x].value;
					var valor3 = document.getElementsByClassName("valor3")[x].value;

					var titulo1 = document.getElementsByClassName("titulo1")[x].value;
					var titulo2 = document.getElementsByClassName("titulo2")[x].value;
					var titulo3 = document.getElementsByClassName("titulo3")[x].value;

					var oilCanvas = document.getElementsByClassName("oilChart")[x];

					Chart.defaults.global.defaultFontFamily = "Lato";
					Chart.defaults.global.defaultFontSize = 18;

					var oilData = {
					    labels: [
					        titulo1,
					        titulo2,
					        titulo3
					    ],
					    datasets: [
					        {
					            data: [valor1, valor2, valor3],
					            backgroundColor: [
					                "#FF6384",
					                "#567845",
					                "#84FF63"
					            ]
					        }]
					};

					var pieChart = new Chart(oilCanvas, {
					type: 'pie',
					data: oilData
					}); 
				} else if (c[x] == 4) {

					var valor1 = document.getElementsByClassName("valor1")[x].value;
					var valor2 = document.getElementsByClassName("valor2")[x].value;
					var valor3 = document.getElementsByClassName("valor3")[x].value;
					var valor4 = document.getElementsByClassName("valor4")[x].value;
		
					var titulo1 = document.getElementsByClassName("titulo1")[x].value;
					var titulo2 = document.getElementsByClassName("titulo2")[x].value;
					var titulo3 = document.getElementsByClassName("titulo3")[x].value;
					var titulo4 = document.getElementsByClassName("titulo4")[x].value;
	
					

					var oilCanvas = document.getElementsByClassName("oilChart")[x];

					Chart.defaults.global.defaultFontFamily = "Lato";
					Chart.defaults.global.defaultFontSize = 18;

					var oilData = {
					    labels: [
					        titulo1,
					        titulo2,
					        titulo3,
					        titulo4
					    ],
					    datasets: [
					        {
					            data: [valor1, valor2, valor3, valor4],
					            backgroundColor: [
					                "#FF6384",
					                "#567845",
					                "#84FF63",
					                "purple"
					            ]
					        }]
					};

					var pieChart = new Chart(oilCanvas, {
					type: 'pie',
					data: oilData
					}); 

				} else if (c[x] == 5) {


					var valor1 = document.getElementsByClassName("valor1")[x].value;
					var valor2 = document.getElementsByClassName("valor2")[x].value;
					var valor3 = document.getElementsByClassName("valor3")[x].value;
					var valor4 = document.getElementsByClassName("valor4")[x].value;
					var valor5 = document.getElementsByClassName("valor5")[x].value;


					var titulo1 = document.getElementsByClassName("titulo1")[x].value;
					var titulo2 = document.getElementsByClassName("titulo2")[x].value;
					var titulo3 = document.getElementsByClassName("titulo3")[x].value;
					var titulo4 = document.getElementsByClassName("titulo4")[x].value;				
					var titulo5 = document.getElementsByClassName("titulo5")[x].value;
				
					var oilCanvas = document.getElementsByClassName("oilChart")[x];

					Chart.defaults.global.defaultFontFamily = "Lato";
					Chart.defaults.global.defaultFontSize = 18;

					var oilData = {
					    labels: [
					        titulo1,
					        titulo2,
					        titulo3,
					        titulo4,
					        titulo5
					    ],
					    datasets: [
					        {
					            data: [valor1, valor2, valor3, valor4, valor5],
					            backgroundColor: [
					                "#FF6384",
					                "#567845",
					                "#84FF63",
					                "purple",
					                "deepskyblue"
					            ]
					        }]
					};

					var pieChart = new Chart(oilCanvas, {
					type: 'pie',
					data: oilData
					}); 

				} else if (c[x] == 6) {


					var valor1 = document.getElementsByClassName("valor1")[x].value;
					var valor2 = document.getElementsByClassName("valor2")[x].value;
					var valor3 = document.getElementsByClassName("valor3")[x].value;
					var valor4 = document.getElementsByClassName("valor4")[x].value;
					var valor5 = document.getElementsByClassName("valor5")[x].value;
					var valor6 = document.getElementsByClassName("valor6")[x].value;

					var titulo1 = document.getElementsByClassName("titulo1")[x].value;
					var titulo2 = document.getElementsByClassName("titulo2")[x].value;
					var titulo3 = document.getElementsByClassName("titulo3")[x].value;
					var titulo4 = document.getElementsByClassName("titulo4")[x].value;				
					var titulo5 = document.getElementsByClassName("titulo5")[x].value;
					var titulo6 = document.getElementsByClassName("titulo6")[x].value;

					var oilCanvas = document.getElementsByClassName("oilChart")[x];

					Chart.defaults.global.defaultFontFamily = "Lato";
					Chart.defaults.global.defaultFontSize = 18;

					var oilData = {
					    labels: [
					        titulo1,
					        titulo2,
					        titulo3,
					        titulo4,
							titulo5,
							titulo6
					    ],
					    datasets: [
					        {
					            data: [valor1, valor2, valor3, valor4, valor5, valor6],
					            backgroundColor: [
					                "#FF6384",
					                "#567845",
					                "#84FF63",
					                "purple",
									"deepskyblue",
									"#FF6314"
					            ]
					        }]
					};

					var pieChart = new Chart(oilCanvas, {
					type: 'pie',
					data: oilData
					}); 

				} else if (c[x] == 7) {


					var valor1 = document.getElementsByClassName("valor1")[x].value;
					var valor2 = document.getElementsByClassName("valor2")[x].value;
					var valor3 = document.getElementsByClassName("valor3")[x].value;
					var valor4 = document.getElementsByClassName("valor4")[x].value;
					var valor5 = document.getElementsByClassName("valor5")[x].value;
					var valor6 = document.getElementsByClassName("valor6")[x].value;
					var valor7 = document.getElementsByClassName("valor7")[x].value;

					var titulo1 = document.getElementsByClassName("titulo1")[x].value;
					var titulo2 = document.getElementsByClassName("titulo2")[x].value;
					var titulo3 = document.getElementsByClassName("titulo3")[x].value;
					var titulo4 = document.getElementsByClassName("titulo4")[x].value;				
					var titulo5 = document.getElementsByClassName("titulo5")[x].value;
					var titulo6 = document.getElementsByClassName("titulo6")[x].value;
					var titulo7 = document.getElementsByClassName("titulo7")[x].value;

					var oilCanvas = document.getElementsByClassName("oilChart")[x];

					Chart.defaults.global.defaultFontFamily = "Lato";
					Chart.defaults.global.defaultFontSize = 18;

					var oilData = {
					    labels: [
					        titulo1,
					        titulo2,
					        titulo3,
					        titulo4,
							titulo5,
							titulo6,
							titulo7
					    ],
					    datasets: [
					        {
					            data: [valor1, valor2, valor3, valor4, valor5, valor6, valor7],
					            backgroundColor: [
					                "#FF6384",
					                "#567845",
					                "#84FF63",
					                "purple",
									"deepskyblue",
									"#FF6314",
									"#F33364"
					            ]
					        }]
					};

					var pieChart = new Chart(oilCanvas, {
					type: 'pie',
					data: oilData
					}); 

				}
			}