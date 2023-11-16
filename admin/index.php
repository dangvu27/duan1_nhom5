<?php
    include "../model/pdo.php";
    include "../model/room.php";
    include "../model/loaiphong.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "header.php";

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            /// QUẢN LÝ LOẠI PHÒNG
            case 'addlp':
                if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                    $ten_LP = $_POST['ten_LP'];
                    insert_loai($ten_LP);
                    $thongbao = "Thêm mới thành công!";
                }
                include "loaiphong/add.php";
                break;
            case 'listdm':
                $listdm = loadall_loai();
                include "loaiphong/list.php";
                break;
            case 'sualp':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $dm = loadone_loai($_GET['id']);
                }
                include "loaiphong/update.php";
                break;
            case 'updatelp':
                if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $id_loaiphong = $_POST['id_loai'];
                    $ten_LP = $_POST['ten_LP'];
                    update_loai($id_loaiphong, $ten_LP);
                }
                $listdm = loadall_loai();
                include "loaiphong/list.php";
                break;
            case 'deletelp':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_loai($_GET['id']);
                }
                $listdm = loadall_loai();
                include "loaiphong/list.php";
                break;
            ///END LOẠI PHÒNG
            
            /// QUẢN LÝ PHÒNG 
            case 'listsp':
                if (isset($_POST['timkiemsp'])&&($_POST['timkiemsp'])) {
                    $kyw = $_POST['kyw'];
                    $id_loaiphong = $_POST['id_loaiphong'];
                    $checkin = $_POST['checkin'];
                    $checkout = $_POST['checkout'];
                } else {
                    $kyw = "";
                    $id_loaiphong = 0;
                    $checkin = "";
                    $checkout = "";
                }
                $listdm = loadall_loai();
                $listsp = loadall_room($kyw, $id_loaiphong, $checkin, $checkout);
                include "room/list.php";
                break;
            case 'addsp':
                if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                    $id_loaiphong = $_POST['loai_phong'];
                    $ten_phong = $_POST['tenphong'];
                    $gia = $_POST['gia'];
                    $mota = $_POST['mota'];
                    $img = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['hinh']['name']);
                    move_uploaded_file($_FILES['hinh']['tmp_name'],$target_file);
                    insert_room($ten_phong, $gia, $mota, $id_loaiphong, $img);
                    $thongbao = "Thêm mới thành công!";
                }
                $listdm = loadall_loai();
                include "room/add.php";
                break;
            case 'suasp':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $sp = loadone_room($_GET['id']);
                }
                $listdm = loadall_loai();
                include "room/update.php"; 
                break;
            case 'updatesp':
                if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $id_phong = $_POST['id_phong'];
                    $id_loaiphong = $_POST['loai_phong'];
                    $ten_phong = $_POST['tenphong'];
                    $gia = $_POST['gia'];
                    $mota = $_POST['mota'];
                    $img = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['hinh']['name']);
                    move_uploaded_file($_FILES['hinh']['tmp_name'],$target_file);
                    update_room($id_phong, $ten_phong, $gia, $mota, $id_loaiphong, $img);
                }
                $listdm = loadall_loai();
                $listsp = loadall_room("",0, "", "");
                include "room/list.php";
                break;
            case 'deletesp':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_room($_GET['id']);
                }
                $listdm = loadall_loai();
                $listsp = loadall_room("",0, "", "");
                include "room/list.php";
                break;
            
            /// END PHÒNG

            /// QUẢN LÝ TÀI KHOẢN
            case 'addtk':
                //kiểm tra admin có click vòa addtk hay không
                if(isset($_POST['themmoitk']) && ($_POST['themmoitk'])){
                    $userName = $_POST['userName'];
                    $pass = $_POST['pass'];
                    $Email = $_POST['email'];
                    $SDT = $_POST['SDT'];
                    inserttk($userName, $pass, $Email, $SDT);
                    $thongbao = "ĐÃ THÊM THÀNH CÔNG";
                }
                include "taikhoan/add.php";
                break;
            case 'listtk':
                $listtk = loadall_tk();
                include "taikhoan/list.php";   
                break;
            
            case 'suatk':
                
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $taikhoan = loadone_tk($_GET['id']);
                }
                $loadtk = loadall_tk();
                include "../admin/taikhoan/update.php";
                break;
            
            case 'updatetk':
                if(isset($_POST['capnhattk']) && ($_POST['capnhattk'])){
                    $id_TK = $_POST['id_TK'];
                    $userName = $_POST['userName'];
                    $pass = $_POST['pass'];
                    $Email = $_POST['email'];
                    $SDT = $_POST['SDT'];
                }
                updatetk($id_TK,$userName,$pass,$Email,$SDT);
                $thongbao = "SỬA THÀNH CÔNG";
                $listtk = loadall_tk();
                include "taikhoan/list.php";   
                break;
            
            case 'xoatk':
                if(isset($_GET['id'])){
                    xoatk($_GET['id']);
                }
                $listtk = loadall_tk();
                include "taikhoan/list.php"; 
                break;
            /// END TÀI KHOẢN

            /// bình luận

            case 'listbl':
                if (isset($_POST['timkiembl'])&&($_POST['timkiembl'])) {
                    $id_phong = $_POST['id_phong'];
                } else {
                    $id_phong = 0;
                }
                $listsp = loadall_room("", 0, "", "");
                $listbl = loadall_bl($id_phong);
                include "binhluan/list.php";
                break;

            /// end bình luận


            
            case 'dangky':
                // kiểm tra giá trị có tồn tại trong ĐB chưa
            if(isset($_POST['dangky']) && ($_POST['dangky'])){
                $userName = $_POST['userName'];
                $SDT = $_POST['SDT'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $sql = "SELECT COUNT(email) FROM taikhoan WHERE email = '$email'";
                $check = pdo_query_value($sql);
                if($check  > 0){
                    echo "email đã được sử dụng";
                    include "../admin/dangky.php";
                }
            else{
                insert_taikhoan($userName, $SDT, $email, $pass);
                $thongbao = "Đã đăng ký thành công vi lòng đăng nhập tài khoản";
                include "../admin/dangky.php";
                }
            }
            break;
            // end đăng ký
            case 'dangnhap':
                if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                  $checkuser = checkuser($email, $pass);
                  $_SESSION['role'] = $role;
                  if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    // header('location: index.php');
                    extract($_SESSION['user']);
                    if($role == 1){
                      header('location: index.php');
                    }else{
                      header('location: ../index.php');
                    }
                  }else{
                    header('location: ./login.php');
                  }
                }
                break;
                // end đăng nhập

            default:
                include "home.php";
                break;
        }

    } else include "home.php";

    include "footer.php";
?>