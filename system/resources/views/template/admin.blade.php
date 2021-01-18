<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DONUTS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('public/admin')}}/img/logo.jpg">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/admin')}}/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/admin')}}/css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/admin')}}/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/admin')}}/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/admin')}}/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/admin')}}/css/animate.css">
    <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/admin')}}/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/admin')}}/css/normalize.css">
    <!-- charts C3 CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/admin')}}/css/c3.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/admin')}}/css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/admin')}}/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/admin')}}/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="{{url('public/admin')}}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="{{url('public/admin')}}/img/logo.jpg" style="width: 50px; height: 50px;">
                    </a>
                    <h3>Admin</h3>
                    
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> </a>
                            
                        </li>

                        <li class="nav-item">
                            <a href="{{url('admin/indexpenjual')}}"  class="nav-link dropdown-toggle"><i class="fa big-icon fa-user"></i> <span class="mini-dn">Data Penjual</span> </a>
                            
                        </li>

                        <li class="nav-item">
                            <a href="{{url('admin/indexpembeli')}}"  class="nav-link dropdown-toggle"><i class="fa big-icon fa-users"></i> <span class="mini-dn">Data Pembeli</span> </a>
                            
                        </li>

                        <li class="nav-item">
                            <a href="{{url('admin/indexproduk')}}"  class="nav-link dropdown-toggle"><i class="fa big-icon fa-list"></i> <span class="mini-dn">Data Produk</span> </a>
                            
                        </li>

                        <li class="nav-item">
                            <a href="{{url('admin/indexkeranjang')}}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-list"></i> <span class="mini-dn">Data Keranjang</span> </a>
                            
                        </li>

                      
                    </ul>
                </div>
            </nav>
        </div>
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="img/logo/log.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                              
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                      
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                                <span class="admin-name">Admin</span>
                                                <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                                
                                                <li><a href="#"><span class="adminpro-icon adminpro-settings author-log-ic"></span>Settings</a>
                                                </li>
                                                <li><a href="{{url('logout')}}"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                                </li>
                                            </ul>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
               
            </div>
           
           
            <!-- welcome Project, sale area start-->
            <div class="welcome-adminpro-area">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
       
        </div>
    </div>
    <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; 2018 Colorlib All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
    <!-- Chat Box Start-->
    <div class="chat-list-wrap">
        <div class="chat-list-adminpro">
            <div class="chat-button">
                <span data-toggle="collapse" data-target="#chat" class="chat-icon-link"><i class="fa fa-comments"></i></span>
            </div>
            <div id="chat" class="collapse chat-box-wrap shadow-reset animated zoomInLeft">
                <div class="chat-main-list">
                    <div class="chat-heading">
                        <h2>Messanger</h2>
                    </div>
                    <div class="chat-content chat-scrollbar">
                        <div class="author-chat">
                            <h3>Monica <span class="chat-date">10:15 am</span></h3>
                            <p>Hi, what you are doing and where are you gay?</p>
                        </div>
                        <div class="client-chat">
                            <h3>Mamun <span class="chat-date">10:10 am</span></h3>
                            <p>Now working in graphic design with coding and you?</p>
                        </div>
                        <div class="author-chat">
                            <h3>Monica <span class="chat-date">10:05 am</span></h3>
                            <p>Practice in programming</p>
                        </div>
                        <div class="client-chat">
                            <h3>Mamun <span class="chat-date">10:02 am</span></h3>
                            <p>That's good man! carry on...</p>
                        </div>
                    </div>
                    <div class="chat-send">
                        <input type="text" placeholder="Type..." />
                        <span><button type="submit">Send</button></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chat Box End-->
    <!-- jquery
		============================================ -->
    <script src="{{url('public/admin')}}/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{url('public/admin')}}/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{url('public/admin')}}/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{url('public/admin')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{url('public/admin')}}/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{url('public/admin')}}/js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{url('public/admin')}}/js/counterup/jquery.counterup.min.js"></script>
    <script src="{{url('public/admin')}}/js/counterup/waypoints.min.js"></script>
    <script src="{{url('public/admin')}}/js/counterup/counterup-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="{{url('public/admin')}}/js/peity/jquery.peity.min.js"></script>
    <script src="{{url('public/admin')}}/js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{url('public/admin')}}/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{url('public/admin')}}/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="{{url('public/admin')}}/js/flot/jquery.flot.js"></script>
    <script src="{{url('public/admin')}}/js/flot/jquery.flot.tooltip.min.js"></script>
    <script src="{{url('public/admin')}}/js/flot/jquery.flot.spline.js"></script>
    <script src="{{url('public/admin')}}/js/flot/jquery.flot.resize.js"></script>
    <script src="{{url('public/admin')}}/js/flot/jquery.flot.pie.js"></script>
    <script src="{{url('public/admin')}}/js/flot/Chart.min.js"></script>
    <script src="{{url('public/admin')}}/js/flot/flot-active.js"></script>
    <!-- map JS
		============================================ -->
    <script src="{{url('public/admin')}}/js/map/raphael.min.js"></script>
    <script src="{{url('public/admin')}}/js/map/jquery.mapael.js"></script>
    <script src="{{url('public/admin')}}/js/map/france_departments.js"></script>
    <script src="{{url('public/admin')}}/js/map/world_countries.js"></script>
    <script src="{{url('public/admin')}}/js/map/usa_states.js"></script>
    <script src="{{url('public/admin')}}/js/map/map-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="{{url('public/admin')}}/js/data-table/bootstrap-table.js"></script>
    <script src="{{url('public/admin')}}/js/data-table/tableExport.js"></script>
    <script src="{{url('public/admin')}}/js/data-table/data-table-active.js"></script>
    <script src="{{url('public/admin')}}/js/data-table/bootstrap-table-editable.js"></script>
    <script src="{{url('public/admin')}}/js/data-table/bootstrap-editable.js"></script>
    <script src="{{url('public/admin')}}/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="{{url('public/admin')}}/js/data-table/colResizable-1.5.source.js"></script>
    <script src="{{url('public/admin')}}/js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
		============================================ -->
    <script src="{{url('public/admin')}}/js/main.js"></script>
</body>

</html>