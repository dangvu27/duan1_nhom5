<?php
    session_start();
    include "model/binhluan.php";
    include "model/pdo.php";
    include "model/room.php";
    include "model/loaiphong.php";
    include "model/taikhoan.php";
    include "view/header.php";
    if (isset($_GET['act'])&&($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
            case 'gt':
                include "view/gioithieu.php";
                break;
            case 'dv':
                
                break;
            case 'chitiet':
                if((isset($_GET['id'])) && ($_GET['id'] > 0)){
                    $id = $_GET['id'];
                    $phong = loadone_room($id);
                }
                $listbl = loadall_bl($id);
                include "../duan1_nhom5/view/chitietphong.php";
                break;
            case 'tksp':
                if (isset($_POST['Timkiem'])&&($_POST['Timkiem'])) {
                    $checkin = $_POST['ngayden'];
                    $checkout = $_POST['ngayve'];
                    $loaiphong = $_POST['loaiphong'];
                } else {
                    $loaiphong = 0;
                    $checkin = "";
                    $checkout = "";
                }
                $listsp = load6_roomtk($loaiphong, $checkin, $checkout);
                include "view/room.php";
                break; 
            // case 'dangky-dangnhap':
            //     if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
            //         $userName = $_POST['userName'];
            //         $pass = $_POST['pass'];
            //         $tk = checkuser($userName, $pass);
            //         if(is_array($tk)){
            //             $_SESSION['user'] = $tk;
            //             header('location: index.php');
            //         }
            //         break;
            //     } else if(isset($_POST['dangky']) && ($_POST['dangky'])){
            //         $userName = $_POST['userName'];
            //         $SDT = $_POST['SDT'];
            //         $email = $_POST['email'];
            //         $pass = $_POST['pass'];
            //         $sql = "SELECT COUNT(email) FROM taikhoan WHERE email = '$email'";
            //         $check = pdo_query_value($sql);
            //         if($check  > 0){
            //             include "view/dangnhapdangky.php";
            //         } else{
            //             inserttk($userName, $pass, $Email, $SDT);
            //             echo "Đã đăng ký thành công vi lòng đăng nhập tài khoản";
            //             header('location: index.php?act=dangky-dangnhap');
            //             break;
            //         }
            //     } else {
            //         include "view/dangnhapdangky.php";
            //     }
            //     break;    
            case 'dangky-dangnhap':
                if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                    $userName = $_POST['userName'];
                    $pass = $_POST['pass'];
                    $tk = checkuser($userName, $pass);
                    if (is_array($tk)) {
                        $_SESSION['user'] = $tk;
                        header('location: index.php');
                        exit();
                    }
                }
            
                if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                    $userName = $_POST['userName'];
                    $SDT = $_POST['SDT'];
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $sql = "SELECT COUNT(email) FROM taikhoan WHERE email = '$email'";
                    $check = pdo_query_value($sql);
                    if ($check  > 0) {
                        include "view/dangnhapdangky.php";
                    } else {
                        inserttk($userName, $pass, $email, $SDT);
                        echo "Đã đăng ký thành công, vui lòng đăng nhập tài khoản";
                        ob_start(); // Bắt đầu đệm đầu ra
                        header('location: index.php');
                        ob_end_flush(); // Gửi đầu ra từ bộ đệm và kết thúc
                        exit();
                    }
                } else {
                    include "view/dangnhapdangky.php";
                }
                break;      
            case 'binhluan':
                if (isset($_POST['guibl'])&&($_POST['guibl'])) {
                    $noi_dung = $_POST['noi_dung'];
                    $id_phong = $_POST['id_phong'];
                    $thoi_gian = date('Y-m-d');
                    insert_bl($noi_dung, $thoi_gian, $_SESSION['user']['id_TK'], $id_phong);
                }
                $phong = loadone_room($id_phong);
                $listbl = loadall_bl($id_phong);
                include "../duan1_nhom5/view/chitietphong.php";
                break;    
                
            case 'thoat':
                session_destroy();
                header("location: index.php");
                exit();
                break;
            default:
                include "view/home.php";
                break;
        }
    } else {     
         include "view/home.php";
    }
    include "view/footer.php";
?>