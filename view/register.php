 <!-- Page Banner Section Start -->
 <div class="section page-banner-section" style="background-image: url(view/assets/images/page-banner.jpg)">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Register</h2>

                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Register</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Register Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- Login & Register Start -->
                    <div class="login-register-wrapper">
                        <h4 class="title">Create New Account</h4>
                        <p>
                            Already have an account?
                            <a href="index.php?act=login">Log in instead!</a>
                        </p>
                        <form action="index.php?act=register" method="post">
                            <div class="single-form">
                                <input type="text" placeholder="Email Address *" name="email" value="<?php if(isset($Email)) echo $Email ?>">
                                <p class="error"><?php if(isset($error['email'])) echo $error['email'] ?></p>

                            </div>
                            <div class="single-form">
                                <input type="text" placeholder="Username *" name="user" value="<?php if(isset($user)) echo $user ?>">
                                <p class="error"><?php if(isset($error['user'])) echo $error['user'] ?></p>

                            </div>
                            <div class="single-form">
                                <input type="password" placeholder="Password" name="pass" value="<?php if(isset($pass)) echo $pass ?>">
                                <p class="error"><?php if(isset($error['pass'])) echo $error['pass'] ?></p>

                            </div>
                            <div class="single-form">
                                <input type="submit" name="dangky" value="Register">
                            </div>
                        </form>
                        <span class="thongbao">
                                <?php
                                if(isset($thongbao)&&($thongbao!="")){
                                    echo $thongbao;
                                    echo ' <a href="index.php?act=login">Log in instead!</a>';
                                }
                                ?>
                        </span>
                    </div>
                    <!-- Login & Register End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Register Section End -->