<?php
function ds_sp()
{
   $sql = "select * from sanpham";
   $result = pdo_query($sql);
   return $result;
}
function add_sp($name, $price, $photo, $mota, $danhmuc)
{
   $sql = "insert into sanpham(`name`,`price`,`img`,`mota`,`iddm`) VALUES ('$name','$price','$photo','$mota','$danhmuc')";
   pdo_execute($sql);
}
function get1_sp($id)
{
   $sql = "select * from sanpham where id = '$id'";
   $result = pdo_query_one($sql);
   return $result;
}
function delete_sanpham($id)
{
   $sql = "DELETE FROM sanpham WHERE id=" . $id;
   pdo_execute($sql);
}
function ds_sptab1()
{
   $sql = "SELECT * FROM sanpham LIMIT 3;";
   $result = pdo_query($sql);
   return $result;
}
function ds_sptab2()
{
   $sql = "SELECT * FROM sanpham LIMIT 4 OFFSET 3;";
   $result = pdo_query($sql);
   return $result;
}
function ds_sptab3()
{
   $sql = "SELECT * FROM sanpham ORDER BY id desc LIMIT 4 OFFSET 3;";
   $result = pdo_query($sql);
   return $result;
}
function ds_sptab4()
{
   $sql = "SELECT * FROM sanpham ORDER BY id DESC LIMIT 4 OFFSET 5;";
   $result = pdo_query($sql);
   return $result;
}
function rela_pro($id,$iddm){
   $sql = "select * from sanpham where iddm= '$iddm' AND id <> '$id'";
   $result = pdo_query_one($sql);
   return $result;
}
function sp_dm($iddm){
   $sql = "select * from sanpham where iddm=$iddm";
   $result = pdo_query($sql);
   return $result;
}
?>