<?php
    session_start();
    error_reporting(0);
    include 'AgentPannel/include/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instamojo Thanks You - Tutsmake</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body class="">
    
    <br><br><br><br>
    <article class="bg-secondary mb-3">
        <div class="card-body text-center">
        <h4 class="text-white">Thank you for payment<br></h4>
        <br><br>
        <p><a class="btn btn-warning" target="_blank" href="index.php" >Home Page
            <i class="fa fa-window-restore "></i></a></p>

        <?php
           
           require_once('vendor/autoload.php');

           $API_Key = "test_08e79a72a522be14174b1b86b19";
           $Auth_Token = "test_03ca0438de442a28dce42dcb7b2";
           $URL = "https://test.instamojo.com/api/1.1/";
          
           $api = new instamojo\Instamojo($API_Key, $Auth_Token, $URL);

           $payid = $_GET["payment_request_id"];

           try {
               $response = $api->paymentRequestStatus($payid);
              echo  $paymentid= $response['payments'][0]['payment_id'] ;
              echo  $buyername= $response['payments'][0]['name'];
                $buyeremail= $response['payments'][0]['email'];
                $buyermobile= $response['payments'][0]['phone'];
                $address= $_SESSION['address'];
                $buyerstatus= $response['payments'][0]['status'];
                $query=mysqli_query($con,"INSERT INTO invoice(paymentid, buyername, buyeremail, buyermobile,buyeraddress, buyerstatus) VALUES ('$paymentid','$buyername','$buyeremail','$buyermobile','$address','$buyerstatus')");
                if(mysqli_affected_rows($con)>0){
                    echo 'Data insert ';
                }
                else{
                    echo mysqli_error($con);
                }
               echo "<h5>Payment Id: " . $response['payments'][0]['payment_id'] . "</h5>" ;
               echo "<h5>Payment Name: " . $response['payments'][0]['buyer_name'] . "</h5>" ;
               echo "<h5>Payment Email: " . $response['payments'][0]['buyer_email'] . "</h5>" ;
               echo "<h5>Payment Mobile: " . $response['payments'][0]['buyer_phone'] . "</h5>" ;
               echo "<h5>Payment status: " . $response['payments'][0]['status'] . "</h5>" ;
               echo "<pre>";
           }
           catch (Exception $e) {
               print('Error: ' . $e->getMessage());
           }
        ?>
        <br>
        <p><a class="btn btn-warning" target="_blank" href="index.php" > Student Tutorial
            <i class="fa fa-window-restore "></i></a></p>
        </div>
        <br><br><br>
    </article>
</body>
</html>