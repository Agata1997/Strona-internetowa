<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
</head>
<body>
        <section class="section-testimonials2" id="form">
    <div>
		<h2>Register</h2>
            
	</div>

    <div class="row">
	<form method="post" action="register.php" class="contact-form">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div align= center class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
    </div>
    </section>
            <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="index.html">Main page</a></li>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="recommend.html">We recommend</a></li>
                        <li><a href="budgety.html">Calculator</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="https://www.facebook.com/Lotus-Wedding-2155432721434655/?modal=admin_todo_tour" target="_blank"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="https://twitter.com/WeddingLotus"target="_blank"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/u/0/"target="_blank"><i class="ion-social-googleplus" ></i></a></li>
                        <li><a href="https://www.instagram.com/lotus_weddings_events/" target="_blank"><i class="ion-social-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>
                    Build with <i class="ion-ios-heart" style="color: #c34368; padding: 0 3px;"></i>, March 2019.
                </p>
            </div>
        </footer>
</body>
</html>