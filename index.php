<?php 
//initialize session
  session_start();

  if( !isset($_SESSION['email']) || empty($_SESSION['email'])){
    header('location: login.php');
    exit;
  }
?>

<html> 
<head>
    <title>City Sports Complex | Home</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/ppc-logo.png"> 
    
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js"></script>
    
    <!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="assets/css/theme-3.css">
	<link id="theme-style" rel="stylesheet" href="assets/css/style.css">

</head> 

<body>
    
    <header class="header text-center">	    
	    <h1 class="blog-name pt-lg-4 mb-0"><a href="index.php">City Sports Complex</a></h1>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column">
				<div class="profile-section pt-3 pt-lg-0">
				    <img class="profile-image mb-3 rounded-circle mx-auto" src="assets/images/ppc-logo.png" alt="image" >			
					
					<div class="bio mb-3">To advance the frontiers of knowledge in the environmental, computer, mathematical and biological sciences and to be a world-class center
						of learning, scientific inquiry and research beneficial to the general welfare of the People.<br></div><!--//bio-->
					
			        <hr> 
				</div><!--//profile-section-->
				
				<ul class="navbar-nav flex-column text-left">
					<li class="nav-item active">
					    <a class="nav-link" href="index.php">Dashboard<span class="sr-only">(current)</span></a>
					</li>

					<li class="nav-item dropdown">
					    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" >Latest Post</a>
							<div class="dropdown-menu" style="width: 100%; background-color: #8fd19e;">
								<a class="dropdown-item txt-lmt-enhypen" title="How Music Affects Early Childhood Development" href="thesis-post-01.php">
									•How Music Affects Early Childhood Development</a>
								<a class="dropdown-item txt-lmt-enhypen" title="How Expressive Arts Theraphy and Outdoor Adventure Activities Can Increase Interpersonal Communication Skills: Adventure in Building Communication with Children" href="thesis-post-02.php">
									•How Expressive Arts Theraphy and Outdoor Adventure Activities Can Increase Interpersonal Communication Skills: Adventure in Building Communication with Children</a>
								<a class="dropdown-item txt-lmt-enhypen" title="An Exploration of the Interrelationships between Self, Art and Oppression" href="thesis-post-03.php">
									•An Exploration of the Interrelationships between Self, Art and Oppression</a>
								<a class="dropdown-item txt-lmt-enhypen" title="iHELP: information about Health Advisory of COVID-19, Emergency Hotlines, Learning First-Aid, and Preparedness in Disaster" href="thesis-post-04.php">
									•The iHELP mobile application</a>
							</div>
					</li>

					<li class="nav-item dropdown">
					    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" >Most Commented Post</a>
							<div class="dropdown-menu" style="width: 100%; background-color: #8fd19e;">
								<a class="dropdown-item txt-lmt-enhypen" title="Cloud Based Monitoring System for Events and Marketing" href="thesis-post-07.php">
									•Cloud Based Monitoring System for Events and Marketing</a>
								<a class="dropdown-item txt-lmt-enhypen" title="How Expressive Arts Theraphy and Outdoor Adventure Activities Can Increase Interpersonal Communication Skills: Adventure in Building Communication with Children" href="thesis-post-02.php">
									•How Expressive Arts Theraphy and Outdoor Adventure Activities Can Increase Interpersonal Communication Skills: Adventure in Building Communication with Children</a>
								<a class="dropdown-item txt-lmt-enhypen" title="Arduino Self Timer for the Cloud" href="thesis-post-06.php">
									•Arduino Self Timer for the Cloud</a>
								<a class="dropdown-item txt-lmt-enhypen" title="Arduino Based Insect Tracker" href="thesis-post-05.php">
									•Arduino Based Insect Tracker</a>
								<a class="dropdown-item txt-lmt-enhypen" title="An Exploration of the Interrelationships between Self, Art and Oppression" href="thesis-post-03.php">
									•An Exploration of the Interrelationships between Self, Art and Oppression</a>
									<a class="dropdown-item txt-lmt-enhypen" title="iHELP: information about Health Advisory of COVID-19, Emergency Hotlines, Learning First-Aid, and Preparedness in Disaster" href="thesis-post-04.php">
										•The iHELP mobile application</a>	
							</div>
					</li>

				</ul>

				
				<div class="my-2 my-md-3">
				    <a class="btn btn-primary" href="https://web.facebook.com/CollegeOfSciencesPSU" target="_blank">Find out more about us!</a>
				</div>
			</div>
		</nav>
    </header>

    <div class="main-wrapper">
	    <section class="cta-section theme-bg-light py-5">
		    <div class="container text-center">
			    <h2 class="heading">Ramon V. Mitra Jr.<br>Sports and Fitness Park</h2>
			    <div class="intro">Puerto Princesa City, Palawan</div>
			    <form class="signup-form form-inline justify-content-center pt-3" action="http://www.google.com" method="get" id="search-box">
                    <div class="form-group">
                        <label class="sr-only" for="search">Find something</label>
                        <input type="search" id="search" name="semail1" class="form-control mr-md-1 semail" placeholder="Find something..">
                    </div>
                    <button type="search" class="btn btn-primary">Search</button>
                </form>
		    </div><!--//container-->
	    </section>
	    <section class="blog-list px-3 py-5 p-md-5">
			<div class="border border-top-0 border-left-0 border-right-0 pl-3 mb-5">
				<h3>Sports Facility</h3>
			</div><!--Sports Facility-->
		    <div class="container">
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex border border-light" src="assets/images/blog/How-Music-Affects-Early-Childhood-Development.jpg" alt="image">
					    <div class="media-body">
							<h3 class="title mb-1"><a href="thesis-post-01.php">How Music Affects Early Childhood Development</a></h3>
							<div class="mb-1"><span class="tags">Tags: </span><span class="tag-word"><a href="#">development</a>, <a href="#">child</a>, <a href="#">music</a>, <a href="#">affection</a></span></div>
						    <div class="meta mb-1"><span class="date">Posted 1 day ago by admin</span><span class="comment"><a href="thesis-post-01.php">0 comments</a></span></div>
						    <div class="intro">Since nearly the beginning of human history, music has been
								used as a force for healing. Aristotle taught that “When we hear
								(music and poetry) our very soul is altered.” From Hippocrates
								to Native American medicine men, people have long used
								singing and playing instruments to cure...
								</div>
						    <a class="more-link" href="thesis-post-01.php">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex border border-light" src="assets/images/blog/How-Expressive-Arts-Theraphy-and-Outdoor-Adventure-Actvities-Can-Increase-Interpersonal-Communication-Skills.jpg" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="thesis-post-02.php">How Expressive Arts Theraphy and Outdoor Adventure Actvities Can Increase Interpersonal Communication Skills Adventure in Building Communication with Children</a></h3>
							<div class="mb-1"><span class="tags">Tags: </span><span class="tag-word"><a href="#">child</a>, <a href="#">theraphy</a>, <a href="#">arts</a></span></div>
							<div class="meta mb-1"><span class="date">Posted 2 days ago by admin</span><span class="comment"><a href="#">6 comments</a></span></div>
						    <div class="intro">Adventure-based therapy groups are
								a blend of experiential education, outdoor education, and group
								therapy. Key components of adventure-based therapy groups
								include activities that provide immediate and concrete
								consequences of behaviors, reliance on problem solving, their
								use of...
								</div>
						    <a class="more-link" href="thesis-post-02.php">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex border border-light" src="assets/images/blog/An-Exploration-of-the-Interrelationships-between-Self,-Art-and-Oppresion.jpg" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="thesis-post-03.php">An Exploration of the Interrelationships between Self, Art and Oppresion</a></h3>
							<div class="mb-1"><span class="tags">Tags: </span><span class="tag-word"><a href="#">theraphy</a>, <a href="#">development</a>, <a href="#">arts</a></span></div>
							<div class="meta mb-1"><span class="date">Posted 3 days ago by admin</span><span class="comment"><a href="#">3 comments</a></span></div>
						    <div class="intro">This study explores the relationship between self-awareness and
								social work students' commitment and understanding of culturally
								responsive social work practice. 
								Implications for social work education and
								research are addressedwhich asked them
								to describe their ethnic/racial backg...</div>
						    <a class="more-link" href="thesis-post-03.php">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
				</div><!--//item-->
				
				<div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex border border-light" src="assets/images/blog/iHELP_portrait.png" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="thesis-post-04.php">The iHELP mobile application</a></h3>
							<div class="mb-1"><span class="tags">Tags: </span><span class="tag-word"><a href="#">mobile</a>, <a href="#">development</a>, <a href="#">application</a></span></div>
							<div class="meta mb-1"><span class="date">Posted 4 days ago by admin</span><span class="comment"><a href="#">2 comments</a></span></div>
						    <div class="intro">iHELP: information about Health Advisory of COVID-19,
								Emergency Call Hotlines, Learning First-Aid, and Preparedness in Disaster and Emergency.
								The iHELP aims to keep you ready and prepare for any disaster. It is your Healthcare and Emergency Companion. SIMPLE, EASY, and CONVENIENT...</div>
						    <a class="more-link" href="thesis-post-04.php">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    
			    
			    <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded" href="thesis-list.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				
		    </div>
	    </section>
	    
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
	    <small class="copyright">BSIT 3rd Year Block-1 |<a href="http://anselmolupague.neocities.org/" target="_blank"> Anselmo Lupague</a> | ©2020 All Rights Reserved.</small>
		   
	    </footer>
    
    </div><!--//main-wrapper-->
    
    
    
    
    <!-- *****CONFIGURE STYLE****** -->  
    <div id="config-panel" class="config-panel d-none d-lg-block">
        <div class="panel-inner">
            <a id="config-trigger" class="config-trigger config-panel-hide text-center" href="#"><i class="fas fa-cog fa-spin mx-auto" data-fa-transform="down-6" ></i></a>
            <h5 class="panel-title">Choose Colour</h5>
            <ul id="color-options" class="list-inline mb-0">
                <li class="theme-1  list-inline-item"><a data-style="assets/css/theme-1.css" href="#"></a></li>
                <li class="theme-2  list-inline-item"><a data-style="assets/css/theme-2.css" href="#"></a></li>
                <li class="theme-3  active list-inline-item"><a data-style="assets/css/theme-3.css" href="#"></a></li>
                <li class="theme-4  list-inline-item"><a data-style="assets/css/theme-4.css" href="#"></a></li>
                <li class="theme-5  list-inline-item"><a data-style="assets/css/theme-5.css" href="#"></a></li>
                <li class="theme-6  list-inline-item"><a data-style="assets/css/theme-6.css" href="#"></a></li>
                <li class="theme-7  list-inline-item"><a data-style="assets/css/theme-7.css" href="#"></a></li>
                <li class="theme-8  list-inline-item"><a data-style="assets/css/theme-8.css" href="#"></a></li>
            </ul>
            <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
        </div><!--//panel-inner-->
    </div><!--//configure-panel-->

    
       
    <!-- Javascript -->          
    <script src="assets/plugins/jquery-3.3.1.min.js"></script>
    <script src="assets/plugins/popper.min.js"></script> 
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 

    <!-- Style Switcher -->
    <script src="assets/js/demo/style-switcher.js"></script>     
    

</body>
</html> 

