<?php
    include "../model/pdo.php";
    include "../model/room.php";
    include "../model/loaiphong.php";
    include "header.php";

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'listsp':
                if (isset($_POST['listtk'])&&($_POST['listtk'])) {
                    $kyw = $_POST['kyw'];
                    $id_loaiphong = $_POST['id_loaiphong'];
                } else {
                    $kyw = "";
                    $id_loaiphong = 0;
                }
                $listsp = loadall_room($kyw,$id_loaiphong);
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
            case 'update':
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
                $kyw = "";
                $id_loaiphong = 0;
                $listsp = loadall_room($kyw,$id_loaiphong);
                include "room/list.php";
                break;
            case 'delete':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_room($_GET['id']);
                }
                $kyw = "";
                $id_loaiphong = 0;
                $listsp = loadall_room($kyw,$id_loaiphong);
                include "room/list.php";
                break;
            default:
                include "home.php";
                break;
        }

    } else include "home.php";

    include "footer.php";
?>