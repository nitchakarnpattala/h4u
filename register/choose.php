<?php
include("../include/header.php");
?>

<center>
<div class="row" style="margin-left:40%; margin-top:8%">
<p style="font-size:20pt" class="text-center"><strong>เลือกประเภทการลงทะเบียน</strong></p><br>
<br><br>
</div>

<div class="row" style="margin-left:25%">
  <div class="col-sm-4">
    <a href="registerUser.php" style="color:#036000">
    <img src="../img/family.png" class="img-circle person" width=200;>
    <br><br>
    <p style="font-size:16pt" class="text-center" ><strong>ผู้ใช้งานทั่วไป</strong></p><br>
    </a>
  </div>
  <div class="col-sm-4">
    <a href="registerEmployee.php" style="color:#036000">
      <img src="../img/network.png" class="img-circle person" width=200;>
      <br><br>
    <p style="font-size:16pt" class="text-center"><strong>เจ้าหน้าที่</strong></p><br>
    </a>

  </div>
</div>
<a href="../">
<button type="button" class="btn btn-success">ย้อนกลับ</button>
</a>
</center>

<?php
include("../include/footer.php");
?>