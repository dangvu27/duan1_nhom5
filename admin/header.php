<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý</title>
    <link rel="shortcut icon" href="./images/1x/logo_full_2.png" type="image/png">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Datepicker CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <!-- Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    </script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.en-GB.min.js">
    </script>

    <!-- bieudo thong ke -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/morris.js/0.5.1/morris.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/morris.js/0.5.1/raphael-min.js"></script>
    <script src="https://cdn.jsdelivr.net/morris.js/0.5.1/morris.min.js"></script>

    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/css_das.css">
</head>

<body>

    <div class="sidebar">
        <div class="sidebar-logo">
                    <a href="../index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">RoomBook</h1>
                    </a>
                
            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>
        <div class="sidebar-user">
            <div class="sidebar-user-info">
                <div class="sidebar-user-name">
                    <?php echo $_SESSION['user']['userName'];?>
                </div>
            </div>
            <a href="../index.php?act=thoat">
                <button class="btn btn-outline">
                    <i class='bx bx-log-out bx-flip-horizontal'></i>
                </button></a>
        </div>

        <ul class="sidebar-menu">
            <li>
                <a href="index.php?act=home">
                    <i>
                        <iconify-icon icon="ion:home-sharp"></iconify-icon>
                    </i>
                    <span>Trung tâm điều khiển</span>
                </a>
            </li>
            <li>
                <a href="index.php?act=listsp">
                    <i>
                        <iconify-icon icon="guidance:hotel-room"></iconify-icon>
                    </i>
                    <span>Quản Lý Phòng</span>
                </a>
            </li>
            <li>
                <a href="index.php?act=listdm">
                    <i>
                        <iconify-icon icon="ic:round-hotel"></iconify-icon>
                    </i>
                    <span>Quản lý Loại Phòng</span>
                </a>
            </li>
            <li>
                <a href="index.php?act=listtk">
                    <i>
                        <iconify-icon icon="mdi:account-cog"></iconify-icon>
                    </i>
                    <span>Quản lý Tài Khoản</span>
                </a>
            </li>
            <li>
                <a href="index.php?act=listbl">
                    <i>
                        <iconify-icon icon="fluent:comment-16-filled"></iconify-icon>
                    </i>
                    <span>Quản lý Bình Luận</span>
                </a>
            </li>
            <li>
                <a href="index.php?act=listdp">
                    <i>
                        <iconify-icon icon="material-symbols:shopping-cart-sharp"></iconify-icon>
                    </i>
                    <span>Quản lý Đặt Phòng</span>
                </a>
            </li>

        </ul>

    </div>