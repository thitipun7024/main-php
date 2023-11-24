<?php
	include "../include/connect.php";
	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
	$sql ="SELECT * FROM tb_schedule WHERE name_sch LIKE '%$strKeyword%' ORDER BY id_schedule";
	$result = mysqli_query($conn,$sql);    
	?>

<nav class="navbar-expand-lg">
	<div class="container-fluid">
		<div class="navbar-collapse">
            <div class="col-lg-auto me-lg-auto">
				<h4>จัดการข้อมูลตารางนัดหมาย </h4>
            </div>
            <a class="nav-link" href="index.php?option=#"> เพิ่มข้อมูลนัดหมาย</a>
			<form class="row g-2" action="" method="post" name="frmSearch"> 
			<div class="col-auto">  	   
        		<input class="form-control" type="search" name="txtKeyword" id="txtKeyword" placeholder="Search" aria-label="Search">
            </div>
            <div class="col-auto"> 
                <button type="submit" class="btn btn-info">ค้นหา</button>
			</div>
			</form>
		</div>
	</div>
</nav>

<table class="table table-responsive table-hover" width="100%">
	<thead>
		<tr>
			<th scope="col" width="80">#</th>
			<th scope="col">วันที่</th>
			<th scope="col">ผู้ป่วย</th>
			<th scope="col">ข้อมูลนัดหมาย</th>
			<th scope="col">หมอ</th>
			<th scope="col" width="40">ประเมิน</th>
			<th scope="col" width="40">แก้ไข</th>
			<th scope="col" width="40">ลบ</th>
		</tr>
		</thead>
		<?php
        while($row=mysqli_fetch_array($result)){
        ?>
        <tbody>
            <tr>
			<th scope="row"><?php echo $row['id_schedule']?></th>
			<td><?php echo $row['date_sch'];?></td>
			<td><?php echo $row['name_sch'];?></td>
			<td><?php echo $row['service_sch'];?></td>
			<td>
				<?php
				$sqldoctor ="SELECT * FROM tb_doctor WHERE id_doctor='".$row['id_doctor']."'";
				$resultdoctor = mysqli_query($conn,$sqldoctor);
				$rowdoctor=mysqli_fetch_array($resultdoctor);
				echo $rowdoctor['name_doctor'];
				?>
			</td>
			<td>#</td>
            <td><a href="index.php?option=editschedule&id=<?=$row['id_schedule'];?>" type="button" class="btn btn-warning me-md-2">แก้ไข</a></td>
			<td><a href="delschedule.php?id=<?=$row['id_schedule'];?>" onclick="return confirm ('คุณต้องการลบข้อมูลคุณ : <?=$row['name_sch']?> ใช่หรือไม่ ?')" type="button" class="btn btn-danger me-md-2">ลบ</a></td>
            </tr>
		</tbody>
        <?php } ?>
		</table>