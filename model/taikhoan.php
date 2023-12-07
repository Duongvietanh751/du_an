<?php 
    function ds_tk(){
        $sql = "select * from taikhoan";
        $result = pdo_query($sql);
        return $result;
    }
    function checkuser($user,$pass){
        $sql="SELECT * FROM `taikhoan` WHERE `user`='".$user."' AND `pass`='".$pass."'  ";
        $result = pdo_query($sql);
        if(count($result)>0) return $result[0]['role'];
        else return 0;
    }
    function getuser($user,$pass){
        $sql="SELECT * FROM `taikhoan` WHERE `user`='".$user."' AND `pass`='".$pass."'  ";
        $result = pdo_query_one($sql);
        return $result;
    }
    function insert_taikhoan($Email,$user,$pass){
        $sql="INSERT INTO taikhoan(`email`,`user`,`pass`) VALUES('$Email','$user','$pass')";
        pdo_execute($sql);
    }
    function check_user_layout($user,$pass){
        $sql="SELECT*FROM taikhoan WHERE user='".$user."' AND pass='".$pass."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function so_tk()
{
    $sql = "SELECT COUNT(*) AS songuoidung
    FROM taikhoan ";
    $result = pdo_query_one($sql);    
    return $result;
   
}
    
?>