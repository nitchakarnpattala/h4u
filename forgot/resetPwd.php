<?php
include("../include/header.php");
?>

<center>
<div style="width:30%; margin-top:3%">
<form>
  <div class="form-group">
    <label for="exampleInputPassword">รหัสผ่านใหม่</label>
    <input type="password" class="form-control" id="exampleInputPwd" aria-describedby="pwdHelp" placeholder="Enter password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">ยืนยันรหัสผ่าน</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
  </div>
  </form>
  <a href="../login/login.php">
  <button type="submit" class="btn btn-success">ยืนยัน</button>
  </a>

</div>
</center>

<?php
include("../include/footer.php");
?>