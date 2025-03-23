<?php
// Date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>MTIS UK Limited</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/style.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
 
<div class="wrap">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <button id="primary-nav-button" type="button">Menu</button>
                    <a href="/"><div class="logo">
                        <img src="img/logo.png" alt="Venue Logo">
                    </div></a>
                    <nav id="primary-nav" class="dropdown cf">
                        <ul class="dropdown menu">
                            <li><a href="/">Home</a></li>
                            <li><a href="/services.php">Services</a></li>
                            <li><a href="/solutions.php">Solutions</a></li>
                            <li><a href="/about-us.php">About Us</a></li>
                            <li class='active'><a href="/contact.php">Contact Us</a></li>
                        </ul>
                    </nav><!-- / #primary-nav -->
                </div>
            </div>
        </div>
    </header>
</div>
      
    <section class="banner banner-secondary" id="top" style="background-image: url(img/vista-building.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main>
        <section class="popular-places">
            <div class="container">
                <div class="contact-content">
                    <div class="row">
                        <div class="col-md-8"> 
                            <div class="left-content">
                                <div class="contact-enq">
                                    <form enctype="multipart/form-data"  name="contact-enquiry" method="post" action="send-email.php">
                                        
                                      <div class="form-group col-lg-4 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Name" name="name" required>
                                      </div>
                                      
                                      <div class="form-group col-lg-4 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Mobile No" name="phone" onkeypress="return isNumberKey(event)" maxlength="10" required>
                                      </div>
                                                            
                                      <div class="form-group col-lg-4 col-xs-12">
                                        <input type="email" class="form-control" placeholder="Email Id" name="email" required>
                                      </div>
                                      
                                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <textarea class="form-control txt_area" name="comment" placeholder="Enter Your Message" required></textarea>
                                      </div>
                                                            
                                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="submit" class="form-control submit" name="submit" value="submit" disabled>
                                      </div>
                                    </form>	
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="right-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content"> 
                                            <p>You can reach us through any of the channels below. Let us make it a time of great exchanges as we partner for new heights. We are competent to serve our field and we hold the ace in Telecommunication infrastructure solutions. </p>
                                            <ul style="list-style-type: none;">
                                                <li><span>Director:</span>Ashok Kumar Selvaraj</li>
                                                <li><span>Phone:</span><a href="#">+44(0)2085 380145</a></li>
                                                <li><span>Email:</span><a href="#">ashok.selvaraj@mtisuklimited.co.uk</a></li>
                                                <li><span>Address:</span><br><i class="fa fa-map-marker"></i> The Vista Centre<br>Suite A3/4B<br>50 Salisbury Road<br>Hounslow TW4 6JQ</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </section>
    </main>
<!-- 
    <main>
        <section class="popular-places">
            <div class="container">
                <div class="contact-content">
                    <div class="row">
                        <div class="col-md-8"> 
                            <div class="left-content">
                                <div class="row">
                                    <div class="col-md-6">
                                      <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                      </fieldset>
                                    </div>
                                     <div class="col-md-6">
                                      <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                                      </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                      <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                      </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                      <fieldset>
                                        <div class="blue-button">
                                            <a href="#" id="form-submit" class="btn">Send Message</a>
                                        </div>
                                      </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="right-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content"> 
                                            <p>You can reach us through any of the channels below. Let us make it a time of great exchanges as we partner for new heights. We are competent to serve our field and we hold the ace in Telecommunication infrastructure solutions. </p>
                                            <ul>
                                                <li><span>Phone:</span><a href="#">+44(0)2085 380145</a></li>
                                                <li><span>Email:</span><a href="#">ashok.selvaraj@mtisuklimited.co.uk</a></li>
                                                <li><span>Address:</span><i class="fa fa-map-marker"></i> 212 Barrington Court New York</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </section>
    </main> -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-veno">
                        <div class="logo">
                            <img src="img/logo.png" alt="Venue Logo">
                        </div>
                        <p>Multitech Integrated Solutions UK Limited provide services to private business and government organisations throughout UK, and specialize in the rollout of Telecommunications, Deployment & Intergeneration, Operation & Maintenance, Testing & Optimization, RAN Support and much more.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="useful-links">
                        <div class="footer-heading">
                            <h4>Useful Links</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="/"><i class="fa fa-stop"></i>Home</a></li>
                                    <li><a href="/about-us.php"><i class="fa fa-stop"></i>About Us</a></li>
                                    <li><a href="/contact.php"><i class="fa fa-stop"></i>Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="/services.php"><i class="fa fa-stop"></i>Services</a></li>
                                    <li><a href="/solutions.php"><i class="fa fa-stop"></i>Solutions</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="footer-heading">
                            <h4>Contact Information</h4>
                        </div>
                        <p><i class="fa fa-map-marker"></i> The Vista Centre, Suite A3/4B<br>50 Salisbury Road<br>Hounslow TW4 6JQ</p>
                        <ul>
                            <li><span>Phone:</span><a href="#">+44(0)2085 380145</a></li>
                            <li><span>Email:</span><a href="#">ashok.selvaraj@mtisuklimited.co.uk</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="sub-footer">
        <p>Copyright © 2025 MTIS UK Limited</p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>