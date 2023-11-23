<?php
   function ds_sp(){
      $sql = "select * from sanpham where 1 order by id desc limit 0,9";
      $result = pdo_query($sql);
      return $result;
   }
   function add_sp($name,$price,$photo,$mota,$danhmuc){
      $sql = "insert into sanpham(`name`,`price`,`img`,`mota`,`iddm`) VALUES ('$name','$price','$photo','$mota','$danhmuc')";
      $result =pdo_execute($sql);
      return $result;
   }
    
   function get1_sp($id){
      $sql = "select * from sanpham where id = '$id'";
      $result = pdo_query_one($sql);
      return $result;
   }
?>