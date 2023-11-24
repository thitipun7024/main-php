<?php
	include "../conn.php";
	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
	$sqluser ="SELECT * FROM register WHERE usernamne LIKE '%$strKeyword%'  ORDER BY id DESC";
	$resultuser = mysqli_query($conn,$sqluser);    
	?>
		<nav class="navbar-expand-lg">
			<div class="container-fluid">
			<div class="navbar-collapse">
                <div class="col-lg-auto me-lg-auto">
					<h4>จัดการสมาชิก  </h4>
                </div>
				<a class="nav-link" href="index.php?option=register"> เพิ่มข้อมูลสมาชิก</a>
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
			<th scope="col">ชื่อ - นามสกุล</th>
			<th scope="col">เพศ</th>
			<th scope="col">ที่อยู่</th>
			<th scope="col">เบอร์โทรศัพท์</th>
			<th scope="col">สถานะ</th>
			<th scope="col" width="40">แก้ไข</th>
			<th scope="col" width="40">ลบ</th>
			</tr>
		</thead>
		<?php
        while($row_user=mysqli_fetch_array($resultuser)){
        ?>
        <tbody>
            <tr>
			<th scope="row"><?php echo $row_user['id_user']?></th>
			<td><?php echo $row_user['name_user'];?></td>
			<td><?php 
            if( $row_user['sex_user'] == '1'){
                echo "ชาย";
            }else if($row_user['sex_user'] == '2'){
                echo "หญิง";
            }?></td>
			<td><?php echo $row_user['address_user'];?></td>
			<td><?php echo $row_user['phone_user'];?></td>
            <td><?php 
            if( $row_user['status_user'] == '0'){
                echo "ยังไม่ได้อนุมัติ";
            }else if($row_user['status_user'] == '1'){
                echo "อนุมัติ";
            }else if($row_user['status_user'] == '2'){
                echo "พักใช้งาน";
            }?></td>

            <td><a href="index.php?option=edituser&id=<?=$row_user['id_user'];?>" type="button" class="btn btn-warning me-md-2">แก้ไข</a></td>
			<td><a href="deluser.php?id=<?=$row_user['id_user'];?>" onclick="return confirm ('คุณต้องการลบข้อมูลคุณ : <?=$row_user['name_user']?> ใช่หรือไม่ ?')" type="button" class="btn btn-danger me-md-2">ลบ</a></td>
            </tr>
		</tbody>
        <?php } ?>
		</table>