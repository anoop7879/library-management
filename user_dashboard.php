<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<?php 
include 'dbconn.php';
			
			
			if(isset($_GET['user_id'])){
				$user_id=$_GET['user_id'];
				$x=1;
				// echo "<pre>";print_r($bookid);die;
				$sql="select * from userdata where user_id='$user_id'";
				
				// echo "<pre>";print_r($sql);die;
				$qry=mysqli_query($con,$sql);
				$data=mysqli_fetch_assoc($qry);
				// echo "<pre>";print_r($data);die;
				// $select ='SELECT userdata.name, issue_book.* ,  books.book_name FROM userdata right JOIN issue_book ON issue_book.user_id=userdata.user_id left JOIN books ON books.book_id=issue_book.book_name where user_id="$user_id"';
				$sql1 ="SELECT issue_book.*, books.book_name, books.book_id FROM userdata right JOIN issue_book ON issue_book.user_id=userdata.user_id left JOIN books ON books.book_id=issue_book.book_name where userdata.user_id='$user_id'";
				// echo "<pre>";print_r($count);die;
				$qry1=mysqli_query($con,$sql1);
				$count=mysqli_num_rows($qry1);
				// echo "<pre>";print_r($sql1);die;
			}
			
			// $select2 ='select subcat_name from book_subcat';
			// $query2= mysqli_query($con,$select2);
			
			// $select3 ='select booklang from book_lang';
			// $query3= mysqli_query($con,$select3);

?>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
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
        <a href="index3.html" class="nav-link">Home</a>
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
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
            <a href="" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                User Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
			</li>
           
        <!--   <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
			<ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/simple.php" class="nav-link " >
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/bookdata.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Book Data Tables</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="pages/examples/issuebooktable.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Issue Book Table</p>
                </a>
              </li>
			   </ul>
			   </li>
			    
			   <li class="nav-item">
                <a href="pages/examples/addbook.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add book</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="pages/examples/catbook.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Book Category</p>
                </a>
              </li>		
			   <li class="nav-item">
                <a href="pages/examples/issue_book.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Issue Book</p>
                </a>
              </li>	-->
			  
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User Dashboard </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v3</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-4">
          <div class="col-sm-3 mb-3">
            <h5 class="m-0">User=></h5>
          </div><!-- /.col -->
		  <div class="col-sm-3 mb-3">
            <h5 class="m-0"><?php echo $data['name']; ?></h5>
          </div><!-- /.col -->
		  <div class="col-sm-3 mb-3">
            <h5 class="m-0">Email=></h5>
          </div> 
		  <div class="col-sm-3 mb-3">
            <h5 class="m-0"><?php echo $data['email']; ?><h5>
          </div><!-- /.col -->
		  <div class="col-sm-3 mb-3">
            <h5 class="m-0">Phone no.=></h5>
          </div><!-- /.col -->
		  <div class="col-sm-3 mb-3">
            <h5 class="m-0"><?php echo $data['phone']; ?></h5>
          </div><!-- /.col -->
		  <div class="col-sm-3 mb-3">
            <h5 class="m-0">Number of issue book=></h5>
          </div><!-- /.col -->  
		  <div class="col-sm-3 mb-4">
		
			<h5 class="m-0"><?php echo $count ?></h5>		
        </div><!-- /.row -->
        </div><!-- /.row -->
		<div class="row mt-4">
                        <div class="col-12 ">
                        <div class="table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>S.NO.</th>
                      <th>Book Name</th>                     
                      <th>Issue Date</th>
                      <th>Return Date</th>
                      <th>Return Book</th>
                    </tr>
                  </thead>
                  <tbody>
					<?php
						while($data1 = mysqli_fetch_assoc($qry1)){
					?>
                    <tr>
                      <td><?php echo $x++; ?></td>
                      <td><?php echo $data1['book_name'] ?></td>                      
                      <td><?php echo $data1['issue_date'] ?></td>
                      <td><?php echo $data1['return_date'] ?></td>                         
                      <td><a href="pages/user/return.php?issue_id=<?php echo $data1['issue_id'];?>&user_id=<?php echo $data1['user_id'];?>&book_id=<?php echo $data1['book_id'];?>">Return</a></td>
                      
                    </tr>
					<?php
						}
					?>
                  </tbody>
                </table>
              </div>	
            
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  </div>

  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer ">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">User</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
</div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>
