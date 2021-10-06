<?php include 'application/views/Layout/sideNavigation.php';?>
<div class="shadow-lg p-2 mb-5 bg-white rounded">
<div class="container pt-4 ">
<div class="row gutters-sm">
            <div class="col-md-3 mb-2">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?= base_url(); ?>/assets/img/manager.jpg" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3 mb-0">
                      <!-- <h4>Mohan De Silva</h4> -->
                      <?php
                    if($fetch_Userdata->num_rows() > 0 ){
                    foreach($fetch_Userdata->result() as $row)
                    {
                    ?> 
                    <div class="col-sm-12 text-secondary">
                    <h6> <?php echo $row->SP_EMP_FIRSTNAME ?><?PHP echo "   " ?><?PHP echo $row->SP_EMP_LASTNAME; ?> </h6>
                    <!-- <h6> <?php echo $row->SP_EMP_LASTNAME; ?> </h6> -->
                    </div>
                  </div>
                  
                  <?php
                  }
                  } 
                  else {
                  ?> 
                  <div colspan="2"> No Data Found. </div> 
                  <?php
                  }
                  ?>
                      <!-- <p class="text-secondary mb-1">+94 715248639</p> -->
                      <div class="mt-3 mb-0">
                      <?php
                    if($fetch_Userdata->num_rows() > 0 ){
                    foreach($fetch_Userdata->result() as $row)
                    {
                    ?> 
                    <div class="col-sm-12 text-secondary">
                    <P> <?php echo "+94 715248639" ?> </P>
                    </div>
                  </div>
                  
                  <?php
                  }
                  } 
                  else {
                  ?> 
                  <div colspan="2"> No Data Found. </div> 
                  <?php
                  }
                  ?>
                      <!-- <p class="text-muted font-size-sm">mohan.silva@gmail.com</p> -->
                      <div class="mt-3 mb-0">
                      <?php
                    if($fetch_Userdata->num_rows() > 0 ){
                    foreach($fetch_Userdata->result() as $row)
                    {
                    ?> 
                   <div class="col-sm-12 text-secondary "> 
                    <P> <?php echo $row->SP_EMP_EMAIL; ?> </P>
                    </div>
                  </div>
                  
                  <?php
                  }
                  } 
                  else {
                  ?> 
                  <div colspan="2"> No Data Found. </div> 
                  <?php
                  }
                  ?>
                      <!-- <p class="text-muted font-size-sm">Manager</p> -->
                      <div class="mt-3 mb-0">
                      <?php
                    if($fetch_Userdata->num_rows() > 0 ){
                    foreach($fetch_Userdata->result() as $row)
                    {
                    ?> 
                    <div class="col-sm-12 text-secondary">
                    <P> <?php echo $row->SP_EMP_POSITION; ?> </P>
                    </div>
                  </div>
                  
                  <?php
                  }
                  } 
                  else {
                  ?> 
                  <div colspan="2"> No Data Found. </div> 
                  <?php
                  }
                  ?>
                      <!-- <a href="<?php echo base_url('index.php/Staff/register'); ?>" class="btn btn-primary btn-active" role="button" aria-pressed="true">Edit</a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
        <div class="card col-md-8">
          <div class="card-body">
            <div class="col-md-12">
              <div class=" mb-3">
                <!-- <div class="card-body"> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">First Name</h6>
                    </div>
                    <?php
                    if($fetch_Userdata->num_rows() > 0 ){
                    foreach($fetch_Userdata->result() as $row)
                    {
                    ?> 
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row->SP_EMP_FIRSTNAME; ?>
                    </div>
                  </div>
                  <hr>
                  <?php
             }
             } 
            else {
            ?> 
            <div colspan="2"> No Data Found. </div> 
            <?php
            }
            ?>

            
              <div class=" mb-3">
                <!-- <div class="card-body"> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Last Name</h6>
                    </div>
                    <?php
                    if($fetch_Userdata->num_rows() > 0 ){
                    foreach($fetch_Userdata->result() as $row)
                    {
                    ?> 
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row->SP_EMP_LASTNAME; ?>
                    </div>
                  </div>
                  <hr>
                  <?php
             }
             } 
            else {
            ?> 
            <div colspan="2"> No Data Found. </div> 
            <?php
            }
            ?>

            
              <div class=" mb-3">
                <!-- <div class="card-body"> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Employee Position</h6>
                    </div>
                    <?php
                    if($fetch_Userdata->num_rows() > 0 ){
                    foreach($fetch_Userdata->result() as $row)
                    {
                    ?> 
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row->SP_EMP_POSITION; ?>
                    </div>
                  </div>
                  <hr>
                  <?php
             }
             } 
            else {
            ?> 
            <div colspan="2"> No Data Found. </div> 
            <?php
            }
            ?>


              <div class=" mb-3">
                <!-- <div class="card-body"> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Employee Address No</h6>
                    </div>
                    <?php
                    if($fetch_Userdata->num_rows() > 0 ){
                    foreach($fetch_Userdata->result() as $row)
                    {
                    ?> 
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row->SP_EMP_ADDRESS_NO; ?>
                    </div>
                  </div>
                  <hr>
                  <?php
             }
             } 
            else {
            ?> 
            <div colspan="2"> No Data Found. </div> 
            <?php
            }
            ?>


              <div class=" mb-3">
                <!-- <div class="card-body"> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Employee Address Line-01</h6>
                    </div>
                    <?php
                    if($fetch_Userdata->num_rows() > 0 ){
                    foreach($fetch_Userdata->result() as $row)
                    {
                    ?> 
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row->SP_EMP_ADDRESS_LINE01; ?>
                    </div>
                  </div>
                  <hr>
                  <?php
             }
             } 
            else {
            ?> 
            <div colspan="2"> No Data Found. </div> 
            <?php
            }
            ?>


              <div class=" mb-3">
                <!-- <div class="card-body"> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Employee Address Line-02</h6>
                    </div>
                    <?php
                    if($fetch_Userdata->num_rows() > 0 ){
                    foreach($fetch_Userdata->result() as $row)
                    {
                    ?> 
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row->SP_EMP_ADDRESS_LINE02; ?>
                    </div>
                  </div>
                  <hr>
                  <?php
             }
             } 
            else {
            ?> 
            <div colspan="2"> No Data Found. </div> 
            <?php
            }
            ?>


              <div class=" mb-3">
                <!-- <div class="card-body"> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Marital Status</h6>
                    </div>
                    <?php
                    if($fetch_Userdata->num_rows() > 0 ){
                    foreach($fetch_Userdata->result() as $row)
                    {
                    ?> 
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row->SP_EMP_MARITAL_STATUS; ?>
                    </div>
                  </div>
                  <hr>
                  <?php
             }
             } 
            else {
            ?> 
            <div colspan="2"> No Data Found. </div> 
            <?php
            }
            ?>


              <div class=" mb-3">
                <!-- <div class="card-body"> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <?php
                    if($fetch_Userdata->num_rows() > 0 ){
                    foreach($fetch_Userdata->result() as $row)
                    {
                    ?> 
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row->SP_EMP_GENDER; ?>
                    </div>
                  </div>
                  <hr>
                  <?php
             }
             } 
            else {
            ?> 
            <div colspan="2"> No Data Found. </div> 
            <?php
            }
            ?>


              <div class=" mb-3">
                <!-- <div class="card-body"> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Birthday</h6>
                    </div>
                    <?php
                    if($fetch_Userdata->num_rows() > 0 ){
                    foreach($fetch_Userdata->result() as $row)
                    {
                    ?> 
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row->SP_EMP_BIRTHDAY; ?>
                    </div>
                  </div>
                  <hr>
                  <?php
             }
             } 
            else {
            ?> 
            <div colspan="2"> No Data Found. </div> 
            <?php
            }
            ?>


              <div class=" mb-3">
                <!-- <div class="card-body"> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NIC</h6>
                    </div>
                    <?php
                    if($fetch_Userdata->num_rows() > 0 ){
                    foreach($fetch_Userdata->result() as $row)
                    {
                    ?> 
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row->SP_EMP_NIC; ?>
                    </div>
                  </div>
                  <hr>
                  <?php
             }
             } 
            else {
            ?> 
            <div colspan="2"> No Data Found. </div> 
            <?php
            }
            ?>

              <div class=" mb-3">
                <!-- <div class="card-body"> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <?php
                    if($fetch_Userdata->num_rows() > 0 ){
                    foreach($fetch_Userdata->result() as $row)
                    {
                    ?> 
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row->SP_EMP_EMAIL; ?>
                    </div>
                  </div>
                  <hr>
                  <?php
             }
             } 
            else {
            ?> 
            <div colspan="2"> No Data Found. </div> 
            <?php
            }
            ?>
                
          </div> 
        </div> 
         


<?php include 'application/views/Layout/sideNavFooter.php';?>