<?php
    session_start();
    ob_start();
    include"model/pdo.php";
    include"model/taikhoan.php";
    include"model/sanpham.php";
    include"model/danhmuc.php";
    include"global.php";
    include"view/header.php";
    if((isset($_GET['act'])) && ($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'shop':
                $ds_sp = ds_sp();
                $ds_dm = ds_dm();
                include"view/shop.php";
                break;
            case 'catepro':
                if(isset($_GET['iddm']) && ($_GET['iddm']) >0){
                    $iddm = $_GET['iddm'];
                    $sp_dm = sp_dm($iddm);
                }
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
            case 'listcart':
                include"view/";
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
                if(isset($_POST['login']) && ($_POST['login'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $checkuser = getuser($user, $pass);
                    if (is_array($checkuser)) {
                        $_SESSION['user'] = $checkuser;
                        $_SESSION['pass'] = $checkuser;
                        header('Location: index.php');
                        // $thongbao="bạn đã đăng nhập thành công ";
                    } else {
                        $thongbao = "tài khoản không tồn tại. Vui lòng đăng ký";
                    }
                }
                include"view/login.php";
                break;
            case 'logout':
                    unset($_SESSION['role']);
                    unset($_SESSION['id']);
                    unset($_SESSION['user']);
                    header('location:index.php');
                    break;
            case 'account':
                # code...
                include"view/account.php";
                break;
            case 'register':
                if(isset($_POST['dangky'])){
                    $error=[];
                    //Kiểm Tra tên đăng nhập
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
                    //Kiểm tra mật khẩu
                    if(empty($_POST['pass'])){
                        $error['pass']="Bạn cần có mật khẩu";
                    }else{
                        $pass=$_POST['pass'];
                    }
                    //Kiểm tra email
                    if(empty($_POST['email'])){
                        $error['email']="Bạn cần nhập email";
                    }else{
                        $Email=$_POST['email'];
                    }
                    if(!empty($error)){
                        // echo"Lỗi :<br>";
                        // showArray($error);
                    }else{
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $Email=$_POST['email'];
                        insert_taikhoan($Email,$user,$pass);
                        $thongbao="Đã đăng ký thành công vui lòng đăng nhập";
                    }
                }
                include"view/register.php";
                break;
            case 'product':
                if(isset($_GET['idsp']) && ($_GET['idsp']) > 0 ){
                    $id = $_GET['idsp'];
                    $ctsp = get1_sp($_GET['idsp']);
                    extract($ctsp);
                    $related = rela_pro($id,$iddm);
                }
                include"view/product.php";
                break;
            default:
           
            include"view/home.php";
            break;
        }
    }else{
        $ds_sptab4 = ds_sptab4();
        $ds_sptab1 = ds_sptab1();
        $ds_sptab2 = ds_sptab2();
        $ds_sptab3 = ds_sptab3();
        
        include"view/home.php";
    }
    include"view/footer.php";
?>