<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Muhammed Midlaj</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/alakan (2).png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/prof pic.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Muhammed Midlaj</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://www.linkedin.com/in/muhammed-midlaj-a73389179/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          <a href="https://twitter.com/midlajkp888" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/appmiz" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/pistonhead_007/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://github.com/midlajkp888" class="google-plus"><i class="bx bxl-github"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="index.html"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#Gallery"><i class="bx bx-book-content"></i> Gallery</a></li>
          <li><a href="#testimonials"><i class="bx bx-server"></i> Testimonials</a></li>
          <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">

    <h1>Thank you </h1>




<style> .txtRedBold{
  background: #ffffff; text-align: center; color: #fc5f00; 
}</style>
<?php
error_reporting(0);
//session_start();
//ob_start();

if(isset($_REQUEST['Submit_btn']))
{
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $subject=$_REQUEST['subject'];
    $message=$_REQUEST['message'];
    


    $body="<table cellSpacing='0' cellPadding='0'  width='100%' border='0' >".
    " <TR>
      <TD align='Center' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 9pt; COLOR: #FFFFFF; FONT-FAMILY: Verdana; BACKGROUND-COLOR:#005A96'>Wager International Pvt Ltd.: Enquiry</TD>
    </TR>".
    "<TR><TD align='left'>".
    "<table width='100%' border='0' cellPadding='1' cellSpacing='0'>".
    "
    <TR bgcolor='#f1f1f1'><TD width='49%' height='25' align='right' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Name &nbsp;</TD><TD width='30' height='25' align='cente' valign='middle' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD>
    <TD width='49%' height='25' align='left' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" .$name."</TD>
    </TR>". 


"<TR bgcolor='#e6e6e6'><TD align='right' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Email Id &nbsp;</TD><TD  height='25' align='cente' valign='middle' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $email . "</TD></TR>".    

"<TR bgcolor='#f1f1f1'>
<TD align='right' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Subject &nbsp;</TD><TD  height='25' align='cente' valign='middle' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $sub . "</TD></TR>".




"<TR bgcolor='#e6e6e6'><TD align='right' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Message &nbsp;</TD><TD height='25' align='cente' valign='middle' style='FONT-WEIGHT: bold; COLOR: #000000'>:  </TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $message. "</TD></TR>".             
   

   
    "</table>
    " .
    "</TD></TR>
    
    " .
    "</table>";

    $mailheaders  = "MIME-Version: 1.0\n";
$mailheaders .= "Content-type: text/html; charset=iso-8859-1\n";
$mailheaders .="From :$name <midlajkp888@gmail.com>\r\n";
$mailheaders .= "Reply-To: $email <$email>\n";
if(mail('midlajkp888@gmail.com',"FromMyWebsite",$body,$mailheaders)){
    $mailmsg="<div align='center' class='txtRedBold'>Your Enquiry has been sent Successfully</div>";
        
}
else{
  $mailmsg="<div align='center' class='txtRedBold'>Sorry !! Please try later</div>";
       
}


}








            <?php
            // }
            if($mailmsg)
            echo $mailmsg;
            
            function getCurlDataOne($url)
            {
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($curl, CURLOPT_TIMEOUT, 10);
                curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
                $curlData = curl_exec($curl);
                curl_close($curl);
                return $curlData;
            }
            ?> 
            
             <script>
            
            function onlyAlphabets(e, t) {
               try {
                   if (window.event) {
                       var charCode = window.event.keyCode;
                   }else if (e) {
                       var charCode = e.which;
                   }else { return true; }
            
                   if ((charCode > 64 && charCode < 123) || (charCode > 31 && charCode < 48))
                       return true;
                   else
                       return false;
               }
               catch (err) {
                   alert(err.Description);
               }
            }
            
            
            
            function recaptchaCallback() 
             {
               
               document.getElementById('sub').disabled = false;
             }
            
            
            </script>
</div>
</section>

            <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>midlaj.online</span></strong>
      </div>
      <div class="credits">
       
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>