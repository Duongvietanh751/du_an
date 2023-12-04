<?php
    function addOrder($id_user, $hoten, $sdt, $email, $diachi, $tongtien, $pttt){
        $sql="INSERT INTO tbl_order (id_user, hoten, sdt, email, diachi, tongtien, pttt) VALUES ($id_user, '$hoten', '$sdt', '$email', '$diachi', $tongtien, $pttt);";
        $id=pdo_executeid($sql);
        return $id;
    }

    function addOrderDetail($id_order, $id_pro, $giamua, $soluong, $thanhtien){
        $sql="INSERT INTO order_detail (id_order, id_pro, giamua, soluong, thanhtien) VALUES ($id_order, $id_pro, $giamua, $soluong, $thanhtien );";
        pdo_execute($sql);
    }
    function selectOrder(){
        $sql="SELECT * FROM `order_detail` ORDER BY `id_order_detail` DESC";
        $loadorder=pdo_execute($sql);
        return $loadorder;
    }
    function bieudo(){
        $sql = "SELECT DATE(ngaydathang) as ngay, SUM(tongtien) as doanh_thu FROM tbl_order 
        WHERE ngaydathang >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)
           OR (ngaydathang >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND ngaydathang < CURDATE())
           OR (ngaydathang >= DATE_SUB(CURDATE(), INTERVAL 1 YEAR) AND ngaydathang < CURDATE())
        GROUP BY DATE(ngaydathang)";
        $result = pdo_query($sql);
        return $result;
    
    }
    function ds_dh(){
        $sql = "select * from tbl_order";
        $result = pdo_query($sql);
        return $result;
    }
    function get1_dh($id_order_detail){
        $sql = "select * from order_detail where id_order_detail = '$id_order_detail'";
        $result = pdo_query_one($sql);
        return $result;
    }
?>