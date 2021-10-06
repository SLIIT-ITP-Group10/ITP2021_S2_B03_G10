<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.css' rel='stylesheet'>

    <title>Sign Up</title>
</head>
<body style="background-color: rgba(0, 0, 0, 1);">

<div class="col-md-9 col-lg-6 col-xl-5">

<div  class="text-white" style=" padding-left:150px; font-size:60px; margin: 0;  position: absolute;  top: 50%;  -ms-transform: translateY(-50%);  transform: translateY(-50%);">
  
  <p style="font-size:60px; font-weight: bold;">Spathodea</p>
  <p style="font-size:20px;">The most luxurious apartment in Sri Lanka</p>

</div>
</div>
<div class="col-12" >
    <div class="container d-flex justify-content-end" style="margin: 0;  position: absolute;  top: 50%;  -ms-transform: translateY(-50%);  transform: translateY(-50%);">
              <div class="col-md-4 mb-3">
                        <?php echo form_open('RegisterUser/SystemSignup'); ?>
                                      <div class="card col-12 pb-5 shadow-lg bg-light"  style="border-radius:15px">
                                        <div class="card-body">
                                          <div class="d-flex flex-column align-items-center text-center pt-5">
                                            <i class="bx bx-atom text-dark bx-lg"></i>
                                            <div class="mt-3 pt-2">
                                              <h2 class="text-primary pb-4">Sign Up</h2>

                                              <div class="col-12 pt-3 pb-4">
                                              <select class="form-select" aria-label="Default select example" placeholder='Resident ID/Staff ID' name="type">
                                                <option value="RES">Resident</option>
                                                <option value="EMP">Employee</option>
                                              </select>
                                              </div>
                                              
                                              <div class="div col-10 pb-4">
                                              <input type="text" class="form-control form-control-md" name="userid" placeholder='Resident ID/Staff ID' required>     
                                              <span class="text-danger"><?php echo form_error("userid");?></span>
                                              </div>

                                              <div class="div col-10 pb-3">
                                              <input type="text" class="form-control form-control-md" name="username" placeholder="Username"required>
                                              <span class="text-danger"><?php echo form_error("username");?></span>                      
                                              </div>
                                              
                                              <div class="div col-10 pb-3">
                                              <input type="password" class="form-control form-control-md" name="password" placeholder="Password" required>
                                              <span class="text-danger"><?php echo form_error("password");?></span>
                                              </div>

                                              <div class="div pt-5 pb-2">
                                                <button type="submit" class="btn btn-primary btn-md px-5 shadow" style="border-radius:20px">Register</button>
                                              </div>

                                              <p class="small fw-bold mt-2 mb-0">Already have an account? <a href="<?= base_url(); ?>index.php/Welcome/loadLogin" class="link-danger">Login</a></p>                                        
                                              <i class="fas fa-intersection    "></i>

                                            </div>
                                          </div>
                                        </div>
                                      </div>

                        <?php echo form_close();?>
              </div>
    </div>
</div>


</div>
</body>
    
</body>
</html>