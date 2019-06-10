<?php
include("../include/header.php");
?>

<center>
<div style="width:30%; margin-top:3%">
<form action="../" method="post">
  <div class="form-group">
    <label for="exampleInputUser">username</label>
    <input type="text" class="form-control" id="exampleInputUser" aria-describedby="userHelp" placeholder="Enter user">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <a href="../register/choose.php"> สมัครสมาชิก </a> <br>
  <a href="../forgot/forgotPwd.php"> ลืมรหัสผ่าน ? </a> <br><br>
  <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button>
</form>
</div>
</center>

<?php
include("../include/footer.php");
?>