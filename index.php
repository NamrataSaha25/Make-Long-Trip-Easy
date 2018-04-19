<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->



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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

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




    
</head>
<body>

<div id="loader">
    <div class="loader-container">
        <h3 class="loader-back-text"><img src="images/preloader.gif" alt="" class="loader"></h3>
    </div>
</div>

<div id="wrapper">
    
    
    <header class="header fixedheader nobg">
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
                                <a id="brand" class="clearfix navbar-brand" href="index.php"><img src="images/favicon.jpg" alt="Trips" style= "float: left; height: 70px; width:60px;" ><h2 style= " top: 18px;
  left: 20px; color:#ffffff">make long trip easy</h2></a>
                            </div><!-- end navbar-header -->
                            <div id="navbar-collapse" class="navbar-right navbar-collapse collapse clearfix">
                                <ul class="nav navbar-nav yamm">
                                    <li class =dropdown>
                                        <a href="#" class="active dropdown-toggle" data-toggle="dropdown">HOME</a>
                                     
                                    </li><!-- end yamm-fw -->
                                    <!--<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Tickets</a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="ticketbus.php">Bus</a></li>
                                           <!-- <li><a href="ticket_train.php">Train</a></li>
                                           
                                        </ul>
                                    </li>-->
                                   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact</a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="counter_contacts.php">Bus</a></li>
                                            <li><a href="counter_contact_train.php">Train</a></li>
                                           
                                        </ul>
                                    </li>


                                    <li class="sidebar-dropper"><a data-toggle="sidebar" data-target=".sidebar-right" class="noborder" href="#"><i class="icon-menu27"></i></a></li>
                                </ul><!-- end navbar-right -->
                            </div><!-- end navbar-callopse -->
                        </div><!-- end navbar-inner -->
                    </nav><!-- end navigation -->
                </div><!-- menu wrapper -->
            </div><!-- end container -->
        </div><!-- end menu-container -->
        <div class="sidebar-menu-container">
            <div class="col-sm-2 col-md-2 sidebar sidebar-right sidebar-animate">
                <a data-toggle="sidebar" data-target=".sidebar-right" class="text-right" href="#"><i class="icon-wrong6-1"></i></a>
               <h3>MAKE LONG TRIP EASY</h3>
                <ul class="nav navbar-stacked">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#sec1">Available Bus</a></li>
                    <li><a href="#sec2">Available Stations</a></li>
                    <li><a href="#sec3">Why choose Make Long Trip Easy</a></li>
                    <li><a href="#sec4">About Us</a></li>
                  


                   
                   
                </ul>
            </div>
        </div><!-- end sidebar menu -->
    </header><!-- end header -->

    <section class="section fullscreen background parallax" style="background-image:url('upload/back.jpg');" data-img-width="1920" data-img-height="1133" data-diff="100">
        <div class="container">
            <div class="row homeform">
                <div class="col-md-5 col-xs-12">
                    <div class="home-form">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab"><i class="fa fa-bus" aria-hidden="true"></i></a></li>
                            <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab"><i class="fa fa-train" aria-hidden="true"></i></a></li>

                             
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tab_01">
                                <h6>WHERE WOULD YOU LIKE TO GO?</h6>
                                
                                <form  method="post" class="bookform form-inline row" name="display"  action="Searchbus.php" >
                                    
                                    <div class="form-group make-margin col-md-6 col-sm-6 col-xs-12">
                                        <div class="dropdown">
                                         <select class="selectpicker" data-style="btn-white" name="src">
                                                <option>Source</option>
                                                <option>Dhaka</option>
                                                <option>Chittagong</option>
                                               
                                                <option>Rajshahi</option>
                                               
                                            </select>
  
                                        </div>
                                    </div>
                                    <div class="form-group make-margin col-md-6 col-sm-6 col-xs-12">
                                        <div class="dropdown">
                                             <select class="selectpicker" data-style="btn-white" name="des">
                                                <option>Destination</option>
                                                <option>Dhaka</option>
                                                <option>Chittagong</option>
                                               
                                                  <option>Rajshahi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                         
                                        <button type="submit" class="btn btn-primary btn-block"><i class="icon-search"></i> SEARCH NOW</button>
                                    </div>
                                </form>
                            </div><!-- end tab-pane -->

                            <div role="tabpanel" class="tab-pane" id="tab_02">
                                <h6>WHERE WOULD YOU LIKE TO GO?</h6>
                                <form method="post" class="bookform form-inline row" name="display"  action="Searchtrain.php" >
                                    
                                    <div class="form-group make-margin col-md-6 col-sm-6 col-xs-12">
                                        <div class="dropdown">
                                            <select class="selectpicker" data-style="btn-white" name="src">
                                               <option>Source</option>
                                                <option>Dhaka</option>
                                                <option>Chittagong</option>
                                                
                                                <option>Rajshahi</option>
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group make-margin col-md-6 col-sm-6 col-xs-12">
                                        <div class="dropdown">
                                            <select class="selectpicker" data-style="btn-white" name="des">
                                               <option>Destination</option>
                                                <option>Dhaka</option>
                                                <option>Chittagong</option>
                                              
                                                  <option>Rajshahi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <button type="submit" class="btn btn-primary btn-block"><i class="icon-search"></i> SEARCH NOW</button>
                                    </div>
                                </form>
                            </div><!-- end tab-pane -->
                 </div><!-- end tab-content -->
                    </div><!-- end homeform -->
                </div><!-- end col -->

                <div class="col-md-7 col-xs-12">
                    <div class="home-message">
                        <h1>LET’S DISCOVER <br>BANGLADESH TOGETHER</h1>
                       
                        
                    </div><!-- end homemessage -->
                </div><!-- end col -->            
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

   



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



$sql = "SELECT distinct bus_name from bus order by bus_name";


$result = $con->query($sql);

?>



      <section  id ="sec1" class="section clearfix">
        <div class="container">
            <div class="row">
                <div id="fullwidth" class="col-sm-12">
                    <h2 style = "text-align: center;"><strong>Available Buses</strong></h2>


 <?php
if ($result->num_rows > 0) {
    $x = 1; 

      echo ' <div class="row">';
       
   
     // output data of each row
     while($row = $result->fetch_assoc()) {

       
      
       
     // echo '<a href="display.php?name='. $id.'">link1</a>';

        echo    '<div class="col-sm-4">
                            <ol class="c2">
                                <li><h6 class="sansserif"><span>'.$x.'</span>' . $row["bus_name"]. ' </h6></li>
                               
                               
                            </ol>
                        </div><!-- end col -->';
                        $x++;
                       

     }
     echo '</div>';

    
} 
else {
     echo "0 results";
}






$con->close();
?>


                  




                </div><!-- end fullwidth -->
            </div><!-- end row -->
        </div><!-- end container -->





</section>


<?php
	
	
	//Defining Constants
		define('SERVER','mysql12.000webhost.com');
	define('USER','a8032605_athaya');
	define('PASS','athaya14');
	define('DB','a8032605_trip');
	
	//Connecting to Database
	$con = mysqli_connect(SERVER,USER,PASS,DB) or die('Unable to Connect');

?>
<?php


$sql = "SELECT distinct train_name from train order by train_name";


$result = $con->query($sql);

?>



      <section id ="sec2" class="section clearfix">
        <div class="container">
            <div class="row">
                <div id="fullwidth" class="col-sm-12">
                    <h2 style = "text-align: center;"><strong>Available Trains</strong></h2>


 <?php
if ($result->num_rows > 0) {
    $x = 1; 

      echo ' <div class="row">';
       
   
     // output data of each row
     while($row = $result->fetch_assoc()) {

       
      
       
     // echo '<a href="display.php?name='. $id.'">link1</a>';

        echo    '<div class="col-sm-4">
                            <ol class="c2">
                                <li><h6 class="sansserif"><span>'.$x.'</span>' . $row["train_name"]. '  Express </h6></li>
                               
                               
                            </ol>
                        </div><!-- end col -->';
                        $x++;
                       

     }
     echo '</div>';

    
} 
else {
     echo "0 results";
}






$con->close();
?>


                  




                </div><!-- end fullwidth -->
            </div><!-- end row -->
        </div><!-- end container -->





</section>






   
    <section  id ="sec3" class="section fullscreen background parallax" style="background-image:url('upload/parallax_03.jpg');" data-img-width="1920" data-img-height="586" data-diff="10">
        <div class="container">
            <div id="testimonials">
                <div class="testi-item">
                    <div class="hotel-title text-center">
                        <h2>Why choose Make Long Trip Easy?</h2>
                        <hr>
                        
                        <h4>- Get latest schedule of bus counters and train stations-</h4>
                    </div>
                </div><!-- end testi-item -->

                <div class="testi-item">
                    <div class="hotel-title text-center">
                        <h2>Why choose Make Long Trip Easy?</h2>
                        <hr>
                      
                        <h4>- Get location of Bus counters and stations  -</h4>
                    </div>
                </div><!-- end testi-item -->



                <div class="testi-item">
                    <div class="hotel-title text-center">
                        <h2>Why choose Make Long Trip Easy?</h2>
                        <hr>
                      
                        <h4>- Contact numbers of counters and stations are available -</h4>
                    </div>
                </div><!-- end testi-item -->


                 <div class="testi-item">
                    <div class="hotel-title text-center">
                        <h2>Why choose Make Long Trip Easy?</h2>
                        <hr>
                      
                        <h4>- Ticket booking information -</h4>
                    </div>
                </div><!-- end testi-item -->
            </div><!-- end testimonials -->
        </div><!-- end container -->
    </section><!-- end section -->

   

   <section id ="sec4">



      <div class="row row-padded row-bordered row-centered">
    <div class="col-sm-12">
      <div class="row m-b-lg">
        <div class="col-sm-8 col-sm-offset-2 text-center">
          <h2 
          style="padding-bottom: 20px; margin-top :100px; " ><strong>About us</strong></h2>
          <h4 style="padding-bottom: 100px;" class="m-b-lg">We are students of Military Institute Of Science & Technology studying In Cse department. </h4>
        </div>
      </div>



      <div class="col-md-4 m-b-lg">
          <div class="panel panel-default panel-profile m-b-0">
            <div class="panel-heading">
             <img class="panel-profile-img" src="upload/namrata.JPG" height="350px" width="100%">

            </div>
            <div class="panel-body text-center"
              <h5 class="panel-title"><strong>Namrata Saha</strong></h5>
              <p class="m-b">Studies in CSE . Student id: 201414025</p>
              <a href="https://www.facebook.com/bnamrata.saha"  class="btn btn-primary-outline btn-sm m-b">
                <span class="icon icon-add-user"></span> Facebook
             
              </a>
            </div>
          </div>
        </div>


 <div class="col-md-4 m-b-lg">
          <div class="panel panel-default panel-profile m-b-0">
            <div class="panel-heading">
            <img class="panel-profile-img" src="upload/shorna.jpeg" height="350px" width="100%">

            </div>
            <div class="panel-body text-center">
              <h5 class="panel-title"><strong>Sanjida Akter Sharna</strong></h5>
              <p class="m-b">Studies in CSE . Student id: 201414021</p>
               <a href="https://www.facebook.com/profile.php?id=100010254526951&fref=ts" class="btn btn-primary-outline btn-sm m-b">
                <span class="icon icon-add-user"></span> Facebook
             </a>
            </div>
          </div>
        </div>
       


        <div class="col-md-4 m-b-lg">
          <div class="panel panel-default panel-profile m-b-0">
            <div class="panel-heading">
             <img class="panel-profile-img" src="upload/athaya.JPG" height="350px" width="100%">

            </div>
            <div class="panel-body text-center">
              <h5 class="panel-title"><strong>Tasbiraha Athaya</strong></h5>
              <p class="m-b">Studies in CSE . Student id: 201414014</p>
              <a href="https://www.facebook.com/tasbiraha.athaya?fref=ts"  class="btn btn-primary-outline btn-sm m-b">
                <span class="icon icon-add-user"></span> Facebook
              </a>
            </div>
          </div>
        </div>
   





</section>


   
   
  

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

</html>