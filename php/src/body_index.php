<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="./image2/admin2.png">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <title>DEMO</title>
</head>
<body>
    <div class="container align-items-center">
        <div class="row justify-content-between">
            <div class="col-md-12 col-lg-5 ">
                <div class="card border-5 shadow mt-5" style="border-color: #C0C0C0; border-radius: 20px;">
                    <div class="card-header border-0">
                        <h1 class="text-center">Ordinary</h1>
                    </div>
                    <img src="../src/image2/asset/Hospital wheelchair-amico.png" alt="card_img1" class="card-img" style="width: 100%;">
                    <div class="card-footer border-0 text-end bg-white" style="border-radius: 20px;">
                        <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#myModal2">BUY</button>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-5 ">
                <div class="card border-5 shadow mt-5" style="border-color: #FFD700; border-radius: 20px;">
                    <div class="card-header border-0">
                        <h1 class="text-center">Premium</h1>
                    </div>
                    <img src="../src/image2/asset/Vaccine development-pana.png" alt="card_img2" class="card-img" style="width: 100%;">
                    <div class="card-footer border-0 text-end bg-white" style="border-radius: 20px;">
                        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal3">BUY</button>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- payment Ordinary -->
    <?php
        include("conn.php");
        if(empty($_SESSION['id'])){
            ?>
             <div class="modal fade" id="myModal2">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">กรุณาเข้าสู่ระบบ</h4>
                    <button class="btn-close" data-bs-dismiss="modal" type="button"></button>
                </div>

                <div class="modal-footer">
                    <a href="login.php" class="btn btn-outline-primary">login</a> 
                </div>

            </div>
        </div>
    </div>
            <?php
        }else{
    ?>
    <div class="modal fade" id="myModal2">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Payment method</h4>
                    <button class="btn-close" data-bs-dismiss="modal" type="button"></button>
                </div>

                <div class="modal-body">
                    <?php
                        // include("conn.php");
                        $sql = "SELECT email FROM register WHERE id = '".$_SESSION["id"]."'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);
                    ?>
                    <h4 class="text-start">Your email</h4>
                    <div class="row">
                        <div>
                        <input type="text" class="form-control" value="<?php echo $row['email']; ?>" disabled>
                        </div>
                    </div>

                    <p>&nbsp;</p>

                    <h4 class="text-start">Card infomation</h4>
                    <div class="row">
                        <div>
                        <input type="text" class="form-control" placeholder="xxxx-xxxx-xxxx-xxxx" name="card-number" id="credit-card" value="" onkeyup="formatCreditCard()">
                        </div>
                    
                        <div class="col-md-8 col-lg-6 py-1">
                            <input type="text" class="form-control" placeholder="MM / YY">
                        </div>
    
                        <div class="col-md-8 col-lg-6 py-1">
                            <input type="text" class="form-control" placeholder="CVC">
                        </div>
                    </div>

                    <p>&nbsp;</p>

                    <h4 class="text-start">Name on card</h4>
                    <div class="row">
                        <div>
                        <input type="text" class="form-control">
                        </div>
                    </div>

                    <p>&nbsp;</p>

                    <h4 class="text-start">Billing address</h4>
                    <div class="row">
                        <div>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <a href="#" class="btn btn-outline-info">Subscribe</a> 
                </div>

            </div>
        </div>
    </div>
<!-- payment Ordinary -->
<?php }

    ?>

<!-- payment Premium -->
    <div class="modal fade" id="myModal3">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Payment method</h4>
                    <button class="btn-close" data-bs-dismiss="modal" type="button"></button>
                </div>

                <div class="modal-body">
                    <?php
                        include("conn.php");
                        $sql = "SELECT email FROM register WHERE id = '".$_SESSION["id"]."'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);
                    ?>
                    <h4 class="text-start">Your email</h4>
                    <div class="row">
                        <div>
                        <input type="text" class="form-control" value="<?php echo $row['email']; ?>" disabled>
                        </div>
                    </div>

                    <p>&nbsp;</p>

                    <h4 class="text-start">Card infomation</h4>
                    <div class="row">
                        <div>
                        <input type="text" class="form-control" placeholder="1234 1234 1234 1234">
                        </div>
                    
                        <div class="col-md-8 col-lg-6 py-1">
                            <input type="text" class="form-control" placeholder="MM / YY">
                        </div>
    
                        <div class="col-md-8 col-lg-6 py-1">
                            <input type="text" class="form-control" placeholder="CVC">
                        </div>
                    </div>

                    <p>&nbsp;</p>

                    <h4 class="text-start">Name on card</h4>
                    <div class="row">
                        <div>
                        <input type="text" class="form-control">
                        </div>
                    </div>

                    <p>&nbsp;</p>

                    <h4 class="text-start">Billing address</h4>
                    <div class="row">
                        <div>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <a href="#" class="btn btn-outline-info">Subscribe</a> 
                </div>

            </div>
        </div>
    </div>
<!-- payment Premium -->

</body>
</html>