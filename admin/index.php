<?php 
	session_start();
	$error = "";

	if (isset($_POST['login'])) {
		$user = $_REQUEST['user'];
		$pass = $_REQUEST['pass'];

		
		$admin_username = 'admin';
		$admin_password = 'readmin';

		if (!empty($user) && !empty($pass)) {
			if ($user == $admin_username && $pass == $admin_password) {
				$_SESSION['auser'] = $user;
				header("Location: dashboard.php");
			} else {
				$error = '* Invalid User Name and Password';
			}
		} else {
			$error = "* Please Fill all the Fields!";
		}
	}   
?>

<!DOCTYPE html>
<html lang="en">

    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>RE Admin - Login</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		
    </head>

<body>
    <div class="page-wrappers login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Admin Login Panel</h1>
                            <p class="account-subtitle">Access to our dashboard</p>
                            <p style="color:red;"><?php echo $error; ?></p>

                            <!-- Form -->
                            <form method="post">
                                <div class="form-group">
                                    <input class="form-control" name="user" type="text" placeholder="User Name">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="pass" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" name="login" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Your script includes here -->

</body>

</html>
