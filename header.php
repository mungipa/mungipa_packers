<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Moverspackers Home Page</title>
<meta name="google-site-verification" content="32xpEIKSK-Nz41W_eI6yHR3TisFYuQ-ul6okkKBkbLk" />
    <!-- Css Files -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/slick-slider.css" rel="stylesheet">
    <link href="css/fancybox.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="css/color.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
	<script type="text/javascript" src="script/jquery.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
<script>
    function imgurlchange(id)
    {
        img=document.getElementById(id);
        bigimg=document.getElementById('bigimg');
        bigimg.src=img.src;
        
    }
  
</script>
<script>
  gtag('config', 'AW-11102391717/A4v8CJy3sPwDEKWbhK4p', {
    'phone_conversion_number': '099154 65410'
  });
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11102391717"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11102391717');
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-258278025-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-258278025-1');
</script>
<script>
       $(window).load(function(){        
   $('#queryModal').modal('show');
    }); 
</script>
  </head>
  <body>
  
	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pay Now</h5>
        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>-->
      </div>
      <div class="modal-body">
        <img src="extra-images/upi.png" style="width:100%"/>
      </div>
     
    </div>
  </div>
</div> 

<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
        <img id="bigimg" src="extra-images/noimage.jpg" style="height:500px"/>
      </div>
     
    </div>
  </div>
</div> 

<div class="modal fade" id="queryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>-->
      </div>
      <div class="modal-body">
       <div class="moverspackers-contact-form">
								<form method="post" class="myform" action="process-form.php">
									<ul>
										<li class="coment-box">
											<label>Message:</label>
											<textarea placeholder="Type here" name="message" spellcheck="false" data-ms-editor="true"></textarea>
										</li>
										<li>
											<label>Name:</label>
											<input placeholder="Type here" tabindex="0" type="text" name="name" spellcheck="false" data-ms-editor="true" required>
										</li>
										<li>
											<label>Email:</label>
											<input placeholder="Type here" tabindex="0" type="text" name="email" spellcheck="false" data-ms-editor="true" required>
										</li>
										<li>
											<label>Phone No:</label>
											<input placeholder="Type here"  tabindex="0" type="text" name="website" spellcheck="false" data-ms-editor="true" required>
										</li>
										<li class="full-form">
											<input type="submit" name="submit" value="Send Now">
											<span class="output_message"></span>
										</li>
									</ul>
								</form>
							</div>
							<div style="clear:both"></div>
      </div>
     
    </div>
  </div>
</div> 

 <!--// Main Wrapper \\-->
    <div class="moverspackers-main-wrapper">

        <!--// Header \\-->
        <header id="moverspackers-header" class="moverspackers-header-one">

            <!--// TopStrip \\-->
            <div class="moverspackers-top-strip moverspackers-bgcolor">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-5">
                            <ul class="moverspackers-strip-info">
                                <li><a href="contact-us.php"><i class="flaticon moverspackers-telephone"></i>Contact Us</a></li>
                                
								 <li><i class="flaticon moverspackers-rupee"></i><a href="#" data-toggle="modal" data-target="#exampleModal">Pay Online</a></li>
                            </ul>
                        </aside>
                        <aside class="col-md-7">
                            <ul class="moverspackers-strip-info moverspackers-right-section">
                                <li><i class="fa fa-map-marker"></i>zirakpur, Punjab-140603</li>
                                <li><i class="fa fa-phone"></i><a href="tel:+919812554410">+91 98125 54410</a></li>
                                <li><i class="fa fa-envelope-o"></i><a href="mailto: info@mungipapackersmovers.com"> info@mungipapackersmovers.com</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <!--// TopStrip \\-->
            <!--// Main Header \\-->
            <div class="moverspackers-main-header">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-3"><a href="index.php" class="logo"><img src="images/header-logo.png" alt=""> </a></aside>
                        <aside class="col-md-9">
                            <nav class="navbar navbar-default">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                    <ul class="nav navbar-nav align-middle">
                                        <li class="<?php echo $activeclass[0] ?>"><a href="index.php">Home</a></li>
										 <li class="<?php echo $activeclass[1] ?>"><a href="about-us.php">About Us</a></li>
                                        <li class="<?php echo $activeclass[2] ?>"><a href="#">Services</a>
                                            <ul class="moverspackers-dropdown-menu">
                                                <li><a href="services.php">Home Shifting</a> </li> 
                                                
                                                <li><a href="services.php">Local Shifting</a></li>
												<li><a href="services.php">Commercial Shifting</a></li>
												<li><a href="services.php">Office Relocation</a></li>
												<li><a href="services.php">Storage Warehousing</a></li>
												<li><a href="services.php">Bike Transport</a></li>
												<li><a href="services.php">Car Shifting</a></li>
												<li><a href="services.php">Packing Unpacking</a></li>
												<li><a href="services.php">Loading Unloading</a></li>
												<li><a href="services.php">International Shifting</a></li>
                                            </ul>
                                        </li>
										<li class="<?php echo $activeclass[3] ?>"><a href="portofolio.php">Portofolio</a></li>
                                          <li class="<?php echo $activeclass[4] ?>"><a href="contact-us.php">contact Us</a></li>
                                       
                                        
									   </li>
                                    </ul>
                                </div>
                            </nav>
                            <a href="#" class="moverspackers-simple-btn rgtbtn" data-toggle="modal" data-target="#queryModal">Get A Quote</a>
                        </aside>
                    </div>
                </div>
            </div>

        </header>
        <!--// Header \\-->