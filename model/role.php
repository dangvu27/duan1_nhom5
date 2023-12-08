<?php
    function loadall_role(){
        $sql ="select * from vaitro where 1";
        $list = pdo_query($sql);
        return $list;
    }
    function loadten_role($role){
        $sql ="select * from vaitro where id_role = '$role'";
        $sp = pdo_query_one($sql);
        $list = $sp['ten_role'];
        return $list;
    }
?>