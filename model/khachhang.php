<?php 
    function loadall_kh(){
        $sql = "SELECT * FROM khachhang WHERE 1";
        $result = pdo_query($sql);
        return $result;
    }
    function loadone_kh($id_tk){
        $sql ="select * from khachhang where id_TK='$id_tk'";
        $kh = pdo_query_one($sql);
        return $kh;
    }
    function updatekh($id_tk,$ten,$tuoi,$SDT,$diachi,$CCCD){
        $sql = "UPDATE khachhang SET ten = '".$ten."', tuoi = '".$tuoi."', SDT = '".$SDT."', diachi = '".$diachi."', CCCD = '".$CCCD."' where id_TK='$id_tk'";
        pdo_execute($sql);
    }

    function insert_KH($id_tk,$ten,$tuoi,$SDT,$diachi,$CCCD){
        $sql = "INSERT INTO khachhang (id_TK,ten, tuoi, SDT, diachi, CCCD) VALUES ('$id_tk','$ten', '$tuoi', '$SDT', '$diachi', '$CCCD')";
        pdo_execute($sql);
    }
?>  