
<?php
    session_start();
    ob_start();
    if(isset($_SESSION['role'])&&($_SESSION['role']==1)){
include '../model/pdo.php';
include '../model/danhmuc.php';
include '../model/sanpham.php';
include '../model/binhluan.php';
include '../model/taikhoan.php';
include '../model/order.php';
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'danhmuc':
            $ds_dm = ds_dm();
            include"danhmuc/danhmuc.php";
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
                $thongbao="Sửa thành công";
            }
            include"danhmuc/suadm.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sql  = "delete from danhmuc where id=" . $_GET['id'];
                pdo_execute($sql);
            }
            $ds_dm = ds_dm();
            include"danhmuc/danhmuc.php";
            break;
        case 'home':
            # code...
            include "home.php";
            break;
        case 'sanpham':
            if(isset($_POST['btn'])&&($_POST['btn'])){
                $keyw=$_POST['keyw'];
                $iddm=$_POST['iddm'];
            }else{
                $keyw="";
                $iddm=0;
            }
            $listsanpham=loadall_sanpham($keyw,$iddm);
            if (isset($_POST['btnsub']) && ($_POST['btnsub'])){
                $danhmuc=$_POST['iddm'];
                $name=$_POST['name_sanpham'];
                $price=$_POST['price'];
                $photo=$_FILES['img']['name'];
                $target_dir="../upload/";
                $target_file=$target_dir.basename($_FILES['img']['name']);
                move_uploaded_file($_FILES['img']['tmp_name'],$target_file);
                $mota = $_POST['desc'];
                add_sp($name, $price, $photo, $mota, $danhmuc);
            }  
            $ds_dm = ds_dm();
            include"sanpham/sanpham.php";
            break;
        case 'suasp':
            if(isset($_GET['id'])){
                $sp = get1_sp($_GET['id']);
            }
            
        case 'upsp':
            $ds_dm = ds_dm();
            if(isset($_POST['capnhat'])){
            $name = $_POST['name_sanpham'];
            $price = $_POST['price'];
            $photo = null;
            if ($_FILES['img']['name'] != "") {
                $photo = $_FILES['img']['name'];
                move_uploaded_file($_FILES['img']['tmp_name'], "../upload/$photo");
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
            include"sanpham/sanpham.php";
            break;
        
        case 'binhluan':
            $ds_bl = ds_bl();

            include "binhluan/binhluanj.php";
            break;
        case 'xoabl':
            if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sql  = "delete from binhluan where id=" . $_GET['id'];
                pdo_execute($sql);
            }
            $ds_bl = ds_bl();
            include"binhluan/binhluanj.php";
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
            include"taikhoan/taikhoan.php";
            break;
        case 'dangxuat':
                unset($_SESSION['role']);
                header('location:loginadmin.php');
                break;
        case 'donhang':
            include"donhang/donhang.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
    }else{
        header('location:loginadmin.php');
    }
?>