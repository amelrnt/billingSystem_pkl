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
  <!-- container section start -->
  <section id="container" class="">

    <<!--sidebar start-->
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
              <li class="active"><a class="" href="{{url('/userInfo')}}">User Login</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a class="" href="{{url('/report')}}">
                          <i class="icon_piechart"></i>
                          <span>Report</span>
            </a>
          </li>

          <li class="sub-menu">
            <a href="" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
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
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-bars"></i>Pages</li>
              <li><i class="fa fa-square-o"></i>Pages</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form validations
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Usern Name Login</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="username" minlength="5" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cpass" class="control-label col-lg-2">Password Login </label>
                      <div class="col-lg-10">
                      <input class="form-control" id="cpass" name="password" minlength="5" type="text"  />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Email Sender</label>
                      <div class="col-lg-10">
                      <input class="form-control " id="cemail" type="email" name="email"  />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemailpass" class="control-label col-lg-2">Email Password</label>
                      <div class="col-lg-10">
                      <input class="form-control " id="cemailpass" type="email" name="email"  />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemailcc" class="control-label col-lg-2">Email cc </label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cemailcc" name="mailcc" minlength="5" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemailsub" class="control-label col-lg-2">Format Email Subject</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cemailsub" name="mailsub" minlength="5" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">Format Email Body</label>
                      <div class="col-lg-10">
                        <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <button class="btn btn-default" type="button">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
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
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
