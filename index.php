<?php
    session_start();
    include "model/binhluan.php";
    include "model/pdo.php";
    include "model/room.php";
    include "model/loaiphong.php";
    include "model/taikhoan.php";
    include "model/khachhang.php";
    include "model/datphong.php";
    include "model/donhang.php";
    include "view/header.php";
    if (isset($_GET['act'])&&($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
            case 'gt':
                include "view/gioithieu.php";
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
                    $checkin = date("Y-m-d", strtotime($_POST['ngayden']));
                    $checkout = date("Y-m-d", strtotime($_POST['ngayve']));
                    $loaiphong = $_POST['loaiphong'];
                    $_SESSION['checkin'] = date("Y-m-d", strtotime($_POST['ngayden']));
                    $_SESSION['checkout'] = date("Y-m-d", strtotime($_POST['ngayve']));
                } else {
                    $loaiphong = 0;
                    $checkin = "";
                    $checkout = "";
                }
                $listsp = load6_roomtk($loaiphong, $checkin, $checkout);
                include "view/room.php";
                break;  
            case 'dangnhap':
                if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                    $userName = $_POST['userName'];
                    $pass = $_POST['pass'];
                    $tk = checkuser($userName, $pass);
                    if (is_array($tk)) {
                        $_SESSION['user'] = $tk;
                        header('location: index.php');
                        exit();
                    } else {
                        echo "<script>
                            alert('Vui lòng kiểm tra lại tài khoản, mật khẩu!');
                        </script>";
                    }
                }
                include "view/dangnhap.php";
                break;  
            case 'dangky':
                if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                    $userName = $_POST['userName'];
                    $SDT = $_POST['SDT'];
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $sql = "SELECT COUNT(email) FROM taikhoan WHERE email = '$email'";
                    $check = pdo_query_value($sql);
                    $sql1 = "SELECT COUNT(userName) FROM taikhoan WHERE userName = '$userName'";
                    $check1 = pdo_query_value($sql1);
                    if ($check+$check1 == 0) {
                        inserttk($userName, $pass, $email, $SDT);
                        echo '<script>
                            alert("Đăng kí thành công tài khoản!");
                            window.location.href = "index.php?act=dangnhap";
                        </script>';
                    } elseif ($check1 > 0) {
                        echo "<script>
                            alert('UserName đã được sử dụng!');
                        </script>";
                    } elseif ($check > 0) {
                        echo "<script>
                            alert('Email đã được sử dụng!');
                        </script>";
                    }
                        
                 
                }
                include "view/dangky.php";
                break; 
            case 'quenmk':
                if (isset($_POST['guimk']) && ($_POST['guimk'])) {
                    $Email = $_POST['Email'];
                    $checkemail = checkemail($Email);
                    if(is_array($checkemail)){
                        $thongbao = "mật khẩu của bạn là: ".$checkemail['pass'];
                    }else{
                        echo '<script>
                        alert("Email vừa nhập không tồn tại! vui lòng nhập lại");
                      </script>';
                    }
                }
                include "view/quenmk.php";
                break;   
            case 'binhluan':
                if (isset($_POST['guibl'])&&($_POST['guibl'])) {
                    $noi_dung = $_POST['noi_dung'];
                    $id_phong = $_POST['id_phong'];
                    $thoi_gian = date('Y-m-d H:i:s');
                    insert_bl($noi_dung, $thoi_gian, $_SESSION['user']['id_TK'], $id_phong);
                }
                $phong = loadone_room($id_phong);
                $listbl = loadall_bl($id_phong);
                include "view/chitietphong.php";
                break;    
                
            case 'thoat':
                session_destroy();
                header("location: index.php");
                exit();
                break;
            case 'booking':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $_SESSION['id_phong'] = $_GET['id'];
                }
                include "view/booking.php";
                break;
            case 'datphong':
                if (isset($_POST['datphong'])&&($_POST['datphong'])) {
                    $id_phong = $_SESSION['id_phong'];
                    $ghichu = $_POST['ghichu'];
                    $ten = $_POST['ten'];
                    $sdt = $_POST['sdt'];
                    $email = $_POST['email'];
                    $ngaydat = date('Y-m-d');
                    // date("Y-m-d H:i:s", strtotime($_POST['ngayden'])) định dạng lại ngày
                    $ngayden = date("Y-m-d", strtotime($_POST['ngayden']));
                    $ngaydi = date("Y-m-d", strtotime($_POST['ngaydi']));
                    // var_dump($ngayden,$ngaydi);

                    $arrivalDate = new DateTime($ngayden);
                    $departureDate = new DateTime($ngaydi);

                    // Tính số ngày ở
                    $interval = $arrivalDate->diff($departureDate);
                    $numberOfDays = $interval->days;

                    $room = loadone_room($id_phong);
                    $total = $room['gia'] * $numberOfDays;
                    $id_DP = uniqid();
                    // setcookie('id_DP',$id_DP,time() + 60*60*24*2,"/view/bill.php");
                    if (check_ngay($ngayden,$ngaydi,$id_phong) >= 1) {
                        echo '<div class="alert alert-danger" role="alert">
                        Ngày bạn chọn không còn trống. Vui lòng chọn phòng hoặc ngày khác!
                    </div>';
                        include "view/booking.php";
                    } else {
                        // insert_dp($id_DP, $ten, $email, $sdt, $ngaydat, $ngayden, $ngaydi,$_SESSION['user']['id_TK'], $id_phong, $ghichu, $total);
                        // header('location: index.php');
                        include "view/bill.php";
                    }
                    // include "view/bill.php";
                }
            break;    
            case 'thanhtoan':
                if (isset($_POST['thanh_toan'])&&($_POST['thanh_toan'])) {
                    $id_DP = $_POST['id_DP'];
                    $ten = $_POST['ten'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $ngaydat = $_POST['ngaydat'];
                    $ngayden = $_POST['ngayden'];
                    $ngaydi = $_POST['ngaydi'];
                    $id_tk = $_POST['id_tk'];
                    $id_phong = $_POST['id_phong'];
                    $ghichu = $_POST['ghichu'];
                    $total = $_POST['total'];
                    insert_dp($id_DP, $ten, $email, $sdt, $ngaydat, $ngayden, $ngaydi,$id_tk, $id_phong, $ghichu, $total);
                    thanhtoan($id_DP);
                    echo '<script> alert("Thông báo: Thanh toán thành công");
                    window.location.href = "index.php";
                    </script>';
                }
                include "view/bill.php";
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