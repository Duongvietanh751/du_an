<?php
    function ds_bl(){
        $sql = "select taikhoan.id as id2, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan 
        from sanpham 
        join binhluan on binhluan.idpro=sanpham.id
        join taikhoan on binhluan.iduser=taikhoan.id";
        $result = pdo_query($sql);
        return $result;
    }
   
    function kh_bl($id){
        $sql = "select taikhoan.id as id2, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan 
        from sanpham 
        join binhluan on binhluan.idpro=sanpham.id
        join taikhoan on binhluan.iduser=taikhoan.id
        where sanpham.id=$id";
        $result = pdo_query($sql);
        return $result;
    }
    function sent_bl($idsp,$iduser,$noidung){
        $date=date('d-m-Y');
        $sql ="insert into `binhluan` (`noidung`,`iduser`,`idpro`,`ngaybinhluan`) VALUES ('$noidung','$iduser','$idsp','$date')";
        $result = pdo_execute($sql);
        return $result;
    }





?>