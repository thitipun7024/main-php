<?php
    session_start();
    include("conn.php");

    $sqluser = "SELECT * FROM register WHERE id = '".$_SESSION['id']."'";
    $resultuser = mysqli_query($conn,$sqluser);
    $rowuser = mysqli_fetch_assoc($resultuser);

    $sql1 = "SELECT * FROM relations INNER JOIN register ON relations.user_id = register.id WHERE relation_id = '{$_GET['relation_id']}'";
    $result1 = mysqli_query($conn,$sql1);
    $row1 = mysqli_fetch_assoc($result1);

    $sql2 = "SELECT * FROM comment INNER JOIN register ON comment.user_id = register.id WHERE relation_id = '{$_GET['relation_id']}'";
    $result2 = mysqli_query($conn,$sql2);

    // $sqltest = "SELECT register.*, relations.*, comment.* FROM ((comment INNER JOIN register ON comment.userid = register.id WHERE relation_id = '{$_GET['relation_id']}')INNER JOIN relations ON comment.relation_id = relations.relation_id WHERE relation_id = '{$_GET['relation_id']}')";
    // $resulttest = mysqli_query($conn,$sqltest);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/stlye.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="icon" type="image/icon" href="./image2/asset/nursing-home.png">
    <title>DEMO</title>
</head>
<body>

    <?php
        include("header.php");
    ?>
    <p></p>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8 col-lg-7">
                <form action="">
                <div class="card border-0 shadow">
                    <div class="card-header">
                        <img src="./image2/<?php echo $row1['image']; ?>" alt="" class="rounded-circle" width="35" height="35"> &nbsp; 
                        <small><?php echo $row1['username'] ?></small> |
                        <small><?php echo $row1['create_date'] ?></small> 
                        <br>
                        <p></p>
                        <h5><?php echo $row1['title']; ?></h5>
                    </div>

                    <div class="card-body">
                        <img src="./image2/<?php echo $row1['image_r'] ?>" alt="" width="100%">
                        <p></p>
                    </div>
                </div>
            </form>

            <?php 
            $i = 1;
            while ($row2 = mysqli_fetch_assoc($result2)){
            ?>
            <p></p>
            <div class="card border-0" style="background-color: rgba(240, 248, 255, 0);">
                <div class="card-header border-0" style="background-color: rgba(240, 248, 255, 0);">
                    <img src="./image2/<?php echo $row2['image']; ?>" alt="" class="rounded-circle" width="40px" height="40px"> &nbsp;
                    <small><?php echo $row2['username'] ?></small> |
                        <small><?php echo $row2['datetime'] ?></small> 
                </div>

                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            <h5><?php echo $row2['detail']; ?></h5>
                            <?php
                            if($_SESSION['id'] == $row2['user_id']){
                            ?>
                            
                            <div class="text-end">
                                <a href="delete_comment.php?comment_id=<?php echo $row2['comment_id']; ?>" class="btn btn-danger">ลบ</a>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <p></p>

            </div>

            <?php
            $i++;
            }
            ?>

            <form action="insert_comment.php" method="post">
            <p></p>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="comment <?php echo $rowuser['username'] ?>" id="comment" name="comment">
                <!-- <a href="insert_comment.php" class="btn btn-success"><i class="bi bi-send-fill"></i></a> -->
                <button type="submit" class="btn btn-success"><i class="bi bi-send-fill"></i></button>
            </div>
            <input type="hidden" name="relation_id" id="relation_id" value="<?php echo $row1['relation_id'] ?>">
            </form>

            </div>
            </div>
            <p></p>
    </div>



    <p></p>
    <?php include("footer.php");?>

    <script src="./main.js"></script>
</body>
</html>