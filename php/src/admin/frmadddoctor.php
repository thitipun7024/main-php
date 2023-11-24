<center>
<form name="doctor" action="insertdoctor.php" method="post" enctype="multipart/form-data">
    <table border="0" width="550">
        <tr>
            <td colspan="2" class="text-info fs-1" align= "center">เพิ่มข้อมูลหมอ</td>
        </tr>
        <tr>
            <td>ชื่อหมอ : </td>
            <td><input type="text" class="form-control" name="namedoctor"></td>
        </tr>
        <tr>
            <td>รายละเอียด : </td>
            <td>
                <textarea name="Detail" class="form-control" rows="4" cols="50"></textarea>
            </td>
        </tr>
        <tr>
            <td>เบอร์โทรศัพท์ : </td>
            <td>
            <input type="text" class="form-control" name="Phone" maxlength="10" pattern="^0([8|9|6])([0-9]{8}$)">
            </td>
        </tr>
        <tr>
            <td>รูปภาพ : </td>
            <td>
            <input type="file" name="filename">
            </td>
        </tr>
        <tr>
            <td>สังกัดโรงพยาบาล : </td>
            <td>
                <select name="id_hospital">
                <?php
                include "../include/connect.php";
                $sql ="SELECT * FROM tb_hospital";
	            $result = mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result)){
                ?>
                    <option value="<?php echo $row['id_hospital'];?>"><?php echo $row['name_hospital'];?></option>
                <?php } ?>
                </select>
            </td>
        </tr>
        <tr height="70">
            <td colspan="2" align= "center">
                <button class="btn btn-primary" type="sumbit" name="btnSubmit">ตกลง</button>
                <button class="btn btn-danger" type="reset" name="btnSubmit">ยกเลิก</button>
            </td>
        </tr>
    </table>
</form>
</center>