<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instamojo Payment Gateway Integrate in PHP </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style> 
       .mt40{
           margin-top: 40px;
       }
    </style>
</head>
<body>
<div class="container">
     <div class="col-xl-12 ">
     <br>
 <br>
 <!-- Page Heading -->
 <div class="container-fluid">
<h1 class="h3 mb-4 text-dark-800"><u><b>Payment Process</b></u></h1>
    
 <form class="user" method="post" action="payment-proccess.php" enctype=multipart/form-data>
                
                                
                                <div class="form-group row">
                                    <div class="col-sm-12 mr-12">
                                        <input type="text" class="form-control"
                                            name="name" autocomplete="off" placeholder=" Name" required>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-sm-6 mr-12" >
                                        <input type="text" class="form-control" name="email"
                                            placeholder="Email" autocomplete="off" required>
                                    </div>
                                    <div class="col-sm-6 mr-12" >
                                        <input type="text" class="form-control" name="pincode"
                                            placeholder="Pin Code" autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" name="phone"
                                            placeholder="Phone no." autocomplete="off"  required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="date"
                                            placeholder="Date" autocomplete="off"  required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" name="amount"
                                            placeholder="Amount" autocomplete="off"  required>
                                    </div>
                                    <div class="col-sm-6">
                                        
                                            <select name="state" id="" class="form-control">
                                                 <option value="">state</option>
                                                 <option value="1">Ranchi</option>
                                                 <option value="2">Gujarat</option>
                                                 <option value="3">Kerla</option>
                                                 <option value="1">Bhopal</option>
                                                 <option value="1">Jharkhand</option>
                                                 <option value="1">Bokaro</option>
                                                 <option value="1">Mumbai</option>
                                                 <option value="1">Delhi</option>
                                                 <option value="1">Orissa</option>
                                                 <option value="1">Manipur</option>
                                            </select>
                                    </div>
                                </div>

                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <textarea class="form-control" name="address" placeholder=Address id='description' required></textarea>

                                </div>
                                <br>
                              
                                <div class="col-sm-12 ">
                                <button type="submit" name="order" class="btn btn-primary btn-user btn-block">
                                    Proceed to Pay
                                </button>
                                </div>
                            </form>
                            </div>
     </div>
 </div>
    
</div>
</div>

</body>
</html>