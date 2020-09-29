<html>

<!-- bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- End bootstrap -->

<head>
<title> Software Engineering </title>
</head>
<body>
<br><br><br><br><br><br><br><br>
<div class="container mt-3">
<form class="border border p-5" action="./Ekhee" method="POST">

<div class="container-fluid mt-5">
<center><div class="row">
<div class="col"><br><br><br>
<h4><strong>แบบฟอร์มลงทะเบียนข้อมูลศิษย์เก่าสาขาวิศวกรรมซอฟต์แวร์<br>มหาลัยราชภัฏนครปฐม</strong></h4>
</div>
<div class="col-3">
<!-- <img src="img/img.png" width="150" height="180">
<input type="file" name="Img"> -->
</div>
<center>
</div>
</div>

<h4>1.ข้อมูลส่วนตัว</h4>
<div class="row">
    <div class="col-2">
    <select class="form-control" id="inputPrefix" name="Prefix">
        <option> นาย </option>
        <option> นาง </option>
        <option> นางสาว </option>
    </select>
    </div>
    <div class="col-1">
    <label class="form-label ml-3">ชื่อ</label>
    </div>
    <div class="col-4">
        <input type="text" class="form-control" name="Fname" value="<?php echo $d1["F_name"];?>" readonly>
    </div>
    <div class="col-1">
    <label class="form-label">นามสกุล</label>
    </div>
    <div class="col-4">
        <input type="text" class="form-control" name="Lname" value="<?php echo $d1["L_name"];?>" readonly>
    </div>
</div>
<div class="row mt-3">
    <div class="col-1">
        <label class="form-label ml-3">เพศ</label>
    </div>
    <div class="col-2">
    <select class="form-control" id="inputMonth" name="Sex" value="<?php echo $d1["Sex"];?>" readonly>
        <option> ชาย </option>
        <option> หญิง </option>
    </select>
    </div>
    <div class="col-2">
    <label class="form-label ml-4">วัน/เดือน/ปีเกิด</label>
    </div>
    <div class="col-2">
        <input type="text" class="form-control" name="Dateofbirth" value="<?php echo $d1["Date_of_birth"];?>" readonly>
    </div>
    <div class="col-2">
    <label class="form-label ml-4">รหัสนักศึกษา</label>
    </div>
    <div class="col-3">
        <input type="text" class="form-control" name="Studentcode" value="<?php echo $d1["Studentcode"];?>" readonly>
    </div>
</div>
<div class="form-group mt-4 ml-3">
    <label>ที่อยู่ปัจจุบัน</label>
    <div class="row mt-3">
        <div class="col-2">
            <label class="form-label ml-5">บ้านเลขที่</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Housenumber" value="<?php echo $d1["House_number"];?>" readonly>
        </div>
        <div class="col-1">
            <label class="form-label ml-3">หมู่</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Swine" value="<?php echo $d1["Swine"];?>" readonly>
        </div>
        <div class="col-1">
            <label class="form-label ml-2">ตำบล</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="District" value="<?php echo $d1["District"];?>" readonly>
        </div>
    </div>
</div>
<div class="form-group mt-4 ml-3">
    <div class="row mt-3">
        <div class="col-2">
            <label class="form-label ml-5">อำเภอ</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Canton" value="<?php echo $d1["Canton"];?>" readonly>
        </div>
        <div class="col-1">
            <label class="form-label ml-2">จังหวัด</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Province" value="<?php echo $d1["Province"];?>" readonly>
        </div>
        <div class="col-2">
            <label class="form-label ml-4">รหัสไปษณีย์</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Postalcode" value="<?php echo $d1["Postal_code"];?>" readonly>
        </div>
    </div>
</div>
<div class="form-group mt-4 ml-3">
    <div class="row mt-3">
        <div class="col-2">
            <label class="form-label ml-5">เบอร์โทรศัพท์</label>
        </div>
        <div class="col">
            <input type="number" class="form-control" name="Phone" value="<?php echo $d1["Phone"];?>" readonly>
        </div>
        <div class="col-1">
            <label class="form-label ml-3">Email</label>
        </div>
        <div class="col">
            <input type="email" class="form-control" name="Email" value="<?php echo $d1["Email"];?>" readonly>
        </div>
    </div>
</div>
 </form>
</div>
</body>
</html>