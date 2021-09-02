<?php
  include 'assets/include/header.php';
?>
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                            </div>
                            <form class="user" method="post" action="login_register.php">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"
                                        name="email" aria-describedby="emailHelp"
                                        placeholder="Enter Email Address..." autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        name="password" placeholder="Password" autocomplete="off">
                                </div>
                                <button type="submit" name="btnlogin" class="btn btn-primary btn-user btn-block">
                                    Login </button>
                               <hr>  
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.php">Forgot Password?</a>
                                <br>
                                <a class="small" href="Register.php">Don't Have Account? Create an account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>
