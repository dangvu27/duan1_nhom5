<?php
    include "../model/pdo.php";
    include "../model/room.php";
    include "../model/loaiphong.php";
    include "../model/taikhoan.php";
    include "header.php";

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {

            case 'thongtintk':
                if((isset($_GET['id'])) && ($_GET['id'] > 0)){
                    $id = $_GET['id'];
                    $listphong = loadone_room($id);
                    include "../admin_user/indexuser.php";
                }
                break;
            case 'editthongtin':
                break;

            default:
                include "home.php";
                break;
        }

    } else include "homeuser.php";

    include "footer.php";
?>