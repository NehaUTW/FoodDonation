<?php
  session_start();
  include 'Adminpannel/include/conn.php';
  if(isset($_POST['btnreg'])){
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $email=$_POST['email'];
      $password=($_POST['password']);
      $cpassword=($_POST['cpassword']);
      $OTP=round(rand(100000,999999));
      if($password==$cpassword){
              $query=mysqli_query($con,"insert into user(Name,lname, Password, 
              Email, Created_Date,Updated_Date, OTP) values('$fname','$lname','$password','$email',now(),now(),
              '$OTP')");
              if(mysqli_affected_rows($con)>0){
                  header('location:login.php');
              }
              else {
                  echo mysqli_error($con);
              }
      }
    else {
        echo 'Password didnt match';
    }
}
else if(isset($_POST['btnlogin'])){
    echo $email=$_POST['email'];
    echo $password=($_POST['password']);
       $query1=mysqli_query($con,"select * from user where Email='$email' and password='$password'");
       if(mysqli_affected_rows($con)>0){
           //$_SESSION['email']=$email;
           header('location:index.php');
       }
   else {
       echo 'Fail to login'.mysqli_error($con);
   }
   
}
?>