<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                type: 'line',
                marginRight: 130,
                marginBottom: 25,
                events: { load: requestData }
            },
            title: {
                text: 'Monthly Records',
                x: -20 //center
            },
            subtitle: {
                text: '',
                x: -20
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: 'Count'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                formatter: function() {
                        return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y +'';
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -10,
                y: 100,
                borderWidth: 0
            },
            series: [{
                name: 'Baptismal',
                //data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 30]
            }, {
                name: 'Confirmation',
                //data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
            }, {
                name: 'Marriage',
                //data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
            }, {
                name: 'Death and Burial',
                //data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
            }]
            
        });
        
    });
    
    function requestData() {
	    $.ajax({
		        type: "POST",
		        url: "charts/get",
		        dataType: 'json',
		        success: function(data){
		            chart.series[0].setData(data.one);
		            chart.series[1].setData(data.two);
		            chart.series[2].setData(data.three);
		            chart.series[3].setData(data.four);
		        }
		   });
	}
    
});
</script>
<script src="<?php echo base_url(); ?>assets/js/highchart/highcharts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/highchart/modules/exporting.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/js/highchart/themes/gray.js"></script>
-->
<br/>
<div id="container" style="min-width: 450px; height: 450px; margin: 0 auto"></div>
<br/> 

