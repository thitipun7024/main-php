<?php
	include "../include/connect.php";
	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
	$sql ="SELECT * FROM tb_question WHERE topic LIKE '%$strKeyword%' ORDER BY id_ques";
	$result = mysqli_query($conn,$sql);    
	?>

<nav class="navbar-expand-lg">
	<div class="container-fluid">
		<div class="navbar-collapse">
            <div class="col-lg-auto me-lg-auto">
				<h4>จัดการข้อมูลกระดานบอร์ด </h4>
            </div>
            <a class="nav-link" href="index.php?option=question"> ตั้งกระทู้</a>
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
			<th scope="col">หัวข้อกระทู้</th>
			<th scope="col">รายละเอียด</th>
			<th scope="col">ผู้ตั้งกระทู้</th>
			<th scope="col" width="40">แก้ไข</th>
			<th scope="col" width="40">ลบ</th>
		</tr>
		</thead>
		<?php
        while($row=mysqli_fetch_array($result)){
        ?>
        <tbody>
            <tr>
			<th scope="row"><?php echo $row['id_ques']?></th>
			<td><?php echo $row['topic'];?></td>
			<td><?php echo $row['detail'];?></td>
			<td><?php echo $row['name_ques'];?></td>

            <td><a href="index.php?option=editques&id=<?=$row['id_ques'];?>" type="button" class="btn btn-warning me-md-2">แก้ไข</a></td>
			<td><a href="delquestion.php?id=<?=$row['id_ques'];?>" onclick="return confirm ('คุณต้องการลบข้อมูลคุณ : <?=$row['topic']?> ใช่หรือไม่ ?')" type="button" class="btn btn-danger me-md-2">ลบ</a></td>
            </tr>
		</tbody>
        <?php } ?>
		</table>