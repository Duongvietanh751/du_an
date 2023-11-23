<?php
include '../model/pdo.php';
include '../model/danhmuc.php';
include '../model/sanpham.php';
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
                if ($_FILES['img']['name'] = "") {
                    $photo = $_FILES['img']['name'];
                    move_uploaded_file($_FILES['img']['tmp_name'], "../assets/img/$photo");
                }
                $mota = $_POST['desc'];
                $danhmuc = $_POST['danhmuc'];
                add_sp($name, $price, $photo, $mota, $danhmuc);
            }

            include "sanpham/sanpham.php";
            break;
        case 'xoasp':
            
        case 'binhluan':
            # code...
            include "binhluan/binhluanj.php";
            break;
        case 'taikhoan':
            # code...
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