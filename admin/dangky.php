<!-- <!doctype html>
<html>
	<head>
		<title>Đăng kí</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i|Noto+Sans:400,400i,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
        <link rel="stylesheet" href="../css/dangki.css">
	</head>
	<body>
		<form action="index.php?act=dangky" method="post">
        <div class="to">
			<div class="form">
				<h2>Đăng ký học</h2>
				<i class="fab fa-app-store-ios"></i>
				<label style="margin-left: -150px;">UserName</label>
				<input type="text" name="userName">
				<label >Số điện thoại</label>
				<input type="text" name="SDT">	
				<label style="margin-left: -180px;">Email</label>
                
				<input type="text" name="email"> 
                <label style="margin-left: -150px;">Password</label>
				<input type="text" name="pass">

              
                	<input id="submit" type="submit" name="dangky" value="ĐĂNG KÝ">
			</div>				
		</div>
        </form>
        <h2 class="thongbao"> -->
        <?php
        // if((isset($thongbao)) &&($thongbao != "")){
        //     echo $thongbao;
        // }
        
        ?></h2>
	<!-- </body>
</html> -->





<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login_Quocanh&Vu</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta
      name="keywords"
      content="Online Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
    />
    <script type="application/x-javascript">
      addEventListener("load", function() {
          setTimeout(hideURLbar, 0);
      }, false);

      function hideURLbar() {
          window.scrollTo(0, 1);
      }
    </script>
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="../css/login.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="css/font-awesome.css" />
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!-- online-fonts -->
    <link
      href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
      rel="stylesheet"
    />
    <link
      href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext"
      rel="stylesheet"
    />
    <!-- //online-fonts -->
  </head>

  <body>
    <!-- main -->
    <div class="center-container">
      <!--header-->
      <div class="header-w3l">
        <h1>ĐĂNG NHẬP</h1>
      </div>
      <!--//header-->
      <div class="main-content-agile">
        <div class="sub-main-w3">
          <div class="wthree-pro">
            <h2>Login account</h2>
          </div>
          <form action="index.php?act=dangky" method="post">
            <div class="pom-agile">
              <input placeholder="Username" name="userName" class="user" type="userName" required=""/>
              <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
            </div>
            <div class="pom-agile">
              <input placeholder="Số điện thoại" name="SDT"class="user" type="sdt" required=""/>
              <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
            </div>
            <div class="pom-agile">
              <input placeholder="E-mail" name="email"class="user" type="email"required=""/>
              <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
            </div>
            <div class="pom-agile">
              <input placeholder="Password"name="pass"class="pass"type="password"required="" />
              <span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
            </div>
            <div class="sub-w3l">
              <h6><a href="#">Forgot Password?</a></h6>
              <div class="right-w3l">
                <input type="submit" name="dangky" value="ĐĂNG KÝ" />
                <a href="login.php"><input type="button" name="dangnhap" value="ĐĂNG NHẬP" /></a>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!--//main-->
      <!--footer-->
      <!--//footer-->
    </div>
  </body>
</html>