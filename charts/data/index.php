<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Power Tracking Services</title>

	<!-- Bootstrap -->
	<link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="/vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- favicon icon -->
	<link rel="icon" href="/favicon.png" type="image/png">

	<!-- Custom Theme Style -->
	<link href="/build/css/custom.min.css" rel="stylesheet">
	<style>
		canvas {
			width: 100% !important;
			height: auto !important;
			-moz-user-select: none;
			-webkit-user-select: none;
			-ms-user-select: none;
		}
		.resize_chart {
			height: 50%;
		}
	</style>
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="/Home.php" class="site_title"><i class="fa fa-bolt"></i> <span>TrackMyPower</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile">
						<div class="profile_pic">
							<img src="/images/pardo.jpg" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2>Mauricio</h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="/Home.php">Home</a>
										</li>
									</ul>
								</li>
								<li><a><i class="fa fa-bar-chart-o"></i> Charts and Stats<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="/charts/data/">Data Charts</a>
										</li>
									</ul>
								</li>
								<li><a><i class="fa fa-download"></i> Export <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="/export/tables/">Tables</a>
										</li>
					                    <li><a href="/accexport/tables/">Vibration Analysis</a></li>

									</ul>
								</li>
							</ul>
						</div>
					</div>
					<!-- /sidebar menu -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<nav>

						<div class="nav toggle">
							<a id="menu_toggle"><i class="fa fa-bars"></i></a>
						</div>

						<ul class="nav navbar-nav navbar-right">
							<li class="">
								<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<img src="/images/pardo.jpg" alt="">Mauricio
									<span class=" fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu dropdown-usermenu pull-right">
									<li>
										<a href="javascript:;">
											<span>Settings</span>
										</a>
									</li>
									<li><a href="/"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
									</li>
								</ul>
							</li>

							<li role="presentation" class="dropdown">
								<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
									<i class="fa fa-envelope-o"></i>
								</a>
								<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Charts</h3>
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Voltage<small>last 2 days</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="#">Settings 1</a>
												</li>
												<li><a href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<div class="demo-container resize_chart" style="height:280px">
										<canvas id="lineChart"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Energy<small>monthly and cumulative</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="#">Settings 1</a>
												</li>
												<li><a href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<div class="demo-container resize_chart" style="height:280px">
										<canvas id="barChart"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="row">

						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Wind<small>last 3 days</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li onclick="didit()">Settings 1
												</li>
												<li><a href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<div class="demo-container resize_chart" style="height:280px">
										<canvas id="canvasRadar"></canvas>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>HSP<small>Daily</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="#">Settings 1</a>
												</li>
												<li><a href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<div class="demo-container resize_chart" style="height:280px">
										<canvas id="barChartSol"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>

								<div class="clearfix"></div>

					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Vibration Analysis<small>last data</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="#">Settings 1</a>
												</li>
												<li><a href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<div class="demo-container resize_chart" style="height:280px">
										<canvas id="vibChart"></canvas>
									</div>
								  <div class="row">				   
									<div class="col-sm-4">
									  <div class="radio">
										<label>
										  <input type="radio" class="flat" checked="checked" name="iCheck" id="tempo"> Acceleration vs Time
										</label>
									  </div>
									  </div>
									<div class="col-sm-4">
									  <div class="radio">
										<label>
										  <input type="radio" class="flat" name="iCheck" id="freq"> Distance vs Time
										</label>
									  </div>
								  </div>
									<div class="col-sm-4">
									  <div class="radio">
										<label>
										  <input type="radio" class="flat" name="iCheck" id="froq"> FFT
										</label>
									  </div>
									  </div>
								</div>
								</div>
							</div>
						</div>
					</div>
				
				</div>
			</div>
			<!-- /page content -->

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					© Copyright 2016, Power Tracking Services GmbH
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>
	</div>

	<!-- jQuery -->
	<script src="/vendors/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- FastClick -->
	<script src="/vendors/fastclick/lib/fastclick.js"></script>
	<!-- NProgress -->
	<script src="/vendors/nprogress/nprogress.js"></script>
	<!-- Chart.js -->
	<script src="/vendors/moment/min/moment.min.js"></script>
	<script src="/vendors/Chart.js/dist/Chart.min.js"></script>
	<script src="/vendors/Chart.js/dist/hammer.min.js"></script>
	<script src="/vendors/Chart.js/Chart.Zoom.js/Chart.Zoom.js"></script>
	<!-- Custom Theme Scripts -->
	<script src="/build/js/custom.min.js"></script>
	  <!-- iCheck -->
    <script src="/vendors/iCheck/icheck.min.js"></script>
      <!-- jsFFT -->
    <script src="/vendors/jsFFT/jsFFT.js"></script>

	<!-- Chart.js -->
	<script>
		$(document).ready(function() {
			energy_month = 0;
			first_time = true;
			$.post('/charts/data/mysql/exportTable.php', function(phpdata) {
				processJSON(phpdata);
			});
			radar_load("wind_speed");
			solar_load("solar_radiation");
			energy_load();
			acc_load();
			setInterval(function() {
				if (!first_time)
				{
					alert("Han pasado 10 minutos!");
				}
				first_time = false;
			}, 600000);

		});
		
		$('.flat').on('ifChecked', function () {
			acc_load();
		});
		

		function radar_load(variable) {
			$.ajax({
				url: "/mysql/radar.php",
				method: "POST",
				data: {
					variable: variable
				},
				cache: false,
				success: function(data) {
					dataaa=data;
					var sp=data.split("/");
					print_radar(sp[0],sp[1],sp[2],sp[3],sp[4],sp[5]);
				}
			});
		}

		function solar_load(variable) {
			$.ajax({
				url: "/charts/data/mysql/solar.php",
				method: "POST",
				data: {
					variable: variable
				},
				cache: false,
				success: function(data) {
					createChartSol(data);
				}
			});
		}


		function energy_load() {
			$.ajax({
				url: "/mysql/energyChart.php",
				method: "POST",
				cache: false,
				data: { origin: window.location.pathname},
				success: function(data) {
					energy_month = JSON.parse(data);
					createChart2();
				}
			});
		}

		function processJSON(phpdata) {
			eval(phpdata);
			var selected_ids = ["date_time", "voltage_med1"];
			array_object = JSON2Array(selected_ids);
			createChart(array_object);
		}

		var JSON2Array = function(ids_array) {
			var position;
			//keys: "headers" of the JSON Object e.g. "id", "date_time", ...
			var JSONkeys = Object.keys(JData[0]);
			var keys_array = [];
			//Getting positions in "keys" array where the id's are
			//Getting name of the checked keys (title of the columns)
			for (i = 0; i < ids_array.length; i++) {
				position = JSONkeys.indexOf(ids_array[i]);
				keys_array.push(JSONkeys[position]);
			}
			//Getting data set from the JSON Object
			var dataSet = [];
			for (i = 0; i < JData.length; i++) {
				var new_row = [];
				for (j = 0; j < keys_array.length; j++) {
					new_row.push(JData[i][keys_array[j]]);
				}
				dataSet.push(new_row);
			}
			//Getting the headers --> inputs of DataTable() function
			var headers = [];
			var c_title;
			for (i = 0; i < keys_array.length; i++) {
				c_title = $("#" + keys_array[i]).attr("value");
				headers.push({
					title: c_title
				});
			}
			return {
				headers: headers,
				dataSet: dataSet
			};
		}

		function getCol(matrix, col) {
			var column = [];
			for (var i = 0; i < matrix.length; i++) {
				if (col == 5) {
					column.push(parseFloat(matrix[i][col]));
				} else {
					column.push(matrix[i][col]);
				}
			}
			return column;
		}

		// Line chart
		function createChart(object) {
			var time = getCol(object.dataSet, 0);
			var y_data = getCol(object.dataSet, 1);
			var lineData = {
				labels: time,
				datasets: [{
					label: 'Voltage',
					backgroundColor: "rgba(38, 185, 154, 0.31)",
					borderColor: "rgba(38, 185, 154, 0.7)",
					pointBorderColor: "rgba(38, 185, 154, 0.7)",
					pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
					pointHoverBackgroundColor: "#fff",
					pointHoverBorderColor: "rgba(220,220,220,1)",
					pointBorderWidth: 1,
					pointRadius: 1,
					cubicInterpolationMode: 'default',
					data: y_data
				}]
			};
			var ctx = document.getElementById("lineChart");
			var lineChart = new Chart(ctx, {
				type: 'line',
				data: lineData,
				options: {
					scales: {
						xAxes: [{
							type: 'time',
							time: {
								unit: 'hour',
								displayFormats: {
									hour: 'HH:mm'
								},
								unitStepSize: 4,
								min: (moment().subtract(1, 'days').format("YYYY-MM-DD")).concat(" 00:00:00"),
								max: (moment().add(1, 'days').format("YYYY-MM-DD")).concat(" 00:00:00")
							},
							scaleLabel: {
								display: true,
								labelString: 'Time'
							}
						}],
						yAxes: [{
							scaleLabel: {
								display: true,
								labelString: 'Voltage [V]'
							}
						}]
					},
					pan: {
						enabled: true,
						mode: 'xy'
					},
					zoom: {
						enabled: true,
						mode: 'xy',
						limits: {
							max: 10,
							min: 0.5
						}
					},
					responsive: true,
					maintainAspectRatio: false,
					legend: {
						position: 'top',
						display: false
					}
				}
			});
		}
		function createChart2(){
			var barLabels = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
			var thisMonthData = [];
			barLabels.forEach(function(monthy) {
    		thisMonthData.push(energy_month[monthy][0]);
			});
			var ctx2 = document.getElementById("barChart").getContext('2d');
			var barChartData = {
				labels: barLabels,
				datasets: [{
					label: 'This month',
					backgroundColor: "#03586A",
					data: thisMonthData
				}]
			};
			var barChart = new Chart(ctx2, {
				type: 'bar',
				data: barChartData,
				options: {
					tooltips: {
						mode: 'label'
					},
					scales: {
						xAxes: [{
							stacked: true,
							scaleLabel: {
								display: true,
								labelString: 'Month'
							}
						}],
						yAxes: [{
							stacked: true,
							scaleLabel: {
								display: true,
								labelString: 'Energy [kWh]'
							}
      			}]
					},
					responsive: true,
					maintainAspectRatio: false,
					legend: {
						display: false
					}
				}
			});
		}

		function print_radar(dat1,dat2,dat3,fec1,fec2,fec3){
      var ctx = document.getElementById("canvasRadar");
      var data = {
        labels: ["North", "Northeast", "East", "Southeast", "South", "Southwest", "West", "Northwest"],
        datasets: [{
          label: fec1,
          backgroundColor: "rgba(3, 88, 106, 0.2)",
          borderColor: "rgba(3, 88, 106, 0.80)",
          pointBorderColor: "rgba(3, 88, 106, 0.80)",
          pointBackgroundColor: "rgba(3, 88, 106, 0.80)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(220,220,220,1)",
          data: JSON.parse("["+dat1+"]")
        },
        {
          label: fec2,
          backgroundColor: "rgba(38, 15, 154, 0.2)",
          borderColor: "rgba(38, 15, 154, 0.85)",
          pointColor: "rgba(38, 15, 154, 0.85)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(151,17,205,1)",
          data: JSON.parse("["+dat2+"]")
        },
        {
          label: fec3,
          backgroundColor: "rgba(38, 155, 154, 0.2)",
          borderColor: "rgba(38, 155, 154, 0.85)",
          pointColor: "rgba(38, 155, 154, 0.85)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(151,187,205,1)",
          data: JSON.parse("["+dat3+"]")
        }]
      };
      var canvasRadar = new Chart(ctx, {
        type: 'radar',
        data: data,
        option: {
          legend: {
            display: true
          }
        }
      });
    }

		function createChartSol(data){
			var sp=data.split("/");
			console.log(sp[1]);
			var barLabels = JSON.parse("["+sp[1]+"]")
			//var barLabels = ["M","t","w","t","f","s","s"];
			//var thisMonthData = [];
			//barLabels.forEach(function(monthy) {
			//thisMonthData.push(energy_month[monthy][0]);
			//});
			var ctx3 = document.getElementById("barChartSol").getContext('2d');
			var barChartData = {
				labels: barLabels,
				datasets: [{
					label: 'This day',
					backgroundColor: "#249FB4",
					data: JSON.parse("["+sp[0]+"]")
				}]
			};
			var barChartSol = new Chart(ctx3, {
				type: 'bar',
				data: barChartData,
				options: {
					tooltips: {
						mode: 'label'
					},
					scales: {
						xAxes: [{
							stacked: true,
							scaleLabel: {
								display: true,
								labelString: 'Days'
							}
						}],
						yAxes: [{
							stacked: true,
							scaleLabel: {
								display: true,
								labelString: 'HSP [kWh/m\xB2/d]'
							}
	  			}]
					},
					responsive: true,
					maintainAspectRatio: false,
					legend: {
						display: false
					}
				}
			});
		} 
		
	   function acc_load() {
		   acc_time = acctime();
			$.ajax({
				url: "/mysql/exportAccTable.php",
				method: "POST",
				cache: false,
				data: { origin: window.location.pathname},
				success: function(data) {
					eval(data);
					var JSONkeys = Object.keys(JData[0]);
					var dataSet = [];
			        for (i = 0; i < JData.length; i++) {
				    var new_row = [];
					for (j = 0; j < JSONkeys.length; j++) {
						new_row.push(JData[i][JSONkeys[j]]);
					}
					dataSet.push(new_row);
				    }
				    
					
					 if(document.getElementById('tempo').checked) {
						createaccChart(acc_time, dataSet);	
					}else if(document.getElementById('freq').checked) {
						createaccChartinc(acc_time, dataSet);
					}else if(document.getElementById('froq').checked) {
						createaccChartFtt(acc_time, dataSet);
					}
									
				}
			});
		}
		
		acctime = function(){
		   var timearray = [];
		   timearray[0] = 0; 
		   for (i = 1; i < 99; i++) {
			   var num = timearray[i-1]+0.01;
			   timearray[i] = parseFloat(num.toPrecision(4));
			}
			return timearray;
	    } 
	    
	    function createaccChart(time, dataset) {
			var xaxis = getCol(dataset, 0);
			var yaxis = getCol(dataset, 1);
			var zaxis = getCol(dataset, 2);
			var lineData = {
				labels: time,
				datasets: [{
					label: 'X',
					backgroundColor: "rgba(52, 240, 10, 0)",
					borderColor: "rgba(52, 240, 10, 0.69)",
					pointBorderColor: "rgba(52, 240, 10, 0.69)",
					pointBackgroundColor: "rgba(52, 240, 10, 0.69)",
					pointHoverBackgroundColor: "#fff",
					pointHoverBorderColor: "rgba(220,220,220,1)",
					pointBorderWidth: 1,
					pointRadius: 1,
					cubicInterpolationMode: 'default',
					data: xaxis }, {
					label: 'Y',
					backgroundColor: "rgba(52, 240, 10, 0)",
					borderColor: "rgba(77, 28, 155, 0.86)",
					pointBorderColor: "rgba(77, 28, 155, 0.86)",
					pointBackgroundColor: "rgba(77, 28, 155, 0.86)",
					pointHoverBackgroundColor: "#fff",
					pointHoverBorderColor: "rgba(220,220,220,1)",
					pointBorderWidth: 1,
					pointRadius: 1,
					cubicInterpolationMode: 'default',
					data: yaxis} ,{
					label: 'Z',
					backgroundColor: "rgba(52, 240, 10, 0)",
					borderColor: "rgba(219, 57, 57, 0.76)",
					pointBorderColor: "rgba(219, 57, 57, 0.76)",
					pointBackgroundColor: "rgba(219, 57, 57, 0.76)",
					pointHoverBackgroundColor: "#fff",
					pointHoverBorderColor: "rgba(220,220,220,1)",
					pointBorderWidth: 1,
					pointRadius: 1,
					cubicInterpolationMode: 'default',
					data: zaxis
				}]
			};
			var ctx = document.getElementById("vibChart");
			var lineChart = new Chart(ctx, {
				type: 'line',
				data: lineData,
				options: {
					 scales: {
						xAxes: [{
							ticks: {
								maxTicksLimit: 10
							},
						    scaleLabel: {
								display: true,
								labelString:'time (s)'
						   }
						}],
						yAxes: [{
						   scaleLabel: {
								display: true,
								labelString:'acceleration (g)'
						   }
						}]
					},
					pan: {
						enabled: true,
						mode: 'xy'
					},
					zoom: {
						enabled: true,
						mode: 'xy',
						limits: {
							max: 10,
							min: 0.5
						}
					},
					responsive: true,
					maintainAspectRatio: false,
					legend: {
						position: 'top',
						display: true
					}
				}
			});
		}
		
		
	    function createaccChartinc(time, dataset) {
			var xaxis = getCol(dataset, 0);
			var xdist = doubleInt(time, xaxis);
			for (i = 0; i < 99; i++) {
			   var num = xdist[i]*1000;
			   xdist[i] = parseFloat(num.toPrecision(4));

			}
			var yaxis = getCol(dataset, 1);
			var ydist = doubleInt(time, yaxis);
			for (i = 0; i < 99; i++) {
			   var num = ydist[i]*1000;
			   ydist[i] = parseFloat(num.toPrecision(4));

			}
			var zaxis = getCol(dataset, 2);
			var zdist = doubleInt(time, zaxis);
			for (i = 0; i < 99; i++) {
			   var num = zdist[i]*1000;
			   zdist[i] = parseFloat(num.toPrecision(4));

			}
			var lineData = {
				labels: time,
				datasets: [{
					label: 'X',
					backgroundColor: "rgba(52, 240, 10, 0)",
					borderColor: "rgba(52, 240, 10, 0.69)",
					pointBorderColor: "rgba(52, 240, 10, 0.69)",
					pointBackgroundColor: "rgba(52, 240, 10, 0.69)",
					pointHoverBackgroundColor: "#fff",
					pointHoverBorderColor: "rgba(220,220,220,1)",
					pointBorderWidth: 1,
					pointRadius: 1,
					cubicInterpolationMode: 'default',
					data: xdist }, {
					label: 'Y',
					backgroundColor: "rgba(52, 240, 10, 0)",
					borderColor: "rgba(77, 28, 155, 0.86)",
					pointBorderColor: "rgba(77, 28, 155, 0.86)",
					pointBackgroundColor: "rgba(77, 28, 155, 0.86)",
					pointHoverBackgroundColor: "#fff",
					pointHoverBorderColor: "rgba(220,220,220,1)",
					pointBorderWidth: 1,
					pointRadius: 1,
					cubicInterpolationMode: 'default',
					data: ydist}, {
					label: 'Z',
					backgroundColor: "rgba(52, 240, 10, 0)",
					borderColor: "rgba(219, 57, 57, 0.76)",
					pointBorderColor: "rgba(219, 57, 57, 0.76)",
					pointBackgroundColor: "rgba(219, 57, 57, 0.76)",
					pointHoverBackgroundColor: "#fff",
					pointHoverBorderColor: "rgba(220,220,220,1)",
					pointBorderWidth: 1,
					pointRadius: 1,
					cubicInterpolationMode: 'default',
					data: zdist
				}]
			};
			var ctx = document.getElementById("vibChart");
			var lineChart = new Chart(ctx, {
				type: 'line',
				data: lineData,
				options: {
					 scales: {
						xAxes: [{
							ticks: {
								maxTicksLimit: 10
							},
						   scaleLabel: {
								display: true,
								labelString:'time (s)'
						   }
						}],
						yAxes: [{
							ticks: {
								maxTicksLimit: 5
							},
						   scaleLabel: {
								display: true,
								labelString:'distance (mm)'
						   }
						}]

					},
					pan: {
						enabled: true,
						mode: 'xy'
					},
					zoom: {
						enabled: true,
						mode: 'xy',
						limits: {
							max: 10,
							min: 0.5
						}
					},
					responsive: true,
					maintainAspectRatio: false,
					legend: {
						position: 'top',
						display: true
					}
				}
			});
		}
		
		magdata = function(realdata, nn){
		   var realdatann = new Array(nn);
			for (d=0;d<nn;++d)
		    {
			   // label
			    realdatann[d] = realdata[d];
		    }
		    var cplxdata = jsFFT.makeComplex(realdatann,nn);
			var fftdata = jsFFT.FFT(cplxdata,nn,1);
			var magdata = jsFFT.Magnitude(fftdata,nn);
		
			return magdata;
		}
		
		function createaccChartFtt(time, dataset) {
			<!--FFT X-->
			var xaxis = getCol(dataset, 0);
			var xdist = doubleInt(time, xaxis);
			var magdatax = magdata(xdist,64);
			
			<!--FFT Y-->
			var yaxis = getCol(dataset, 1);
			var ydist = doubleInt(time, yaxis);
			var magdatay = magdata(ydist,64);
			
			<!--FFT Z-->
			var zaxis = getCol(dataset, 2);
			var zdist = doubleInt(time, zaxis);
			var magdataz = magdata(zdist,64);
			
			var label = new Array(64/2);
			for(d=0;d<64/2;++d)
		    {
			  if ((d+1)%4 == 0){
			   // label
				 var num = (50*(d+1))/32;
			     label[d] = Math.trunc(parseFloat(num)); 
			  }else {
				 label[d] = "";	
			  }
		    }
			
			var lineData = {
				labels: label,
				datasets: [{
					label: 'X',
					backgroundColor: "rgba(52, 240, 10, 0)",
					borderColor: "rgba(52, 240, 10, 0.69)",
					pointBorderColor: "rgba(52, 240, 10, 0.69)",
					pointBackgroundColor: "rgba(52, 240, 10, 0.69)",
					pointHoverBackgroundColor: "#fff",
					pointHoverBorderColor: "rgba(220,220,220,1)",
					pointBorderWidth: 1,
					pointRadius: 1,
					cubicInterpolationMode: 'default',
					data: magdatax }, {
					label: 'Y',
					backgroundColor: "rgba(52, 240, 10, 0)",
					borderColor: "rgba(77, 28, 155, 0.86)",
					pointBorderColor: "rgba(77, 28, 155, 0.86)",
					pointBackgroundColor: "rgba(77, 28, 155, 0.86)",
					pointHoverBackgroundColor: "#fff",
					pointHoverBorderColor: "rgba(220,220,220,1)",
					pointBorderWidth: 1,
					pointRadius: 1,
					cubicInterpolationMode: 'default',
					data: magdatay}, {
					label: 'Z',
					backgroundColor: "rgba(52, 240, 10, 0)",
					borderColor: "rgba(219, 57, 57, 0.76)",
					pointBorderColor: "rgba(219, 57, 57, 0.76)",
					pointBackgroundColor: "rgba(219, 57, 57, 0.76)",
					pointHoverBackgroundColor: "#fff",
					pointHoverBorderColor: "rgba(220,220,220,1)",
					pointBorderWidth: 1,
					pointRadius: 1,
					cubicInterpolationMode: 'default',
					data: magdataz
				}]
			};
			var ctx = document.getElementById("vibChart");
			var lineChart = new Chart(ctx, {
				type: 'line',
				data: lineData,
				options: {
					 scales: {
						xAxes: [{
						   scaleLabel: {
								display: true,
								labelString:'F (Hz)'
								
						   }
						}],
						yAxes: [{
							ticks: {
								maxTicksLimit: 5
							},
						   scaleLabel: {
								display: true,
								labelString:'Magnitude'
						   }
						}]

					},
					pan: {
						enabled: true,
						mode: 'xy'
					},
					zoom: {
						enabled: true,
						mode: 'xy',
						limits: {
							max: 10,
							min: 0.5
						}
					},
					responsive: true,
					maintainAspectRatio: false,
					legend: {
						position: 'top',
						display: true
					}
				}
			});
		}
		
		var doubleInt = function(tim, acc) {
			var deltast = new Array();
			var deltasacc = new Array();
			for (i = 0; i < 99; i++){
			   var num = acc[i]*9.80665;
			   acc[i] = parseFloat(num.toPrecision(4));
			}
		    for (i = 1; i < 99; i++) {
			   var num = tim[i] - tim[i-1];
			   deltast[i-1] = parseFloat(num.toPrecision(4));
			   var numa = acc[i] - acc[i-1];
			   deltasacc[i-1] = parseFloat(numa.toPrecision(4));

			}
			var deltasdis = new Array();
			for (i = 0; i < 98; i++) {
			   var num = deltasacc[i]*Math.pow(deltast[i], 2);;
			   deltasdis[i] = parseFloat(num.toPrecision(4));

			}
			
			var dist = new Array();
			dist[0] = 0;
			for (i = 1; i < 99; i++) {
				var num = dist[i-1] + deltasdis[i-1];
				dist[i] = parseFloat(num.toPrecision(4));
			}
			
			return dist;
			
		}
		
		
		
	</script>
	<!-- /Chart.js -->
	
</body>
</html>
