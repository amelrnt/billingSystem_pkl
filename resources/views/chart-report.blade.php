<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Telkom Malang</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <link href="css/bootstrap-datepicker.css" rel="stylesheet" />

  <!-- <script>
    $("#datepicker").datepicker( {
    format: " yyyy", // Notice the Extra space at the beginning
    viewMode: "years", 
    minViewMode: "years"
    });
  </script> -->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
    <!--header start-->
    <header class="header dark-bg">
      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <span class="username">Admin</span>
                          <b class="caret"></b>
                      </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="{{url('/login')}}"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

  <!-- container section start -->
  <section id="container" class="">
      <!--sidebar start-->
      <aside>
        <div id="sidebar" class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu">
            <li>
              <a class="" href="{{url('/home')}}">
                <i class="icon_house_alt"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" class="">
                <i class="icon_document_alt"></i>
                <span>Add & Edit Data</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a class="" href="{{url('/amData')}}">Account Manager</a></li>
                <li><a class="" href="{{url('/productData')}}">Product</a></li>
                <li><a class="" href="{{url('/customerData')}}">Customer</a></li>
                <li><a class="" href="#">User Info</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" class=""> 
                <i class="icon_piechart"></i>
                <span>Report</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li class="active"><a class="" href="{{url('/reportchr')}}">Chart Report</a></li>
                <li><a class="" href="{{url('/reportctr')}}">All Contract</a></li>
              </ul>
            </li>

            <li class="sub-menu">
              <a href="{{url('/mailmanual')}}">
                <i class="icon_table"></i>
                <span>Email Manually</span>
              </a>
            </li>

          </ul>
          <!-- sidebar menu end-->
        </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h3 class="page-header"><i class="icon_piechart"></i> Chart</h3>
              <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                <li><i class="icon_piechart"></i>Chart</li>
              </ol>
            </div>
          </div>
           <!-- input quarter and year -->
          <div class="row">
            <div class="col-lg-6">
              <label for="quarterselect">Quarter</label>
                <select id="quarterselect"class="form-control m-bot15">
                  <option value="1">Q1</option>
                  <option value="2">Q2</option>
                  <option value="3">Q3</option>
                  <option value="4">Q4</option>
                </select>
            </div>

            <div class="col-lg-6">
              <label for="yearselect">Year</label>
              <input type="text" class="form-control  m-bot15">
            </div>

            <div class="col-lg-6">
            <button class="btn btn-primary" onclick="filter()">Apply filter</button>
            <br><br>
            </div>
          </div>

          <div class="row mt-2">
            <!-- chart morris start -->
            <div class="col-lg-12">
              <section class="panel">
                <header class="panel-heading">
                  <h3>General Chart</Char>
                      </header>
                      <div class="panel-body">
                        <div class="tab-pane" id="chartjs">
                          <div class="row">
                            <!-- Bar -->
                            <div class="col-lg-6">
                              <section class="panel">
                                    <header class="panel-heading">
                                      Bar
                                    </header>
                                    <div class="panel-body text-center" id="bar-container">
                                      <canvas id="bar" height="300" width="500"></canvas>
                                    </div>
                              </section>
                            </div>

                            <!-- Pie -->
                            <div class="col-lg-6">
                              <section class="panel">
                                <header class="panel-heading">
                                  Pie
                                </header>
                                <div class="panel-body text-center">
                                  <canvas id="pie" height="300" width="400"></canvas>
                                </div>
                              </section>
                            </div>
                          </div>
                        </div>
                      </div>
                </section>
            </div>
              <!-- chart morris start -->
          </div>

      </section>
      <!--main content end-->
      <div class="text-right">
            <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
        </div>
    </section>

    <script>
        function filter() {
            var qs = document.getElementById("quarterselect");
            var q = qs.options[qs.selectedIndex].value;

            if (q == 1) {
                month = ["January","February","March"];
            }else if(q == 2) {
                month = ["April","May","June"];
            }else if(q == 3) {
                month = ["July","August","September"];
            }else if(q == 4) {
                month = ["October","November","Desember"];
            }

            var barNew = {
                labels : month, 
                datasets : [
                    { //upcoming
                        fillColor : "rgba(220,220,220,0.5)",
                        strokeColor : "rgba(220,220,220,1)",
                        data : [65,59,52]
                    },
                    { //failed
                        fillColor : "rgba(153,51,51,0.8)",
                        strokeColor : "rgba(204,0,0,0.84)",
                        data : [19,12,27]
                    },
                    { //success
                        fillColor : "rgba(151,187,205,0.5)",
                        strokeColor : "rgba(151,187,205,1)",
                        data : [28,48,55]
                    }
                ]
            };

            $('#bar').remove(); // this is my <canvas> element
            $('#bar-container').append('<canvas id="bar" height="300" width="500"><canvas>');
            new Chart(document.getElementById("bar").getContext("2d")).Bar(barNew);
        }
    </script>

    <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- chartjs -->
    <script src="assets/chart-master/Chart.js"></script>
    <!-- custom chart script for this page only-->
    <script src="js/chartjs-report.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>
  </body>
</html>
