<?php
  include 'assets/include/header.php';
  include '../AdminPannel/include/Conn.php';
?>
<div class="inner-banner">
    <section class="w3l-breadcrumb py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Contact Us</h2>
        </div>
    </section>
</div>
<!-- banner bottom shape -->
<div class="position-relative">
    <div class="shape overflow-hidden">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- banner bottom shape -->
<!-- contacts -->
<section class="w3l-contact-7 py-5" id="contact">
    <div class="contacts-9 py-lg-5 py-md-4">
        <div class="container">
        <?php
                      if(!empty($_GET['res'])){
                          $res=$_GET['res'];
                          if($res==1){
                     ?>
                     <div class ="alert alert-successfylly alert-dismissible">
                     <button type="button" class="close" data-dismiss="alert"> &times; </button>
                     <strong>Your Message has been Send Successfully!!</strong>
                     </div>
                      <?php  
                          }
                      }
                    ?>
            <div class="top-map">
                <div class="row map-content-9">
                    <div class="col-lg-8">
                        <h3 class="title-big">Send us a Message</h3>
                        <p class="mb-4 mt-lg-0 mt-2">Your email address will not be published. Required fields are marked *</p>
                        <form action="contact_process.php" method="post" class="text-right">
                            <div class="form-grid">
                                <input type="text" name="cname" id="name" placeholder="Name*" required="">
                                <input type="email" name="email" id="email" placeholder="Email*" required="">
                                <input type="text" name="phone" id="phone" placeholder="Phone number*"
                                    required="">
                                <input type="text" name="subject" id="subject" placeholder="Subject">
                            </div>
                            <textarea name="message" id="message" placeholder="Message"></textarea>
                            <button type="submit" name="btncontact" class="btn btn-style btn-primary ml-lg-3 mr-lg-2">Send Message</button>
                        </form>
                    </div>
                    <div class="col-lg-4 cont-details">
                        <address>
                            <h5 class="">Contact Address</h5>
                            <p><span class="fa fa-map-marker"></span>HN-62,Depu Chowk,jhumra,
                                            Hazaribagh,jharkhand </p>
                            <p> <a href="mailto:khayegaIndia@gmail.com"><span
                                        class="fa fa-envelope"></span>khayegaIndia@gmail.com</a></p>
                            <p><span class="fa fa-phone"></span><a href="tel:+44-000-888-999"> +91 6299469799</a></p>
                            <a href="donate.php" class="btn btn-style btn-outline-primary mt-4">
                                <span class="fa fa-heart mr-1"></span> Make Donation</a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //contacts -->
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7289.183640668977!2d85.5019045023454!3d24.010186859227602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f483c34008429f%3A0x5670a3aea1b68979!2sJhumra%2C%20Ramdeo%20Kharika%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1629378525006!5m2!1sen!2sin"
     width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
      <?php
  include 'assets/include/footer.php';
?>