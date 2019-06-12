<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
        
        .container1{width: 280px;text-align: center; }
        select{
		background-color: #a23f5e;
		border: 1px double #FB4314;
		color: #777777;
		font-family: Georgia;
		font-weight: bold;
		font-size: 14px;
		height: 39px;
		padding: 7px 8px;
		width: 250px;
		outline:none;
		margin: 10px;
        width: 1800px;

        }
        </style>

        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('#miasto').on('change',function(){
				var miastoID = $(this).val();
				if(miastoID){
					$.ajax({
						type:'POST',
						url:'ajaxData.php',
						data:'miasto_id='+miastoID,
						success:function(html){
							$('#usluga').html(html);
							$('#asystent').html('<option value="">Select usluga first</option>'); 
						}
					}); 
				}else{
					$('#usluga').html('<option value="">Select miasto first</option>');
					$('#asystent').html('<option value="">Select usluga first</option>'); 
				}
			});
			
			$('#usluga').on('change',function(){
				var uslugaID = $(this).val();
				if(uslugaID){
					$.ajax({
						type:'POST',
						url:'ajaxData.php',
						data:'usluga_id='+uslugaID,
						success:function(html){
							$('#asystent').html(html);
						}
					}); 
				}else{
					$('#asystent').html('<option value="">Select usluga first</option>'); 
				}
			});
		});
		</script>
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
                <h1>Who we are?<br>Professional assistants <br>whose passion is events planning.</h1>
            </div>
            
        </header>
        
        <section class="section-features js--section-features" id="features">
            <div class="row">
                <h2>Modern company founded in 2010 </h2>
                <p class="long-copy">
                    Hello, we're Wedding Lotus, your new premium party planner. We know you're always busy and that organizing an event (especially wedding) might be very stresful situation. Not any longer. Let us take care of that, we're really good at it, we promise!
                </p>
            </div>
            
            <div class="row js--wp-1">
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-infinite icon-big "></i>
                    <h3>Progress</h3>
                    <p>
                        
                    </p>
                </div>
                <div class="col span-1-of-4 box"> 
                    <i class="ion-ios-wineglass icon-big"></i>
                    <h3>Fun</h3>
                    <p>
                        
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-planet icon-big"></i>
                    <h3>Creativity</h3>
                    <p>
                        
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-clipboard icon-big"></i>
                    <h3>Order</h3>
                    <p>
                        
                    </p>
                </div>
            </div>   
        </section>
        
        <section class="section-event">
            <ul class="event-showcase clearfix">
                <li>
                    <figure class="event-photo">
                        <a href="https://twitter.com/WeddingLotus"target="_blank">
                        <img src="resources/img/p1.jpg" alt="Diane Nelson">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="event-photo">
                        <a href="https://twitter.com/WeddingLotus"target="_blank">
                        <img src="resources/img/p2.jpg" alt="Kristina Cole">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="event-photo">
                        <a href="https://twitter.com/WeddingLotus"target="_blank">
                        <img src="resources/img/p3.jpg" alt="Terri Reid">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="event-photo">
                        <a href="https://twitter.com/WeddingLotus"target="_blank">
                        <img src="resources/img/p4.jpg" alt="Kenzi Pena">
                        </a>
                    </figure>
                </li>
            </ul>
            <ul class="event-showcase clearfix">
                <li>
                    <figure class="event-photo">
                        <a href="https://twitter.com/WeddingLotus"target="_blank">
                        <img src="resources/img/p5.jpg" alt="Norma Richardson">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="event-photo">
                        <a href="https://twitter.com/WeddingLotus"target="_blank">
                        <img src="resources/img/p6.jpg" alt="Daisy Murray">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="event-photo">
                        <a href="https://twitter.com/WeddingLotus"target="_blank">
                        <img src="resources/img/p7.jpg" alt="Violet Mason">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="event-photo">
                        <a href="https://www.facebook.com/lucy.wianek.9"target="_blank">
                        <img src="resources/img/p8.jpg" alt="Lucy Wianek">
                        </a>
                    </figure>
                </li>
            </ul>
        </section>
        
        <section class="section-testimonials2" id="form">
        <div style="width:800px; margin:0 auto;" class="container1">

		<?php
		//Include the database configuration file
		//include 'connect.php';
        include 'dbConfig.php';

		//Fetch all the miasto data
		$query = $db->query("SELECT * FROM miasto WHERE status = 1 ORDER BY miasto_name ASC");

		//Count total number of rows
		$rowCount = $query->num_rows;
		?>
		<select id="miasto">
			<option value="">Select miasto</option>
			<?php
			if($rowCount > 0){
				while($row = $query->fetch_assoc()){ 
					echo '<option value="'.$row['miasto_id'].'">'.$row['miasto_name'].'</option>';
				}
			}else{
				echo '<option value="">miasto not available</option>';
			}
		?>
		</select>

		<select id="usluga">
			<option value="">Select miasto first</option>
		</select>

		<select id="asystent">
			<option value="">Select usluga first</option>
		</select>
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