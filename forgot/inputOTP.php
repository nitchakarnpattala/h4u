<?php
include("../include/header.php");
?>

<center>
<br>
<h1>
กรอกรหัส OTP
</h1><br>
<div >
<form>
<label> กรอกรหัส OTP ที่ได้รับภายใน 15 นาที </label>
<br>
        <input id="codeBox1" type="number" maxlength="1" onkeyup="onKeyUpEvent(1, event)" onfocus="onFocusEvent(1)"/>
        <input id="codeBox2" type="number" maxlength="1" onkeyup="onKeyUpEvent(2, event)" onfocus="onFocusEvent(2)"/>
        <input id="codeBox3" type="number" maxlength="1" onkeyup="onKeyUpEvent(3, event)" onfocus="onFocusEvent(3)"/>
        <input id="codeBox4" type="number" maxlength="1" onkeyup="onKeyUpEvent(4, event)" onfocus="onFocusEvent(4)"/>
<br><br>
<a href="resetPwd.php">
<button type="button" class="btn btn-success">ยืนยัน</button>
</a>
</form>
</div>
</center>

<?php
include("../include/footer.php");
?>