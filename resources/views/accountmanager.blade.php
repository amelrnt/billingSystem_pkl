<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Basic Table</title>

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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

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
            <a href="javascript:;" class="active">
              <i class="icon_document_alt"></i>
              <span>Add & Edit Data</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li class="active"><a class="" href="{{url('/amData')}}">Account Manager</a></li>
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
              <li><a class="" href="{{url('/reportctr')}}">All Contract</a></li>
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

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>Basic Table</li>
            </ol>
          </div>
        </div>
        <!-- page start-->

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
        @endif

        <a type="button" class="btn btn-primary" href="{{url('/formAM')}}">Add new Data</a>
       <br><br>
        <div class="row mt-2">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading mt-2">
                Data
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> id</th>
                    <th><i class="icon_profile"></i> First Name</th>
                    <th><i class="icon_calendar"></i> Last Name</th>
                    <th><i class="icon_mail_alt"></i> Phone Number</th>
                    <th><i class="icon_pin_alt"></i> Email</th>
                  </tr>
                  <tr>
                  <!--loop start here --> 
                  @foreach($am as $a)
                    <td>{{$a->id}}</td>
                    <td>{{$a->first_name}}</td>
                    <td>{{$a->last_name}}</td>
                    <td>{{$a->phone_number}}</td>
                    <td>{{$a->email}}</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-success" href="{{url('/formAM/'.$a->id)}}"><i class="fas fa-user-edit">Edit</i></a>
                        <a class="btn btn-danger ml-2 disabled" href="#"><i class="fas fa-user-slash">Delete</i></a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                  <!--loop ends here -->
                </tbody>
              </table>

              {{ $am->links() }}
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
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
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
