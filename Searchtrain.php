<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from trendingtemplates.com/demos/trips/shortcodes-pricing-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Apr 2016 19:24:53 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

      <title>Make Long Trip Easy</title>

    <!-- Favicons -->
   <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon"  />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Default Styles -->
    <link href="style.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link href="rs-plugin/css/settings.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
.pricing-table
{
    margin-bottom: 50px;
}
</style>

</head>
<body>



    
</head>
<body>

<div id="loader">
    <div class="loader-container">
         <h3 class="loader-back-text"><img src="images/train9.gif" alt="" class="loader"></h3>
    </div>
</div>

<div id="wrapper">
    <header class="header">
        <div class="menu-container">
            <div class="container">
                <div class="menu-wrapper">
                    <nav id="navigation" class="navbar" role="navigation">
                        <div class="navbar-inner">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="icon-menu27"></i>
                                </button>
                                <a id="brand" class="clearfix navbar-brand" href="index.php"><h2 style= "color:#000000">make long trip easy</h2></a>
                            </div><!-- end navbar-header -->





                            <div id="navbar-collapse" class="navbar-right navbar-collapse collapse clearfix">
                                <ul class="nav navbar-nav yamm">
                                   <li><a href="index.php">HOME</a></li>
                                                                      <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact</a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="counter_contacts.php">Bus</a></li>
                                            <li><a href="counter_contact_train.php">Train</a></li>
                                           
                                        </ul>
                                    </li>
                                                                   </ul><!-- end navbar-right -->
                            </div><!-- end navbar-callopse -->
                        </div><!-- end navbar-inner -->
                    </nav><!-- end navigation -->
                </div><!-- menu wrapper -->
            </div><!-- end container -->
        </div><!-- end menu-container -->
       
    </header><!-- end header -->





<?php
	/*
		author: Belal Khan 
		website: https://www.simplifiedcoding.net
		
		My Database is androiddb 
		you need to change the database name rest the things are default if you are using wamp or xampp server
		You may need to change the host user name or password if you have changed the defaults in your server
	*/
	
	//Defining Constants
		define('SERVER','mysql12.000webhost.com');
	define('USER','a8032605_athaya');
	define('PASS','athaya14');
	define('DB','a8032605_trip');
	
	//Connecting to Database
	$con = mysqli_connect(SERVER,USER,PASS,DB) or die('Unable to Connect');

?>
<?php

$src =  $_POST['src'];
$des = $_POST['des'];




$sql = "SELECT *FROM train where source= '$src' and destination='$des'";


$result = $con->query($sql);

?>

<section id="page-header" class="section background">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="c1 breadcrumb text-left">
                        <li><a href="index.php">Home</a></li>
                        <li>Search Result from <?php echo $src?> to <?php echo $des?></li>
                    </ul>
                    <h3>Train Services</h3>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

     <section class="section clearfix">
        <div class="container">
            <div class="row">
                <div id="fullwidth" class="col-sm-12">


 <?php
if ($result->num_rows > 0) {

      echo '<div class="row">';
     
   
     // output data of each row
     while($row = $result->fetch_assoc()) {
        $train = $row["train_name"];

      
       
     // echo '<a href="display.php?name='. $id.'">link1</a>';

        echo    '<div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="pricing-table">
                                <div class="pricing-table-header">
                                    <h3>' . $row["train_name"]. '</h3>
                                </div><!-- end header -->
                                <div class="pricing-table-body">
                                   
                                    <ul>
                                        <li>' . $row["source"]. '</li>
                                        <li>' . $row["destination"]. '</li>
                                       
                                       
                                        
                                       
                                    </ul>
                                </div><!-- end body -->
                                <div class="pricing-table-footer">

                                   
                                   <h3><a href="counters_train.php?trainname='.$train.'&source='.$src.'&destination='.$des.'" target="_blank">See More</a><h3>
                                </div><!-- end footer -->
                            </div><!-- end pricing-table -->
                        </div><!-- end col -->';
                       

     }
     echo '</div>';

    
} 
else {
     echo "No Train Found";
}






$con->close();
?>


                  




                </div><!-- end fullwidth -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->









    
    <footer class="footer clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-6 col-xs-12 text-center">
                    <div class="flogo">
                        
                    </div><!-- end logo -->
                </div><!-- end col -->
                <div class="col-md-10 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h3>ABOUT</h3>
                        </div><!-- end title -->
                        <div class="textwidget">
                            <p>Welcome to Make Long Trip Easy. You should pass! Our journey isn't as long as the one in The Lord of The Rings, ours started in mid-2016 and since then we hope you will be  with us, helping us grow and become better to the point of finding
                             your right veichle from more than 4 big cities all over Bangladesh.
. </p>
                            <p>Thanks for being with us </p>
                        </div><!-- end textwidget -->
                    </div><!-- end widget -->
                </div><!-- end col -->
               
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end copyrights -->

    <div class="copyrights clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <p>COPYRIGHT MILITARY INSTITUTE OF SCIENCE AND TECHNOLOGY. ALL RIGHT RESERVED</p>
                </div><!-- end col -->

                <div class="col-md-6 text-right">
                    <div class="social-footer">
                        <a href="https://www.facebook.com/" title="Facebook"><i class="icon-facebook"></i></a>
                        <a href="https://twitter.com/" title="Twitter"><i class="icon-twitter"></i></a>
                       
                    </div><!-- end social-footer -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end copyrights -->
</div><!-- end wrapper -->

    <!-- Template core JavaScript's
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/retina.js"></script>
    <script src="js/sidebar.js"></script>
    <script src="js/circle.js"></script>
    <script src="js/progress.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/custom.js"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
    <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="js/revslider.js"></script>

</body>

<!-- Mirrored from trendingtemplates.com/demos/trips/shortcodes-pricing-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Apr 2016 19:24:53 GMT -->
</html>