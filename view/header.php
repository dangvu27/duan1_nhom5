<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RoomBook</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- icon  -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script> 

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    

    <!-- Bootstrap Datepicker CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <!-- Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.en-GB.min.js"></script>

    <script type="application/x-javascript">
      addEventListener("load", function() {
          setTimeout(hideURLbar, 0);
      }, false);

      function hideURLbar() {
          window.scrollTo(0, 1);
      }
    </script>

</head>

<body>
    <div class="container-xxl bg-white p-0">
        

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">RoomBook</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.php" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">RoomBook</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="index.php" class="nav-item nav-link active">Trang chủ</a>
                                <a href="index.php?act=gt" class="nav-item nav-link">Giới thiệu</a>
                                <a href="index.php?act=dv" class="nav-item nav-link">Dịch vụ</a>
                                <a href="index.php?act=tksp" class="nav-item nav-link">Phòng</a>
                                <!-- <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="booking.html" class="dropdown-item">Booking</a>
                                        <a href="team.html" class="dropdown-item">Our Team</a>
                                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    </div>
                                </div> -->
                                <a href="index.php?act=lh" class="nav-item nav-link">Liên hệ</a>
                            </div>
                            <a href="admin/login.php" class="btn btn-primary rounded-0 py-4 px-md-3 d-none d-lg-block">Đăng nhập <i><iconify-icon icon="material-symbols-light:account-box"></iconify-icon></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <?php
            if (isset($_GET['act'])&&($_GET['act'] != "")) {
                $act = $_GET['act'];
                switch ($act) {
                    case 'gt':
                        echo '<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
                            <div class="container-fluid page-header-inner py-5">
                                <div class="container text-center pb-5">
                                    <h1 class="display-3 text-white mb-3 animated slideInDown">Giới thiệu về chúng tôi</h1>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb justify-content-center text-uppercase">
                                            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                                            <li class="breadcrumb-item"><a href="#">Trang</a></li>
                                            <li class="breadcrumb-item text-white active" aria-current="page">Giới thiệu</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>';
                        break;
                    case 'dv':
                        echo '<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
                            <div class="container-fluid page-header-inner py-5">
                                <div class="container text-center pb-5">
                                    <h1 class="display-3 text-white mb-3 animated slideInDown">Dịch vụ</h1>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb justify-content-center text-uppercase">
                                            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                                            <li class="breadcrumb-item"><a href="#">Trang</a></li>
                                            <li class="breadcrumb-item text-white active" aria-current="page">Dịch vụ</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>';
                        break;
                    case 'tksp':
                        echo '<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
                            <div class="container-fluid page-header-inner py-5">
                                <div class="container text-center pb-5">
                                    <h1 class="display-3 text-white mb-3 animated slideInDown">Phòng</h1>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb justify-content-center text-uppercase">
                                            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                                            <li class="breadcrumb-item"><a href="#">Trang</a></li>
                                            <li class="breadcrumb-item text-white active" aria-current="page">Phòng</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>';
                        break;
                    case 'lh':
                        echo '<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
                            <div class="container-fluid page-header-inner py-5">
                                <div class="container text-center pb-5">
                                    <h1 class="display-3 text-white mb-3 animated slideInDown">Liên hệ</h1>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb justify-content-center text-uppercase">
                                            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                                            <li class="breadcrumb-item"><a href="#">Trang</a></li>
                                            <li class="breadcrumb-item text-white active" aria-current="page">Liên hệ</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>';
                        break;    
                    default:
                        echo'<div class="container-fluid p-0 mb-5">
                        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                        <div class="p-3" style="max-width: 700px;">
                                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Cuộc sống sang trọng</h6>
                                            <h1 class="display-3 text-white mb-4 animated slideInDown">Khám phá khách sạn sang trọng có thương hiệu</h1>
                                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Những căn phòng</a>
                                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Đặt phòng</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                        <div class="p-3" style="max-width: 700px;">
                                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Cuộc sống sang trọng</h6>
                                            <h1 class="display-3 text-white mb-4 animated slideInDown">Khám phá khách sạn sang trọng có thương hiệu</h1>
                                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Những căn phòng</a>
                                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Đặt phòng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>';
                        break;
                }
            } else {
                echo'<div class="container-fluid p-0 mb-5">
                        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                        <div class="p-3" style="max-width: 700px;">
                                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Cuộc sống sang trọng</h6>
                                            <h1 class="display-3 text-white mb-4 animated slideInDown">Khám phá khách sạn sang trọng có thương hiệu</h1>
                                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Những căn phòng</a>
                                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Đặt phòng</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                        <div class="p-3" style="max-width: 700px;">
                                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Cuộc sống sang trọng</h6>
                                            <h1 class="display-3 text-white mb-4 animated slideInDown">Khám phá khách sạn sang trọng có thương hiệu</h1>
                                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Những căn phòng</a>
                                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Đặt phòng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>';
            }
        
        ?>
        
        <!-- Booking Start -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <form action="index.php?act=tksp" method="post">
                        <div class="row g-2">
                            <div class="col-md-10">
                                <div class="row g-2">
                                    <div class="col-md-4">
                                        <div class="date" id="date1" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input"
                                            placeholder="Ngày checkin" data-target="#date1" data-toggle="datetimepicker" name="ngayden"/>
                                            <!-- <input type="date" placeholder="Ngày checkin" class="form-control" id="ngayden" name="ngayden"> -->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="date" id="date2" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" 
                                            placeholder="Ngày checkout" data-target="#date2" data-toggle="datetimepicker" name="ngayve"/>
                                            <!-- <input type="date" placeholder="Ngày checkin" class="form-control" id="ngayve" name="ngayve"> -->
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select" name="loaiphong">
                                            <option selected value="0">Chọn loại phòng</option>
                                            <?php
                                                $listloai = loadall_loai();
                                                foreach ($listloai as $key) {
                                                    extract($key);
                                                    echo '<option value="'.$id_loaiphong.'">'.$ten_LP.'</option>';
                                                }
                                                
                                            ?>
                                        </select>
                                    </div>
                                    <!-- <div class="col-md-3">
                                        <select class="form-select">
                                            <option selected>Child</option>
                                            <option value="1">Child 1</option>
                                            <option value="2">Child 2</option>
                                            <option value="3">Child 3</option>
                                        </select>
                                    </div> -->
                                    
                                </div>
                            </div>
                            <div class="col-md-2">
                                <input type="submit" value="Tìm kiếm" class="btn btn-primary w-100" name="Timkiem">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Booking End -->

        
