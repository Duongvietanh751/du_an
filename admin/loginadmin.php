<?php
    session_start();
    ob_start();
    include"../model/pdo.php";
    include"../model/taikhoan.php";
    if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $role=checkuser($user,$pass);
        $_SESSION['role']=$role;
        if($role==1) header('location:index.php');
        else{
            $thongbao="Tài khoản hoặc mật khẩu không đúng";
        } 
        // header('location:loginadmin.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-admin</title>
    <link rel="stylesheet" href="plugins/loginadmin.css">
</head>
<body>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="row admin">
            <label for="">Đăng Nhập Admin</label><br>
            </div>
            <div class="row">
            <label for="">Tài Khoản</label><br>
            <input type="text" name="user" id=""><br>
            </div>
            <div class="row">
            <label for="">Mật Khẩu</label><br>
            <input type="password" name="pass" id=""><br>
            </div>
            <div class="row">
            <?php if(isset($thongbao)&&($thongbao!="")){
                echo "<font color='red'>".$thongbao."</font>";
            } ?><br>
            </div>
            <input type="submit" name="dangnhap" value="Đăng nhập">
        </form>
    </div>
</body>
</html>