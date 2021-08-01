<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<?php
include 'dbconn.php';
$err=0;
$errorname=$errorphone=$erroremail=$errorpassword=$errorgender=$errordob=$errorbio=$errorcity=$errorstate=$errorcountry=$errorabout=$errorcheckbox=$errorcaptcha="";
$name=$phone=$email=$password=$gender=$day=$month=$year=$bio=$captchahid=$city=$state=$country=$about=$checkbox=$z=$captcha="";
$x=rand(0,20);
$y=rand(0,20);
$z=$x+$y;
// if(isset($_POST['submit'])){
	// include_once 'dbconn.php';
			
			
// }
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
// if(isset($_POST['firstname'])){
	$name=($_POST['name']);
	// }
// if(isset($_POST['lastname'])){
	// $lastname=$_POST['lastname'];
	// }
// if(isset($_POST['phone'])){
	$phone=$_POST['phone'];
// }
// if(isset($_POST['email'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
// }
// if(isset($_POST['gender'])){
	// $gender=$_POST['gender'];
// }
// if(isset($_POST['day'])){
	$day=$_POST['day'];
// }
// if(isset($_POST['month'])){
	$month=$_POST['month'];
// }
// if(isset($_POST['year'])){
	$year=$_POST['year'];
// }
// if(isset($_POST['bio'])){
	$bio=$_POST['bio'];
// }
// if(isset($_POST['city'])){
	$city=$_POST['city'];
// }
// if(isset($_POST['state'])){
	$state=$_POST['state'];
// }
// if(isset($_POST['country'])){
	$country=$_POST['country'];
// }
// if(isset($_POST['about'])){
	$about=$_POST['about'];
	$captcha=$_POST['captcha'];
	$captchahid=$_POST['captchahid'];
	// }
// if(isset($_POST['checkbox'])){
	// $checkbox=$_POST['checkbox'];
// }
// if(isset($_POST['firstname'])){
if(empty($name)){
	 $errorname="required";
$err++;
}
// if(isset($_POST['firstname'])){
if(empty($password)){
	 $errorpassword="required";
$err++;
}
	// elseif(!preg_match ("/^[a-zA-z]*$/", $name)){
	 // $errorname="Only alphabets and whitespace are allowed";
// $err++;
	// }
// }	
// if(isset($_POST['lastname'])){
// if(empty($lastname)){
	// $errorlastname="required";
	// $err++;
// }
// elseif (!preg_match ("/^[a-zA-z]*$/", $lastname)){
	// $errorlastname="Only alphabets and whitespace are allowed";
	// $err++;
// }
// }
// if(isset($_POST['phone'])){
if(empty($phone)){
	$errorphone="required";
	$err++;
}
elseif(!preg_match ("/^[0-9]*$/", $phone)){
	$errorphone="Only numeric value is allowed";
	$err++;
}
elseif(strlen($phone)!=10){
	$errorphone="Enter 10 digit number";
	$err++;
	}
	// }
// if(isset($_POST['email'])){
if(empty($email)){
	$erroremail="required";
	$err++;
}
elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
	$erroremail="Enter a valid email";
	$err++;
}
// }
if(isset($_POST['gender'])){
	$gender=$_POST['gender'];
}
else{
	$errorgender="required";
	$err++;
	

}

// if(isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year'])){
if(empty($day)){
	if(empty($month) && empty($year)){
		$errordob="dob is required";
		$err++;
		$dob="";
	}
	elseif(empty($month)){
		$month=$day="-";
		$errordob="day and month is required";
		$err++;
	}
	elseif(empty($year)){
		$month=$year="-";
		$errordob="day and year is required";
		$err++;
	}
	else{
		$day="-";
		$errordob="day is required";
		$err++;
	}
}
elseif(empty($month)){

	if(empty($year)){
		$errordob="month and year is required";
		$err++;
	}
	else{
		$errordob="month is required";
		$err++;
	}
}
elseif(empty($year)){
		$errordob="year is required";
		$err++;
}
// }
// if(isset($_POST['bio'])){
if(empty($bio)){
	$errorbio="required";
	$err++;
}
// }
// if(isset($_POST['city'])){
if(empty($city)){
	$errorcity="required";
	$err++;
}
// }
// if(isset($_POST['state'])){
if(empty($state)){
	$errorstate="required";
	$err++;
}
// }
// if(isset($_POST['country'])){
if(empty($country)){
	$errorcountry="required";
	$err++;
}
// }
// if(isset($_POST['about'])){
if(empty($about)){
	$errorabout="required";
	$err++;
}
// }
// if(isset($_POST['checkbox'])){
	// $checkbox=$_POST['checkbox'];
// }
// else{
	// $errorcheckbox="required";
	// $err++;
// }

if(isset($day) && isset($month) && isset($year)){
$dob=$day."/".$month."/".$year; 
}


 
if(empty($captcha)){
	$errorcaptcha="required";
	$err++;
}
elseif($captcha != $captchahid){
	$errorcaptcha="Worng ans";
	$err++;
}
$query = "select email from userdata where email = '$_POST[email]' ";
					// echo"<pre>";print_r($query);die;
					$query_run = mysqli_query($con,$query);
					$fetch = mysqli_num_rows($query_run);
    if($fetch != 0){
		$erroremail= "email already inserted";
		$err++;
	}
    
					// echo"<pre>";print_r($query_run);die;
					
if ($err == 0){
// if((!empty($firstname)) && (!empty($lastname)) && (!empty($email)) && (!empty($phone)) && (!empty($gender)) && (!empty($day)) && (!empty($bio)) && (!empty($month)) && (!empty($year)) && (!empty($city)) && (!empty($state)) && (!empty($country)) && (!empty($about))){
	
$sql ="INSERT INTO `userdata` (`name`, `email`, `password`, `phone`, `gender`, `DOB`, `bio`, `city`, `state`, `country`, `about`) VALUES ('$name', '$email', '$password', '$phone', '$gender', '$dob', '$bio', '$city', '$state', '$country', '$about')";
	$qry = mysqli_query($con,$sql);
// echo "Success";
// }
// if ($err == 0){
	
}


}

?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="../../index.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
		</li>
            <li class="nav-item">
                    <a href="../examples/login.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Admin Login</p>
                    </a>
                 
              </li>
		
			   <li class="nav-item">
                <a href="user_registration.php" class="nav-link active">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>User Registration</p>
                </a>
              </li>
				<li class="nav-item">
                <a href="userlogin.php" class="nav-link ">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>User login</p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Registration</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Registration</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">User Registration</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <form class="pt-5" method="post" action="">
                   <div class="row">
               <div class="col-md-2 "><label>Name</label></div>
               <div class="col-md-6 mb-3">
                  <input name="name" class="form-control " type="text" placeholder="Name" value="<?php echo $name; ?>">
               </div>
			   <div class="col-md-2 mb-3">
                  <?php echo $errorname ?>
               </div>
            </div>
         
            <div class="row">
               <div class="col-md-2"><label>E-mail</label></div>
               <div class="col-md-6 mb-3">			
                  <input name="email" class="form-control" type="text" placeholder="Your e-mail"
				  value="<?php echo $email; ?>">
               </div>
			    <div class="col-md-2 mb-3">
                  <?php echo $erroremail; ?>
               </div>
            </div>
			 <div class="row">
               <div class="col-md-2"><label>Password</label></div>
               <div class="col-md-6 mb-3">			
                  <input name="password" class="form-control" type="text" placeholder="Enter password"
				  value="<?php echo $password; ?>">
               </div>
			    <div class="col-md-2 mb-3">
                  <?php echo $errorpassword; ?>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2"><label>Phone Number</label></div>
               <div class="col-md-6 mb-3">			
                  <input name="phone" class="form-control" type="tel" placeholder="Your phone number"    value="<?php echo $phone; ?>">       
               </div>
			   <div class="col-md-2 mb-3">
                  <?php echo $errorphone; ?>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2"><label>Gender</label></div>
               <div class="col-md-6 mb-3">
                  <div class="form-check d-inline ">
                     <label class="form-check-label" for="radio1">
                     <input type="radio" class="form-check-input"  name="gender" value="Male"  <?php if (isset($gender) && $gender == "Male") {echo "checked";}?> >Male
                     </label>
                  </div>
                  <div class="form-check d-inline">
                     <label class="form-check-label" for="radio2">
                     <input type="radio" name="gender" value="Female" <?php if (isset($gender) && $gender ==  "Female"){ echo "checked";}?> >Female
                     </label>
                  </div>
				  <div class="form-check d-inline">
                     <label class="form-check-label" for="radio3">
                     <input type="radio" class="form-check-input"  name="gender" value="Other"  <?php if (isset($gender) && $gender == "Other") echo "checked";?> >Other
                     </label>
                  </div>
               </div>
			   <div class="col-md-2 mb-3">
                  <?php echo $errorgender; ?>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2"><label>Date-Of-Birthday</label></div>
               <div class="col-md-2 mb-3">
                  <div class="item-input-wrap input-dropdown-wrap ">
                     <select name="day" class="form-control" placeholder="Please choose...">
                        <option value="">Please choose...</option>
                        <option <?php if (isset($day) && $day == "01"){ echo "selected";}?> value="01">01</option>
                        <option <?php if (isset($day) && $day == "02"){ echo "selected";}?> value="02">02</option>
                        <option <?php if (isset($day) && $day == "03"){ echo "selected";}?> value="03">03</option>
                        <option <?php if (isset($day) && $day == "04"){ echo "selected";}?> value="04">04</option>
                        <option <?php if (isset($day) && $day == "05"){ echo "selected";}?> value="05">05</option>
                        <option <?php if (isset($day) && $day == "06"){ echo "selected";}?> value="06">06</option>
                        <option <?php if (isset($day) && $day == "07"){ echo "selected";}?> value="07">07</option>
                        <option <?php if (isset($day) && $day == "08"){ echo "selected";}?> value="08">08</option>
                        <option <?php if (isset($day) && $day == "09"){ echo "selected";}?> value="09">09</option>
                        <option <?php if (isset($day) && $day == "10"){ echo "selected";}?> value="10">10</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-2 mb-3">
                  <div class="item-input-wrap input-dropdown-wrap ">
                     <select name="month" class="form-control" placeholder="Please choose...">
                         <option value="">Please choose...</option>
						<option <?php if (isset($month) && $month == "Jan"){ echo "selected";}?> value="Jan">Jan</option>
                        <option <?php if (isset($month) && $month == "Feb"){ echo "selected";}?> value="Feb">Feb</option>
                        <option <?php if (isset($month) && $month == "Mar"){ echo "selected";}?> value="Mar">Mar</option>
                        <option <?php if (isset($month) && $month == "Apr"){ echo "selected";}?> value="Apr">Apr</option>
                        <option <?php if (isset($month) && $month == "May"){ echo "selected";}?> value="May">May</option>
                        <option <?php if (isset($month) && $month == "Jun"){ echo "selected";}?> value="Jun">Jun</option>
                        <option <?php if (isset($month) && $month == "Jul"){ echo "selected";}?> value="Jul">Jul</option>
                        <option <?php if (isset($month) && $month == "Aag"){ echo "selected";}?> value="Aag">Aag</option>
                        <option <?php if (isset($month) && $month == "Sep"){ echo "selected";}?> value="Sep">Sep</option>
                        <option <?php if (isset($month) && $month == "Oct"){ echo "selected";}?> value="Oct">Oct</option>
                        <option <?php if (isset($month) && $month == "Nov"){ echo "selected";}?> value="Nov">Nov</option>
                        <option <?php if (isset($month) && $month == "Dec"){ echo "selected";}?> value="Dec">Dec</option>
                     </select>
                  </div>
               </div>
			   
               <div class="col-md-2 mb-3">
                  <div class="item-input-wrap input-dropdown-wrap ">
                     <select name="year" class="form-control" placeholder="Please choose...">
                         <option value="">Please choose...</option>
						<option	<?php if (isset($year) && $year == "2000"){ echo "selected";}?> value="2000">2000</option>
                        <option	<?php if (isset($year) && $year == "2001"){ echo "selected";}?> value="2001">2001</option>
                        <option	<?php if (isset($year) && $year == "2002"){ echo "selected";}?> value="2002">2002</option>
                        <option	<?php if (isset($year) && $year == "2003"){ echo "selected";}?> value="2003">2003</option>
                        <option	<?php if (isset($year) && $year == "2004"){ echo "selected";}?> value="2004">2004</option>
                        <option	<?php if (isset($year) && $year == "2005"){ echo "selected";}?> value="2005">2005</option>
                        <option	<?php if (isset($year) && $year == "2006"){ echo "selected";}?> value="2006">2006</option>
                        <option	<?php if (isset($year) && $year == "2007"){ echo "selected";}?> value="2007">2007</option>
                        <option	<?php if (isset($year) && $year == "2008"){ echo "selected";}?> value="2008">2008</option>
                        <option	<?php if (isset($year) && $year == "2009"){ echo "selected";}?> value="2009">2009</option>
                     </select>
                  </div>
               </div>
			   <div class="col-md-2 mb-3">
                  <?php echo $errordob; ?>
               </div>
			   
            </div>
            <div class="row">
               <div class="col-md-2"><label>Address</label></div>
               <div class="col-md-6 mb-3">
                  <textarea name="bio" class="form-control" placeholder="Address"><?php echo $bio ?></textarea>
               </div>
			   <div class="col-md-2 mb-3">
                  <?php echo $errorbio; ?>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2"><label>City</label></div>
               <div class="col-md-6 mb-3">
                  <div class="item-input-wrap input-dropdown-wrap ">
                     <select name="city" class="form-control" placeholder="Please choose...">
                         <option value="">Please choose...</option>
						<option <?php if (isset($city) && $city == "Dewas")  { echo "selected";}?> value="Dewas">Dewas</option>
                        <option <?php if (isset($city) && $city == "Indore") { echo "selected";}?> value="Indore">Indore</option>
                        <option <?php if (isset($city) && $city == "Ujjain") { echo "selected";}?> value="Ujjain">Ujjain</option>
                     </select>
                  </div>
               </div>
			   <div class="col-md-2 mb-3">
                  <?php echo $errorcity; ?>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2"><label>State</label></div>
               <div class="col-md-6 mb-3">
                  <div class="item-input-wrap input-dropdown-wrap">
                     <select name="state" class="form-control" placeholder="Please choose">
                         <option value="">Please choose...</option>
						<option <?php if (isset($state) && $state == "Madhya Pradesh"){ echo "selected";}?> value="Madhya Pradesh">Madhya Pradesh</option>
                        <option <?php if (isset($state) && $state == "Uttar Pradesh"){ echo "selected";}?> value="Uttar Pradesh">Uttar Pradesh</option>
                        <option <?php if (isset($state) && $state == "Goa"){ echo "selected";}?> value="Goa">Goa</option>
                     </select>
                  </div>
               </div>
			   <div class="col-md-2 mb-3">
                  <?php echo $errorstate; ?>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2"><label>Country</label></div>
               <div class="col-md-6 mb-3">
                  <div class="item-input-wrap input-dropdown-wrap">
                     <select name="country" class="form-control" placeholder="Please choose...">
                         <option value="">Please choose...</option>
						<option <?php if (isset($country) && $country == "India"){ echo "selected"; } ?> value="India">India</option>
                        <option <?php if (isset($country) && $country == "India"){ echo "selected"; }?> value="India">India</option>
                     </select>
                  </div>
               </div>
			   <div class="col-md-2 mb-3">
                  <?php echo $errorcountry; ?>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2"><label>About Me</label></div>
               <div class="col-md-6 mb-3">
                  <textarea name="about" class="form-control" placeholder="About Me"><?php echo $about ;?></textarea>
               </div>
			   <div class="col-md-2 mb-3">
                  <?php echo $errorabout; ?>
               </div>
            </div>
           
			<div class="row">
			<div class="col-md-2">
			</div>
               <div class="col-md-1 mb-3">
					<?php echo $x; ?> 
					<?php echo "+"; ?> 
					<?php echo $y; ?> 
					<?php echo "="; ?> 
				
					
               </div>
			   <div class="col-md-1 mb-3">
					 <input name="captcha" class="form-control" type="text" > 
               </div>
			   <div class="col-md-3 mb-3">
					<input name="captchahid" class="form-control" type="hidden" value="<?php echo $z;?>" > 
               </div>
			   <div class="col-md-1 mb-3">
                  <?php echo $errorcaptcha; ?>
               </div>
            </div>
			
            <div class="row">
			<div class="col-md-2">
			</div>
               <div class="col-md-6 mb-4">
                  <div class="d-inline"> 
                     <input class="btn btn-primary" type="submit" value="Submit">
                  </div>
                  <div class="d-inline"> 
                     <input class="btn btn-primary" type="reset" value="Reset">	 
                  </div>
               </div>
            </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
