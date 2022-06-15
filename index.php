<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php session_start();?>
<?php
include('h.php');
?>
<style type="text/css">
#btn{
width:100%;
}

</style>

<h5>
        <span class="Apple-style-span" style="white-space: normal;"><marquee><b><span style="color: #ff6600;"><u>ระบบยืม-คืน อุปกรณ์ไอที คณะสถาปัตยกรรมศาสตร์และการผังเมือง มหาวิทยาลัยธรรมศาสตร์ ศูนย์รังสิต</u></span></b></marquee></span>
</h5>

<div class="container" style="padding-top:100px">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="background-color:#D6EAF8">
      <h3 align="center">
      <span class="glyphicon glyphicon-lock"> </span>
      กรอกข้อมูลเพื่อเข้าสู่ระบบ</h3>
      <form  name="formlogin" action="checklogin.php" method="POST" id="formlogin" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="username" class="form-control" required placeholder="Username" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="password" name="password" class="form-control" required placeholder="Password" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-success" id="btn">
            <span class="glyphicon glyphicon-log-in"> </span>
             Login </button>
               <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
               </label><br>
               <a href="#">สำหรับนักศึกษาลงทะเบียนยืมอุปกรณ์</a>
          </div>
        </div>
      </form>      
    </div>
  </div>
  <p align="center" style="margin-top: 200px"> ระบบยืม-คืนพัสดุ ครุภัณฑ์ 
  <br>
  คณะสถาปัตยกรรมศาสตร์และการผังเมือง มหาวิทยาลัยธรรมศาสตร์ 
  <br>
  V 1.0.0.1
  <br>
  พัฒนาขึ้นเพื่อใช้สำหรับยืมอุปกรณ์ต่างๆ ภายใน คณะฯ
  <br>
  <a href="https://drive.google.com/file/d/1iztjQlzS6J8fOqTSQ9YFccGTUVJ5oOB_/view?usp=sharing" target="blank">>>>>>>>> ดาวน์โหลดคู่มือการใช้งานระบบ <<<<<<< </a></p>
</div>
</body>
</html>
