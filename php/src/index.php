<?php
    session_start();
    include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="icon" type="image/icon" href="./image2/admin2.png">
    <title>DEMO</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-primary py-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: #ffffff; font-weight: 500;">LOGO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php"  style="color: #ffffff;">กระดานสนทนา</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" aria-disabled="true"  style="color: #ffffff;">เเบบประเมิน</a>
          </li>
        </ul>
        <form class="d-flex align-items-center">
          <?php
        if(isset($_SESSION['id'])){
            $id = $_SESSION['id'];
            $username = $_SESSION['username'];
            $password = $_SESSION['password'];
            $sql = "SELECT * FROM login";
            $result1 = mysqli_query($conn, $sql);
            ?>
            <a class="nav-link align-items-end" href="profile.php"  style="color: #ffffff;"><?php echo $username; ?></a> <p></p> <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#myModal">LOGOUT</button>
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">LOGOUT</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    คุณจะออกจากระบบใช่หรือไม่...
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <a href="logout.php" class="btn btn-outline-danger">ยืนยัน</a>
                  </div>

                </div>
              </div>
            </div>
              <?php
                }else{
              ?>
              <a href="login.php" class="btn btn-outline-dark"  style="color: #ffffff;">LOGIN</a>
              
              <?php
          };
          ?>
        </form>
      </div>
  </div>
</nav>


<?php
  include("body_index.php");
?>
<p>&nbsp;</p>
<?php
  include("body_index_2.php");
?>
<p>&nbsp;</p>
<?php
  include("footer.php");
?>





    
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        
        <?php
        // if(isset($_SESSION['id'])){
        //     $id = $_SESSION['id'];
        //     $username = $_SESSION['username'];
        //     $password = $_SESSION['password'];
        //     $sql = "SELECT * FROM login";
        //     $result1 = mysqli_query($conn, $sql);
        //     ?>
        //     <a class="nav-link"><?php //echo $username; ?></a> <p></p> <a href="logout.php" class="btn btn-outline-danger">LOGOUT</a>
        //       <?php
        //   }else{
        //       ?>
        //       <a href="login.php" class="btn btn-outline-primary">LOGIN</a>
        //       <?php
        //   };
          ?>
      </ul>
    </div>
  </div>
</nav> -->
</body>
</html>