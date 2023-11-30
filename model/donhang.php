<?php
    function loadall_dh($id_tk){
        $sql = "SELECT * FROM dat_phong WHERE active = '1' AND id_TK='$id_tk' ";
        $result = pdo_query($sql);
        return $result;
    }
    function loadten_km($id_KM){
        if ($id_KM > 0) {
            $sql = "select * from khuyenmai where id_KM='$id_KM'";
            $dm = pdo_query_one($sql);   
            extract($dm);
            return $ten_KM;
        } else return "";
    }
    function loadone_dh($id_DP){
        $sql ="select * from dat_phong where id_DP='$id_DP'";
        $list = pdo_query_one($sql);
        return $list;
    }

?>