<?php include 'application/views/Layout/ManagersideNavigation.php';?>
<div class="text">Manager User Profile</div>


<div class="container pt-5">
<div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card pb-5 shadow"  style="border-radius:15px">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center pt-5">
                    <img src="<?= base_url(); ?>/assets/img/manager.jpg" alt="Admin" class="rounded-circle " width="150">
                    <div class="mt-3">
                    <?php

                    if($SystemLogin->num_rows() > 0 )
                    {
                      //$row = $SystemLogin->result(); 
                      foreach($SystemLogin->result() as $row)
                      {
                    ?>
                      <h4><?php echo $row->SP_EMP_FIRSTNAME;?> <?php echo $row->SP_EMP_LASTNAME;?></h4>
                      <p class="text-secondary mb-1"><?php echo $row->SP_EMPLOYEE_ID;?></p>
                      <p class="text-muted font-size-sm"><?php echo $row->SP_EMP_EMAIL;?></p>
                      <p class="text-muted font-size-sm"><?php echo $row->SP_EMP_POSITION;?></p>
                    </div>
                  </div>
                </div>
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