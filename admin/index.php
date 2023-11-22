<?php
include '../model/pdo.php';
include '../model/danhmuc.php' ;   
?>






<?php
    include"header.php";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'danhmuc':
                $ds_dm = ds_dm();
                if(isset($_POST['btnsub'])){
                    add_dm($_POST['tenloai']);
                }
                # code...
                include"danhmuc/danhmuc.php";
                break;
            
            case 'home':
                # code...
                include"home.php";
                break;
            case 'sanpham':
                    # code...
                    include"sanpham/sanpham.php";
                    break;
            case 'binhluan':
                    # code...
                    include"binhluan/binhluanj.php";
                    break;
            case 'taikhoan':
                # code...
                include"taikhoan/taikhoan.php";
                break;
            case 'suasp':
                    # code...
                    include"sanpham/suasp.php";
                    break;
            default:
                include"home.php";
                break;
        }
    }else{
        include"home.php";
    }
    include"footer.php";
?>