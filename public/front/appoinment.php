<?php
include "connect.php";
if(isset($_GET['ref'])) {
    $id = $_GET['ref'];
    $sql = "SELECT * FROM buah where id = '$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

    $bm = $row['bm'];
    $bi = $row['bi'];
    $ba = $row['ba'];
    $picture = $row['picture'];
    }
    } else {
    }
    $conn->close();
    }else{
    header("location:education_admin.php");
    }
?>



<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>E-QUARANTINE</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>
<style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: #fff;
      z-index: 2;
 line-height: 83px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px #006622; 
      }
      .banner {
      position: relative;
      height: 300px;
      background-image: url("/uploads/media/default/0001/02/e2502bb5e1dab7d5cc9b011c745033821aad632c.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
    }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #006622;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #006622;
      color: #006622;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #00b33c;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
 .week {
      display:flex;
      justfiy-content:space-between;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
      width:48%;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
  display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #006622;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #006622;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #006622;
      font-size: 16px;
      color: #fff;
cursor: pointer;
      }
      button:hover {
      background:  #00b33c;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
<body id="top">

<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>Kuarantin@upsi.edu.my</a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Kolej Awang Had Saleh , UPSI , Perak</li>
					</ul>
				</div>
								</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="index.html">
			  	<img src="https://pbs.twimg.com/media/FQDu9gwaQAIRvOr?format=jpg&name=medium" alt="Class" width="300" height="70">
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="index.html">Home</a>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
			    <li class="nav-item"><a class="nav-link" href="check.php">Check Application Status</a></li>
			   <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                            

			</ul>
		  </div>
		</div>
	</nav>
</header>
	


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          
		  <H1 class="text-white">APPOINTMENT</H1>
          
        

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Book your Room</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="appoinment section">
  <div class="container">
    <div class="row">
       <div class="testbox">
      <form>
        
        <br/>
        <fieldset>
          <legend>A. Applicant Information</legend>
          <div class="item">
            <label for="fname"> Full Name<span>*</span></label>
            <input id="fname" type="text" name="fname" value="<?php echo"$bm"; ?>"/>
          </div>
          <div class="item">
            <label for="activity">Email Address<span>*</span></label>
            <input id="activity" type="text" name="activity" value="<?php echo"$bm"; ?> />
			</div>
			
			 <div class="item">
            <label for="activity">Matric Number<span>*</span></label>
            <input id="activity" type="text" name="activity" value="<?php echo"$bm"; ?> />
          </div>
		  
          <div class="item">
            <label for="fee">Telephone No.<span>*</span></label>
            <input id="fee" type="text" name="fee" value="<?php echo"$bm"; ?>  />
          </div>
		  
		   <div class="item">
            <label for="activity">IC Number<span>*</span></label>
            <input id="activity" type="text" name="activity" value="<?php echo"$bm"; ?>  />
          </div>
		  
		  <div class="item">
            <label for="activity">IMAGE<span>*</span></label>
            <input id="activity" type="file" name="activity" value="<?php echo"$bm"; ?>  />
          </div>
		  
		  
		  
                  
<legend>B. COVID DATABASE</legend>
  <div class="item">
            <label for="fname"> Level<span>*</span></label>
            <input id="fname" type="text" name="fname" value="<?php echo"$bm"; ?> />
          </div>
          <div class="item">
            <label for="activity">Vaccine<span>*</span></label>
            <input id="activity" type="text" name="activity" value="<?php echo"$bm"; ?>  />
          </div>
          <div class="item">
            <label for="fee1">Type<span>*</span></label>
            <input id="fee1" type="text" name="fee1" value="<?php echo"$bm"; ?>  />
          </div>
                 
        <fieldset>
          <legend>Household/Contact</legend>
           <div class="colums">
          <div class="item">
            <label for="fname"> Full Name<span>*</span></label>
            <input id="fname" type="text" name="fname" value="<?php echo"$bm"; ?>  />
          </div>
          <div class="item">
            <label for="lname"> Email Address<span>*</span></label>
            <input id="lname" type="text" name="lname" value="<?php echo"$bm"; ?>  />
          </div>
 <div class="item">
            <label for="address1">Matric number<span>*</span></label>
            <input id="address1" type="text"   name="address1" value="<?php echo"$bm"; ?> />
          </div>
  <div class="item">
            <label for="address2">telephone Number<span>*</span></label>
            <input id="address2" type="text"   name="address2" value="<?php echo"$bm"; ?>  />
          </div>
		  </fieldset>
  <div class="item">
            <label for="city">IMAGE<span>*</span></label>
            <input id="city" type="file"   name="city" value="<?php echo"$bm"; ?>/>
          </div>
            
        <div class="btn-block">
          <button type="submit" href="/">Submit</button>
        </div>
      </form>
    </div>
<script >
	var a = document.getElementByID("fee").value;
	var b = document.getElementByID("fee1").value;
	var c = document.getElementByID("fee2").value;
	var result = a+b+c;
	function calcNumbers(){
		document.getElementByID("result").innerHTML = result;
	}
</script>
	  
	  
	  
	  
	  
	  </section>
	  
	  
	  
	  
	  <section>
	<footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<img src="https://pbs.twimg.com/media/FQDu9gwaQAIRvOr?format=jpg&name=medium" class="img-fluid">
					</div>
					<p>Sistem E - Quarantine ini dibina atas tujuan mencegah penularan covid - 19 yang semakin menignkat di sekitar kawasan kolej ini . Ia adalah untuk memudahkan pelajar mendapat bilik kuarantin mereka tanpa perlu ada kontak secara bersemuka dengan pihak pengurusan kolej .</p>

					<ul class="list-inline footer-socials mt-4">
						
						<li class="list-inline-item"><a href="admin.php"><i class="icofont-linkedin"></i></a></li>
					</ul>
				</div>
			</div>

			

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Get in Touch</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0">Support Available for 24/7</span>
						</div>
						<h4 class="mt-2"><a >equaratine@gmail.com</a></h4>
					</div>

					<div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
						</div>
						<h4 class="mt-2"><a href="tel:+094922097">+60 94922097</a></h4>
					</div>
				</div>
			</div>
		</div>
		
		

			<div class="row">
				<div class="col-lg-4">
					<a class="backtop js-scroll-trigger" href="#top">
						<i class="icofont-long-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>  
	  
	  
	  
	  
	  
	  
</section>

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>
    <script src="js/contact.js"></script>

  </body>
  </html>