<?php
    function ds_dm(){
        $sql = "select * from danhmuc";
        $result = pdo_query($sql);
        return $result;
    }
    function add_dm($tenloai){
        $sql = "insert INTO danhmuc(`name`) VALUES ('$tenloai')";
        $result = pdo_execute($sql);
        return $result;
    }

    
?>