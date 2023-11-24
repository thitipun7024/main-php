<!-- <?php
    //include("conn.php");
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="./image2/admin2.png">
    <title>DEMO</title>
</head>
<body>
    
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center py-3" style="background-color: rgba(0, 0, 0, 0.2);">

          <div class="container-fluid align-items-center">
            <div class="row justify-content-between">
                <div class="col-md-12 col-lg-3 ">
                    <div class="card border-0 mt-5" style="background-color: rgba(240, 248, 255, 0);">
                        <div class="card-header border-0" style="background-color: rgba(240, 248, 255, 0);">
                            <h3 class="text-center" style="background-color: rgba(240, 248, 255, 0);">สถิติผู้เข้าชม</h3>
                        </div>

                        <div class="card-body text-center" style="font-weight: 500;">
                          <h3><?php include("counter.php"); ?></h3>
                        </div>

                    </div>
                </div>
    
                <div class="col-md-12 col-lg-3 ">
                  <div class="card border-0 mt-5" style="background-color: rgba(240, 248, 255, 0);">
                      <div class="card-header border-0" style="background-color: rgba(240, 248, 255, 0);">
                          <h3 class="text-center" style="background-color: rgba(240, 248, 255, 0);">สมาชิกทั้งหมด</h3>
                      </div>

                      <div class="card-body text-center" style="font-weight: 500;">
                        <h3><?php 
                          include("conn.php");
                          $sql = "SELECT * FROM register WHERE role = '1'";
                          $result = mysqli_query($conn, $sql);
                          $row = mysqli_num_rows($result);
                          echo $row;
                        ?></h3>
                      </div>

                  </div>
                </div>

                <div class="col-md-12 col-lg-3 ">
                  <div class="card border-0 mt-5" style="background-color: rgba(240, 248, 255, 0);">
                      <div class="card-header border-0" style="background-color: rgba(240, 248, 255, 0);">
                          <h3 class="text-center" style="background-color: rgba(240, 248, 255, 0);">สถิติผู้เข้าชม</h3>
                      </div>

                      <div class="card-body text-center" style="font-weight: 500;">
                        <h3><?php 
                          include("conn.php");
                          $sql2 = "SELECT * FROM relations";
                          $result2 = mysqli_query($conn, $sql2);
                          $row2 = mysqli_num_rows($result2);
                          echo $row2;
                        ?></h3>

                      </div>
                  </div>
                </div>

                <div class="col-md-12 col-lg-3 ">
                  <div class="card border-0 mt-5" style="background-color: rgba(240, 248, 255, 0);">
                      <div class="card-header border-0" style="background-color: rgba(240, 248, 255, 0);">
                          <h3 class="text-center" style="background-color: rgba(240, 248, 255, 0);">สถิติผู้เข้าชม</h3>
                      </div>
                  </div>
                </div>
    
            </div>
        </div>
          <p></p>
          © 2020 Copyright:
          <a class="text-dark" href="https://mdbootstrap.com/">PICC SENIOR CARE</a>
        </div>
        <!-- Copyright -->
      </footer>

</body>
</html>