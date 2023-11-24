<?php
	include "../conn.php";
    if(isset($_SESSION["ID"])){
        $sql ="SELECT * FROM tb_user WHERE id_user='".$_SESSION["ID"]."'";
	    $result = mysqli_query($conn,$sql);
	    $dbarr = mysqli_fetch_array($result);
    }
?>

<header class="border-bottom bg-light">
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand text-info" href="#">PICCCARE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link text-primary" aria-current="page" href="index.php">หน้าแรก</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-primary" aria-current="page" href="index.php?option=user">ข้อมูลสมาชิก</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-primary" aria-current="page" href="index.php?option=new">ข่าวประชาสัมพันธ์</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-primary" aria-current="page" href="index.php?option=hospital">ข้อมูลโรงพยาบาล</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-primary" aria-current="page" href="index.php?option=doctor">ข้อมูลหมอ</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-primary" aria-current="page" href="index.php?option=meet">ข้อมูลตารางนัดหมาย</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-primary" aria-current="page" href="index.php?option=webbroad">กระดานบอร์ด</a>
                </li>
                </li>
                <li class="nav-item">
                <a class="nav-link text-primary" aria-current="page" href="index.php?option=report">รายงาน</a>
                </li>
            </ul>
            <span class="navbar-text">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php
                    if(empty($_SESSION["Username"])){
                    ?>
                    <li><a class="nav-link text-primary" aria-current="page" href="index.php?option=regiter">สมัครสมาชิก</a></il>
                    <li><a class="nav-link text-primary" aria-current="page" href="index.php?option=login">เข้าสู่ระบบ</a></il>
                    <?php
                    }else if(!empty($_SESSION["Username"])){
                    ?>
                    <li><a class="nav-link text-Secondary" aria-current="page" href="#"><?php echo $dbarr['name_user'];?></a></il>
                    <li><a class="nav-link text-primary" aria-current="page" href="../logout.php">ออกจากระบบ</a></il>
                    <?php } ?>
                </ul>
            </span>
            </div>
        </div>
        </nav>
    </div>
</header>