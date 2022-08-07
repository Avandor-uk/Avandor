<!DOCTYPE html>
<html lang="en">
<?php 
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
  echo'<script>console.log("posted");</script>';
  $name = $_SERVER['name'];
  $email = $_SERVER['email'];
  $subject = $_SERVER['subject'];
  $message = $_SERVER['message'];

    // the message
    $msg = "Message From " . $name . "\n" ."Email address: " . $email . "\n" . $message;

    // use wordwrap() if lines are longer than 70 characters
    //$msg = wordwrap($msg,70);

    // send email
    if(mail("canaanjack@hotmail.co.uk",$subject,$msg)){
      echo'<script>console.log("email sent");</script>';
    }
    else{
      echo'<script>console.log("email not sent");</script>';
    }

}else{
  echo'<script>console.log("not posted");</script>';
}


?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <script 
    src="https://kit.fontawesome.com/ab972f586c.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Contact Us</title>
</head>
<body id="contact-body">

  <Header> 
    <div class="header-wrapped">
        <div class="logo">
            <img src="assets/images/logo.png" alt="Avandor Logo">
        </div>
        <div id="Navbar" class="navigation"> 
            <nav>
                <ul>
                    <li><a href="index.html" class="navigation-a">HOME</a></li>
                    <li><a class="navigation-a">OUR SERVICES</a>
                    <ul>
                        <li><a href="web-design.html">WEB DESIGN</a></li> 
                        <li><a href="responsive-design.html">RESPONSIVE DESIGN</a></li>
                        <li><a href="website-maintenance.html">WEBSITE MAINTENANCE</a></li>
                        <li><a href="e-commerce.html">E-COMMERCE</a></li>
                        <li><a href="seo.html">SEO</a></li>
                        <li><a href="logo-design.html">LOGO DESIGN</a></li>
                    </ul>
                    </li>
                    <li><a href="contact-us.php" class="navigation-a active">CONTACT US</a></li>
                </ul>
            </nav>
            
            
            
        </div>
    

        <a href="#" class="navigation-button" id="nav-toggle">
            <i class="fa fa-bars"></i>
        </a>
    </div>

        <div class="extend-nav" id="nav-extend">
            <div class="mobile-nav">

                <ul>
                    <li><a href="index.html" class="navigation-a">HOME</a></li>
                </ul>
                <ul>
                    <li><a href="services.html" class="navigation-a">OUR SERVICES</a></li>
                </ul>
                <ul>
                    <li><a href="contact-us.php" class="navigation-a active">CONTACT US</a></li>
                </ul>
            </div> 
        </div>
    
  </Header>


   

    <!-- Our Services -->
    <section id="contact">
  
        <h1 class="section-header">Fancy a chat?</h1>
        
        <div class="contact-wrapper">
        
        <!-- Left contact page --> 
        <div id="form-submitted"  style="display:none;">
          <h1 class="section-header">Form Submitted (123)</h1>
        </div>
          <form id="contact-form" class="form-horizontal" onsubmit="hidecontactform()" action="index.html" role="form" method="post">
            
            <div class="form-group">
              <div class="col-sm-12">
                <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
              </div>
            </div>
      
            <div class="form-group">
              <div class="col-sm-12">
                <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
              </div>
            </div>
      
            <div class="form-group">
              <div class="col-sm-12">
                <input type="text" class="form-control" id="subject" placeholder="SUBJECT" name="subject" value="" required>
              </div>
            </div>

            <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>
            
            <button class="btn btn-primary send-button" id="submit1" type="submit" value="SEND">
              <div class="alt-send-button">
                <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
              </div>
            
            </button>
            
          </form>
          
        <!-- Left contact page --> 
          
            <div class="direct-contact-container">
      
              <ul class="contact-list">
                <li class="list-item"><i class="fa-solid fa-location-dot fa-2x contact-i"><span class="contact-text place">Leigh, Manchester</span></i></li>
                
                <li class="list-item"><i class="fa fa-phone fa-2x contact-i"><span class="contact-text phone"><a href="tel:07729286513" title="Give us a call">07729286513</a></span></i></li>
                
                <li class="list-item"><i class="fa fa-envelope fa-2x contact-i"><span class="contact-text gmail"><a href="mailto:enquiries@avandor.co.uk" title="Send us an email">enquiries@avandor.co.uk</a></span></i></li>
                
              </ul>
      
              <hr>
              <ul class="social-media-list">
                <li><a href="#" target="_blank" class="contact-icon">
                    <i class="fa-brands fa-facebook-f contact-i" aria-hidden="true"></i></a>
                </li>
                <li><a href="#" target="_blank" class="contact-icon">
                    <i class="fa-brands fa-linkedin-in contact-i" aria-hidden="true"></i></a>
                </li>
                <li><a href="#" target="_blank" class="contact-icon">
                  <i class="fa fa-twitter contact-i" aria-hidden="true"></i></a>
                </li>
                <li><a href="#" target="_blank" class="contact-icon">
                  <i class="fa fa-instagram contact-i" aria-hidden="true"></i></a>
                </li>       
              </ul>
              <hr class="contact-hr">
              <br><br>
              <div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>
      
            </div>
          
        </div>
        
    </section>  

    

    <!-- footer -->

    <footer>
        <div class="footer-content">
            <img src="assets/images/logo.png" alt="Avandor Logo">
            <div class="footer-navigation"> 
                <a href="index.html">HOME</a>
                <a href="services.html">OUR SERVICES</a>
                <a href="contact-us.php" class="active">CONTACT US</a>
            </div>
        </div>
    </footer>

    <script src="assets/js/contact.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>