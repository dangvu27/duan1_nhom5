<!-- câu truy vấn xóa cứng -->
<?php 
// insert thông tin tài khoản vào ĐB
function insert_taikhoan($userName, $SDT, $email, $pass){
    $sql = "insert into taikhoan(userName, SDT, email, pass) 
    values('$userName', '$SDT', '$email', '$pass')";
    pdo_execute($sql);
}
function checkuser($email,$pass){
    $sql = "SELECT * FROM taikhoan WHERE email = '".$email."' AND pass = '".$pass."' ";
    $kq = pdo_query_one($sql);
    return $kq;
}

?>
