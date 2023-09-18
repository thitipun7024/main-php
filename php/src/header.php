<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/stlye.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">LOGO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" aria-disabled="true">Disabled</a>
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
            <a class="nav-link align-items-end" href="edit_user.php"><?php echo $username; ?></a> <p></p> <a href="logout.php" class="btn btn-outline-danger">LOGOUT</a>
              <?php
          }else{
              ?>
              <a href="login.php" class="btn btn-outline-primary">LOGIN</a>
              
              <?php
          };
          ?>
        </form>
      </div>
    </div>
  </nav>




<!-- <?php
 // Retrieve user-specific information from the session
//$id = $_SESSION['id'];
// $user = $_SESSION['username'];
// $pass = $_SESSION['password'];

// // Assuming you've established a database connection earlier
// // $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// // Perform a SELECT query to fetch all records from the 'login' table
// $result = mysqli_query($conn, "SELECT * FROM login");

// // You can now fetch and process the results from the query
// // For example, using a while loop to iterate through each row
// while ($row = mysqli_fetch_assoc($result)) {
//     // Process the data as needed
//     // $row contains the data for each row in the 'login' table
// }

// // Don't forget to close the database connection when you're done
// mysqli_close($conn);
    
    
?>



   <!--  <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>

            <?php
            //include("conn.php");
           // echo $_SESSION['id'];
            //if(isset($_SESSION['id'])){
              //$id = $_SESSION['id'];
              //$username = $_SESSION['username'];
              //$password = $_SESSION['password'];
              //$role = $_SESSION['role'];
             //$result = mysqli_query($conn,"SELECT username FROM login WHERE id = '$id'");
            ?>
            <div class="text-end">
                <a href="profile.php" class="nav-link active"><?php //echo $username; ?></a> | <a href="checkout.php" class=" btn btn-outline-danger"></a>
            </div>
            <?php
          //}else{
            ?>
              <div class="text-end">
               <a href="login.php" class="btn btn-outline-primary" type="submit">Login</a>
              </div> 
            <?php
          //}
            ?>

          </div>
        </div>
      </nav> --> 

      <script src="main.js"></script>
</body>
</html>