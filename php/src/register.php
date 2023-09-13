<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/stlye.css">
    <title>Document</title>
</head>
<body>
        <div class="container">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <form action="insert_register.php" method="post" enctype="multipart/form-data">
              <div class="card bg-dark text-white" style="border-radius: 1rem; top: 120px;">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
      
                    <h2 class="fw-bold mb-2 text-uppercase">REGISTER</h2>
                    <p class="text-white-50 mb-5"></p>
      
                    <div class="form-outline form-white mb-4">
                      <input type="text" name="username" id="username" class="form-control form-control-lg" placeholder="Username" />
                    </div>
      
                    <div class="form-outline form-white mb-4">
                      <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password" />
                    </div>

                    <div class="form-outline form-white mb-4">
                        <input type="text" name="firstname" id="firstname" class="form-control form-control-lg" placeholder="Firstname" />
                      </div>

                    <div class="form-outline form-white mb-4">
                        <input type="text" name="lastname" id="lastname" class="form-control form-control-lg" placeholder="Lastname" />
                    </div>

                    <div class="form-outline form-white mb-4">
                        <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Email" />
                    </div>

                    <div class="form-outline form-white mb-4">
                        <input type="file" name="img" id="img" class="form-control form-control-lg" placeholder="FILE"  />
                    </div>
      
                    <button class="btn btn-outline-light btn-lg px-4" type="submit">Register</button>
      
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