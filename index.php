
<!DOCTYPE html>
<html>
<head><!-- l page hthy kenet esmha acceuil walet index -->
    <title>Home</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #20B2AA;
            color: #fff;
            padding: 20px;
        }
        
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
            margin-top: 20px; /* Added style */
        }
        
        nav ul li {
            display: inline;
            margin-right: 30px; /* Add margin-right property */
        }
        
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        
       
    
    </style>
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul class="centered"> <!-- Added class -->
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="pagedonation.html">Become a donor</a></li>
                <li><a href="contact.html">Contact</a></li>
                <?php
               session_start();
               if (isset($_SESSION['user_id'])) {
                   // If logged in, show the username and logout button
                  
                   echo '<li style="float: right;"> <a href="logout.php">Logout</a> </li>';
                   echo '<li style="float: right;"> Welcome, ' . $_SESSION['username'] . '!</li>';
               }
               else
               {

               echo '<li style="float: right;"><a href="login.php">Login</a></li>';
                echo  '<li style="float: right;"><a href="signin.php">Sign up</a></li>';
               }
                ?>
            </ul>
        </nav>
    </header>
    <div class="hero-wrap" style="background-image: url('images/bg_9.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Doing Nothing is Not An Option of Our Life</h1>
            

            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="https://www.youtube.com/watch?v=WqDA_aThcKY" class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span class="icon-play mr-2"></span>Watch Video</a></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-counter ftco-intro" id="section-counter">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-1 align-items-stretch">
              <div class="text">
              	<span></span>
                <strong class="number" data-number=" 36012">0</strong>
                <span>Palestinians have been killed in Gaza since October 7</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-2 align-items-stretch">
              <div class="text">
              	<h3 class="mb-4">Donate </h3>
              	<p>"Empower hope in Gaza: Your donation fuels resilience and brightens futures."</p>
              	<p><a href="pagedonation.html" class="btn btn-white px-3 py-2 mt-2">Donate Now</a></p>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-3 align-items-stretch">
              <div class="text">
              	<h3 class="mb-4">Be a Volunteer</h3>
              	<p>"Answer the call of compassion: Volunteer for medical aid in Gaza. Your skills can bring healing and hope to those in need. Join hands for a healthier tomorrow."</p>
              	<p><a href="contact.html" class="btn btn-white px-3 py-2 mt-2">Be A Volunteer</a></p>
              </div>
            </div>
          </div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Blood Donation</h3>
                <p>"Empower life, donate blood for Gaza. Your precious gift can save lives and bring strength to those in need. Be the lifeline – donate today."</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Clothes Donation</h3>
                <p>
"Extend your hand in kindness: Clothes donation for Gaza. Your gently used clothing can bring warmth and comfort to those in need. Let's join hands to make a positive impact and support the people of Gaza."</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Money Donation</h3>
                <p>"Empower change: Money donation for Gaza. Your financial support can make a real difference in the lives of those affected. Join us in contributing to the well-being and rebuilding of Gaza. Every donation counts."</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section bg-light">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-5 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Causes</h2>
            <p>"Stand with Gaza: Your generosity today can provide hope, healing, and relief to those facing immense challenges. Join hands with us as we strive to make a positive impact. Every donation counts, bringing us one step closer to a brighter tomorrow for the resilient people of Gaza."</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="carousel-cause owl-carousel">
	    				<div class="item">
	    					<div class="cause-entry">
		    					<a href="#" class="img" style="background-image: url(images/cause-1.jpg);"></a>
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="#">Bombing Mosques</a></h3>
		    						<p>88 mosques completely demolished, 174 others partially destroyed in Israeli attacks since October; 3 churches also hit</p>
		    						
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
	    					<div class="cause-entry">
		    					<a href="#" class="img" style="background-image: url(images/cause-2.jpg);"></a>
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="#">Al-Shifa Hospital bombed</a></h3>
		    						<p>Israeli air strikes in Gaza have killed more than a dozen people and destroyed the main hospital’s cardiac ward</p>
		    						
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
	    					<div class="cause-entry">
		    					<a href="#" class="img" style="background-image: url(images/cause-3.jpg);"></a>
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="#">Water blockade </a></h3>
		    						<p>Polluted water supplies and salty groundwater are making people ill, with UN warning of threat of child deaths from dehydration</p>
		    						
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
	    					<div class="cause-entry">
		    					<a href="#" class="img" style="background-image: url(images/cause-4.jpg);"></a>
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="#">Targeting ambulances</a></h3>
		    						<p>Israel targeted a convoy of ambulances leaving Al-Shifa hospital in Gaza City, reported the Palestinian Shehab News Agency.</p>
		    						
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
	    					<div class="cause-entry">
		    					<a href="#" class="img" style="background-image: url(images/cause-5.jpg);"></a>
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="#">Cutting Off electricity</a></h3>
		    						<p>Israel continues to cut off electricity, potable water, fuel, and food supplies to the region, resulting in a catastrophic situation in the bombarded Gaza.</p>
		    						
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
	    					<div class="cause-entry">
		    					<a href="#" class="img" style="background-image: url(images/cause-6.jpg);"></a>
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="#">Killing children</a></h3>
		    						<p>More than 6,600 Palestinian children have been killed by Israeli forces in Gaza since October 7, the government’s media office says.</p>
		    						
		    					</div>
		    				</div>
	    				</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    

    <footer  class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Stand with Palestine is more than an organization; it's a movement fueled by empathy and solidarity. Committed to supporting the people of Palestine, we stand as advocates for justice, peace, and humanitarian aid. Through our collective efforts, we aspire to create positive change and make a lasting impact on the lives of those affected by the ongoing challenges. Join us in standing with Palestine, as we work together to build a brighter future for this resilient community.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://www.facebook.com/houssem.atiya.92"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/houssem.atiya.92"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/houssem.atiya.92"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
           
          </div>
          <div class="col-md-2">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
                <li><a href="acceuil.php" class="py-2 d-block">Home</a></li>
                <li><a href="about.html" class="py-2 d-block">About</a></li>
                <li><a href="pagedonation.html" class="py-2 d-block">Donate</a></li>
                <li><a href="contact.html" class="py-2 d-block">contact</a></li>
                <li><a href="login.php" class="py-2 d-block">Login</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Iset Rades,Ben Arous,Tunisia</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+216 22796862</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">TunisianDonation@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>

        
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>


       