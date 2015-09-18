<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $errName="";
        $errEmail="";
        $errMessage = "";
        // $human = intval($_POST['human']);
        $from = 'Contact Form - Your Website'; 
        $to = 'xyz@gmail.com'; 
        $subject = 'Message from Contact Form from My site ';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        // if ($human !== 5) {
        //     $errHuman = 'Your anti-spam is incorrect';
        // }
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage ) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>




<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>John Doe</title>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
	<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style1.css"> 
		<link rel="stylesheet" href="css/reset.css"> 

<!-- Commented main.js and modernizr.js to remove the jquery effects on the timeline. It requires 1.11.0 version of jquery-->
	<!-- // <script src="js/modernizr.js"></script> -->
	
	<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,400,200,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

  <!-- // <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->

	    <script src="js/jquery.quicksand.js" type="text/javascript"></script>
        <script src="js/jquery.easing.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/waypoints.js"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <script src="js/main1.js"></script>
        <script type="text/javascript" src="js/jquery.stellar.js"></script>
       	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
        <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
function initialize() {
  var myLatlng = new google.maps.LatLng(22.9896,-98.7706);
  var mapOptions = {
    zoom: 8,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'My place'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    <link rel="shortcut icon" href="images/favicon.ico">



   
</head>
<body style="background-color:#fff;">
	

    <div class="navbar navbar-inverse navbar-fixed-top">
    	<div class="container">
    		<div class="navbar-header">
    			<a href="#" class="navbar-brand" style="color:white;"> <span style="font-weight:700">JOHN</span> </b>DOE</a>

    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    				<span class="sr-only">Toggle Navigation</span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    			</button>
    		</div>

    		<div class="collapse navbar-collapse" id="menuitems">
    			<ul class="nav navbar-nav navbar-right navigation">
    				<li data-slide="1" class="active"><a href="#slide1">HOME</a></li>
    				<li data-slide="2"><a href="#slide2">ABOUT</a></li>
    				<li data-slide="3"><a href="#slide3">EXPERIENCE</a></li>
    				<li data-slide="4"><a href="#slide4">PROJECTS</a></li>
    				<li data-slide="5"><a href="#slide5">CONTACT</a></li>
    			</ul>
    		</div>
    	</div>
    </div>

    <div class="first" id="slide1" data-slide="1" data-stellar-background-ratio="0.8" >
    <!--  <img src="images/front.jpg" class="image"> -->
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="text-align:center;padding-top:10%;">
     <div class="name-header" style="font-size:32px;display:block;color:#000;"><span style="font-weight:500;">John Doe</span></div>
     <br>
     <div class="" style="font-size:24px;display:inline;color:#000;">Java Developer | Web Developer </div>
     </div>
     <div class="col-md-4"></div>
     </div>
   <!--  <img src="images/front.jpg" class="image"> -->
   

    </div>
   

    </div>
<!-- </div> -->
	<!-- </section> -->
	<div class="second slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.8" >
		<div class="row">
			<div class="col-md-12">
				<br><br><br>
			 </div>
		</div>
		<div class="row">
		<div class="col-md-12" style="height:100px;font-size:26px;text-align:center;margin-top:50px;font-weight:200;">
		ALL ABOUT ME
		</div>
		</div>
		<div class="row">
		<div class="col-md-12"><br></div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				<div class="about_container">
				<div class="about_heading">Intro
				</div>
				<hr class="about_hr" style="width:60%;background-color:pink;margin-top: 3px;">
				<div style="text-align:justify;font-size:14px;line-height:20px;color:#000;">

						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam et nulla et augue bibendum vestibulum eget et mi. Nam pellentesque tellus lectus, ac lacinia neque laoreet ornare. Vivamus tempus rhoncus porttitor. Morbi feugiat nec massa lobortis interdum. <br><br>
Fusce sed vehicula est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec semper lorem condimentum tellus feugiat, quis vestibulum ligula pellentesque.<br><br>



				</div>
				</div>
				</div>


				<div class="col-md-4">
				<div class="about_container">
				<div class="about_heading">That's Me
				</div>
				<hr class="about_hr" style="width:60%;background-color:pink;margin-top: 3px;">
								<img src="http://placehold.it/280x290">

				</div>
				</div>

				<div class="col-md-4">
				<div class="about_container">
				<div class="about_heading">Skill Set
				</div>
				<hr class="about_hr" style="width:60%;background-color:pink;margin-top: 3px;">
				<div style="text-align:justify;">
					C, C++, Java, JSF 2.2
					<div class="progress" style="height:3px;margin-top:3px;">	
  						<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%; background-color:#000;">
    					<span class="sr-only">95% Complete</span>
  						</div>
					</div>

					EJB, JPA, JBDC
					<div class="progress" style="height:3px;margin-top:3px;">	
  						<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%; background-color:#000;">
    					<span class="sr-only">80% Complete</span>
  						</div>
					</div>

					HTML, XML, SQL
					<div class="progress" style="height:3px; margin-top:3px;">	
  						<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%; background-color:#000;">
    					<span class="sr-only">90% Complete</span>
  						</div>
					</div>

					JavaScript, PHP, MySQL
					<div class="progress" style="height:3px;margin-top:3px;">	
  						<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color:#000;">
    					<span class="sr-only">75% Complete</span>
  						</div>
					</div>

					UML, SOAP
					<div class="progress" style="height:3px;margin-top:3px;">	
  						<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 87%; background-color:#000; ">
    					<span class="sr-only">87% Complete</span>
  						</div>
					</div>

					SOAP UI, ClearCase, Test Director
					<div class="progress" style="height:3px;margin-top:3px;">	
  						<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%; background-color:#000;">
    					<span class="sr-only">95% Complete</span>
  						</div>
					</div>
				</div>
				</div>
				</div>

				
				
			</div>
		</div>
	</div>

	
	<div class="third slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.8" >
	<div class="row">
		<div class="col-md-12"><br><br><br><br></div>
	</div>




<div class="row">
	<div class="col-md-12" style="text-align:center;font-size:24px;color:#000;margin-top:30px;font-weight:200">MY PROFILE</div>
	
	</div>
		<section id="cd-timeline" class="cd-container">


		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-movie">
					 <span class="glyphicon glyphicon-education" aria-hidden="true" style="color:white;font-size:30px;position:relative;top:25%;left:25%;"></span>

				<!-- <img src="img/cd-icon-movie.svg" alt="Movie"> -->
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				
				<h2>Master of  Science, Computer Science</h2>
				<p style="color:#000;font-weight:500">The University of Texas at Dallas, Richardson, Texas </p>
				<p style=" font-size:13px; line-height:20px;color:#000;"> GPA: 3.67  </p>
				<p style=" font-size:13px; line-height:20px;color:#000;"><b>Related Coursework</b></p>
				<ul style="list-style:circle; font-size:13px; line-height:20px;color:#000;">
					<li>Design and Analysis of Algorithms</li>
					<li>Database Design</li>
					<li>Operating Systems</li>
					<li>Artificial Intelligence</li>
					<li>Machine Learning</li>
				</ul>
				<!-- <a href="#0" class="cd-read-more">Read more</a> -->
				<span class="cd-date">2014 - Present</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->



		<div class="cd-timeline-block" >
			<div class="cd-timeline-img cd-picture">
				<!-- <img src="img/cd-icon-picture.svg" alt="Picture"> -->
				<span class="glyphicon glyphicon-briefcase" aria-hidden="true" style="color:white;font-size:30px;position:relative;top:25%;left:25%;"></span>
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content" style="background-color:#fff;">

				<h2>Senior Systems Engineer</h2>
				<p style="color:#000;font-weight:500">Infosys Limited, Chennai, India </p>
				<ul style="list-style:circle; font-size:13px; line-height:20px;color:#000;">
				<li>Involved in complete software development life cycle 

of an online banking application using JAVA, SOAP Web services and SQL</li>
				<br>
				<li> Implemented the Credit Decision module, which 

performs the final approve/deny decision based on the credit details of the 

customer</li><br>
				<li>Mentored junior members in the team and guided them 

during crisis</li>
				</ul>
				
				<!-- <a href="#0" class="cd-read-more">Read more</a> -->
				<span class="cd-date">2013 - 2014</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<!-- <img src="img/cd-icon-picture.svg" alt="Picture"> -->
				<span class="glyphicon glyphicon-briefcase" aria-hidden="true" style="color:white;font-size:30px;position:relative;top:25%;left:25%;"></span>
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">

				<h2 >Systems Engineer</h2>
				<p style="color:#000;font-weight:500">Infosys Limited, Chennai, India</p>

				<ul style="list-style:circle; font-size:13px; line-height:20px;color:#000;">
				<li>Developed an XML parsing tool using JAVA and XPath, 

for categorizing and persisting third party bureau data</li>
				<br>
				<li> Created a JAVA tool to derive the business data 

dynamically based on the business rules provided through an Excel file</li><br>
				
				</ul>
				
				<!-- <a href="#0" class="cd-read-more">Read more</a> -->
				<span class="cd-date">2011 - 2013</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">
				<!-- <img src="img/cd-icon-location.svg" alt="Location"> 
		
-->
				<span class="glyphicon glyphicon-briefcase" aria-hidden="true" style="color:white;font-size:30px;position:relative;top:25%;left:25%;"></span>

			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2 >Systems Engineer Trainee</h2>
				<p style="color:#000;font-weight:500">Infosys Limited, Mysore, India</p>
				<p style="color:#000;font-weight:500">Completed an intensive training in the following areas:</p>
				<ul style="list-style:circle; font-size:13px; line-height:20px;color:#000;">
					<li>Core Java</li>
					<li>OOPS Concepts</li>
					<li>JSF</li>
					<li>RDBMS</li>
					<li>Analysis of Alogorithms</li>
				</ul>
				<!-- <a href="#0" class="cd-read-more">Read more</a> -->
				<span class="cd-date">2011</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">
				<!-- <img src="img/cd-icon-location.svg" alt="Location"> 

-->
				<span class="glyphicon glyphicon-education" aria-hidden="true" style="color:white;font-size:30px;position:relative;top:25%;left:25%;"></span>

			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				
				<h2>Bachelor of Engineering, Electrical and Electronics</h2>
				<p style="color:#000;font-weight:500">Anna University, Chennai, India</p>
				<p style=" font-size:13px; line-height:20px;color:#000;">Aggregate: 75%</p>
				<!-- <a href="#0" class="cd-read-more">Read more</a> -->
				<span class="cd-date">2008 - 2011</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
		
	</section> <!-- cd-timeline -->

</div>
<!-- <script 

src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->

<!-- <script type="text/javascript" 

src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script> -->
<!-- <script src="js/main.js"></script> <!-- Resource jQuery --> -->








	<!-- <div class="education">

	<div class="col-md-6" style="text-align:center;font-size:24px;color:#000;margin-

top:30px;">EDUCATION</div>


	</div>
		<div class="col-md-6" style="text-align:center;font-size:24px;color:#000;margin-

top:30px;">EXPERIENCE</div>
	<div class="experience"></div>
	
	</div> -->
	<!-- <section class="fourth"> -->
		
	<!-- </section> -->
<!-- </div> -->
<div class="fourth slide" id="slide4" data-slide="4" data-stellar-background-ratio="0.8">
	<div class="row">
		<div class="col-md-12">
			<br><br><br>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" style="height:100px;font-size:26px;text-align:center;padding-top:50px;font-weight:200;">
		MY PROJECTS
		</div>
	</div>
<br><br>
	<div class="wrapper">
   	<div class="portfolio-content">	
    <!-- <h1 class="title-page">jQuery Photo Gallery</h1> -->
   
	  <ul class="portfolio-categ filter">
      <li><b>CATEGORIES: </b></li>
      <li class="all active"><a href="#">All</a></li>
         	<li class="cat-item-1"><a href="#" title="Category 1">Database Design</a>
</li>
	<li class="cat-item-2"><a href="#" title="Category 2">Artificial Intelligence</a>
</li>
	<li class="cat-item-3"><a href="#" title="Category 3">Operating Systems</a>
</li>
	<li class="cat-item-4"><a href="#" title="Category 4">Machine Learning</a>
</li>
        </ul>
        
       
			            <ul class="portfolio-area">	
 		
               		<li class="portfolio-item2" data-id="id-0" data-type="cat-item-3">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/batch.jpg" rel="prettyPhoto[gallery]" title="Batch Processing"><img width="225" height="140" src="images/batch.jpg" alt="Batch Processing" title="Batch Processing" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h4 class="post-title-portfolio"><a href="#" rel="bookmark" title="Batch Processing">Batch File Processor</a></h4>
                    <!-- <p class="post-subtitle-portfolio"></p> -->
					</div>
                    
					</div>	
                    </li>			
				            
			                        		
               		<li class="portfolio-item2" data-id="id-1" data-type="cat-item-4">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/binary_adaboosting.jpg" rel="prettyPhoto[gallery]" title="Binary Adaboosting"><img width="225" height="140" src="images/binary_Adaboosting.jpg" alt="Binary Adaboosting" title="Binary Adaboosting" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h4 class="post-title-portfolio"><a href="#" rel="bookmark" title="Binary Adaboosting">Binary Adaboosting</a></h4>
                    <!-- <p class="post-subtitle-portfolio">released: 2009</p> -->
					</div>
                    
					</div>	
                    </li>				
				 
                        		
               			<li class="portfolio-item2" data-id="id-2" data-type="cat-item-2">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/chess.jpg" rel="prettyPhoto[gallery]" title="Chess Engine"><img width="225" height="140" src="images/chess.jpg" alt="Cars 2" title="Chess Engine" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h4 class="post-title-portfolio"><a href="#" rel="bookmark" title="Chess Engine">Chess Engine</a></h4>
                    <!-- <p class="post-subtitle-portfolio">released: 2011</p> -->
					</div>
                    
					</div>	
                    </li>		
				            
			                             		
               			<li class="portfolio-item2" data-id="id-3" data-type="cat-item-4">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/cross_validation.jpg" rel="prettyPhoto[gallery]" title="Cross Validation"><img width="225" height="140" src="images/cross_validation.jpg" alt="Cross Validation" title="Cross Validation" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h4 class="post-title-portfolio"><a href="#" rel="bookmark" title="Cross Validation">Cross Validation</a></h4>
                    <!-- <p class="post-subtitle-portfolio">released: 2010</p> -->
					</div>
                    
					</div>	
                    </li>			
				            
			                            		
               		<li class="portfolio-item2" data-id="id-4" data-type="cat-item-1">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/hospital.jpg" rel="prettyPhoto[gallery]" title="Hospital Management System"><img width="225" height="140" src="images/hospital.jpg" alt="Hospital Management System" title="Hospital Management System" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h4 class="post-title-portfolio"><a href="#" rel="bookmark" title="Hospital Management System">Hospital Management System</a></h4>
                    <!-- <p class="post-subtitle-portfolio">released: 2003</p> -->
					</div>
                    
					</div>	
                    </li>			
				            
			     		              		
               		<li class="portfolio-item2" data-id="id-5" data-type="cat-item-3">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/tcp.jpg" rel="prettyPhoto[gallery]" title="tcp"><img width="225" height="140" src="images/tcp.jpg" alt="tcp" title="tcp" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h4 class="post-title-portfolio"><a href="#" rel="bookmark" title="tcp">TCP/IP Sockets</a></h4>
                    <!-- <p class="post-subtitle-portfolio">released: 2012</p> -->
					</div>
                    
					</div>	
                    </li>			
				            
			     	             	
               		<li class="portfolio-item2" data-id="id-6" data-type="cat-item-1">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/library.jpg" rel="prettyPhoto[gallery]" title="library"><img width="225" height="140" src="images/library.jpg" alt="library" title="library" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h4 class="post-title-portfolio"><a href="#" rel="bookmark" title="library">Library Management System</a></h4>
                    <!-- <p class="post-subtitle-portfolio">released: 2011</p> -->
					</div>
                    
					</div>	
                    </li>	
		                
            		
                    <li class="portfolio-item2" data-id="id-7" data-type="cat-item-3">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/threads.jpg" rel="prettyPhoto[gallery]" title="threads"><img width="225" height="140" src="images/threads.jpg" alt="threads" title="threads" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h4 class="post-title-portfolio"><a href="#" rel="bookmark" title="Tangled">Task Executer</a></h4>
                    <!-- <p class="post-subtitle-portfolio">released: 2010</p> -->
					</div>
                    
					</div>	
                    </li>			
				            
			     
		           <!--  <li class="portfolio-item2" data-id="id-8" data-type="cat-item-1">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/big/pic9.jpg" rel="prettyPhoto[gallery]" title="Kung Fu Panda 2"><img width="225" height="140" src="images/thumbs/p9.jpg" alt="Kung Fu Panda 2" title="Kung Fu Panda 2" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h4 class="post-title-portfolio"><a href="#" rel="bookmark" title="Kung Fu Panda 2">Kung Fu Panda 2</a></h4>
                    <p class="post-subtitle-portfolio">released: 2011</p>
					</div>
                    
					</div>	
                    </li>			
				            
			     
		                
            		 <li class="portfolio-item2" data-id="id-9" data-type="cat-item-2">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/big/pic10.jpg" rel="prettyPhoto[gallery]" title="Madagascar 3"><img width="225" height="140" src="images/thumbs/p10.jpg" alt="Madagascar 3" title="Madagascar 3" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h4 class="post-title-portfolio"><a href="#" rel="bookmark" title="Madagascar 3">Madagascar 3</a></h4>
                    <p class="post-subtitle-portfolio">released: 2012</p>
					</div>
                    
					</div>	
                    </li>			            
			     
		                
            		 <li class="portfolio-item2" data-id="id-10" data-type="cat-item-3">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/big/pic11.jpg" rel="prettyPhoto[gallery]" title="Rango"><img width="225" height="140" src="images/thumbs/p11.jpg" alt="Rango" title="Rango" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h4 class="post-title-portfolio"><a href="#" rel="bookmark" title="Rango">Rango</a></h4>
                    <p class="post-subtitle-portfolio">released: 2011</p>
					</div>
                    
					</div>	
                    </li>	
				            
			     
		            <li class="portfolio-item2" data-id="id-11" data-type="cat-item-4">	
			        <div>
                   <span class="image-block">
					<a class="image-zoom" href="images/big/pic12.jpg" rel="prettyPhoto[gallery]" title="Shrek Forever After"><img width="225" height="140" src="images/thumbs/p12.jpg" alt="Shrek Forever After" title="Shrek Forever After" />                    
                    </a>
                    </span>
                   <div class="home-portfolio-text">
					<h4 class="post-title-portfolio"><a href="#" rel="bookmark" title="Shrek Forever After">Shrek Forever After</a></h4>
                    <p class="post-subtitle-portfolio">released: 2010</p>
					</div>
                    
					</div>	
                    </li> -->

            
                        <div class="column-clear"></div>
            		</ul><!--end portfolio-area -->
		</div><!--end portfolio-content -->
        
 	
</div><!-- end wrapper -->  

</div>

<div class="fifth slide" id="slide5" data-slide="5" data-stellar-background-ratio="0.8">
	<div class="row">
		<div class="col-md-6">
			<div id="map-canvas" style="width=50%; height: 600px; margin-top:50px;"></div>
		</div>
		<div class="col-md-6">
			<div class="contact-msg" style="height:100px;font-size:26px;padding-top:100px;padding-bottom:75px;font-weight:200;padding-left:50px;">
				GET IN TOUCH
				<hr class="about_hr" style="background-color:#ff6666;height:1px;margin-top:3px;">
			</div>

			
			<div style="font-size:14px;color:#000;padding-left: 50px;">

			<div style="line-height:30px;">
					<span style="padding:5px; border-radius:50%;border:1px solid #dbdbdb;">
					<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></span>
						1000, Preston Blvd, Austin, TX
			</div>	
			<br>
			<div style="line-height:30px;">
					<span style="padding:5px; border-radius:50%;border:1px solid #dbdbdb;">
					<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
						xyz@gmail.com
			</div>
			<br>
			<div style="line-height:30px;">
					<span style="padding:5px; border-radius:50%;border:1px solid #dbdbdb;">
					<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></span>
						+1 123-456-8970
			</div>
			
			</div>	

<div class="row">
<div class="col-md-6">
<br><br>
</div>
</div>

<form class="form-horizontal" role="form" style="padding-left:50px;" method="post" action="index.php">

<div class="form-group">

 <!-- <label for="name">Name</label> -->
 <input class="form-control" type="text" name="name" style="width:70%;border-radius:20%;" placeholder="Your Name" required/>
<?php if(!empty($errName)) {?>
<?php echo "<p class='text-danger'>$errName</p>";?>
<?php } ?>
</div>					

<div class="form-group">
 <!-- <label for="email">Email Address</label> -->
<input class="form-control" type="email" name="email"
placeholder="Your email" style="width:70%;border-radius:20%;" required/>
<?php if(!empty($errName)) {?>
<?php echo "<p class='text-danger'>$errEmail</p>"; ?>
<?php } ?>
</div>

 <div class="form-group">
  <!-- <label for="comment">Comment</label> -->
  <textarea class="form-control" rows="5" id="comment" style="width:70%;border-radius:10%;" name="message" placeholder="Your Message" required></textarea>
 	<?php if(!empty($errEmail)) {?>
   <?php echo "<p class='text-danger'>$errMessage</p>";?>
   <?php } ?>
</div>

<input id="submit" name="submit" type="submit" value="SEND IT" class="btn btn-primary" style="background-color:#ff9999;color:#000;display:block;">
<!-- <input type="submit" class="btn btn-default"  value="SEND IT" /> -->
<br><br>
<div class="form-group">
        <div style="width:70%;">
        	<?php if(!empty($result)) {?>
             <?php echo $result; ?>    
        	<?php } ?> 
        </div>
</div>


 </form>


				
			</div>
		</div>
	</div>

	<footer style="background-color:black;height:50px;width:100%;">
		<div class="row">
			<div class="col-md-12">
				<div style="padding:10px;">
					<span class="glyphicon glyphicon-copyright-mark" aria-hidden="true" style="color:red;font-size:20px;padding-left:30px;"></span><span style="padding-left:10px;color:white;position:relative;bottom:3px;font-weight:200">2015. All Rights Reserved.</span>
				</div>
			</div>
		</div>
	</footer>
</div>
</body>
</html>



