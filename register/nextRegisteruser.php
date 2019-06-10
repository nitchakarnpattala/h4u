<html>
<?php include '../include/header.php'; ?>
<body>
    <div style="position:relative; padding-top:5%;padding-left:10%;padding-right:10%;">
        <div class="jumbotron" >
                    <h2>ลงทะเบียน-ผู้ใช้บริการ</h2><br>
                    <hr class=" my-2">
            <form action="../" method="post">

                <div class="form-group">
                    <label for="exampleFormControlInput1">username</label>
                    <input type="text" class="form-control" name="username" id="username" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">password</label>
                    <input type="text" class="form-control" name="password" id="password" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">confirm-password</label>
                    <input type="text" class="form-control" name="conpassword" id="conpassword" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">เบอร์โทรศัพพท์</label>
                    <input type="text" class="form-control" name="tel" id="tel" >
                </div>
                <div style="text-align: center;">
                    <button type="submit" name="submit" class="btn btn-primary mb-2" style="background-color: #036000 ;">ยืนยัน</button>
                    <a href="registerUser.php"><button type="button" name="back" class="btn btn-primary mb-2" style="background-color: #036000 ;">ย้อนกลับ</button></a>
                </div>
        </div>
    </div>


    </form>
    </div>
    </div>
</body>
<?php include '../include/footer.php'; ?>
</html>