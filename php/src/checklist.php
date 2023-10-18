<?php
   session_start();
    include("conn.php");
    if(empty($_SESSION['id'])){
        header('Location: login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="icon" type="image/icon" href="./image2/asset/nursing-home.png">
    <title>DEMO</title>
</head>
<body>

    <?php
        include("header.php");
    ?>
    
    <!-- <?php
        // $sql = "SELECT * FROM checklist ORDER BY checklist_id DESC";
        // $result = mysqli_query($conn, $sql);
        // $i = 1;
        // while($row = mysqli_fetch_assoc($result)){
    ?> -->
    <h1 class="text-center py-5">เเบบประเมิน</h1>
            <div class="py-3"></div>
    <form action="add_check_score.php" method="post">
    <div class="d-flex align-items-center min-vh-50"> 
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-11 align-items-center">
                <!-- Table -->
                <table class="table table-striped">
                    <thead class="border-0">
                        <tr>
                            <th style="width: 40%;" class="border-0"><h4>รายการประเมิน</h4></th>
                            <th class="border-0">มากที่สุด</th>
                            <th class="border-0" style="width: 13%;">มาก</th>
                            <th class="border-0">ปานกลาง</th>
                            <th class="border-0" style="width: 13%;">น้อย</th>
                            <th class="border-0">น้อยมาก</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php
                        $sql = "SELECT * FROM checklist ORDER BY checklist_id ASC";
                        $result = mysqli_query($conn, $sql);
                        $i = 1;
                        while($row = mysqli_fetch_assoc($result)){
                    ?>

                            <tr>
                                <td><?php echo $row['checklist']; ?></td>
                                <td><input type="radio" class="form-check-input" name="radio<?php echo $row['checklist_id']; ?>" id="radio<?php echo $i; ?>_1" value="5"></td>
                                <td><input type="radio" class="form-check-input" name="radio<?php echo $row['checklist_id']; ?>" id="radio<?php echo $i; ?>_2" value="4"></td>
                                <td><input type="radio" class="form-check-input" name="radio<?php echo $row['checklist_id']; ?>" id="radio<?php echo $i; ?>_3" value="3"></td>
                                <td><input type="radio" class="form-check-input" name="radio<?php echo $row['checklist_id']; ?>" id="radio<?php echo $i; ?>_4" value="2"></td>
                                <td><input type="radio" class="form-check-input" name="radio<?php echo $row['checklist_id']; ?>" id="radio<?php echo $i; ?>_5" value="1"></td>
                            </tr>

                    <?php
                        $i++;
                        }
                    ?>
                    </tbody>

                    <tfoot class="border-0">
                        <td colspan="6" class="text-end border-0"><button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#myModal4">ส่งเเบบประเมิน</button></td>

                    </tfoot>

                 </table>
                </div>
            </div>
        </div>
    </div>
</form>

    <!-- <?php
        // $i++;
        // }
    ?> -->
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

        <div class="modal fade" id="myModal4">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">


                    <div class="modal-header">
                        <h4 class="modal-title" style="color: rgb(3, 76, 8);">ยืนยันการส่งเเบบประเมิน</h4>
                        <button class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-footer">
                        <a class="btn btn-outline-success" href="add_check_score.php">ยืนยัน</a>
                    </div>

                </div>
            </div>
        </div>

<div class=""></div>
    <?php
        include("footer.php");
    ?>
</body>
</html>