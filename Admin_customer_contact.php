<?php$con = mysqli_connect("localhost", "root", "root", "mgdigital");
?>
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
                                    </li>

                                    <li><a href="Admin_customer_contact.php"><i class="fa fa-table"></i>Customer Contacts</a>
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
                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Customer Contacts</h3>
                            </div>

                            <div class="title_right">
                                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                    <form method="post">
                                        <div class="input-group">

                                            <input type="text" name="txtsearch" class="form-control" placeholder="Search for...">
                                            <span class="input-group-btn">
                                                <!--<button name="con_search" class="btn btn-default" type="button">Go!</button>-->
                                                <input type="submit" name="btn_search" class="btn btn-default" value="Go!">
                                            </span>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="x_panel">
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">

                                            </div>

                                            <div class="clearfix"></div>
                                            <?php
                                            if (isset($_POST['btn_search'])) {
                                                echo "hello";
                                                $sear = $_POST['txtsearch'];
                                                $que = "";
                                                $res1 = mysqli_query($con, "select * from tbl_client_data where c_username like '$sear'");

                                                if (mysqli_num_rows($res1) > 0) {
                                                    while ($row = mysqli_fetch_row($res1)) {
                                                        echo "$row[0]";
                                                        echo "$row[1]";
                                                        echo "$row[2]";
                                                    }
                                                }
                                                else
                                                {
                                                    echo 'no data...';
                                                }
                                            }

                                      /*      
                                            $sql = "SELECT * FROM tbl_client_data ORDER BY c_name";

                                            if ($result = mysqli_query($con, $sql)) {

                                                while ($row = mysqli_fetch_row($result)) {

                                                    echo "
                            <div class='col-md-4 col-sm-4 col-xs-12 profile_details'>
                               <div class='well profile_view'>
                                    <div class='col-sm-12'>
                                    <h3 class='breif'> Id:<b> $row[0] </b></h3>  
                                         
                                    <h2>User Name: <b>$row[1]</b></h2><hr>
                                    <p><i class='fa fa-mail-forward'></i> Email: <strong> $row[2] </strong></p>
                                    <ul class='list-unstyled'>
                                        <li><i class='fa fa-building'></i> Address: <b>$row[6]</b> </li><br>
                                        <li><i class='fa fa-phone'></i> Phone #: <b>$row[3]</b> </li>
                                    </ul>                                
                            </div>
                            
                            <div class='col-xs-12 bottom text-center'>
                                <div class='col-xs-12 col-sm-6 emphasis'>
                                     <button type='button' class='btn btn-danger btn-xs'>
                                        <i class='fa fa-remove'> </i> Remove Customer
                                    </button>
                                </div>
                                <div class='col-xs-12 col-sm-6 emphasis'>
                                    <button type='button' class='btn btn-success btn-xs'> <i class='fa fa-user'>
                                        </i> <i class='fa fa-comments-o'></i> </button>
                                    <button type='button' class='btn btn-primary btn-xs' id='$row[0]' onclick='editdata();' name='$row[0]'>
                                        <i class='fa fa-user'> </i> Edit Profile
                                    </button>
                                </div>
                            </div>
                        </div>
                        </div>";
                                                }
                                            }*/
                                            ?>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        &COPY; Copyright M.G.Digital
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>
        <script src="JS/jquery.min.js" type="text/javascript"></script>

        <script src="JS/bootstrap.min.js" type="text/javascript"></script>
        <script src="JS/custom.min.js" type="text/javascript"></script>
        <script>
            $(document).on('click', '.emphasis button', function () {
                var variable = $(this).attr('id');
                alert(variable);
            });
        </script>
        <?php
        ?>

    </body>
</html>
