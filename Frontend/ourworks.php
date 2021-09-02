<?php
  include 'assets/include/header.php';
  include 'AdminPannel/include/Conn.php';
?>
<div class="inner-banner">
    <section class="w3l-breadcrumb py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Our Works</h2>
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
<!--/team-sec-->
<section class="w3l-team-main" id="team">
<div class="contacts-9 py-lg-5 py-md-4">
        <div class="container">
        <?php
                      if(!empty($_GET['res'])){
                          $res=$_GET['res'];
                          if($res==1){
                     ?>
                     <div class ="alert alert-successfylly alert-dismissible">
                     <button type="button" class="close" data-dismiss="alert"> &times; </button>
                     <strong>Your Request has been Send Successfully!!</strong>
                     </div>
                      <?php  
                          }
                      }
                    ?>
                    
            <div class="top-map">
                <div class="row map-content-9">
                    <div class="col-lg-8">
                        <h3 class="title-big">Donate Here</h3>
                        <p class="mb-4 mt-lg-0 mt-2">Your email address will not be published. Required fields are marked *</p>
                        <form action="works_process.php" method="post" class="text-right">
                        <?php
                                 $donid="";
                                    $query=mysqli_query($con,"select * from donatefood order by Donor_id desc limit 1");
                                    if(mysqli_affected_rows($con)>0){
                                        $row=mysqli_fetch_array($query);
                                          $did=$row[0];
                                          $part1=substr($did,0,6);
                                          $part2= (int)substr($did,6);
                                         if($part2<9){
                                             $part2++;
                                             $donid=$part1.'000'.$part2;
                                         }
                                         else if($part2<99){
                                            $part2++;
                                            $donid=$part1.'00'.$part2;
                                        }
                                        else if($part2<999){
                                            $part2++;
                                            $donid=$part1.'0'.$part2;
                                        }
                                    }
                                    else{
                                        $donid="DONFOD0001";
                                    }
                                ?>
                                <input type="text" class="form-control form-control-user" name="donid"
                                    value="<?php echo $donid;?> " reqired>
                            <div class="form-grid">
                                <input type="text" name="Donorname" placeholder="Name*" required="">
                                <input type="email" name="Donoremail" placeholder="Email*" required="">
                                <input type="text" name="Donorphone"  placeholder="Phone number*"
                                    required="">
                                <input type="text" name="Donoraddress"  placeholder="Address*">
                            </div>
                            <textarea name="FoodQuantity" id="FoodQuantity" placeholder="Food Quantity*"></textarea>
                            <textarea name="explain" id="explain" placeholder="Food Quantity Explain*"></textarea>
                            <button type="submit" name="btndonatefood" class="btn btn-style btn-primary ml-lg-3 mr-lg-2">Donate</button>
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <div class="team py-5">
        <div class="container py-lg-5">
            <div class="title-content text-center">
                <h3 class="title-big">Happy Donors</h3>
                <p>Happy 20 Best Donors</p>
            </div>
            <div class="row">
                <?php
                // include 'retriveDonatefood.php';
                ?>
            </div>
              <div class="team-row mt-md-5 mt-4">
                <div class="team-wrap">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <img src="assets/images/team1.jpg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Luke jacobs</a>
                        <p>Donors</p>
                    </div>
                </div>
                <!-- end team member -->

                  <div class="team-wrap">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <img src="assets/images/team2.jpg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Claire olson</a>
                        <p>Donors</p>
                    </div>
                </div>
                <!-- end team member -->

                 <div class="team-wrap">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="assets/images/team3.jpg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Phillip hunt</a>
                        <p>Donors</p>
                    </div>
                </div>
                <!-- end team member -->

                  <div class="team-wrap">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="assets/images/team4.jpg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Sara grant</a>
                        <p>Donors</p>
                    </div>
                </div>
                <!-- end team member -->

                  <div class="team-wrap">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="assets/images/team5.jpg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Sara grant</a>
                        <p>Donors</p>
                    </div>
                </div>
                <!-- end team member -->

                  <div class="team-wrap">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="assets/images/team6.jpg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Sara grant</a>
                        <p>Donors</p>
                    </div>
                </div>
                <!-- end team member -->

                 <div class="team-wrap">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="assets/images/team7.jpg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Sara grant</a>
                        <p>Donors</p>
                    </div>
                </div>
                <!-- end team member -->

                <div class="team-wrap">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="assets/images/team8.jpg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Sara grant</a>
                        <p>Donors</p>
                    </div>
                </div>
                <!-- end team member -->

                <div class="team-wrap">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="assets/images/team9.jpg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Sara grant</a>
                        <p>Donors</p>
                    </div>
                </div>
                <!-- end team member -->

                  <div class="team-wrap">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <img src="assets/images/team1.jpg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Luke jacobs</a>
                        <p>Donors</p>
                    </div>
                </div>
                <!-- end team member -->
                  <div class="team-wrap">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <img src="assets/images/team1.jpg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Luke jacobs</a>
                        <p>Donors</p>
                    </div>
                </div>
                <!-- end team member -->

                  <div class="team-wrap">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <img src="assets/images/team2.jpg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Claire olson</a>
                        <p>Donors</p>
                    </div>
                </div>
                <!-- end team member -->

                  <div class="team-wrap">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="assets/images/team3.jpg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Phillip hunt</a>
                        <p>Donors</p>
                    </div>
                </div>
                <!-- end team member -->

                 <div class="team-wrap">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="assets/images/team4.jpg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Sara grant</a>
                        <p>Donors</p>
                    </div>
                </div>
                <!-- end team member -->

                 <div class="team-wrap">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="assets/images/team5.jpg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Sara grant</a>
                        <p>Donors</p>
                    </div>
                </div>
                <!-- end team member -->

                  <div class="team-wrap">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="assets/images/team6.jpg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Sara grant</a>
                        <p>Donors</p>
                    </div>
                </div>
                <!-- end team member -->

                  <div class="team-wrap">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="assets/images/team7.jpg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Sara grant</a>
                        <p>Donors</p>
                    </div>
                </div>
                <!-- end team member -->

                  <div class="team-wrap">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="assets/images/team8.jpg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Sara grant</a>
                        <p>Donors</p>
                    </div>
                </div>
                <!-- end team member -->

                  <div class="team-wrap">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="assets/images/team9.jpg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Sara grant</a>
                        <p>Donors</p>
                    </div>
                </div>
                <!-- end team member -->

                  <div class="team-wrap">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <img src="assets/images/team1.jpg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Luke jacobs</a>
                        <p>Donors</p>
                    </div>
                </div>
                <!-- end team member -->
       
        
                </div>
        </div>
                    
</section>
<?php
  include 'assets/include/footer.php';
?>