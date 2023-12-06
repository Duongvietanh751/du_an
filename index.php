<?php
    session_start();
    ob_start();
    include"model/pdo.php";
    include"model/taikhoan.php";
    include"model/sanpham.php";
    include"model/danhmuc.php";
    include"global.php";
    include"model/order.php";
    include"view/header.php";
    include"model/binhluan.php";
    if((isset($_GET['act'])) && ($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'shop':
              
                $ds_sp = ds_sp();
                $ds_dm = ds_dm();
                include "view/shop.php";
                break;
            case 'shdm':
                if ((isset($_POST['keyw']) && ($_POST['keyw'] != ""))) {
                    $keyw = $_POST['keyw'];
                    $dssp = sear_sp($keyw);
                } else {
                    $keyw = "";
                }
                if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                    $iddm = $_GET['iddm'];
                    $dssp = sp_dm($iddm);
                }
                $ds_dm = ds_dm();
                include"view/shdm.php";
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
                if (!empty($_SESSION['cart'])) {
                    $cart = $_SESSION['cart'];
    
                    // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
                    $productId = array_column($cart, 'id');
                    
                    // Chuyển đôi mảng id thành một cuỗi để thực hiện truy vấn
                    $idList = implode(',', $productId);
                    
                    // Lấy sản phẩm trong bảng sản phẩm theo id
                    $dataDb = loadone_sanphamCart($idList);
                    // var_dump($dataDb);
                }
                include"view/cart.php";
                break;
            case "checkout":
                    if (isset($_SESSION['cart'])) {
                        $cart = $_SESSION['cart'];
                        // print_r($cart);
                        if (isset($_POST['order_confirm'])) {
                            $txthoten = $_POST['txthoten'];
                            $txttel = $_POST['txttel'];
                            $txtemail = $_POST['txtemail'];
                            $txtaddress = $_POST['txtaddress'];
                            $pttt = $_POST['pttt'];
                            // date_default_timezone_set('Asia/Ho_Chi_Minh');
                            // $currentDateTime = date('Y-m-d H:i:s');
                            if (isset($_SESSION['user'])) {
                                $id_user = $_SESSION['user']['id'];
                            } else {
                                $id_user = 0;
                            }
                            $idBill = addOrder($id_user, $txthoten, $txttel, $txtemail, $txtaddress, $_SESSION['resultTotal'], $pttt);
                            foreach ($cart as $item) {
                                addOrderDetail($idBill, $item['id'], $item['price'], $item['quantity'], $item['price'] * $item['quantity']);
                            }
                            unset($_SESSION['cart']);
                            $_SESSION['wishlist'] = $idBill;
                            header("Location: index.php?act=wishlist");
                        }
                        include "view/checkout.php";
                    } else {
                        header("Location: index.php?act=listCart");
                    }
                    break;
            case 'wishlist':
                if (isset($_SESSION['wishlist'])) {
                    $ds_order=selectOrder();
                    include"view/wishlist.php";
                    break;
                } else {
                    header("Location: index.php");
                }
                break;
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
                $ds_sptab1 = ds_sptab1();
                $ds_sptab2 = ds_sptab2();
                $ds_sptab3 = ds_sptab3();
                if(isset($_GET['idsp']) && ($_GET['idsp']) > 0 ){
                    $ctsp = get1_sp($_GET['idsp']);
                    $kh_bl = kh_bl($_GET['idsp']);
                    
                  
                }
                include"view/product.php";
                break;
            case 'ttonline':
                if(isset($_POST['cod'])){
                  
                }elseif(isset($_POST['payUrl'])){
                        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
                        $partnerCode = 'MOMOBKUN20180529';
                        $accessKey = 'klm05TvNBzhg7h7j';
                        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
                        $orderInfo = "Thanh toán qua MoMo";
                        $amount = "10000";
                        $orderId = rand(00,9999);
                        $redirectUrl = "http://localhost:8081/du_an/index.php?act=wishlist";
                        $ipnUrl = "http://localhost:8081/du_an/index.php?act=wishlist";
                        $extraData = "";
                        $partnerCode = $partnerCode;
                        $accessKey = $accessKey;
                        $serectkey = $secretKey;
                        $orderId = $orderId; // Mã đơn hàng
                        $orderInfo =  $orderInfo;
                        $amount = $amount;
                        $ipnUrl =  $ipnUrl;
                        $redirectUrl = $redirectUrl;
                        $extraData = $extraData;
                        $requestId = time() . "";
                        $requestType = "payWithATM";
                       // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
                        //before sign HMAC SHA256 signature
                        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
                        $signature = hash_hmac("sha256", $rawHash, $serectkey);
                        $data = array('partnerCode' => $partnerCode,
                            'partnerName' => "Test",
                            "storeId" => "MomoTestStore",
                            'requestId' => $requestId,
                            'amount' => $amount,
                            'orderId' => $orderId,
                            'orderInfo' => $orderInfo,
                            'redirectUrl' => $redirectUrl,
                            'ipnUrl' => $ipnUrl,
                            'lang' => 'vi',
                            'extraData' => $extraData,
                            'requestType' => $requestType,
                            'signature' => $signature);
                        $result = execPostRequest($endpoint, json_encode($data));
                        $jsonResult = json_decode($result, true);  // decode json
                        //Just a example, please check more in there
                        header('Location: ' . $jsonResult['payUrl']);
                }elseif(isset($_POST['vnpay'])){
                       echo "";
                };
                include"view/checkout.php";
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