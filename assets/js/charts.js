	
	
	 $(document).ready(function () {
	 		
	 		$.ajax({
		        type: "POST",
		        url: "charts/get",
		        dataType: 'json',
		        data: {},
		        success: function(data){
		            var dataDef = { title: "Baptismal",
		                        xLabel: 'Year', 
		                        yLabel: 'Population (millions)',
		                        labelFont: '19pt Arial', 
		                        dataPointFont: '10pt Arial',
		                        renderTypes: [CanvasChart.renderType.lines, CanvasChart.renderType.points],
		                        dataPoints: [{ x: '1790', y: 3.9 }, 
		                                     { x: '1810', y: 100 }, 
		                                     { x: '1830', y: 12.8 }, 
		                                     { x: '1850', y: 23.1 },
		                                     { x: '1870', y: 36.5 },
		                                     { x: '1890', y: 62.9 }, 
		                                     { x: '1910', y: 92.2 },
		                                     { x: '1930', y: 123.2 },
		                                     { x: '1950', y: 151.3 }, 
		                                     { x: '1970', y: 203.2 },
		                                     { x: '1990', y: 248.7 }, 
		                                     { x: '2010', y: 20}]
		                       };
		        CanvasChart.render('canvas', dataDef);
			        }
		    });
            
     });