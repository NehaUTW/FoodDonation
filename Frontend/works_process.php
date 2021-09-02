<?php
include 'AdminPannel/include/Conn.php';

if(isset($_POST['btndonatefood'])){
      $donid=$_POST['donid'];
      $Donorname=$_POST['Donorname'];
      $Donoremail=$_POST['Donoremail'];
      $Donorphone=$_POST['Donorphone'];
      $Donoraddress=$_POST['Donoraddress'];
      $FoodQuantity=$_POST['FoodQuantity'];
    $query=mysqli_query($con,"INSERT INTO donatefood( Donor_Id, Donorname, Donoremail , Donorphone, Donoraddress, FoodQuantity) VALUES 
    ('$donid','$Donorname','$Donoremail','$Donorphone','$Donoraddress','$FoodQuantity')");

    if(mysqli_affected_rows($con)>0){
        header('location:ourworks.php?res=1');
    }
    else{
        echo 'Fail to insert'.mysqli_error($con);
    }
}
?>