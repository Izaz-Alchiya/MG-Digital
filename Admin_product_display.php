<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <title>M.G.Digital | Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>M.G.Digital </title>

        <!-- Bootstrap -->

        <link href="CSS/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome -->

        <link href="CSS/font-awesome.css" rel="stylesheet" type="text/css"/>


        <link href="CSS/nprogress.css" rel="stylesheet" type="text/css"/>

        <link href="CSS/jquery.mCustomScrollbar.min.css" rel="stylesheet" type="text/css"/>

        <!-- Custom Theme Style -->

        <link href="CSS/custom.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

    </head>
    <body class="nav-md" style="font-family: 'Josefin Sans', sans-serif;">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col menu_fixed">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>M.G.Digital</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">

                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2>Izaz</h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">
                                    <li><a href="Admin_dashboard.php"><i class="fa fa-home"></i> Home </a>

                                    </li>
                                    <li><a><i class="fa fa-plus-square"></i> Add Products <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="Led_product.php">LED Product</a></li>
                                            <li><a href="sound_product.php">Sound Products</a></li>
                                            <li><a href="vanue_type.php">Venue Type</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="Admin_product_display.php"><i class="fa fa-home"></i>View Products </a>

                                    <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="tables.html">Tables</a></li>
                                            <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="chartjs.html">Chart JS</a></li>
                                            <li><a href="chartjs2.html">Chart JS2</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                                            <li><a href="fixed_footer.html">Fixed Footer</a></li>
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
                                        Izaz Alchiya
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="javascript:;"> Profile</a></li>


                                        <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                </li>

                                <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge bg-green">1</span>
                                    </a>
                                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                        <li>
                                            <a>

                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
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
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div style="text-align: center">
                        <h1><b> "Product Gallery"</b> </h1>
                        <hr>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_content">
                                    <div class="row">
                                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                            <b><ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                                <li role="presentation" style="width: 370px;text-align: center" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">LED</a>
                                                </li>
                                                <li role="presentation" style="width: 370px;text-align: center" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">SOUND</a>
                                                </li>
                                                <li role="presentation" style="width: 370px;text-align: center" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">VENUE</a>
                                                </li>
                                                
                                                </ul></b>
                                            <div id="myTabContent" class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                                    <br>
                                                    <?php
                                                    $con = mysqli_connect("localhost", "root", "root", "mgdigital");
                                                    $dis = mysqli_query($con, "select photo,P_name,P_desc from tbl_add_product join tbl_product_photo on tbl_add_product.P_id=tbl_product_photo.p_id where tbl_add_product.P_id like 'led%'");

                                                    while ($row = $dis->fetch_assoc()) {
                                                        $path = $row['photo'];
                                                        $p_name = $row['P_name'];
                                                        $p_desc = $row['P_desc'];
                                                        echo "<div class='col-md-55'>"
                                                        . "<div class='thumbnail' style='height:220px'>"
                                                        . "<div class='image view view-first'>"
                                                        . "<img style='height:100%;width: 100%; display: block;' src='$path' height='100' width='200'>"
                                                        . "</div>"
                                                        . "<div class='caption' style='height:100px'>
                                                    <p id='pname' name='nme[]'>Name: <b> $p_name</b></p>
                                                        
                                                     <p>Description: <b>$p_desc</b></p>
                                                     </div>
                                                     </div>
                                                     
                                                    </div>";
                                                    }
                                                    ?>  
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                                    <br>
                                                    <?php
                                                    $con = mysqli_connect("localhost", "root", "root", "mgdigital");
                                                    $dis = mysqli_query($con, "select photo,P_name,P_desc from tbl_add_product join tbl_product_photo on tbl_add_product.P_id=tbl_product_photo.p_id where tbl_add_product.P_id like 'sound%'");

                                                    while ($row = $dis->fetch_assoc()) {
                                                        $path = $row['photo'];
                                                        $p_name = $row['P_name'];
                                                        $p_desc = $row['P_desc'];
                                                        echo "<div class='col-md-55'>"
                                                        . "<div class='thumbnail' style='height:220px'>"
                                                        . "<div class='image view view-first'>"
                                                        . "<img style='height:100%;width: 100%; display: block;' src='$path' height='100' width='200'>"
                                                        . "</div>"
                                                        . "<div class='caption' style='height:100px'>
                                                    <p id='pname' name='nme[]'>Name: <b> $p_name</b></p>
                                                        
                                                     <p>Description: <b>$p_desc</b></p>
                                                     </div>
                                                     </div>
                                                     
                                                    </div>";
                                                    }
                                                    ?>  
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                                    <br>
                                                    <?php
                                                    $con = mysqli_connect("localhost", "root", "root", "mgdigital");
                                                    $dis = mysqli_query($con, "select photo,P_name,P_desc from tbl_add_product join tbl_product_photo on tbl_add_product.P_id=tbl_product_photo.p_id where tbl_add_product.P_id like 'venue%'");

                                                    while ($row = $dis->fetch_assoc()) {
                                                        $path = $row['photo'];
                                                        $p_name = $row['P_name'];
                                                        $p_desc = $row['P_desc'];
                                                        echo "<div class='col-md-55'>"
                                                        . "<div class='thumbnail' style='height:220px'>"
                                                        . "<div class='image view view-first'>"
                                                        . "<img style='height:100%;width: 100%; display: block;' src='$path' height='100' width='200'>"
                                                        . "</div>"
                                                        . "<div class='caption' style='height:100px'>
                                                    <p id='pname' name='nme[]'>Name: <b> $p_name</b></p>
                                                        
                                                     <p>Description: <b>$p_desc</b></p>
                                                     </div>
                                                     </div>
                                                     
                                                    </div>";
                                                    }
                                                    ?>  </div>
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
                        &COPY; Copyright M.G.Digital
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
            <!-- modal for image-->
            <div class="modal fade" id="izaz-images">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <img src='' height="100%" width="100%" id='model-img'>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="JS/jquery.min.js" type="text/javascript"></script>

        <script src="JS/bootstrap.min.js" type="text/javascript"></script>
        <script src="JS/custom.min.js" type="text/javascript"></script>
        <script>
            $(window).load(function () {
                $('img').on('click', function () {
                    var src1 = $(this).attr('src');
                    var name = $('.caption #pname').index();
                    
                    $("#model-img").attr('src', src1);
                    $("#izaz-images").modal('show');
                });
            });
        </script>
    </body>
</html>