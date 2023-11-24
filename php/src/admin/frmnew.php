<?php
	include "../include/connect.php";
	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
	$sql ="SELECT * FROM tb_new WHERE title LIKE '%$strKeyword%' ORDER BY id_new";
	$result = mysqli_query($conn,$sql);    
	?>

<nav class="navbar-expand-lg">
	<div class="container-fluid">
		<div class="navbar-collapse">
            <div class="col-lg-auto me-lg-auto">
				<h4>จัดการข้อมูลข่าว </h4>
            </div>
			<a class="nav-link" href="index.php?option=addnew"> เพิ่มข้อมูลข่าว</a>
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
			<th scope="col">หัวข้อข่าว</th>
			<th scope="col">รายละเอียด</th>
			<th scope="col">วัน-เวลา</th>
			<th scope="col">ผู้โพส</th>
			<th scope="col" width="40">แก้ไข</th>
			<th scope="col" width="40">ลบ</th>
			</tr>
		</thead>
		<?php
        while($row=mysqli_fetch_array($result)){
        ?>
        <tbody>
            <tr>
			<th scope="row"><?php echo $row['id_new']?></th>
			<td><?php echo $row['title'];?></td>
			<td><?php echo $row['txtMessage'];?></td>
			<td><?php echo $row['datesave'];?></td>
			<td><?php echo $row['name_user'];?></td>

            <td><a href="index.php?option=editnew&id=<?=$row['id_new'];?>" type="button" class="btn btn-warning me-md-2">แก้ไข</a></td>
			<td><a href="delnew.php?id=<?=$row['id_new'];?>" onclick="return confirm ('คุณต้องการลบข้อมูลคุณ : <?=$row_user['title']?> ใช่หรือไม่ ?')" type="button" class="btn btn-danger me-md-2">ลบ</a></td>
            </tr>
		</tbody>
        <?php } ?>
		</table>