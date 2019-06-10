<?php
include("../include/header.php");
?>

<center>
<br>
<h1>
ค้นหาบัญชีของคุณ
</h1><br>
<div style="width:30%;">
<form>
<label> กรอก username ของคุณ </label>
<input type="text" name="username" class="form-control mx-sm-3" placeholder="Username"><br><br>
<a href="sentOTP.php">
<button type="button" class="btn btn-success">ค้นหา</button>
</a>
</form>
</div>
</center>

<?php
include("../include/footer.php");
?>