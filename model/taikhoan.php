<!-- câu truy vấn xóa cứng -->
<?php 
    function inserttk($userName, $pass, $Email, $SDT){
        $sql = "insert into taikhoan (userName, pass, email, SDT) values ('$userName', '$pass', '$Email', '$SDT')";
        pdo_execute($sql);
    }
    function xoatk($id_TK){
        $sql = "DELETE FROM taikhoan WHERE id_TK=".$id_TK;
        pdo_execute($sql);
    }
    function checkuser($userName, $pass){
        $sql = "SELECT * FROM taikhoan WHERE userName='$userName' and pass = '$pass'";
        $result = pdo_query_one($sql);
        return $result;
    }
    function loadall_tk(){
        $sql = "SELECT * FROM taikhoan WHERE 1";
        $result = pdo_query($sql);
        return $result;
    }
    function updatetk($id_TK,$userName,$pass,$email,$SDT){
        $sql = "UPDATE taikhoan SET userName = '".$userName."', pass = '".$pass."', email = '".$email."', SDT = '".$SDT."' where id_TK=".$id_TK;
        pdo_execute($sql);
    }
    function loadtk($id_TK){
        $sql ="SELECT * FROM taikhoan WHERE id_TK = '$id_TK'";
        $room = pdo_query_one($sql);
        return $room;
    }
    function demtk($role){
        $sql = "SELECT COUNT(id_TK) FROM taikhoan where role = '$role'"; 
        $dem = pdo_query_value($sql);
        return $dem;
    }
?>
