<?php
   function ds_sp(){
      $sql = "select * from sanpham where 1 order by id desc limit 0,9";
      $result = pdo_query($sql);
      return $result;
   }
   function add_sp($name,$price,$photo,$desc,$danhmuc){
      $sql = "insert into sanpham(`name`,`price`,`img`,`mota`,`iddm`) VALUES ('$name','$price','$photo','$desc','$danhmuc')";
      pdo_execute($sql);
   }

?>