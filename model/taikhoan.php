<?php 
    function ds_tk(){
        $sql = "select * from taikhoan";
        $result = pdo_query($sql);
        return $result;
    }









?>