

<!DOCTYPE html>
<?php
$con = mysqli_connect("localhost", "root", "root", "mgdigital");


if (isset($_POST['btn_upload'])) {
    $name = $_POST['txtname'];
    $desc = $_POST['txtdesc'];
    $price = $_POST['txtprice'];
    $id = "sound" . $name;
    $filetmp = $_FILES["file_img"]["tmp_name"];
        $filename = $_FILES["file_img"]["name"];
        $filepath = "pics/" . $filename;
        echo $filepath;

    $query = "insert into tbl_add_product values('$id','$name','$desc','$price')";
    if (mysqli_query($con, $query)) {
        
        move_uploaded_file($filetmp, $filepath);-
        $query1 = "insert into tbl_product_photo (p_id,photo,event_id)   values ('$id','$filepath',852)";
        echo "helllo";
        
        if (mysqli_query($con, $query1)) {
            echo "<h3>Successfully added.....</h3>";
        }
 else {
     echo mysqli_error($con);
 }
    } 
    else {
        echo "error..";
    }
}




$con->close();
?>
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
        <!-- NProgress -->

        <link href="CSS/nprogress.css" rel="stylesheet" type="text/css"/>
        <!-- jQuery custom content scroller -->
        <!-- Custom Theme Style -->

        <link href="CSS/custom.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col menu_fixed">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="Admin_dashboard.php" class="site_title"><i class="fa fa-paw"></i> <span>M.G.Digital</span></a>
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
                                            <li><a href="venue_type.php">Venue Type</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="general_elements.html">General Elements</a></li>

                                        </ul>
                                    </li>
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
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Add Sound Products</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form method="post" action="sound_product.php" enctype="multipart/form-data" class="form-horizontal form-label-left">
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="file_img">Product Images
                                    </label>

                                    <input  name="file_img" type="file">

                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Name
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input required=""  class="form-control col-md-7 col-xs-12"  name="txtname" placeholder="e.g. Curve LED" type="text">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Description
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea required=""  name="txtdesc" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Price
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input name="txtprice" required="" class="form-control col-md-7 col-xs-12"  placeholder="e.g. 20000"  type="number">
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <input type="reset" class="btn btn-primary" value="Cancel">

                                        <input type="submit" class="btn btn-success" name="btn_upload" id="btn_upload" value="submit" >
                                    </div>
                                </div>
                            </form>

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
        </div>  
        <script src="JS/jquery.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->

        <script src="JS/bootstrap.min.js" type="text/javascript"></script>



        <script src="JS/custom.min.js" type="text/javascript"></script>
    </body>

</html>
