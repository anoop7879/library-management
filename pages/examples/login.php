<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<?php
include 'dbconn.php';
			$errlogin=$email='';
			$id='';
			$err=0;
			
			
			
				if(isset($_POST['login'])){
					
					$email=$_POST['email'];
					$password=$_POST['password'];
					if(empty($email)){
					$errlogin="Email and password required";
						$err++;
					}
					if(empty($password)){
					$errlogin="Password required";
						$err++;
					}
					if($err == 0){
					$query = "select * from admins where email = '$email' and password = '$password' ";
					// echo"<pre>";print_r($query);die;
					$query_run = mysqli_query($con,$query);
					// echo"<pre>";print_r($query_run);die;
					$row = mysqli_fetch_assoc($query_run);
					$data = mysqli_num_rows($query_run);
					// echo"<pre>";print_r($data);die;
					if($data != 0){
								$id = $row['id'];	
								header('Location: ../../admin_dashboard.php?id='.$id);
							}
							
							
					
					else{
						$errlogin="Enter valid email and password";
					}
				}
				}
					
?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in </p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
		<div class="row">
          <div class="col-8">
                  <?php echo $errlogin; ?>
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->


    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
