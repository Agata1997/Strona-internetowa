<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
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
                <h1>How to get in touch with us?</h1>
            </div>
            
        </header>
        
        <section class="section-features js--section-features" id="features">
            <div class="row">
                <p class="long-copy">
                    We are present on the most popular social media. If you have an important question and don't want to wait long for response, use contact form set out on our website. It is the fastest way to hear from us.
                </p>
            </div>
            
            <div class="row js--wp-1">
                <div class="col span-1-of-4 box">
                    <i class="ion-social-facebook-outline icon-big "></i> 
                    <h3>Facebook</h3>
                    <p>
                        You can find us <a href="https://www.facebook.com/Lotus-Wedding-2155432721434655/?modal=admin_todo_tour" target="blank">here</a>
                    </p>
                </div>
                <div class="col span-1-of-4 box"> 
                    <i class="ion-social-instagram-outline icon-big"></i>
                    <h3>Instagram</h3>
                    <p>
                        You can find us <a href="https://www.instagram.com/lotus_weddings_events/" target="blank">here</a>
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-social-twitter-outline icon-big"></i>
                    <h3>Twitter</h3>
                    <p>
                        You can find us <a href="https://twitter.com/WeddingLotus" target="blank">here</a>
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-social-googleplus-outline icon-big"></i>
                    <h3>Google+</h3>
                    <p>
                        You can find us <a href="#" target="blank">here</a>
                    </p>
                </div>
            </div>   
        </section>
    
        <section class="section-testimonials2" id="form">
            <div class="row">
                <h2>We're happy to hear from you</h2>
            </div>
			
            <div class="row">
			
			
                <form method="post" action="mailer-new.php" class="contact-form">
				
					<div class="row">
					<?php
						if($_GET['success'] == 1) {
						echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";
						}
						if($_GET['success'] == -1) {
							echo "<div class=\"form-messages error\">Oops! Something went wrong. Please try again!</div>";
						}
					?>
                    </div>
					
				   <div class="row">
					
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="find-us">How did you find us?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select name="find-us" id="find-us">
                                <option value="friends" selected>Friends</option>
                                <option value="search">Search engine</option>
                                <option value="ad">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Newsletter?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="checkbox" name="news" id="news" checked> Yes, please
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Drop us a line</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Send it!">
                        </div>
                    </div>
                    
                </form>
                
            </div>
        </section>
        

        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="index.php">Main page</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="recommend.html">We recommend</a></li>
                        <li><a href="budgety.html">Calculator</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="https://www.facebook.com/Lotus-Wedding-2155432721434655/?modal=admin_todo_tour" target="_blank"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="https://twitter.com/WeddingLotus" target="_blank"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/u/0/" target="_blank"><i class="ion-social-googleplus" ></i></a></li>
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