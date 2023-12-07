<?php
function addOrder($id_user, $hoten, $sdt, $email, $txtaddress, $tongtien, $pttt)
{
    $sql = "INSERT INTO tbl_order (id_user, hoten, sdt, email, diachi, tongtien, pttt) VALUES ($id_user, '$hoten', '$sdt', '$email', '$txtaddress', $tongtien, $pttt);";
    $id = pdo_executeid($sql);
    return $id;
}

function addOrderDetail($id_order, $id_pro, $giamua, $soluong, $thanhtien)
{
    $sql = "INSERT INTO order_detail (id_order, id_pro, giamua, soluong, thanhtien) VALUES ($id_order, $id_pro, $giamua, $soluong, $thanhtien );";
    pdo_execute($sql);
}
function selectOrder()
{
    $sql = "SELECT * FROM `order_detail` ORDER BY `id_order_detail` DESC";
    $loadorder = pdo_execute($sql);
    return $loadorder;
}
function bieudo()
{
    $sql = "SELECT DATE(ngaydathang) as ngay, SUM(tongtien) as doanh_thu FROM tbl_order 
        WHERE ngaydathang >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)
           OR (ngaydathang >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND ngaydathang < CURDATE())
           OR (ngaydathang >= DATE_SUB(CURDATE(), INTERVAL 1 YEAR) AND ngaydathang < CURDATE())
        GROUP BY DATE(ngaydathang)";
    $result = pdo_query($sql);
    return $result;
}
function ds_dh()
{
    $sql = "select * from tbl_order";
    $result = pdo_query($sql);
    return $result;
}
function ds_order($id_user)
{
    $sql = "select * from tbl_order Where id_user=" . $id_user;
    $result = pdo_query($sql);
    return $result;
}
function get_ttdh($n)
{
    switch ($n) {
        case '1':
            $tt = "Đang chờ duyệt";
            break;
        case '2':
            $tt = "Đã xác nhận";
            break;
        case '3':
            $tt = "Đang chờ vận chuyển";
            break;
        case '4':
            $tt = "Hoàn Thành";
            break;
        default:
            $tt = "Đang chờ duyệt";
            break;
    }
    return $tt;
}
function get1_dh($id_order_detail)
{
    $sql = "select * from order_detail where id_order_detail = '$id_order_detail'";
    $result = pdo_query_one($sql);
    return $result;
}
function new_order()
{
    $sql = "SELECT COUNT(*) AS moi
    FROM tbl_order
    WHERE ngaydathang >= NOW() - INTERVAL 1 DAY;";
    $result = pdo_query_one($sql);    
    return $result;
   
}
?>