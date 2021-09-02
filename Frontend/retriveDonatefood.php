<?php
  $courseret=mysqli_query($con,"select * from donatefood");
  if(mysqli_affected_rows($con)>0){
      while($data=mysqli_fetch_row($courseret)){
          ?>
		  <section class="w3l-team-main" id="team">
            <div class="team-wrap">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="assets/images/team9.jpg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title"><?php echo $data[1]; ?></a>
                        <p><?php echo $data[5]; ?></p>
                    </div>
                </div>
	  </section>
          <?php
      }
  }
?>