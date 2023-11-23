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
    function get1_dm($id){
        $sql = "select * from danhmuc where id = '$id'";
        $result = pdo_query_one($sql);
        return $result;
    }
    
?>