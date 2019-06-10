<html>
<?php include '../include/header.php'; ?>

<body>
    <div style="position:relative; padding-top:5%;padding-left:10%;padding-right:10%; ">
        <div class="jumbotron" >
                    <h2>ลงทะเบียน-ผู้ใช้บริการ</h2><br>
                    <hr class=" my-2">
            <form action="nextRegisteruser.php" method="post">

                <div class="form-group">
                    <label for="exampleFormControlInput1">รหัสบัตรประชาชน</label>
                    <input type="text" class="form-control" name="id" id="id">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">คำนำหน้า</label>
                    <input type="text" class="form-control" name="prefix" id="prefix" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">ชื่อ-นามสกุล</label>

                    <input type="text" class="form-control" name="Name" id="Name" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">วัน/เดือน/ปีเกิด</label>
                    <input type="text" class="form-control" name="birthday" id="birthday" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">ที่อยู่</label>
                    <textarea class="form-control" name="address" id="address" rows="3" ></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">ศาสนา</label>
                    <input type="text" class="form-control" name="Religion" id="Religion" >
                </div>
                <div style="text-align: center;">
                    <button type="submit" name="submit" class="btn btn-primary mb-2" style="background-color: #036000 ;">ถัดไป</button>
                    <a href="choose.php">
                    <button type="button" name="back" class="btn btn-primary mb-2" style="background-color: #036000 ;">ย้อนกลับ</button>
                    </a>
                </div>
        </div>
    </div>


    </form>
    </div>
    </div>
</body>
<?php include '../include/footer.php'; ?>
</html>