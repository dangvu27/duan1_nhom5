<?php
    session_start();
    if (isset($_SESSION['user'])&&($_SESSION['user']['role'] == 1)) {
        include "../model/pdo.php";
        include "../model/room.php";
        include "../model/datphong.php";
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

                /// bắt đầu đặt phòng
                case 'adddp':
                    include "datphong/add.php";
                    break;
                case 'listdp':
                    if (isset($_POST['timkiemdp'])&&($_POST['timkiemdp'])) {
                        $kyw = $_POST['kyw'];
                        $id_phong = $_POST['id_phong'];
                    } else {
                        $kyw = "";
                        $id_phong = 0;
                    }
                    $listdp = loadall_dp($id_phong, $kyw);
                    $listsp = loadall_room("", 0, "", "");
                    include "datphong/list.php";
                    break;
                default:
                    include "home.php";
                    break;
            }

        } else include "home.php";

        include "footer.php";
    } else {
        header('location: ../index.php');
        exit();
    }
?>