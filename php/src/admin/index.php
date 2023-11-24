<?php
session_start();
ob_start();
include "../conn.php";
$option = null;
if(isset($_GET["option"])){
    $option=$_GET['option'];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PICC SENIONE CARE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style type="text/css">
      html, body { 
        height: 100%; /* ให้ html และ body สูงเต็มจอภาพไว้ก่อน */
        margin: 0;
        padding: 0;
      }
      .wrapper{
        display: block;
        min-height:100%;
        height: auto !important;
        height: 100%;
        margin-bottom: 20px; /* กำหนด margin-bottom ให้ติดลบเท่ากับความสูงของ footer */
      }
      .header{
        display: block;
        height:70px;
      }
      .content{
        margin-top: 20px;
        display: block;
        top: 0px;
        left: 0px;
        bottom: 0px;
      }
      .footer {
        height: 20px; /* ความสูงของ footer */
        bottom: 0;
        width: 100%;
        text-align: center;
      }
    </style>
</head>
<body>
  <div class="wrapper">
  <div class="header"><?php require_once 'header.php';?></div>
  <div class="content">
  <?php 
    if($option=='login'){
      require_once 'frmlogin.php';
    }else if($option=='user'){
      require_once 'frmalluser.php';
    }else if($option=='register'){
      require_once 'frmregister.php';
    }else if($option=='edituser'){
      require_once 'frmedituser.php';
    }else if($option=='new'){
      require_once 'frmnew.php';
    }else if($option=='addnew'){
      require_once 'frmaddnew.php';
    }else if($option=='editnew'){
      require_once 'frmeditnew.php';
    }else if($option=='hospital'){
      require_once 'frmhospital.php';
    }else if($option=='addhospital'){
      require_once 'frmaddhospital.php';
    }else if($option=='edithospital'){
      require_once 'frmedithospital.php';
    }else if($option=='doctor'){
      require_once 'frmdoctor.php';
    }else if($option=='adddoctor'){
      require_once 'frmadddoctor.php';
    }else if($option=='editdoctor'){
      require_once 'frmeditdoctor.php';
    }else if($option=='meet'){
      require_once 'frmmeet.php';
    }else if($option=='webbroad'){
      require_once 'frmwebbroad.php';
    }else if($option=='question'){
      require_once 'frmaddquestion.php';
    }else if($option=='editques'){
      require_once 'frmeditquestion.php';
    }else if($option=='report'){
      require_once 'frmreport.php';
    }else{
      require_once 'frmmain.php';
    }?>
  </div>
  </div>
<script>
function myFunction() {
  alert("กรุณาลงชื่อใช้เข้าสู่ระบบ");
}
</script>
<script src="../include/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>