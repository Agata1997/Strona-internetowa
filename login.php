<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
        <title>Wedding Lotus</title>
    </head>
    <body>
        <header>
            <nav>
                <div class="row">
                    <img src="resources/img/logo-white.png" alt="Wedding Lotus logo" class="logo">
                    <img src="resources/img/logo.png" alt="Wedding Lotus logo" class="logo-black">
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                </div>
            </nav>  
            <div class="hero-text-box">
                <h1>Log in</h1>
            </div>
        </header>
        
       
        <section class="section-testimonials2" id="form">
            <div class="row">
                <h2>Log in</h2>
            </div>
            
			<div class="row">
            <form method="post" action="login.php">
            
			     <div class="row">
					<?php include('errors.php'); ?>
                </div>
                <div class="row">

					<div class="col span-1-of-3">
						<label for="username">Username</label>
					</div>
                    <div class="col span-2-of-3">
                        <input type="text" name="username" id="username" placeholder="Your username" required>
                    </div>
                </div>
                <div>
					<div class="col span-1-of-3">
						<label for="password">Password</label>
					</div>
                    <div class="col span-2-of-3">
                        <input type="password" name="password" id="password" placeholder="Your password" required>
                    </div>
                </div>
                <div>
                     <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Log in!">
                        </div>
                    </div>
                 </div>
                
            </form>

					<p>
						Not yet a member? <a href="register.php">Sign up</a>
					</p>
 

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
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>
    
    </body>  
    
</html>