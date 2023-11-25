<?php
include '../model/pdo.php';
include '../model/danhmuc.php';
include '../model/sanpham.php';
include '../model/binhluan.php';
include '../model/taikhoan.php';
?>
<?php
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'danhmuc':
            $ds_dm = ds_dm();
            if (isset($_POST['btnsub'])) {
                add_dm($_POST['tenloai']);
            }
            include "danhmuc/danhmuc.php";
            break;
        case 'suadm':
            if (isset($_GET['id'])) {
                $dm = get1_dm($_GET['id']);
            }
        case 'updm':
            if (isset($_POST['capnhat'])) {
                $name = $_POST['tenloai'];
                $id = $_POST['id'];
                $sql = "UPDATE `danhmuc` SET `name` = '$name' WHERE `danhmuc`.`id` = '$id'";
                pdo_execute($sql);
            }
            include "danhmuc/suadm.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sql  = "delete from danhmuc where id=" . $_GET['id'];
                pdo_execute($sql);
            }
            $ds_dm = ds_dm();
            include "danhmuc/danhmuc.php";
            break;
        case 'home':
            # code...
            include "home.php";
            break;
        case 'sanpham':
            $ds_sp = ds_sp();
            if (isset($_POST['btnsub'])) {
                $name = $_POST['name_sanpham'];
                $price = $_POST['price'];
                $photo = null;
                if ($_FILES['img']['name'] != "") {
                    $photo = $_FILES['img']['name'];
                    move_uploaded_file($_FILES['img']['tmp_name'], "../view/assets/images/product/$photo");
                }
                $mota = $_POST['desc'];
                $danhmuc = $_POST['danhmuc'];
                add_sp($name, $price, $photo, $mota, $danhmuc);
            }

            include "sanpham/sanpham.php";
            break;
        case 'suasp':
            if(isset($_GET['id'])){
                $sp = get1_sp($_GET['id']);
            }
        case 'upsp':
            if(isset($_POST['capnhat'])){
            $id = $_POST['id'];
            $name = $_POST['name_sanpham'];
            $price = $_POST['price'];
            $photo = null;
            if ($_FILES['img']['name'] != "") {
                $photo = $_FILES['img']['name'];
                move_uploaded_file($_FILES['img']['tmp_name'], "../view/assets/images/product/$photo");
            }
            $mota = $_POST['desc'];
            $danhmuc = $_POST['danhmuc'];
            $sql = "UPDATE `sanpham` SET `name` = '$name',`price` = '$price', `img` = '$photo',`mota` ='$mota',`iddm`='$danhmuc' WHERE `sanpham`.`id` = $id;";
            pdo_execute($sql);

        }
        include"sanpham/suasp.php";
        break;

        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sql  = "delete from sanpham where id=" . $_GET['id'];
                pdo_execute($sql);
            }
            $ds_sp = ds_sp();
            include "sanpham/sanpham.php";
            break;
        
        case 'binhluan':
            $ds_bl = ds_bl();

            include "binhluan/binhluanj.php";
            break;
        case 'xoabl':
            if(isset($_GET['id2']) && ($_GET['id2'] > 0)) {
                $sql  = "delete from binhluan where id=" . $_GET['id2'];
                pdo_execute($sql);
            }
            $ds_bl = ds_bl();
            include "binhluan/binhluanj.php";
            break;
        case 'taikhoan':
            $ds_tk = ds_tk();

            include "taikhoan/taikhoan.php";
            break;

        case 'xoatk':
            if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sql  = "delete from taikhoan where id=" . $_GET['id'];
                pdo_execute($sql);
            }
            $ds_tk = ds_tk();
            include "taikhoan/taikhoan.php";
            break;

        case 'suasp':
            # code...
            include "sanpham/suasp.php";
            break;
        case 'suadm':
            # code...
            include "danhmuc/suadm.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
?>