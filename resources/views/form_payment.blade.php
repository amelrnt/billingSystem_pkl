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
  <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{URL::asset('css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{URL::asset('css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{('css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
  <link href="{{URL::asset('css/style-responsive.css')}}" rel="stylesheet" />

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
          <li class="active">
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
      </div>>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
    <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Add New Contract</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Forms</li>
              <li><i class="fa fa-files-o"></i>Form Validation</li>
            </ol>
          </div>
        </div>
        <!-- Form exiting contract -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form validations
              </header>
              <div class="panel-body">
                <div class="form">
                  <form>
                      <div class="form-group ">
                        <label for="csurat" class="control-label col-lg-2">No Surat </label>
                        <div class="col-lg-10">
                          <input class="form-control" id="csurat" type="text" value="{{$records->no_surat}}" disabled/>
                        </div>
                      </div>
                      <div class="form-group ">
                        <label for="csurat" class="control-label col-lg-2">Product </label>
                        <div class="col-lg-10">
                          <input class="form-control" id="csurat" minlength="5" type="text" value="{{$records->product}}" disabled/>
                        </div>
                      </div>
                      <div class="form-group ">
                        <label for="csurat" class="control-label col-lg-2">Customer </label>
                        <div class="col-lg-10">
                          <input class="form-control" id="csurat" type="text" value="{{$records->company}}" disabled/>
                        </div>
                      </div>
                      <div class="form-group ">
                        <label for="csurat" class="control-label col-lg-2">Customer CP</label>
                        <div class="col-lg-10">
                          <input class="form-control" id="csurat" type="text" value="{{$records->cp}}" disabled/>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2">Contract Start Date</label>
                        <div class="col-lg-10">
                          <input type="text" value="{{$records->start_date}}" class="form-control" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2">Contract End Date</label>
                        <div class="col-lg-10">
                          <input type="text" name="end_date" value="{{$records->end_date}}" size="16" class="form-control" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2">Payment Status</label>
                        <div class="col-lg-10">
                          @if($records->payment_status == '1')
                          <input type="text"  value="Paid" class="form-control" disabled>
                          @else
                          <input type="text"  value="Not Paid" class="form-control" disabled>
                          @endif
                        </div>
                      </div>
                      <div class="form-group ">
                        <label for="cam" class="control-label col-lg-2">Account Manager Name</label>
                        <div class="col-lg-10">
                          <input class="form-control" type="text" value="{{$records->am}}" disabled />
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
        
        <!-- Form new payment detail -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form validations
              </header>
              <div class="panel-body">
                <div class="form">
                @isset($records)
                  <form class="form-validate form-horizontal" method="post" action="/payment/{{$records->id}}">
                @endisset
                {{ csrf_field() }}
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Nama Bank <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="bank_name" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cprice" class="control-label col-lg-2">No Rekening <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cprice" name="norek" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cdesc" class="control-label col-lg-2">Bank Atas Nama</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cdesc" name="bank_acc" type="text" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile" class="control-label col-lg-2">Bukti Pembayaran</label>
                      <input type="file" id="exampleInputFile">
                    </div> 
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <input class="btn btn-primary" type="submit" value="Save"></input>
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
  <script src="{{URL::asset('js/jquery.js')}}"></script>
  <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
  <script src="{{URL::asset('js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{URL::asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!-- jquery validate js -->
  <script type="text/javascript" src="{{URL::asset('js/jquery.validate.min.js')}}"></script>

  <!-- custom form validation script for this page-->
  <script src="js{{URL::asset('/form-validation-script.js')}}"></script>
  <!--custome script for all page-->
  <script src="{{URL::asset('js/scripts.js')}}"></script>


</body>

</html>
