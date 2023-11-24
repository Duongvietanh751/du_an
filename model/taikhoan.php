<?php 
    function ds_tk(){
        $sql = "select * from taikhoan";
        $result = pdo_query($sql);
        return $result;
    }
   
    function insert_taikhoan($email,$user,$pass){
        $sql="INSERT INTO taikhoan(`email`,`user`,`pass`) VALUES('$email','$user','$pass')";
        pdo_execute($sql);
    }
    ?>