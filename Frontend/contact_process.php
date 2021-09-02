<?php
   include 'AdminPannel/include/Conn.php';
    if (isset($_POST['btncontact'])){
        $email = $_POST['email'];
        $cname = $_POST['cname'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];
	   	$query=mysqli_query($con,"insert into customer_query(cname,email,phone,message,subject) 
       values('$cname','$email','$phone','$message','$subject')");
		if(mysqli_affected_rows($con)>0) {
			header('location:contact.php?res=1');
		}
		else{
			echo 'Fail to Insert'.mysqli_error($con);
		}
	}
   
?>