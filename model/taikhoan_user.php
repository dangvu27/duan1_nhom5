<?php 
    function loadone_tkuser($id_TK){
        $sql = "SELECT * FROM khachhang WHERE id_TK=".$id_TK;
        $result = pdo_query_one($sql);
        return $result;
    }
?>