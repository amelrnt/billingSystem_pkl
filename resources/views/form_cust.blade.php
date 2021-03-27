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
  <link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet" />
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
              <li class="active"><a class="" href="{{url('/customerData')}}">Customer</a></li>
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
      </div>
    </aside>
    <!--sidebar end-->

        @isset($status)
        @if($status == input)
        <div class="alert alert-success fade in">
          <button data-dismiss="alert" class="close close-sm" type="button">
          <i class="icon-remove"></i>
          </button>
          <strong>Input Data Baru Berhasil!</strong>
        </div>
        @elseif ($status == edit)
        <div class="alert alert-warning fade in">
          <button data-dismiss="alert" class="close close-sm" type="button">
          <i class="icon-remove"></i>
          </button>
          <strong>Edit Data Baru Berhasil!</strong>
        </div>
        @endif
        @endisset

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Form Validation</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Forms</li>
              <li><i class="fa fa-files-o"></i>Form Validation</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Company Data
              </header>
              <div class="panel-body">
                <div class="form">
                @isset($records)
                  <form class="form-validate form-horizontal" method="post" action="/newCust/{{$records->id}}">
                @endisset
                @empty($records)
                  <form class="form-validate form-horizontal" method="post" action="/custCP">
                @endempty
                  {{ csrf_field() }}
                    <div class="form-group ">
                      <label for="ccomp" class="control-label col-lg-2">Company Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        @isset($records)
                        <input class="form-control" id="ccomp" name="company" type="text" value="{{$records->company}}"required />
                        @endisset
                        @empty($records)
                        <input class="form-control" id="ccomp" name="company" minlength="5" type="text" required />
                        @endempty
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cphone" class="control-label col-lg-2">Phone Number <span class="required">*</span></label>
                      <div class="col-lg-10">
                        @isset($records)
                        <input class="form-control" id="cphone" name="phone_number" type="text" value="{{$records->phone_number}}"required />
                        @endisset
                        @empty($records)
                        <input class="form-control " id="cphone" type="text" name="phone_number" required />
                        @endempty
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="caddr" class="control-label col-lg-2">Address </label>
                      <div class="col-lg-10">
                        @isset($records)
                        <input class="form-control" id="caddr" name="address" type="text" value="{{$records->address}}"required />
                        @endisset
                        @empty($records)
                        <input class="form-control " id="caddr" type="text" name="address" />
                        @endempty
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccity" class="control-label col-lg-2">City </label>
                      <div class="col-lg-10">
                        @isset($records)
                        <input class="form-control" id="ccity" name="city" type="text" value="{{$records->city}}"required />
                        @endisset
                        @empty($records)
                        <input class="form-control " id="ccity" type="text" name="city" />
                        @endempty
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cdisct" class="control-label col-lg-2">District</label>
                      <div class="col-lg-10">
                        @isset($records)
                        <input class="form-control" id="cdisct" name="district" type="text" value="{{$records->district}}"required />
                        @endisset
                        @empty($records)
                        <input class="form-control " id="cdisct" type="text" name="district" />
                        @endempty
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">E-mail</label>
                      <div class="col-lg-10">
                        @isset($records)
                        <input class="form-control" id="cemail" name="email" type="text" value="{{$records->email}}"required />
                        @endisset
                        @empty($records)
                        <input class="form-control " id="cemail" type="text" name="email" />
                        @endempty
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ctype" class="control-label col-lg-2">Company Type</label>
                      <div class="col-lg-10">
                        <!-- change to dropdown later-->
                        @isset($records)
                        <input class="form-control" id="ctype" name="type" type="text" value="{{$records->type}}"required />
                        @endisset
                        @empty($records)
                        <input class="form-control " id="ctype" type="text" name="type" />
                        @endempty
                      </div>
                    </div>
                    </div>
                    <div class="form-group">
                      <br>
                      <div class="col-lg-offset-2 col-lg-10">
                      @isset($records)
                        <input class="btn btn-primary" type="submit" value="Save"></input>
                        <button class="btn btn-default" type="button">Cancel</button>
                        </div>
                    </div>
                  </form>
                      @endisset
                      @empty($records)
                        <button class="btn btn-primary disabled" type="submit">Save</button>
                        <button class="btn btn-default disabled" type="button">Cancel</button>
                        </div>
                    </div>
                      @endempty
                </div>

              </div>
            </section>
            <!-- tab cust contact -->
            @isset($records)
            <section class="panel">
              <header class="panel-heading">
                Company Contact Person
              </header>
              <br>
              <a class="btn btn-primary" href="{{url('/formCpNew/'.$records->id)}}"><i>Add New Data Data</i></a>
              <div class="panel-body">
                <!-- table list cp contact -->
              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> Full Name</th>
                    <th><i class="icon_mail_alt"></i> Email</th>
                    <th><i class="icon_mobile"></i> Mobile</th>
                    <th><i class="icon_pin_alt"></i> Address</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                    @foreach($cp as $cp)
                  <tr>
                    <td>{{$cp->first_name}} {{$cp->last_name}}</td>
                    <td>{{$cp->email}}</td>
                    <td>{{$cp->no_telp}}</td>
                    <td>{{$cp->address}}</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="{{url('/formCp/'.$cp->id)}}"><i>Edit Data</i></a>
                        <a class="btn btn-danger disabled" href="#"><i>Delete data</i></a>
                      </div>
                    </td>
                  </tr>
                    @endforeach
                </tbody>
              </table>

              </div>
            </section>
            @endisset
            @empty($records)
            <section class="panel">
              <header class="panel-heading">
                Add Data Company Contact Person
              </header>
              <div class="panel-body">
                <!-- form add cp contact -->
                <div class="form">
                    <div class="form-group ">
                      <label for="cfname" class="control-label col-lg-2">First Name</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cfname" type="text" name="first_name" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="clname" class="control-label col-lg-2">Last Name</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="clname" type="text" name="last_name" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cktp" class="control-label col-lg-2">No KTP</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cktp" type="text" name="no_ktp" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cphone" class="control-label col-lg-2">Phone Number</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cphone" type="text" name="no_telp" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Email</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="text" name="emailCP" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="caddr" class="control-label col-lg-2">Address</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="caddr" type="text" name="addressCP" />
                      </div>
                    </div>
                    <div class="form-group">
                      <br>
                      <div class="col-lg-offset-2 col-lg-10">
                        <input class="btn btn-primary" type="submit" value="Save"></input>
                        <button class="btn btn-default" type="button">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </section>
            @endempty
            <!-- tab cust contact end-->

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
  <script src="{{URL::asset('js/form-validation-script.js')}}"></script>
  <!--custome script for all page-->
  <script src="{{URL::asset('js/scripts.js')}}"></script>


</body>

</html>
