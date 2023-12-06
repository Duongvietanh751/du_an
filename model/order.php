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
    function execPostRequest($url, $data)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data))
    );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    //execute post
    $result = curl_exec($ch);
    //close connection
    curl_close($ch);
    return $result;
}
    
?>