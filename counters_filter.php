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
<style>
table, th, td {
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
}

</style>
<style> 
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

</head>
<body>



    
</head>
<body>

<div id="loader">
    <div class="loader-container">
         <h3 class="loader-back-text"><img src="images/preloader.gif" alt="" class="loader"></h3>
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


 $busname = $_POST['b'];

    $src = $_POST['s'];
     $des = $_POST['d'];
    



if(isset($_POST['ASC']))
{
    $asc_query = "SELECT * FROM bus where source ='$src' and bus_name='$busname' and destination= '$des' ORDER BY Time1 ASC ";
    $result = executeQuery($asc_query);
}

// Descending Order
elseif (isset ($_POST['DESC'])) 
    {
          $desc_query = "SELECT * FROM bus where source ='$src' and bus_name='$busname' and destination= '$des'ORDER BY Time1 DESC";
          $result = executeQuery($desc_query);
    }
    elseif (isset ($_POST['pASC'])) 
    {
          $desc_query = "SELECT * FROM bus where source ='$src' and bus_name='$busname' and destination= '$des'ORDER BY ticket_cost ASC";
          $result = executeQuery($desc_query);
    }
    elseif (isset ($_POST['pDESC'])) 
    {
          $desc_query = "SELECT * FROM bus where source ='$src' and bus_name='$busname' and destination= '$des'ORDER BY ticket_cost DESC";
          $result = executeQuery($desc_query);
    }
    
    
    // Default Order
 else {
        $default_query = "SELECT * FROM bus";
        $result = executeQuery($default_query);
}

function executeQuery($query)
{

		define('SERVER','mysql12.000webhost.com');
	define('USER','a8032605_athaya');
	define('PASS','athaya14');
	define('DB','a8032605_trip');
	
	//Connecting to Database
	$con = mysqli_connect(SERVER,USER,PASS,DB) or die('Unable to Connect');




    
    $result = mysqli_query($con, $query);
    return $result;
}

?>
<section id="page-header" class="section background">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="c1 breadcrumb text-left">
                        <li><a href="index.php">Home</a></li>
                        <li>Search Result for <?php echo $busname?></li>
                    </ul>
                    <h3><?php echo $busname?></h3>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

   <section class="section clearfix">
        <div class="container">
            <div class="row">
   <div id="fullwidth1" class="col-md-3 col-sm-3 col-xs-12">





<form action="counters_filter.php" method="post">
          
           <h4><strong>FILTER:</strong></h4>
            <h5>Order By Schedule:</h5>

            <input type="submit"  name="ASC" value="Ascending" ><br><br>
            <input type="submit" name="DESC" value="Descending"><br><br>
             <h5>Order By Price:</h5>
             <input type="submit"  name="pASC" value="Ascending" ><br><br>
            <input type="submit" name="pDESC" value="Descending"><br><br>

            <input type="hidden" name="s" value="<?php echo $src; ?>" />
            <input type="hidden" name="d" value="<?php echo $des; ?>" />
            <input type="hidden" name="b" value="<?php echo $busname; ?>" />
   

          </form>
          </div>

            <div  id="fullwidth" class="col-md-9 col-sm-9 col-xs-12" style="overflow-x:auto;">

  
           <table>
                <tr>
                   
     <th><strong>Source</th>
     <th><strong>Destination</strong></th>
      <th><strong>Bus name</strong></th>
     <th><strong>Counter Name</strong></th>
     
     
       <th><strong>Schedule1</strong></th>
        <th><strong>Schedule2</strong></th>
         <th><strong>Schedule3</strong></th>
     <th><strong>Ticket Cost</strong></th>
 <th><strong>Route</strong></th>


              
                <!-- populate table from mysql database -->
                <?php while ($row = mysqli_fetch_array($result)):?>
                <tr>
                   
                    <td><?php echo $row["source"];?></td>
                    <td><?php echo $row["destination"]?></td>
                    <td><?php echo $row["bus_name"]?></td>
                     <td><?php echo $row["counter_name"];?>

 <ul>

        <li><?php echo $row["counter_address"];?></li>
        <li><?php echo $row["counter_contact"];?></li>
      
      </ul>


                     </td>
                  
                    <td><?php echo $row["Time1"];?></td>
                    <td><?php echo $row["Time2"];?></td>
                     <td><?php echo $row["Time3"];?></td>
                     <td><?php echo $row["ticket_cost"];?></td>
 <td><?php echo $row["Route"];?></td>

                   
                <?php endwhile;?>
            </table>
     </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->



<section style= "margin-left:30px;margin-right:40px; margin-bottom:50px; margin-top:50px;">
<div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12">
                            <h3>  Book ticket from busbd.com</h3>
                            <p>You can buy tickets from home now from  Busbd.com website. you can order tickets.To know more click the link below.</P>

                            <br>

                            <!--<a href="https://www.shohoz.com/" class="btn btn-primary btn-lg btn-block">Visit busbd.com websties</a>-->
                             <a href="http://busbd.com.bd/" class="btn btn-primary btn-lg btn-block">Visit busbd.com</a>

                        </div><!-- end col -->
  <div class="col-md-6 col-sm-6 col-xs-12">
                            <h3>  Book ticket by making a call</h3>
                            <p>You can buy tickets from sohoj.com by making a simple phone call. For this you have to dial 16374.This is for Grameen,Teletalk,Banglalink,Robi and Airtel user </P>

                            <br>

                            <h2>Call 16374</h2>
                        </div><!-- end col -->

                    </div><!-- end row -->

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