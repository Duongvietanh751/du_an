<?php
    include"header.php";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'danhmuc':
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
            default:
                include"home.php";
                break;
        }
    }else{
        include"home.php";
    }
    include"footer.php";
?>