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
.td
{
white-space:pre
}

.pricing-table
{
    margin-bottom: 50px;
}
input{
    padding: 3px,1px;
}
</style>


<style>
table {
      margin-right: 20px;
     margin-left: 30px;
    margin-bottom: 100px;
    border-collapse: collapse;
    width: 80%;
   
}

th, td {
    padding: 20px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:#f5f5f5}


input[type=submit] {
    background-color: #4CAF50;
    width: 50%;
    border: none;
    color: white;
   padding: 4px 8px;
    text-decoration: none;
    margin: 2px 1px;
    cursor: pointer;
}
</style>




<style>
button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 30px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

button.accordion:after {
    content: 'SEE STEPS  \02795';
    font-size: 30px;
    color: #777;
    float: right;
    margin-left: 10px;
}

button.accordion.active:after {
    content: "SEE STEPS  \2796";
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: 0.6s ease-in-out;
    opacity: 0;
}

div.panel.show {
    opacity: 1;
    max-height: 5000px;  
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


 $trainname = $_GET['trainname'];
    $src = $_GET['source'];
     $des = $_GET['destination'];
    
  


?>




<section id="page-header" class="section background">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="c1 breadcrumb text-left">
                        <li><a href="index.php">Home</a></li>
                        <li>Search Result for <?php echo $trainname?></li>
                    </ul>
                    <h3><?php echo $trainname?></h3>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

     <section class="section clearfix">
        <div class="container">
            <div class="row">
              <!--  <div id="fullwidth1" class="col-md-3 col-sm-3 col-xs-12">





 <form action="counters_filter.php" method="post">
          
           
           <h4><strong>FILTER:</strong></h4>
            <h5>Order By Schedule:</h5>
            <input type="submit"  name="ASC" value="Ascending"><br><br>
            <input type="submit" name="DESC" value="Descending"><br><br>
             <h5>Order By Price:</h5>
             <input type="submit"  name="pASC" value="Ascending" ><br><br>
            <input type="submit" name="pDESC" value="Descending"><br><br>

            <input type="hidden" name="s" value="<?php echo $src; ?>" />
            <input type="hidden" name="d" value="<?php echo $des; ?>" />
            <input type="hidden" name="b" value="<?php echo $trainname; ?>" />
   

          </form>-->




        
      </div>

      <div  id="fullwidth" class="col-md-12 col-sm-12 col-xs-12" style="overflow-x:auto;">
     




<?php

$sql = "SELECT *FROM train where source ='$src' and train_name='$trainname' and destination= '$des' ";


$result = $con->query($sql);


if ($result->num_rows > 0) {
     echo "<table>
     <tr>
     <th><strong>Source</th>
     <th><strong>Destination</strong></th>
      <th><strong>Train name</strong></th>
     <th><strong>Station Name</strong></th>
     
     
       <th><strong>Schedule</strong></th>
<th><strong>Station Contact</strong></th>
     <th><strong>Ticket Cost</strong></th>
 <th><strong>Journey Duration</strong></th>
     
     </tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr>





         <td>" . $row["source"]. "</td>
         <td>" . $row["destination"] ."</td>
          <td>" . $row["train_name"]. " </td>
         <td>" . $row["station_name1"]. "<br>
              " . $row["station_address1"]. "
       

       <br>" . $row["station_name2"]. "
  <br>" . $row["station_address2"]. "


        
      
     

         </td>
    
           <td>" . $row["schedule"]. "</td>
           <td> <li>" . $row["station_contact"]. "</li></td>
            <td>" . $row["ticket_cost"]. "</td>
 <td>" . $row["journey_duration"]. "</td>
         
         </tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$con->close();

?>


                </div><!-- end fullwidth -->








            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->




<section class="section fullscreen background parallax" style="background-image:url('upload/1.jpg')" data-img-width="1920" data-img-height="1133" data-diff="100">
     <div class="col-md-7 col-xs-12">
                    <div class="home-message">
                        <h1> Want to buy tickets?</h1>
                        <h3 style = "color: #000000;">Well! You can buy tickets by sending sms</h3>
                        
                    </div><!-- end homemessage -->
                </div><!-- end col -->            



</section>

<section>

<button class="accordion">GET YOUR TICKETS IN SOME SIMPLE STEPS</button>
<div id="foo" class="panel">
    <div class="container-fluid">
  <h1></h1>
  <p style = "margin-top:50px; margin-bottom:50px;">For getting this service you have to complete registration. For registration go to your message option and type <strong>"TKET"</strong>  and send to <strong>1200</strong>. After completing registration
   you will receive a four digit pin number. Then you have to refill money. Now using this following step you can buy your ticket. This service is only for Grameenphone and Banglalink users only. </p>

  <div class="row">


    <div class="col-xs-12 col-sm-6" style="background-color:lavender;">
     <h3 style = "margin-top:20px;"> Step 1</h3>
     <img src="upload/p1.png" alt="step1" class="img-responsive" width="300" height="200">
     
    </div>


 <div class="clearfix visible-xs"></div>

    <div class="col-xs-12 col-sm-6" style="background-color:lavender;">
         <h3 style = "margin-top:20px;"> Step 2</h3>
 <img src="upload/p2.png" alt="step1" class="img-responsive" width="300" height="200">
     

    </div>
    
    
  </div> <!--row end -->
  <div class="row">

    <div class="col-xs-12 col-sm-6" style="background-color:lavender;">
     <h3 style = "margin-top:20px;"> Step 3</h3>
     <img src="upload/p3.png" alt="step1" class="img-responsive" width="300" height="200">
     
    </div>

 <div class="clearfix visible-xs"></div>

    <div class="col-xs-12 col-sm-6" style="background-color:lavender;">
         <h3 style = "margin-top:20px;"> Step 4</h3>
 <img src="upload/p4.png" alt="step1" class="img-responsive" width="300" height="200">
     

    </div>


</div><!--row end -->

 <div class="row">

    <div class="col-xs-12 col-sm-6" style="background-color:lavender;">
     <h3 style = "margin-top:20px;"> Step 5</h3>
     <img src="upload/p5.png" alt="step1" class="img-responsive" width="300" height="200">
     
    </div>

 <div class="clearfix visible-xs"></div>

    <div class="col-xs-12 col-sm-6" style="background-color:lavender;">
         <h3 style = "margin-top:20px;"> Step 6</h3>
 <img src="upload/p6.png" alt="step1" class="img-responsive" width="300" height="200">
     

    </div>


</div><!--row end -->

 <div class="row">

    <div class="col-xs-12 col-sm-6" style="background-color:lavender;">
     <h3 style = "margin-top:20px;"> Step 7</h3>
     <img src="upload/p7.png" alt="step1" class="img-responsive" width="300" height="200">
     
    </div>

 <div class="clearfix visible-xs"></div>

    <div class="col-xs-12 col-sm-6" style="background-color:lavender;">
         <h3 style = "margin-top:20px;"> Step 8</h3>
 <img src="upload/p8.png" alt="step1" class="img-responsive" width="300" height="200">
     

    </div>


</div><!--row end -->



</div> <!--container end-->


</div> <!--foo end-->

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>



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

<!-- Mirrored from trendingtemplates.com/demos/trips/shortcodes-pricing-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Apr 2016 19:24:53 GMT -->
</html>