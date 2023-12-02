<?php
    function ds_dm(){
        $sql = "select * from danhmuc order by id desc";
        $result=pdo_query($sql);
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
    function sear_dm($keyw){
        $sql = "select * from danhmuc where name ='%$keyw%'";
        $dm = pdo_query($sql);
        return $dm;
    }
    function loadall_danhmuc(){
        $sql="select * from danhmuc order by id desc";
        $listdanhmuc=pdo_query($sql);
        return  $listdanhmuc;
    }
    
?>