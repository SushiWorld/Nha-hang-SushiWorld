<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="">

    <title>Admin - Khoa Phạm</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="login_wrapper">
	
	<div class="login_holder">
			
		<form method="post" action="index.php">
			
			<div class="header">
				<h4 style="border-bottom: 1px solid #FF5722;" class="title">Login Form</h4>
			</div>
			
			<div class="form-group" method="post" action="#">
				<label>Username</label>
				<input type="text" name="username" class="form-control" placeholder="Enter Username" autofocus>
			</div>
			
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" placeholder="Enter your password">
			</div>
			
			<!--<p><a style="color: #FF5722;" href="register.php">No account yet! Click Here to register</a></p>-->
			
			<input type="submit" name="submit" value="Login" class="btn btn-info btn-fill pull-right" style="background: #FF5722; border-color: #FF5722;" />
			<div class="clearfix"></div>
			
		</form>
		
	</div>
	
</div>

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
