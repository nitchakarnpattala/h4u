<html>
<?php include '../include/header.php'; ?>
<body>
    <div style="position:relative; padding-top:5%;padding-left:10%;padding-right:10%;">
        <div class="jumbotron" ">
                    <h2>ลงทะเบียน-เจ้าหน้าที่</h2><br>
                    <hr class=" my-2">
            <form action="nextRegisteremployee.php" method="post">

                <div class="form-group">
                    <label for="exampleFormControlInput1">รหัสบัตรประชาชน</label>
                    <input type="text" class="form-control" name="id" id="id" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">ตำแหน่ง</label>
                    <select class="form-control" name="position" id="position">
                        <option value="1">นักกายภาพบำบัด</option>
                        <option value="2">นักกิจกรรมบำบัด</option>
                        <option value="3">ทันตแพทย์</option>
                        <option value="4">นักเทคนิคการแพทย์</option>
                        <option value="5">นายสัตวแพทย์</option>
                        <option value="6">นัก0จิตวิทยาคลินิก</option>
                        <option value="7">พยาบาลวิชาชีพ</option>
                        <option value="8">นายแพทย์</option>
                        <option value="9">แพทย์แผนไทย</option>
                        <option value="10">เภสัชกร</option>
                        <option value="11">นักการรังสี</option>
                        <option value="12">นักเวชศาสตร์การสื่อความหมาย</option>
                        <option value="13">นักเทคโนโลยีหัวใจและทรวงอก</option>
                        <option value="14">นักฟิสิกส์การแพทย์</option>
                        <option value="15">นักทัศนมาตร</option>
                        <option value="16">นักกายอุปกรณ์</option>
                        <option value="17">วิศวกรไฟฟ้า</option>
                        <option value="18">นักวิชาการศึกษาพิเศษ</option>
                        <option value="19">นักวิทยาศาสตร์</option>
                        <option value="20">นักฟิสิกส์รังสี</option>
                        <option value="21">นักจิตวิทยา</option>
                        <option value="22">นักโภชนาการ</option>
                        <option value="23">นักวิชาการสาธารณสุข</option>
                        <option value="24">นักอาชีวบำบัด</option>
                        <option value="25">นักวิชาการอาหารและยา</option>
                        <option value="26">นักวิทยาศาสตร์การแพทย์</option>
                        <option value="27">ช่างภาพการแพทย์</option>
                        <option value="28">นักสังคมสงเคราะห์</option>
                        <option value="29">นักวิชาการคอมพิวเตอร์</option>
                        <option value="30">นักจัดการงานทั่วไป</option>
                        <option value="31">นักทรัพยากรบุคคล</option>
                        <option value="32">นิติกร</option>
                        <option value="33">นักวิเคราะห์นโยบายและแผน</option>
                        <option value="34">นักเทคโนโลยีสารสนเทศ</option>
                        <option value="35">นักวิชาการพัสดุ</option>
                        <option value="36">นักวิชาการสถิติ</option>
                        <option value="37">นักวิเทศสัมพันธ์</option>
                        <option value="38">	นักวิชาการเงินและบัญชี</option>
                        <option value="39">นักวิชาการตรวจสอบภายใน</option>
                        <option value="40">นักประชาสัมพันธ์</option>
                        <option value="41">นักวิชาการเผยแพร่</option>
                        <option value="42">นักวิชาการโสตทัศนศึกษา</option>
                        <option value="43">นักวิชาการเกษตร</option>
                        <option value="44">วิศวกร</option>
                        <option value="45">บรรณารักษ์</option>
                        <option value="46">นักวิชาการศึกษา</option>
                        <option value="47">วิทยาจารย์</option>
                        <option value="48">เจ้าพนักงานธุรการ</option>
                        <option value="49">เจ้าพนักงานพัสดุ</option>
                        <option value=“50”>เจ้าพนักงานเวชสถิติ</option>
                        <option value=“51”>เจ้าพนักงานสถิติ</option>
                        <option value=“52”>เจ้าพนักงานการเงินและการบัญชี</option>
                        <option value=“53”>เจ้าพนักเผยแพร่ประชาสัมพันธ์</option>
                        <option value=“54”>เจ้าพนักงานโสดทัศนศึกษา</option>
                        <option value=“55”>เจ้าพนักงานการเกษตร</option>
                        <option value=“56”>เจ้าพนักงานทันตสาธารณสุข</option>
                        <option value=“57”>เจ้าพนักเเภสัชกรรม</option>
                        <option value=“58”>โภชนาการ</option>
                        <option value=“59”>เจ้าพนักงานรังสีการแพทย์</option>
                        <option value=“60”>เจ้าพนักงานวิทยาศาสตร์การแพทย์</option>
                        <option value=“61”>เจ้าพนักงานสาธารณสุข</option>
                        <option value=“62”>เจ้าพนักงานอาชีวบำบัด</option>
                        <option value=“63”>เจ้าพนักงานเวชกิจฉุกเฉิน</option>
                        <option value=“64”>เจ้าพนักงานการแพทย์แผนไทย</option>
                        <option value=“65”>นายช่างศิลป์</option>
                        <option value=“66”>ช่างกายอุปกรณ์</option>
                        <option value=“67”>เจ้าพนักงานเครื่องคอมพิวเตอร์</option>
                        <option value=“68”>ช่างทันตกรรม</option>
                        <option value=“69”>นายช่างเทคนิค</option>
                        <option value=“70”>นายช่างไฟฟ้า</option>
                        <option value=“71”>นายช่างโยธา</option>
                        <option value=“72”>ครูการศึกษาพิเศษ</option>
                        <option value=“73”>เจ้าพนักงานห้องสมุด</option>
                        <option value=“74”>พนักงานประจำตึก</option>
                        <option value=“75”>พนักงานเปล</option>
                        <option value=“76”>พนักงานซักฟอก</option>
                        <option value=“77”>พนักงานบริการ</option>
                        <option value=“78”>พนักงานรับโทรศัพท์</option>
                        <option value=“79”>พนักงานเกษตรพื้นฐาน</option>
                        <option value=“80”>พนักงานเรือยนต์</option>
                        <option value=“81”>พนักงานบริการเอกสารทั่วไป</option>
                        <option value=“82”>พนักงานเก็บเอกสาร</option>
                        <option value=“83”>พนักงานบริการสื่ออุปกรณ์การสอน</option>
                        <option value=“84”>พนักงานเก็บเงิน</option>
                        <option value=“85”>พนักงานโสตทัศนศึกษา</option>
                        <option value=“86”>พนักงานผลิตน้ำประปา</option>
                        <option value=“87”>พนักงานการเงินและบัญชี</option>
                        <option value=“88”>พนักงานพัสดุ</option>
                        <option value=“89”>พนักงานธุรการ</option>
                        <option value=“90”>พนักงานพิมพ์</option>
                        <option value=“91”>พนักงานประเมินผล</option>
                        <option value=“92”>พนักงานการศึกษา</option>
                        <option value=“93”>พนักงานห้องสมุด</option>
                        <option value=“94”>พนักงานการศึกษา</option>
                        <option value=“95”>พนักงานสื่อสาร</option>
                        <option value=“96”>ล่ามภาษาต่างประเทศ</option>
                        <option value=“97”>ครูพี่เลี้ยง</option>
                        <option value=“98”>พี่เลี้ยง</option>
                        <option value=“99”>พนักงานช่วยพยาบาล</option>
                        <option value=“100”>พนักงานช่วยเหลือคนไข้</option>
                        <option value=“101”>ผู้ช่วยทันตแพทย์</option>
                        <option value=“102”>พนักงานเภสัชกรรม</option>
                        <option value=“103”>พนักงานประจำห้องยา</option>
                        <option value=“104”>ผู้ช่วยพนักงานสุขศึกษา</option>
                        <option value=“105”>ผู้ช่วยเจ้าหน้าที่อนามัย</option>
                        <option value=“106”>ผู้ช่วยเจ้าหน้าที่สาธารณสุข</option>
                        <option value=“107”>พนักงานการแพทย์และรังสีเทคนิค</option>
                        <option value=“108”>พนักงานจุลทัศนกร</option>
                        <option value=“109”>พนักงานประกอบอาหาร</option>
                        <option value=“110”>พนักงานห้องผ่าตัด</option>
                        <option value=“111”>พนักงานผ่าและรักษาศพ</option>
                        <option value=“112”>พนักงานบัตรรายงานโรค</option>
                        <option value=“113”>พนักงานปฏิบัติการทดลองพาหะนำโรค</option>
                        <option value=“114”>ผู้ช่วยนักกายภาพบำบัด</option>
                        <option value=“115”>พนักงานกู้ชีพ</option>
                        <option value=“116”>พนักงานประจำห้องทดลอง</option>
                        <option value=“117”>พนักงานวิทยาศาสตร์</option>
                        <option value=“118”>พนักงานพิธีสงฆ์</option>
                        <option value=“119”>ช่างไฟฟ้าและอิเล็กทรอนิกส์</option>
                        <option value=“120”>ช่างเหล็ก</option>
                        <option value=“121”>ช่างฝีมือทั่วไป</option>
                        <option value=“122”>ช่างต่อท่อ</option>
                        <option value=“123”>ช่างศิลป์</option>
                        <option value=“124”>ช่างตัดเย็บผ้า</option>
                        <option value=“125”>ช่างตัดผม</option>
                        <option value=“126”>ช่างซ่อมเครื่องทำความเย็น</option>
                        <option value=“127”>ช่างเครื่องช่วยคนพิการ</option>
                        <option value=“128”>นักปฏิบัติการฉุกเฉินการแพทย์</option>
                        <option value=“129”>ผู้ช่วยช่างทั่วไป</option>
                    </select>
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