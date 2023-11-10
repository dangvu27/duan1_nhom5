<?php 
    function loadall_room($kyw,$id_loaiphong){
        $sql ="select * from phong where 1";
        if ($kyw != "") {
            $sql.= " and ten_phong like %'$kyw'%";
        }
        if ($id_loaiphong >0) {
            $sql.= " and id_loaiphong like %'$id_loaiphong'%";
        }
        $list = pdo_query($sql);
        return $list;
    }
    function loadone_room($id){
        $sql ="select * from phong where id_phong='$id'";
        $list = pdo_query($sql);
        return $list;
    }
    function delete_room($id){
        $sql = "delete from phong where id_phong='$id'";
        pdo_execute($sql);
    }
    function update_room($id){
        
    }
?>