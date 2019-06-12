<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<meta name="description" content="Wedding Lotus is a premium party organization service that guarantees an unforgettable experience. Wedding, party, birthday">
        
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
        <meta charset="UTF-8">
        <title>Wedding Lotus</title>
		
		<link rel="apple-touch-icon" sizes="180x180" href="\strona\strona\resources\icons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="\strona\strona\resources\icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="\strona\strona\resources\icons/favicon-16x16.png">
		<link rel="manifest" href="resources/icons/site.webmanifest">
		<link rel="mask-icon" href="resources/icons/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="resources/icons/favicon.ico">
		<meta name="msapplication-TileColor" content="#d9889e">
		<meta name="msapplication-config" content="resources/icons/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
    </head>
    <body>
        <header>
             <div class="content">
                <?php if (isset($_SESSION['success'])) : ?>
                <div class="error success" >
                    <h3>
                        <?php 
                            echo $_SESSION['success']; 
                            unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
                <?php endif ?>

                <?php  if (isset($_SESSION['username'])) : ?>
                    <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                    <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
                <?php endif ?>
             </div>


            <nav>
                <div class="row">
                    <img src="resources/img/logo-white.png" alt="Wedding Lotus logo" class="logo">
                    <img src="resources/img/logo.png" alt="Wedding Lotus logo" class="logo-black">
                    <ul class="main-nav js--main-nav">
                        <li><a href="#features">Event planning</a></li>
                        <li><a href="#works">How it works</a></li>
                        <li><a href="#events">Events</a></li>
                        <li><a href="#plans">Sign up</a></li>
                        <li><a href="login.php">Log in</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                </div>
            </nav>
            <div class="hero-text-box">
                <h1>Farewell unnecessary worries.<br>Welcome stress-free and perfectly organized events.</h1>
                <a class="btn btn-full js--scroll-to-plans" href="#">I'm in</a>
                <a class="btn btn-ghost js--scroll-to-start" href="#">Show me more</a>
            </div>
            
        </header>
        
        <section class="section-features js--section-features" id="features">
            <div class="row">
                <h2>Get amazing memories&mdash; <br>not unforgettable headache</h2>
                <p class="long-copy">
                    Hello, we're Wedding Lotus, your new premium party planner. We know you're always busy and that organizing an event (especially wedding) might be very stresful situation. Not any longer. Let us take care of that, we're really good at it, we promise!
                </p>
            </div>
            
            <div class="row js--wp-1">
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-infinite icon-big "></i>
                    <h3>Up to 365 days/year</h3>
                    <p>
                        Never stress again! We really mean that. Our prsonal assistants are for your disposal up to 365 days/year coverage. Your worries will be solved in less than 12 hours.
                    </p>
                </div>
                <div class="col span-1-of-4 box"> 
                    <i class="ion-ios-wineglass icon-big"></i>
                    <h3>Personalization</h3>
                    <p>
                        You have wide choose from our ready events scenarios. If that's not enough for you, consider purchasing one of ours personalized plans support. We will be there for you!
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-planet icon-big"></i>
                    <h3>Make it epic</h3>
                    <p>
                        We don't limit your creativity, which means you can wish for whatever you feel like! We work with the best artists and companies to ensure that you're 100% happy.
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-clipboard icon-big"></i>
                    <h3>Have a plan</h3>
                    <p>
                        Having a perfectly written plan that dosen't miss any points is big step to ensure the amazing event. We would write down for you every single trifle, so you don't miss anything.
                    </p>
                </div>
            </div>   
        </section>
        
        <section class="section-event">
            <ul class="event-showcase clearfix">
                <li>
                    <figure class="event-photo">
                        <img src="resources/img/1.jpg" alt="Rose petals">
                    </figure>
                </li>
                <li>
                    <figure class="event-photo">
                        <img src="resources/img/2.jpg" alt="Bouquet">
                    </figure>
                </li>
                <li>
                    <figure class="event-photo">
                        <img src="resources/img/3.jpg" alt="Wedding rings">
                    </figure>
                </li>
                <li>
                    <figure class="event-photo">
                        <img src="resources/img/4.jpg" alt="Bouquet">
                    </figure>
                </li>
            </ul>
            <ul class="event-showcase clearfix">
                <li>
                    <figure class="event-photo">
                        <img src="resources/img/5.jpg" alt="High heel shoes and champagne">
                    </figure>
                </li>
                <li>
                    <figure class="event-photo">
                        <img src="resources/img/6.jpg" alt="Heart made from balloons">
                    </figure>
                </li>
                <li>
                    <figure class="event-photo">
                        <img src="resources/img/7.jpg" alt="Champagne and strawberries">
                    </figure>
                </li>
                <li>
                    <figure class="event-photo">
                        <img src="resources/img/8.jpg" alt="Pink balloons">
                    </figure>
                </li>
            </ul>
        </section>
        
        
        <section class="section-steps" id="works">
            <div class="row">
                <h2>How it works &mdash; Simple as 1, 2, 3</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-2 steps-box">
                    <img src="resources/img/app-iPhone.png" alt="Wedding Lotus app on iPhone" class="app-screen js--wp-2">
                </div>
                <div class="col span-1-of-2 steps-box">
                    <div class="works-step clearfix">
                        <div>1</div>
                        <p>Choose the plan that best fits your needs and sign up today.</p>
                    </div>
                    <div class="works-step clearfix">
                        <div>2</div>
                        <p>Order your <i>personal assistant/ plan</i> using our mobile app or website. Or just call us!</p>
                    </div>
                    <div class="works-step clearfix">
                        <div>3</div>
                        <p>Enjoy your perfectly organized event. See you next time!</p>
                    </div>
                    
                    <a href="#" class="btn-app"><img src="resources/img/download-app.svg" alt="App Store Button"></a>
                    <a href="#" class="btn-app"><img src="resources/img/download-app-android.png" alt="Play Store Button"></a>
                </div>
            </div>
        </section>
        
        <section class="section-events" id="events">
            <div class="row">
                <h2>We're currently helping in organising these events:</h2>
            </div>
            <div class="row js--wp-3">
                <div class="col span-1-of-4 box">
                    <img src="resources/img/wedding.jpg" alt="Wedding">
                    <h3>Weddings</h3>
                    <div class="city-feature">
                        <i class="ion-ios-person icon-small"></i>
                        1000+ happy marriages
                    </div>
                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i>
                        15+ top assistants
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources/img/engagement.jpg" alt="Engagement">
                    <h3>Engagements</h3>
                    <div class="city-feature">
                        <i class="ion-ios-person icon-small"></i>
                        700+ happy couples
                    </div>
                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i>
                        10+ top assistants
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources/img/birthday.jpg" alt="Birthday">
                    <h3>Birthdays</h3>
                    <div class="city-feature">
                        <i class="ion-ios-person icon-small"></i>
                        900+ happy celebrants
                    </div>
                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i>
                        10+ top assistants
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources/img/others.jpg" alt="Other">
                    <h3>...and much more!</h3>
                    <div class="city-feature">
                        <i class="ion-ios-person icon-small"></i>
                        950+ happy organizers
                    </div>
                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i>
                        20+ top assistansts
                    </div>
                </div>
            </div>
            
        </section>
        
        <section class="section-testimonials">
            <div class="row">
                <h2>Our customers can't live without us</h2>
            </div>
			<?php

				// Create connection
				$conn = new mysqli('weddinglotjl.nazwa.pl:3306', 'weddinglotjl_Klienci', 'Ag@tka25', 'weddinglotjl_Klienci');
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 

				$sql = "SELECT * FROM Opinie";
				$result = $conn->query($sql);

            ?>
                            
            
            <div class="row">
            <?php
	           while ($rows=mysqli_fetch_assoc($result))
	           {
            ?>

                    <div class="col span-1-of-3">
                        <blockquote>
                            <?php echo $rows["opinia"]; ?>
                            <cite><?php echo $rows["nazwa"]; ?></cite>
                        </blockquote>
                    </div>

            <?php
	           }
            ?>
                               
            </div>

			
        </section>
        
        
        <section class="section-plans js--section-plans" id="plans">
            <div class="row">
                <h2>Join us today</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <div class="plan-box js--wp-4">
                        <div>
                            <h3>Premium</h3>
                            <p class="plan-price">$2999 <span>/ event</span></p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Personal assistant</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Contact 24/7</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Personalized offer</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Access to forum</li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-full">Sign up now</a>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <h3>Pro</h3>
                            <p class="plan-price">$1499 <span>/ event</span></p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Personal assistant</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Contact 8am-8pm/5</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Personalized offer</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Access to forum</li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-ghost">Sign up now</a>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <h3>Starter</h3>
                            <p class="plan-price">19$ <span>/ scenario</span></p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="ion-ios-close-empty icon-small"></i></li>
                                <li><i class="ion-ios-close-empty icon-small"></i></li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Ready scenarios</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Access to forum</li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-ghost">Sign up now</a>
                        </div>
                    </div>
                </div>
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