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
    <!-- bootstrap-progressbar -->
    <link href="/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- Weather Incons -->
    <link href="/vendors/weather-icons/css/weather-icons.min.css" rel="stylesheet">
    <!-- favicon icon -->
    <link rel="icon" href="/favicon.png" type="image/png">

    <!-- Custom Theme Style -->
    <link href="/build/css/custom.min.css" rel="stylesheet">

    <!-- Switchery -->
    <link href="vendors/switchery/dist/switchery.min.css" rel="stylesheet">


    <style>
      .iframe-container{
        position: relative;
        width: 100%;
        padding-bottom: 40%; /* Ratio 16:9 ( 100%/16*9 = 56.25% ) */
      }
      .iframe-container > *{
        display: block;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
      }
      .iframe-container{
        margin-bottom: 25px;
        background: #eee;
      }
      .centered-canvas{
        padding-left: 0;
        padding-right: 0;
        margin-left: auto;
        margin-right: auto;
        display: block;
      }
      .centered-ico{
        text-align: center;
        display: block;
      }
      [data-icon]:before {
        font-family: icons; /* BYO icon font, mapped smartly */
        content: attr(data-icon);
        speak: none; /* Not to be trusted, but hey. */
      }
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="Home.php" class="site_title"><i class="fa fa-bolt"></i> <span>TrackMyPower</span></a>
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
                    <li><a href="/Home.php">Home</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Charts and Stats<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/charts/data/">Data Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-download"></i> Export <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/export/tables/">Tables</a></li>
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
                    <li><a href="/"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                   <!-- <span class="badge bg-green">1</span> -->
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <!--
                    <li>
                      <a>
                        <span class="image"><img src="../../images/diego.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Diego Gómez</span>
                          <span class="time">1 hour ago</span>
                        </span>
                        <span class="message">
                          <br>
                          Hola Mauro, <br>
                          ¿Te satisface esta página? <br>
                          S2 <br>
                          DG<br>
                          PD: Gracias por venir<br>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li> -->
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count" style="margin-bottom: 0px;">
          
          <!-- Show Mean Peak Sun-Hours
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count pull-right" style="padding-bottom: 0px;">
              <span class="count_top" style="text-align:center; display:block;margin: 0 auto;"><i class="fa fa-sun-o"></i> Mean Peak Sun-Hours</span>
              <div id="HSP" class="count" style="text-align:center">10 h</div>
              <span id="HSP_refresh" class="count_bottom" style="display: block; text-align: center;">During the current Month</span>
            </div>
            -->
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count pull-right" style="padding-bottom: 0px; padding-left: 1%">
              <span class="count_top" style="text-align:center; display:block;margin: 0 auto;"><i class="fa fa-plug"></i> Total Energy Delivered</span>
              <div id="dev_energy" class="count" style="text-align:center; font-size:35px"></div>
              <span id="dev_energy_refresh" class="count_bottom" style="display: block; text-align: center;">Since August 2016</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count pull-right" style="padding-bottom: 0px;">
              <span class="count_top" style="text-align:center; display:block;margin: 0 auto;"><i class="wi wi-thermometer"></i> Internal Temperature</span>
              <div id="intemperature" class="count" style="text-align:center; font-size:35px"></div>
              <span id="temperature_refresh" class="count_bottom" style="display: block; text-align: center;">Control Cabinet</span>

            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count pull-right" style="padding-bottom: 0px;">
              <span class="count_top" style="text-align:center; display:block;margin: 0 auto;"><i class="wi wi-humidity"></i> Internal Humidity</span>
              <div id="inhumidity" class="count" style="text-align:center; font-size:35px"></div>
              <span id="humidity_refresh" class="count_bottom" style="display: block; text-align: center;">Control Cabinet</span>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count pull-right" style="padding-bottom: 0px;">
              <span class="count_top" style="text-align:center; display:block;margin: 0 auto;"><i class="fa fa-refresh"></i> Last Update</span>
              <div id="in_last_refresh" class="count" style="text-align:center; font-size:35px"></div>
              <span id="in_last_refresh2" class="count_bottom" style="display: block; text-align: center;"></span>
            </div>

          </div>



          <!-- /top tiles -->

          <!-- first row -->
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

              <!-- Electrical widget-->
              <div class="col-md-4 col-sm-6 col-xs-12">
                <!--Panel -->
                <div id="panel_electrical" class="x_panel tile">
                  <!--Title -->
                  <div class="x_title">
                    <h2>Electrical Variables</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <!--/Title -->
                  <!--Content -->
                  <div class="x_content">
                    <div class="dashboard-widget-content">
                      <ul class="quick-list">
                        <li><i class="fa fa-power-off"></i>Voltage: </br><span id="voltage_med1"></span></li></br>
                        <li><i class="fa fa-exchange"></i>Current: </br><span id="curr_med1"></span></li></br>
                        <li><i class="fa fa-flash"></i> Power: </br><span id="power_med1"></span></li></br>
                        <li><span aria-hidden="true" data-icon="Φ" style="padding-right:10px;color:#757679;font-size: 18px;font-weight: 400;"></span>PF: </br><span id="pf_med1"></span></li></br>
                      </ul>
                      <div class="sidebar-widget" style="margin-top:0; width=100%; height=100%">
                        <h4>Energy Delivered <br> (This Month)</h4>
                        <canvas id="foo2"></canvas>
                        <div class="goal-wrapper">
                          <span class="gauge-value pull-left"></span>
                          <span id="gauge-text" class="gauge-value pull-left"></span>
                          <span id="goal-text" class="goal-value pull-right" style="float: left;"></span>
                          </br>
                          <span style="font-weight: bold;text-align: center;display: block;">kWh</span>
                        </div>
                      </div>
                    </div>
                  </div> <!-- /Content -->
                </div> <!--/Panel -->
              </div>
              <!-- /Electrical widget -->

              <!-- Map widget -->
              <div class="col-md-8 col-sm-6 col-xs-12">
                <!--Panel -->
                <div id="panel_map" class="x_panel tile">
                  <!--Title -->
                  <div class="x_title">
                    <h2>Location<small>Uninorte Km. 5 Vía Puerto Colombia - Bloque K - Mapuka</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <!--/Title -->
                  <!--Content -->
                  <div class="x_content">
                    <div class="dashboard-widget-content">
                      <div class="iframe-container" style="position: relative;overflow: hidden;margin-bottom: 0px; display: inline-block; white-space: nowrap;">
                        <div id="map"></div>
                      </div>
                    </div>
                  </div> <!--/Content -->
                </div> <!--/Panel -->
              </div> <!-- /Map widget -->
            </div>
          </div>
          <!-- /first row -->
          <div class="clearfix"></div>
          <!-- second row -->
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

              <!-- Weather widget -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <!--Panel -->
                <div class="x_panel tile">
                  <!--Title -->
                  <div class="x_title">
                    <h2>Weather Report</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <!--/Title -->
                  <!--Content -->
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="temperature">
                          <a id="fahrenheit" onclick="unitsTemperature(this)" href="javascript:void(0);"><span id="spanF">F</span></a>
                          <a id="celsius" onclick="" href="javascript:void(0);"><span id="spanC" style="font-weight: bold">C</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="weather-icon">
                          <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <h1 id="temperature" style="text-align: right;"></h1>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row weather-days">
                      <div class="col-sm-3">
                        <div class="daily-weather">
                          <h2 class="day"><b>UV</b><br><small>[ Index ]</small></h2>
                          <h3 class=" " id="uv_index" style="text-align: center;"></h3>
                          <h2 style="font-size: 32px;"><i class="wi wi-hot centered-ico"></i></h2>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="daily-weather">
                          <h2 class="day"><b>Solar</b> <br><small>[ W/m<sup>2</sup> ]</small></h2>
                          <h3 class=" " id="solar_radiation" style="text-align: center;"></h3>
                          <canvas class="centered-canvas" id="clear-day" width="32" height="32"></canvas>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="daily-weather">
                          <h2 class="day"><b>Humidity</b> <br><small>[ % ]</small></h2>
                          <h3 class=" " id="humidity" style="text-align: center;"></h3>
                          <h2 style="font-size: 32px;"><i class="wi wi-raindrops centered-ico"></i></h2>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="daily-weather">
                          <h2 class="day"><b>Wind</b> <br><small>[ km/h ]</small></h2>
                          <h3 class="" id=wind_speed style="text-align: center"></h3>
                          <canvas class="centered-canvas" height="32" width="32" id="wind"></canvas>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div> <!--/Content -->
                </div> <!--/Panel-->
              </div>
              <!-- /Weather Widget -->



              <!-- Control widget -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <!--Panel -->
                <div class="x_panel">
                  <!--Title -->
                  <div class="x_title">
                    <h2>Control Panel</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>  
                  </div>                   
                  <!--/Title -->
                  <!--Content -->
                  <div class="x_content">
                      <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">                    
                          <h4>Xantrex Inverter</h4>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">                                            
                          <label>
                            <input id= "xantrex" class="js-switch js-check-click" style="display:none:" data-switchery="true" type="checkbox"/>
                          </label>
                        </div>
                      </div>

                      <div class="dashboard-widget-content">
                        <h4>Battery Status</h4>
                        <ul class="quick-list">
                          <li><i class="fa fa-battery-4"></i>Battery 1: </br><span id="vbatt1"></span></li></br>
                          <li><i class="fa fa-battery-4"></i>Battery 2: </br><span id="vbatt2"></span></li></br>
                        </ul>
                      </div>


<!--                       <div class="">
                        <label>
                          <input id= "batt1" class="js-switch js-check-click" style="display:none:" data-switchery="true" type="checkbox"/> Battery 1 
                        </label>
                      </div>
                      <div class="">
                        <label>
                          <input id= "batt2" class="js-switch js-check-click" style="display:none:" data-switchery="true" type="checkbox"/> Battery 2 
                        </label>
                      </div> -->
                  </div> <!--/Content -->
                </div> <!--/Panel-->
              </div>
              <!-- /Control Widget -->

                            <!-- Wind turbine widget -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <!--Panel -->
                <div class="x_panel">
                  <!--Title -->
                  <div class="x_title">
                    <h2>Wind Turbine Panel</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>  
                  </div>                   
                  <!--/Title -->
                  <!--Content -->
                  <div class="x_content">

          <div class="row">
            <div class="col-sm-6">
              <span class="count_top" style="text-align:center; display:block;margin: 0 auto;"><i class="fa fa-tachometer"></i> Mean Rotational Speed</span>
              <h3><div id="rpm" class="count" style="text-align:center">NAN</div></h3></br>
              </div>
            <div class="col-sm-6">
              <span class="count_top" style="text-align:center; display:block;margin: 0 auto;"><i class="fa fa-gears"></i> Controller State</span>
              <h3><div id="constate" class="count" style="text-align:center">OFF</div></h3></br>
              </div>
          </div>
          
          <div class="row">
            <div class="col-sm-12">
              <span class="count_top" style="text-align:center; display:block;margin: 0 auto;"><i class="fa fa-history"></i> Charge Time since Last Upload</span>
              <h3><div id="chargetime" class="count" style="text-align:center">NAN</div></h3></br>
             </div>
          </div>
          </div> <!--/Content -->
                </div> <!--/Panel-->
              </div>
              <!-- /Wind turbine Widget -->


            </div>
          </div>
          <!-- /second row -->
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
      </div>  <!-- /container body -->
    </div> <!-- /main_container -->

    <!-- jQuery -->
    <script src="/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- gauge.js -->
    <script src="/vendors/gauge.js/dist/gauge.js"></script>
    <!-- Skycons -->
    <script src="/vendors/skycons/skycons.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/build/js/custom.min.js"></script>

    <!-- Switchery -->
    <script src="/vendors/switchery/dist/switchery.min.js"></script>


    <!--Custom User Scripts By: JoseGre -->

    <!--Google Maps API -->
    <script type="text/javascript">
      var map;
      function initMap() {
        var myLatLng = {lat: 11.020121, lng: -74.851302};
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 11.020121, lng: -74.851302},
          zoom: 12
        });

        var iconBase = '/images/icons/markers/';

        var station = {
          url: iconBase + 'marker.png',
          scaledSize: new google.maps.Size(32, 32),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(16, 16)
        };

        var marker = new google.maps.Marker({
          position: myLatLng,
          icon: station,
          map: map,
          title: 'Uninorte km5 - Bloque K - Mapuka'
        });
        marker.setMap(map);
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBemXPT9yR9ExhHqV3ZxpNdUbEjRuLctPo&callback=initMap"></script>
    <!--/Google Maps API -->

    <!--AJAX Refresh -->
    <script>
      function auto_load(variable) {
        $.ajax({
          url: "loaddata.php",
          method: "POST",
          data: {
            variable: variable
          },
          cache: false,
          success: function(data) {
            var element = "#".concat(variable);
            var putthis = data;
            if (variable == "temperature"){
              putthis = data + '°';
            }
            document.getElementById(variable).innerHTML = putthis;
          }
        });
      }

      function ShowWheather() {
        auto_load("temperature"); //Call auto_load() function when DOM is Ready
        auto_load("humidity");
        auto_load("wind_speed");
        auto_load("uv_index");
        auto_load("solar_radiation");
      }
      // Electrical data refresh

      function auto_loadmed(variable) {
        //var variable = "temperature";
        if (variable == "gauge-text"){
          var url = "/mysql/energyChart.php";
        }
        else {
          var url = "/mysql/centraldata.php";
        }
        $.ajax({
          url: url,
          method: "POST",
          data: {
            variable: variable,
            origin: window.location.pathname
          },
          cache: false,
          success: function(data) {
            if (variable == "gauge-text") {
              var this_max = JSON.parse(data);
              //gauge.maxValue = parseFloat(this_max[1]);
              gauge.maxValue = parseFloat(2);
              gauge.set(parseFloat(this_max[0]));
              //document.getElementById("goal-text").innerHTML =  parseFloat(this_max[1].toFixed(2));
              document.getElementById("goal-text").innerHTML =  2;
            }
            else {
              var append_element;
              switch(variable){
                case 'voltage_med1':
                  append_element= data + ' V';
                  auto_loadcont(variable,data);
                  break;
                case 'curr_med1':
                  append_element= data + ' A';
                  break;                  
                case 'power_med1':
                  append_element= data + ' W';
                  break;
                case 'energy_med1':
                  append_element= parseFloat(data).toFixed(1) + ' kWh';
                  variable = "dev_energy";
                  break;
                case 'pf_med1':
                  append_element= data;
                  break;
                case 'date_time':              // obtener fecha
                  append_element= data;
                  variable = "in_last_refresh";
                  break;
                case 'humidity':               // obtener humedad interna
                  append_element= data + '%';
                  variable = "inhumidity";
                  break;
                case 'temperature':            // obtener temperatura interna
                  append_element= data + '°C';
                  variable = "intemperature";
                  break;
                case 'vbatt1':            // obtener temperatura interna
                  append_element= data + 'V';
                  auto_loadcont(variable,data);
                break;
                case 'vbatt2':            // obtener temperatura interna
                  append_element= data + 'V';
                  auto_loadcont(variable,data);
                break;              

              }
              //Para colocar la fecha y la hora.
              if (variable=="in_last_refresh"){

                  // para la hora
                  document.getElementById(variable).innerHTML = append_element.toString().substring(11,19);
                  // para la fecha
                  document.getElementById(variable+"2").innerHTML = append_element.toString().substring(0,10);
              }
              else{
                  // para las otras variables queda igual
                  document.getElementById(variable).innerHTML = append_element;
              }
            }
          }
        });
      }

      function ShowElectrical() {
        auto_loadmed("voltage_med1"); //Call auto_load() function when DOM is Ready
        auto_loadmed("power_med1");
        auto_loadmed("curr_med1"); 
        auto_loadmed("gauge-text");
        auto_loadmed("energy_med1");
        auto_loadmed("date_time");    // pide
        auto_loadmed("humidity");     // los datos
        auto_loadmed("temperature");  // internos
        auto_loadmed("pf_med1");  // internos
        auto_loadmed("vbatt1"); 
        auto_loadmed("vbatt2"); 
      }


      function loadcont(variable){
        $.ajax({
          url: "/mysql/loadcontrol.php",
          method: "POST",
          data: {
            variable: variable,
            origin: window.location.pathname
          },
          cache: false,
          success: function(data) {
            var result = $.parseJSON(data);
            before = result[0];
            after = result[1];
            
            if (before == after){
              if (before == 1){
                switch (variable) {
                  case "inv_xantrex" : 
                    $('#xantrex').click(); 
                    break;                                 
                  case  "batt1":
                    $('#batt1').click();                                  
                    break;
                  case  "batt2":
                    $('#batt2').click();                                                    
                    break;
                  default :
               }
              }
            }else{
              if (before==0){
                switch (variable) {
                  case "inv_xantrex" : 
                    $('#xantrex').click(); 
                    $('#xantrex').attr("disabled",true);                 
                    break;
                  case  "batt1":
                    $('#batt1').click(); 
                    $('#batt1').attr("disabled",true);                 
                    break;
                  case  "batt2":
                    $('#batt2').click(); 
                    $('#batt2').attr("disabled",true);                 
                    break;
                  default :

               }
              }else{
                switch (variable) {
                  case "inv_xantrex" : 
                    $('#xantrex').attr("disabled",true);
                    break;                 
                  case  "batt1":
                    $('#batt1').attr("disabled",true);                 
                    break;
                  case  "batt2":
                    $('#batt2').attr("disabled",true);                 

                    break;
                  default :
               }
              }
            }
          }     
        });
      }

      function ShowControl(){
        loadcont("inv_xantrex");
        loadcont("batt1");
        loadcont("batt2");
      }


      function auto_loadcont(variable,measure){

        switch (variable) {
          case 'voltage_med1' : 
              var id_switch = "inv_xantrex";
              var $id = 1;
            break;
          case  'vbatt1':
              var id_switch = "batt1";
              var $id = 2;
            break;
          case  'vbatt2':
              var id_switch = "batt2";
              var $id = 2;
            break;
          default :
        }

        $.ajax({
          url: "/mysql/loadcontrol.php",
          method: "POST",
          data: {
            variable: id_switch,
            origin: window.location.pathname
          },
          cache: false,
          success: function(data) {
            var result = $.parseJSON(data);
            before = result[0];
            after = result[1];

            if (before == after){
              if (before==0 &&  measure!=0){
                before = 1;
                after = 1;

                switch (variable){
                  case 'voltage_med1':
                  $('#xantrex').click(); 
                  case 'vbatt1':
                  $('#batt1').click(); 
                  case 'vbatt2':
                  $('#batt2').click(); 
                  default:
                }      


              }else if (before==1 && measure==0){
                before = 0;
                after = 0;

                switch (variable){
                  case 'voltage_med1':
                  $('#xantrex').click(); 
                  case 'vbatt1':
                  $('#batt1').click(); 
                  case 'vbatt2':
                  $('#batt2').click(); 
                  default:
                }      

          
              }
            }else{
              if (before==0 &&  measure!=0){

                before = 1;
                after = 1;

                switch (variable){
                  case 'voltage_med1':
                  $('#xantrex').attr("disabled",false);                 
                  case 'vbatt1':
                  $('#batt1').attr("disabled",false);                 
                  case 'vbatt2':
                  $('#batt2').attr("disabled",false);                 
                  default:
                }      


              }else if (before==1 && measure==0){
                before = 0;
                after = 0;

                switch (variable){
                  case 'voltage_med1':
                  $('#xantrex').attr("disabled",false);                 
                  case 'vbatt1':
                  $('#batt1').attr("disabled",false);                 
                  case 'vbatt2':
                  $('#batt2').attr("disabled",false);                 
                  default:
                }      

              }
            }
            $.post("/mysql/uploadcontrol2.php", { 
              id: $id,
              b: before,
              a: after,
            }, function(data) {

            });              
          }     
        });
      }

      function uploadcont(variable){

          $.ajax({
          url: "/mysql/loadcontrol.php",
          method: "POST",
          data: {
            variable: variable,
            origin: window.location.pathname
          },
          cache: false,
          success: function(data) {
            var result = $.parseJSON(data);
            before = result[0];
            after = result[1];

            if (before == after){

              switch (variable) {
                case "inv_xantrex" : 
                    var $id = 1;
                    var $state = changeCheckbox1.checked;
                  break;
                case  "batt1":
                    var $id = 2;
                    var $state = changeCheckbox2.checked;
                  break;
                case  "batt2":
                    var $id = 3;
                    var $state = changeCheckbox3.checked;
                  break;
                default :
              }

              $.post("/mysql/uploadcontrol.php", { 
                id: $id,
                state: $state,
              }, function(data) {
                 $.ajax({
                  url: "/mysql/loadcontrol.php",
                  method: "POST",
                  data: {
                    variable: variable,
                    origin: window.location.pathname
                  },
                  cache: false,
                  success: function(data) {
                    var result = $.parseJSON(data);
                    before = result[0];
                    after = result[1];
                    
                    if (before != after){
                      switch (variable) {
                        case "inv_xantrex" : 
                          $('#xantrex').attr("disabled",true);                 
                          break;
                        case  "batt1":
                           $('#batt1').attr("disabled",true);                 
                          break;
                        case  "batt2":
                           $('#batt2').attr("disabled",true);                 
                          break;
                        default :
                      }
                    }
                  }     
                });
              });
            }
          }     
        });




      }

      function aero_load(variable) {
       $.ajax({
          url: "/aerostuff/loadata.php",
          method: "POST",
          data: {
          variable: variable,
          origin: window.location.pathname
          },
          cache: false,
          success: function(data) {         
            var append_element;
            switch(variable){
            case 'rpm':
              append_element= data + ' RPM';
            break;
            case 'chargetime':
              //append_element=data;
              append_element= (parseFloat(data)/60000).toFixed(0) + ' min';
                       break;
            case 'constate':
              if (data==0 ){
              append_element= 'OFF';
              } else{
              append_element = 'ON';  
              }
              
                       break;
          
          }
           document.getElementById(variable).innerHTML = append_element;
        }
        });
      }

      function ShowAero() {
        aero_load("rpm"); //Call auto_load() function when DOM is Ready
        aero_load("constate");
        aero_load("chargetime");
      }


      $(document).ready(function() {
        var opts = {
            lines: 12,
            angle: 0,
            lineWidth: 0.4,
            pointer: {
                length: 0.75,
                strokeWidth: 0.042,
                color: '#1D212A'
            },
            limitMax: 'false',
            colorStart: '#1ABC9C',
            colorStop: '#1ABC9C',
            strokeColor: '#F0F3F3',
            generateGradient: true
        };
        var target = document.getElementById('foo2');
        gauge = new Gauge(target).setOptions(opts);
        gauge.animationSpeed = 32;
        gauge.setTextField(document.getElementById("gauge-text"));
        ShowControl();
        ShowElectrical();
        ShowAero();
        ShowWheather();
        setInterval(function() {
            ShowWheather();
            ShowElectrical();
            ShowAero();

        }, 10000);
        //Refresh auto_load() function after 10000 milliseconds
      });
    </script>
    <!--/AJAX Refresh -->

    <!-- Temperature Units Change -->
    <script>
    current_unit = "celsius";
    var temp_before, temp_after;
    function unitsTemperature(element){
      if(element.id == "celsius")
      {
        if(current_unit == "fahrenheit")
        {
          temp_before = parseFloat(($("h1#temperature").text()).split("°")[0]);
          temp_after = (temp_before - 32) * 5/9;
          var newtext = "".concat(temp_after.toFixed(2),"°");
          document.getElementById("temperature").innerHTML = newtext;
          $("#".concat(element.id)).attr("onclick","");
          $("#fahrenheit").attr("onclick","unitsTemperature(this)");
          $("#spanC").css("font-weight","bold");
          $("#spanF").css("font-weight","normal");
          current_unit = "celsius";
        }
      }
      else if (element.id == "fahrenheit")
      {
        if(current_unit == "celsius")
        {
          temp_before = parseFloat(($("h1#temperature").text()).split("°")[0]);
          temp_after = temp_before*9/5 + 32;
          var newtext = "".concat(temp_after.toFixed(2),"°");
          document.getElementById("temperature").innerHTML = newtext;
          $("#".concat(element.id)).attr("onclick","");
          $("#celsius").attr("onclick","unitsTemperature(this)");
          $("#spanC").css("font-weight","normal");
          $("#spanF").css("font-weight","bold");
          current_unit = "fahrenheit";
        }
      }
      else
      {
        return;
      }
    }
    </script>
    <!--/Temperature Units Change -->

    <!-- Skycons -->
    <script>
      $(document).ready(function() {
        var icons = new Skycons({
            "color": "#73879C"
          }),
          list = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
          ],
          i;

        for (i = list.length; i--;)
          icons.set(list[i], list[i]);

        icons.play();
      });
    </script>
    <!-- /Skycons -->

    <!-- Responsive size of panels -->
    <script>
      $(document).ready(function() {
        $("canvas#foo2").css("height","100%");
        $("canvas#foo2").css("width","100%");
        var map_height = parseFloat($("div#panel_map").css("height"));
        var electrical_height = parseFloat($("div#panel_electrical").css("height"));
        if (electrical_height>map_height){
          $("div#panel_map").css("height",electrical_height);
        }
        else
        {
          $("div#panel_electrical").css("height",map_height);
        }
      });
    </script>
    <!-- /Responsive size of panels -->

    <!-- Control panel-->
    <script>
      var changeCheckbox1 = document.querySelector('#xantrex');
      changeCheckbox1.onclick = function() {
        uploadcont("inv_xantrex");
      };

      var changeCheckbox2 = document.querySelector('#batt1');
      changeCheckbox2.onclick = function() {
        uploadcont("batt1");
      };

      var changeCheckbox3 = document.querySelector('#batt2');
      changeCheckbox3.onclick = function() {
        uploadcont("batt2");
      };

      </script>
    <!-- /Control panel-->
  </body>
</html>
