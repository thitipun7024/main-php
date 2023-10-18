<?php
    session_start();
    include("conn.php");

    $sql2 = "SELECT * FROM relations INNER JOIN register ON relations.user_id = register.id ORDER BY relations.relation_id DESC";
    $result2 = mysqli_query($conn,$sql2);
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
    <title>Document</title>
</head>
<body>

    <?php
        include("header.php");
    ?>
    <p></p>
    <div class="container-fluid">

    <?php 
            $i = 1;
            while($row2 = mysqli_fetch_assoc($result2)){
            ?>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8 col-lg-7">
                <form action="">
                <div class="card border-0 shadow">
                    <div class="card-header">
                        <img src="./image2/<?php echo $row2['image']; ?>" alt="" class="rounded-circle" width="35" height="35"> &nbsp; 
                        <small><?php echo $row2["username"] ?></small> |
                        <small><?php echo $row2['create_date'] ?></small> 
                        <br>
                        <p></p>
                        <h5><?php echo $row2['title'] ?></h5>
                    </div>

                    <div class="card-body">
                        <img src="./image2/<?php echo $row2['image_r'] ?>" alt="" width="100%">
                        <p></p>
                       <div class="text-end">ความคิดเห็นทั้งหมด <?php echo $row2['all_comment'] ?></div>
                    </div>

                    <div class="card-footer">
                        <?php
                            if(empty($_SESSION['id'])){
                        ?>
                        <a href="login.php" class="btn btn-outline-primary border-0 text-dark"><i class="bi bi-chat-dots"></i> เเสดงความคิดเห็น</a>
                        <?php
                            }
                        ?>
                         <a href="comment.php?relation_id=<?php echo $row2['relation_id']; ?>" class="btn btn-outline-primary border-0 text-dark"><i class="bi bi-chat-dots"></i> เเสดงความคิดเห็น</a>
                    </div>

                </div>
            </form>
            </div>
            </div>
            <p></p>
        <?php
        $i++;
        }
        ?>
    </div>

    <p></p>
    <?php include("footer.php");?>

    <script src="./main.js"></script>
</body>
</html>