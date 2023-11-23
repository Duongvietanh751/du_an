<?php
    session_start();
    ob_start();
    include"model/pdo.php";
    include"model/taikhoan.php";
    include"view/header.php";
    if((isset($_GET['act'])) && ($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'shop':
                # code...
                include"view/shop.php";
                break;
            case 'contact':
                    # code...
                    include"view/contact.php";
                    break;
            case 'blog':
                # code...
                include"view/blog.php";
                break;
            case 'cart':
                # code...
                include"view/cart.php";
                break;
            case 'wishlist':
                # code...
            include"view/wishlist.php";
                break;
            case 'checkout':
                # code...
                include"view/checkout.php";
                break;
            case 'login':
                # code...
                include"view/login.php";
                break;
            case 'account':
                # code...
                include"view/account.php";
                break;
            case 'register':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    //Kiểm tra đăng nhập
                    $error=[];
                    if(empty($_POST['user'])){
                        $error['user']="Bạn cần có tên đăng nhập";
                    }else{
                        $pattem="/^[A-Z,a-z0-9_]{6,32}$/";
                        if(!preg_match($pattem,$_POST['user'])){
                            $error['user']="Tên đăng nhập cần đúng định dạng";
                        }else{
                            $user=$_POST['user'];
                        }
                    }
                    //Kiểm Tra Mật Khẩu
                    if(empty($_POST['pass'])){
                        $error['password']="Bạn cần có mật khẩu";
                    }else{
                        $pass=$_POST['pass'];
                    }
                    //Kiểm Tra email
                    if(empty($_POST['Email'])){
                        $error['Email']="Bạn cần có Email";
                    }else{
                        $Email=$_POST['Email'];
                    }
                    if(!empty($error)){
                        $email=$_POST['email'];
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        insert_taikhoan($email,$user,$pass);
                        $thongbao="Đã đăng ký thành công vui lòng đăng nhập";
                    }
                }
                include"view/register.php";
                break;
            case 'product':
                # code...
                include"view/product.php";
                break;
            default:
            include"view/home.php";
            break;
        }
    }else{
        include"view/home.php";
    }
    include"view/footer.php";
?>