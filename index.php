<?php
    include "model/pdo.php";
    include "model/room.php";
    include "model/loaiphong.php";
    include "model/taikhoan.php";

    include "view/header.php";
    if (isset($_GET['act'])&&($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
            case 'gt':
                
                break;
            case 'dv':
                
                break;
            case 'chitiet':
                if((isset($_GET['id'])) && ($_GET['id'] > 0)){
                    $id = $_GET['id'];
                    $listphong = loadone_room($id);
                    include "../duan1_nhom5-develop/view/chitietphong.php";
                }

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
                // var_dump($checkin);
                // var_dump($checkout);
                // var_dump($loaiphong);
                $listsp = load6_roomtk($loaiphong, $checkin, $checkout);
                include "view/room.php";
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