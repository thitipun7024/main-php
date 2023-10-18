<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="../css/stlye.css"> -->
    <link rel="icon" type="image/icon" href="./image2/admin2.png">
    <title>DEMO</title>
</head>
<body>
    <?php
    include("conn.php");
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM register WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
        <div class="container">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <form action="" method="post" enctype="multipart/form-data">
              <div class="card bg-dark text-white" style="border-radius: 1rem; top: 100px; bottom: 100px">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-2">
      
                    <h2 class="fw-bold mb-2 text-uppercase">PROFILE</h2>
                    <p class="text-white-50 mb-5"></p>
      
                    <div class="form-outline form-white mb-4">
                      <input type="text" name="username" id="username" class="form-control form-control-lg" placeholder="Username" value="<?php echo $row['username']; ?>" disabled />
                    </div>
      
                    <div class="form-outline form-white mb-4">
                      <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password" value="<?php echo $row['password']; ?>" disabled />
                    </div>

                    <div class="form-outline form-white mb-4">
                        <input type="text" name="firstname" id="firstname" class="form-control form-control-lg" placeholder="Firstname" value="<?php echo $row['firstname']; ?>" disabled/>
                      </div>

                    <div class="form-outline form-white mb-4">
                        <input type="text" name="lastname" id="lastname" class="form-control form-control-lg" placeholder="Lastname" value="<?php echo $row['lastname']; ?>" disabled />
                    </div>

                    <div class="form-outline form-white mb-4">
                        <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Email" value="<?php echo $row['email']; ?>" disabled />
                    </div>

                    <div class="form-outline form-white mb-3">
                        <?php
                        if($row != null){
                            $imageURL = 'image2/'.$row['image'];
                        ?>
                        <img src="<?php echo $imageURL ?>" alt="" width=30% height=auto/>
                        <?php
                        }else{
                        ?>
                        <p style="color: aliceblue;">ไม่มีรูปภาพ</p>
                        <?php
                        }
                        ?>
                    </div>
                        <input type="hidden" name="id" id="id" class="form-control form-control-lg" value="<?php echo $row['id'] ?>"/>

                        <a href="edit_user.php" class="btn btn-outline-primary btn-lg px-4">EDIT</a>
                    <a href="index.php" class="btn btn-outline-warning btn-lg px-4">CANCEL</a>
      
                  </div>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>


    <!-- <div class="d-flex align-items-center min-vh-100">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <form action="">
                    <div class="col-md-8 col-lg-5">
                        <div class="card justify-content-center shadow ">
                            <div class="card-body px-3">
                                
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> -->
</body>
</html>