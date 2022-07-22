<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes" />
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/bamboo.css">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Welcome to Book A Ride Admin Page</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<nav id="main-nav" class="navigation overflow">
  <ul>
    <li>
      <div class="admin-pic"><img src="images/client.jpg" > <span>Hi! Admin</span></div>
    </li>
    <li><a href="index.php" class="active">HOME</a></li>
    <li><a href="booking.php">Booking Management </a></li>
    <li><a href="assign.php">Assign Job to Driver </a></li>
    <li><a href="invoice.php">Invoice Management </a></li>
    <li><a href="report.php">Report Management </a></li>
    <li><a href="location.php">Location Management </a></li>
    <li><a href="vehicle.php">Vehicle Management </a></li>
    <li><a href="rates.php">Rates Management</a></li>
    <li><a href="vlient.php">Client Management </a></li>
    <li><a href="driver.php">Driver Management </a></li>
  </ul>
</nav>
<div id="container">
  <header class="primary"> <span class="open icon">&#9776;</span>
    <hgroup>
      <div class="col-md-4 icn">
        <ul>
          <li><a href="#"><i class="fa fa-user"></i></a></li>
          <li><a href="#"><i class="fa fa-comment"></i></a></li>
          <li><a href="#"><i class="fa fa-bell"></i> <span>2</span></a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <div class="logo-t"> <i class="fa fa-taxi"></i>
          <h4><span>TAXI/LIMO</span><br>
            BOOKING MANAGEMENT</h4>
        </div>
      </div>
      <div class="col-md-4 search">
        <form>
          <input type="text" name="search" class="ser-box"  placeholder="Search here...">
          <input type="button" class="ser" value="Search">
        </form>
      </div>
    </hgroup>
  </header>
  <section id="scroller" class="overflow">
  <div id="content">
    <div class="col-md-1 edit"> <a href="#"> <i class="fa fa-pencil-square-o"></i></a> <a href="log-out.php"><i class="fa fa-power-off"></i></a> </div>
    <div class="col-md-4 admin-nm"> <img src="images/client.jpg" >
      <h3>ADMIN NAME</h3>
    </div>
    <div class="clearfix"></div>
    <div data-example-id="bordered-table" class="bs-example">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Date</th>
            <th>Booking</th>
            <th>Client Name</th>
            <th>Phone/Call</th>
            <th>Pick Up Date/Time</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">11-03-2015</th>
            <td>NCP-001</td>
            <td>Jack N.</td>
            <td>8557572626</td>
            <td>11-03-2015<br>
              10:30 AM</td>
            <td>Conformed</td>
          </tr>
          <tr>
            <th scope="row"> </th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- Content ends --> 
  
</div>
</section>
</div>
<script src="js/jquery-2.0.0.min.js"></script> 
<script src="js/bamboo.0.1.js"></script> 
<script>
		var site = new Bamboo();
	</script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
</body></html>