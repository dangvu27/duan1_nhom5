<?php
    session_start();
    if (isset($_SESSION['user'])&&($_SESSION['user']['role'] == 1)) {
        include "../model/pdo.php";
        include "../model/room.php";
        include "../model/datphong.php";
        include "../model/loaiphong.php";
        include "../model/taikhoan.php";
        include "../model/binhluan.php";
        include "../model/role.php";
        include "../model/donhang.php";
        include "../model/thongke.php";
        include "../model/trangthai.php";

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
                case 'listxoalp':
                    $listdm = loadall_loaixoa();
                    include "loaiphong/listxoa.php";
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
                case 'khoiphuclp':
                    if (isset($_GET['id'])&&($_GET['id']>0)) {
                        return_loai($_GET['id']);
                    }
                    $listdm = loadall_loaixoa();
                    include "loaiphong/listxoa.php";
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
                case 'listxoa':
                    if (isset($_POST['timkiemsp'])&&($_POST['timkiemsp'])) {
                        $kyw = $_POST['kyw'];
                        $id_loaiphong = $_POST['id_loaiphong'];
                    } else {
                        $kyw = "";
                        $id_loaiphong = 0;
                    }
                    $listdm = loadall_loai();
                    $listsp = loadall_roomxoa($kyw,$id_loaiphong);
                    include "room/listxoa.php";
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
                case 'khoiphuc':
                    if (isset($_GET['id'])&&($_GET['id']>0)) {
                        return_room($_GET['id']);
                    }
                    $listdm = loadall_loai();
                    $listsp = loadall_roomxoa("",0);
                    include "room/listxoa.php";
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
                case 'listxoatk':
                    $listtk = loadall_tkxoa();
                    include "taikhoan/listxoa.php";   
                    break;
                case 'suatk':
                    if(isset($_GET['id']) && ($_GET['id'] > 0)){
                        $taikhoan = loadtk($_GET['id']);
                    }
                    $listrole = loadall_role();
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
                case 'khoiphuctk':
                    if(isset($_GET['id'])){
                        returntk($_GET['id']);
                    }
                    $listtk = loadall_tkxoa();
                    include "taikhoan/listxoa.php"; 
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
                case 'deletebl':
                    if(isset($_GET['id'])){
                        delete_bl($_GET['id']);
                    }
                    $listsp = loadall_room("", 0, "", "");
                    $listbl = loadall_bl(0);
                    include "binhluan/list.php";
                    break;
                case 'returnbl':
                    if(isset($_GET['id'])){
                        return_bl($_GET['id']);
                    }
                    $listsp = loadall_room("", 0, "", "");
                    $listbl = loadall_blxoa(0);
                    include "binhluan/listxoa.php";
                    break;
                case 'listblxoa':
                    if (isset($_POST['timkiembl'])&&($_POST['timkiembl'])) {
                        $id_phong = $_POST['id_phong'];
                    } else {
                        $id_phong = 0;
                    }
                    $listsp = loadall_room("", 0, "", "");
                    $listbl = loadall_blxoa($id_phong);
                    include "binhluan/listxoa.php";
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
                // case 'listdpxoa':
                //     if (isset($_POST['timkiemdp'])&&($_POST['timkiemdp'])) {
                //         $kyw = $_POST['kyw'];
                //         $id_phong = $_POST['id_phong'];
                //     } else {
                //         $kyw = "";
                //         $id_phong = 0;
                //     }
                //     $listdp = loadall_dpxoa($id_phong, $kyw);
                //     $listsp = loadall_room("", 0, "", "");
                //     include "datphong/listxoa.php";
                //     break;    
                case 'chitietdh':
                    if(isset($_GET['id']) && ($_GET['id'] > 0)){
                        $id_DP = $_GET['id'];
                        $listdh2 = loadone_dh($id_DP);
                    }
                    include "datphong/chitietdp.php";
                    break;
                case 'suatrangthai':
                    if (isset($_GET['id'])&&($_GET['id'])) {
                        $dh = loadone_dh($_GET['id']);
                    }
                    $listtrangthai = all_trangthai();
                    include "datphong/update.php";
                    break;
                case 'capnhattrangthai':
                    if (isset($_POST['capnhattt'])&&($_POST['capnhattt'])) {
                        $trangthai = $_POST['trangthai'];
                        $id_DP = $_POST['iddp'];
                        update_dp($id_DP, $trangthai);
                    }
                    $listdp = loadall_dp(0, "");
                    $listsp = loadall_room("", 0, "", "");
                    include "datphong/list.php";
                    break;
                // end datphong

                // thống kê
                case 'home':
                    $listthongke = loadall_thongke();
                    include "home.php";
                    break;

                //end thống kê
                default:
                    $listthongke = loadall_thongke();
                    include "home.php";
                    break;
            }

        } else {
            $listthongke = loadall_thongke();
            include "home.php";
        };
        include "footer.php";
    } else {
        header('location: ../index.php');
        exit();
    }
?>