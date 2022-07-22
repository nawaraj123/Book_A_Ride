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
<title>Conform Booking</title>

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
    <li><a href="index.php">Home</a></li>
    <li><a href="booking.php" class="active">Booking Management </a></li>
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
    <div class="col-md-10 admin-nm">
      <ul>
        <li><a href="new-booking.php" class="green active">New Booking</a></li>
        <li><a href="general-booking.php" class="green">General Bookings</a></li>
        <li><a href="corporate-booking.php" class="green">Corporate Bookings</a></li>
        <li><a href="conform-booking.php" class="hg">Conform Booking</a></li>
        <li><a href="cancel-booking.php" class="yellow">Cancel Booking</a></li>
        <li><a href="delete-booking.php" class="red">Delete Booking</a></li>
      </ul>
    </div>
    <div class="clearfix"></div>
    <div class="new-book">
    <form>
      <p>
        <label>Select Client/Member</label>
        <select>
          <option value="james">James</option>
          <option value="joseph">Joseph</option>
        </select>
      </p>
      <p>
        <label>Pick up Address</label>
        <input type="text" placeholder="Downtown" name="">
      </p>
      <p>
        <label>Drop Off Address</label>
        <input type="text" placeholder="Drop Off Location" name="">
      </p>
      <p>
        <label>Special Instructions</label>
        <textarea placeholder="Special Instructions"></textarea>
      </p>
      <p>Payment Method <br>
      <div class="rd">
        <input type="radio" > &nbsp; <label>Pay cash to driver</label>
      </div>
      <div class="rd">
        <input type="radio">
        &nbsp;
        <label> Pay by Card/Paypal</label>
      </div>

      </p>
      <p class="click-but">
        <input type="button" class="but" value="Conform this Booking">

        <input type="button" class="but" value="Edit this Booking">
      </p>
    </form>
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