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
    function loadone_tk($id_TK){
        $sql = "SELECT * FROM taikhoan WHERE id_TK=".$id_TK;
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
    function checkuser($email,$pass){
        $sql = "SELECT * FROM taikhoan WHERE email = '".$email."' AND pass = '".$pass."' ";
        $kq = pdo_query_one($sql);
        return $kq;
    }
?>
