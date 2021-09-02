<?php
   session_start();
   echo $_SESSION['name'] =$_POST['name'];
   echo $_SESSION['email']=$_POST['email'];
   echo $_SESSION['phone']=$_POST['phone'];
   echo $_SESSION['address']=$_POST['address'];
   echo $_SESSION['amount']=$_POST['amount'];
   include 'AgentPannel/include/conn.php';
   require_once('vendor/autoload.php');

   $API_Key = "test_08e79a72a522be14174b1b86b19";
   $Auth_Token = "test_03ca0438de442a28dce42dcb7b2";
   $URL = "https://test.instamojo.com/api/1.1/";
  
   $api = new Instamojo\Instamojo($API_Key, $Auth_Token, $URL);
   
   try{
       $response = $api->paymentRequestCreate(array(
        "purpose" => "Donate ",
        "amount"  =>(int) $_SESSION['amount'],
		$buyername= $_SESSION['name'], 
		$buyeremail= $_SESSION['email'],
		$buyermobile= $_SESSION['phone'],
		$buyeraddress=$_SESSION['address'],
        $amount=$_SESSION['amount'],
           "redirect_url" => "http://localhost:8081/Food_Donation/payment-success.php"
       ));

       header('Location: ' . $response['longurl']);
       exit();
   }catch (Exception $e){
       print('Error: ' . $e->getMessage());
   }
?>