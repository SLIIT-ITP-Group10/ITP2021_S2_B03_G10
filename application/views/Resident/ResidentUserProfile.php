<?php include 'application/views/Layout/ResidentsideNavigation.php';?>

<div class="text">User Profile</div>


<div class="container pt-5">
<div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card pb-5 shadow"  style="border-radius:15px">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center pt-5">
                    <img src="<?= base_url(); ?>/assets/img/emilyz.jpg" alt="Admin" class="rounded-circle " width="150">
                    <div class="mt-3">
                    <?php

                    if($SystemLogin->num_rows() > 0 )
                    {
                      //$row = $SystemLogin->result(); 
                      foreach($SystemLogin->result() as $row)
                      {
                    ?>
                      <h4><?php echo $row->SP_RESIDENT_FIRSTNAME;?> <?php echo $row->SP_RESIDENT_LASTNAME;?></h4>
                      <p class="text-secondary mb-1"><?php echo $row->SP_RESIDENT_ID;?></p>
                      <p class="text-muted font-size-sm"><?php echo $row->SP_RESIDENT_EMAIL;?></p>
                      <p class="text-muted font-size-sm">Resident</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3 shadow pb-3 p-5" style="border-radius:15px">
                <div class="card-body">
                  <div class="row pb-4 pt-5">
                    <div class="col-sm-3">
                      <h6 class="mb-0">First Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row->SP_RESIDENT_FIRSTNAME;?>
                    </div>
                  </div>


                  <div class="row pb-4">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Last Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row->SP_RESIDENT_LASTNAME;?>
                    </div>
                  </div>
                  

                  <div class="row pb-4">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Occupation</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row->SP_RESIDENT_OCCUPATION;?>
                    </div>
                  </div>
                  


                  <div class="row pb-4">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NIC</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row->	SP_RESIDENT_NIC;?>
                    </div>
                  </div>
                  


                  <div class="row pb-4">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Birthday</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row->SP_RESIDENT_BIRTHDAY;?>
                    </div>
                  </div>
                  


                  <div class="row pb-4">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Marital Status</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row->	SP_RESIDENT_MARITAL_STATUS;?>
                    </div>
                  </div>
                  <?php
                  }
                  }
                  else
                  {
                    echo "<h4>No Data to Display</h4>";
                  }   
                  ?>
                  <div class="row pb-3">
                    <div class="col-sm-12">
                      <a class="btn btn-primary float-end px-4" style="border-radius:20px;" target="" href="">Update</a>
                    </div>
                  </div>
                </div>
              </div>
<?php include 'application/views/Layout/sideNavFooter.php';?>