<!-- câu truy vấn xóa cứng -->
<?php 
    function inserttk($userName, $pass, $Email, $SDT){
        $sql = "insert into taikhoan (userName, pass, email, SDT) values ('$userName', '$pass', '$Email', '$SDT')";
        pdo_execute($sql);
    }
    function xoatk($id_TK){
        $sql = "update taikhoan set active = '2' WHERE id_TK=".$id_TK;
        pdo_execute($sql);
    }
    function returntk($id_TK){
        $sql = "update taikhoan set active = '1' WHERE id_TK=".$id_TK;
        pdo_execute($sql);
    }
    function checkuser($userName, $pass){
        $sql = "SELECT * FROM taikhoan WHERE userName='$userName' and pass = '$pass'";
        $result = pdo_query_one($sql);
        return $result;
    }
    function checkemail($Email){
        $sql = "SELECT * FROM taikhoan WHERE email='$Email'";
        $result = pdo_query_one($sql);
        return $result;
    }
    function loadall_tk(){
        $sql = "SELECT * FROM taikhoan WHERE active = '1'";
        $result = pdo_query($sql);
        return $result;
    }
    function loadall_tkxoa(){
        $sql = "SELECT * FROM taikhoan WHERE active = '2'";
        $result = pdo_query($sql);
        return $result;
    }
    function updatetk($id_TK,$userName,$pass,$email,$SDT, $role){
        $sql = "UPDATE taikhoan SET userName = '".$userName."', pass = '".$pass."', email = '".$email."', SDT = '".$SDT."', role = '$role' where id_TK=".$id_TK;
        pdo_execute($sql);
    }
    function updatetk_user($id_TK,$userName,$pass,$email,$SDT){
        $sql = "UPDATE taikhoan SET userName = '".$userName."', pass = '".$pass."', email = '".$email."', SDT = '".$SDT."' where id_TK=".$id_TK;
        pdo_execute($sql);
    }

    function loadtk($id_TK){
        $sql ="SELECT * FROM taikhoan WHERE id_TK = '$id_TK'";
        $room = pdo_query_one($sql);
        return $room;
    }
    function demtk($role){
        $sql = "select COUNT(id_TK) FROM taikhoan where role = '$role' and active = '1'"; 
        $dem = pdo_query_value($sql);
        return $dem;
    }
?>
