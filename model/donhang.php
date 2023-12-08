<?php
    function loadall_dh($id_tk){
        $sql = "SELECT * FROM dat_phong WHERE id_TK='$id_tk' ";
        $result = pdo_query($sql);
        return $result;
    }
    function loadone_dh($id_DP){
        $sql ="select * from dat_phong where id_DP='$id_DP'";
        $list = pdo_query_one($sql);
        return $list;
    }

?>