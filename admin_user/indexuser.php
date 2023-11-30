<?php        

    session_start();
    if (isset($_SESSION['user'])&&($_SESSION['user']['role'] == 2)) {
        include "../model/pdo.php";
        include "../model/khachhang.php";
        include "../model/room.php";
        include "../model/taikhoan.php";
        include "../model/donhang.php";
        include "../model/trangthai.php";
        include "../model/datphong.php";
        include "../admin_user/headeruser.php";
       

        if (isset($_GET['act'])) {
            $act = $_GET['act'];
            switch ($act) {
                // COD THÔNG TIN CÁ NHÂN ( BẢNG KHÁCH HÀNG)
                //hiện thông tin bảng khách hàng
                case 'listkh':
                    $id_tk = $_SESSION['user']['id_TK'];
                        $listkh = loadone_kh($id_tk);
                        if($listkh == null)
                        {echo "<script>alert('Bạn chưa có thông tin cá nhân vui lòng nhập đầy đủ thông tin ');</script>";
                            include "../admin_user/khachhang/them.php";
                        }
                        else {
                            include "../admin_user/homeuser.php";
                        }
                    break; 
                //hiện thông tin bảng khách hàng và cập nhập lên ĐB
                case 'edittk':
                    $id_tk = $_SESSION['user']['id_TK'];
                    $listkh = loadone_kh($id_tk);
                    include "../admin_user/khachhang/update.php";
                    break;
                  break;
                case 'updatekh':
                    if(isset($_POST['capnhatkh']) && ($_POST['capnhatkh'])){
                        $id_tk = $_SESSION['user']['id_TK'];
                        $ten = $_POST['ten'];
                        $tuoi = $_POST['tuoi'];
                        $SDT = $_POST['SDT'];
                        $diachi = $_POST['diachi'];
                        $CCCD = $_POST['CCCD'];
                    }
                    updatekh($id_tk,$ten,$tuoi,$SDT,$diachi,$CCCD);
                    $id_tk = $_SESSION['user']['id_TK'];
                    $listkh = loadone_kh($id_tk);
                    include "../admin_user/homeuser.php"; 
                    break;  
                case 'themthongtinkh':
                    if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                        $id_tk = $_SESSION['user']['id_TK'];
                        $ten = $_POST['ten'];
                        $tuoi = $_POST['tuoi'];
                        $SDT = $_POST['SDT'];
                        $diachi = $_POST['diachi'];
                        $CCCD = $_POST['CCCD'];
                    }    
                    insert_KH($id_tk,$ten,$tuoi,$SDT,$diachi,$CCCD);
                    $id_tk = $_SESSION['user']['id_TK'];
                    $listkh = loadone_kh($id_tk);
                    include "../admin_user/homeuser.php"; 
                    break;
                // END THÔNG TIN CÁ NHÂN (BẢNG KHÁCH HÀNG)

                // COD THÔNG TIN TÀI KHOẢN ( BẢNG TÀI KHOẢN)
                case 'listtk':
                    $id_tk = $_SESSION['user']['id_TK'];
                    $listtk = loadtk($id_tk);
                    include "../admin_user/taikhoan.php/listtk.php"; 
                    break;
                case 'suatk':
                    $id_tk = $_SESSION['user']['id_TK'];
                    $listtk = loadtk($id_tk);
                    include "../admin_user/taikhoan.php/updatetk.php";
                    break;
                case 'updatetk':
                    if(isset($_POST['capnhattk']) && ($_POST['capnhattk'])){
                        $id_TK = $_POST['id_TK'];
                        $userName = $_POST['userName'];
                        $pass = $_POST['pass'];
                        $Email = $_POST['email'];
                        $SDT = $_POST['SDT'];
                    }
                    updatetk_user($id_TK,$userName,$pass,$Email,$SDT);
                    $id_tk = $_SESSION['user']['id_TK'];
                    $thongbao = "SỬA THÀNH CÔNG";
                    $listtk = loadtk($id_tk);
                    include "../admin_user/taikhoan.php/listtk.php";  
                    break;    
                // END COD THÔNG TIN TÀI KHOẢN ( BẢNG TÀI KHOẢN)

                // COD LIST Đơn Hàng ( BẢNG ĐẶT PHÒNG )
                case 'listdh':
                    $id_tk = $_SESSION['user']['id_TK'];
                    $listdh = loadall_dh($id_tk);
                    if($listdh == null) {
                        echo "<script>alert('Bạn chưa có đơn hàng nào ');</script>";
                    }
                    include "../admin_user/donhang/listdh.php";
                    break;
                case 'chitietdh':
                    if(isset($_GET['id']) && ($_GET['id'] > 0)){
                        $id_DP = $_GET['id'];
                        $listdh2 = loadone_dh($id_DP);
                    }
                    include "../admin_user/donhang/listdhchitiet.php";
                    break;
                case 'huydon':
                    if(isset($_GET['id']) && ($_GET['id'] > 0)){
                        delete_dp($_GET['id']);
                    }
                    $id_tk = $_SESSION['user']['id_TK'];
                    $listdh = loadall_dh($id_tk);
                    include "../admin_user/donhang/listdh.php";
                    break;
                // END ĐƠN HÀNG (BẢNG ĐẶT PHÒNG)
                
                default:
                    $id_tk = $_SESSION['user']['id_TK'];
                    $listtk = loadtk($id_tk);
                    include "../admin_user/taikhoan.php/listtk.php";
                break;
            }

        }
    }   else {
        header("location: ../index.php ");
    }

    include "footer.php";
?>