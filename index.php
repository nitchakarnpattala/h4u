<html>
    <head>
        <title>
            H4U
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>
</html>
<body>

    <nav class="navbar navbar-light" style="background-color: #036000 ;">
    <a class="navbar-brand" href="../h4u/" style="color:white">หน้าหลัก</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="login/login.php" style="color:white">เข้าสู่ระบบ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register/choose.php" style="color:white">สมัครสมาชิก</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="information/personalIn.php" style="color:white">ดูข้อมูล</a>
      </li>
    </ul>
  </div>
              </nav>


<center>


<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel" style="background-color:#4F714E ">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="img/banner2.png" class="d-block w-50" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="img/banner3.png" class="d-block w-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/banner1.png" class="d-block w-50" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
<img src="img/heart.png" alt="Smiley face" height="42" width="42">
<br>
<h1>
ยินดีต้อนรับเข้าสู่เว็บไซต์
</h1><br>
<a href="login/login.php">
<button type="button" class="btn btn-success">เข้าสู่ระบบ</button>
</a><br>
<a href="register/choose.php">
ยังไม่มีบัญชี ?
</a>
</center>
<?php
include("include/footer.php");
?>