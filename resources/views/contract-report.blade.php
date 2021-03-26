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
            <li >
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
                <li><a class="" href="{{url('/reportchr')}}">Chart Report</a></li>
                <li class="active"><a class="" href="{{url('/reportctr')}}">All Contract</a></li>
              </ul>
            </li>

            <li class="sub-menu">
              <a href="{{url('/mailmanual')}}" class="">
                <i class="icon_table"></i>
                <span>Email Manually</span>
              </a>
            </li>

          </ul>
          <!-- sidebar menu end-->
        </div>
      </aside>
      <!--sidebar end-->

      @if(status == input)
        <div class="alert alert-success fade in">
          <button data-dismiss="alert" class="close close-sm" type="button">
          <i class="icon-remove"></i>
          </button>
          <strong>Input Data Baru Berhasil!</strong>
        </div>
        @elseif (status == edit)
        <div class="alert alert-warning fade in">
          <button data-dismiss="alert" class="close close-sm" type="button">
          <i class="icon-remove"></i>
          </button>
          <strong>Edit Data Baru Berhasil!</strong>
        </div>
        @elseif (status == payment)
        <div class="alert alert-success fade in">
          <button data-dismiss="alert" class="close close-sm" type="button">
          <i class="icon-remove"></i>
          </button>
          <strong>Input Data Pembayaran Berhasil!</strong>
        </div>
        @endif

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
            <button class="btn btn-primary">Apply filter</button>
            <br><br>
            </div>
          </div>

                  <!-- contract table start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               Contract
              </header>
              <br>
              <a class="btn btn-primary " href="{{url('/customerData')}}" title="">Add new Contract</a>
              <br> <br>
              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i></i> NO Surat</th>
                    <th><i></i> Company Name</th>
                    <th><i class="icon_calendar"></i> Start Date</th>
                    <th><i class="icon_calendar"></i> End Date</th>
                    <th><i></i> Payment Status</th>
                    <th><i class="icon_profile"></i> Account Manager</th>
                    <th><i class="icon_mobile"></i> Produk</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>

                  <!--loop start here -->
                  @foreach ($contract as $c)
                  <tr>
                    <td>{{$c->no_surat}}</td>
                    <td>{{$c->company}}</td>
                    <td>{{$c->start_date}}</td>
                    <td>{{$c->end_date}}</td>
                    @if($c->payment_status == 1)
                    <td>paid</td>
                    @else
                    <td>not paid</td>
                    @endif
                    <td>{{$c->first_name}} {{$c->last_name}}</td>
                    <td>{{$c->name}}</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-success" href="{{url('/editContract/'.$c->id)}}"><i class="fas fa-user-edit">Edit</i></a>
                        <a class="btn btn-danger ml-2 " href="{{url('/formPayment/'.$c->id)}}"><i class="fas fa-user-slash">Change Payment Info</i></a>
                      </div>
                    </td>
                  </tr>

                  @endforeach
                  <!--loop ends here -->
                </tbody>
              </table>


            </section>
          </div>
        </div>
        <!-- contract table end-->
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
