<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý phòng</title>
    <link rel="shortcut icon" href="./images/1x/logo_full_2.png" type="image/png">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/css_das.css">
</head>
<body>

    <div class="sidebar">
        <div class="sidebar-logo">
            <a href="index.html">
                <img src="#" alt="Logo">
            </a>
            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>
        <div class="sidebar-user">
            <div class="sidebar-user-info">
                <img src="#chưa có" alt="User picture" class="profile-image">
                <div class="sidebar-user-name">
                    Vũ nè
                </div>
            </div>
            <button class="btn btn-outline">
                <a href="index.html"><i class='bx bx-log-out bx-flip-horizontal'></i></a>
            </button>
        </div>

        <ul class="sidebar-menu">
            <li>
                <a href="index.php?act=home">
                    <i><iconify-icon icon="ion:home-sharp"></iconify-icon></i>
                    <span>Trung tâm điều khiển</span>
                </a>
            </li>
            <li>
                <a href="index.php?act=listsp">
                    <i><iconify-icon icon="guidance:hotel-room"></iconify-icon></i>
                    <span>Quản Lý Phòng</span>
                </a>
            </li>
            <li>
                <a href="index.php?act=listdm">
                    <i><iconify-icon icon="ic:round-hotel"></iconify-icon></i>
                    <span>Quản lý Loại Phòng</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i><iconify-icon icon="mdi:account-cog"></iconify-icon></i>
                    <span>Quản lý Tài Khoản</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i><iconify-icon icon="fluent:comment-16-filled"></iconify-icon></i>
                    <span>Quản lý Bình Luận</span>
                </a>
            </li>
            
        </ul>
        
    </div>