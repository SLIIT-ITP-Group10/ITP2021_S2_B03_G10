<?php include 'application/views/Layout/ManagersideNavigation.php';?>
<div class="text"style="color: #4835d4;">Resident Details</div>
      <div class="float-end  p-5">
        <a href="<?php echo site_url('Welcome/loadResidentRegister') ?>" class="btn btn-primary bx bx-plus p-2" alt="Add User"></a>
      </div>
      <div class="p-5">
      <table class="table table-hover table-responsive shadow w-100 mx-auto" style="border-radius:5px; opacity: 0.9; background-color:#FFFFFF; font-size:14px">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Resident ID</th>
                <th scope="col">Mrs/Mr/Miss</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Occupation</th>
                <th scope="col">Marital Status</th>
                <th scope="col">Gender</th>
                <th scope="col">Birthday</th>
                <th scope="col">Email</th>
                <th scope="col">NIC</th>
                <th scope="col">Registered Time</th>                
              </tr>
            </thead>
            <tbody>

              <?php

              if($fetch_ResidentData->num_rows() > 0 )
              {
                  foreach($fetch_ResidentData->result() as $row)
                  {
              ?>
                  <tr>
                      <th scope="row"><?php echo $row->SP_RESIDENT_ID?></th>
                      <td><?php echo $row->SP_RESIDENT_Mrs_Mr?></td>            
                      <td><?php echo $row->SP_RESIDENT_FIRSTNAME?></td>
                      <td><?php echo $row->SP_RESIDENT_LASTNAME?></td>
                      <td><?php echo $row->SP_RESIDENT_OCCUPATION?></td>
                      <td><?php echo $row->SP_RESIDENT_MARITAL_STATUS?></td>
                      <td><?php echo $row->SP_RESIDENT_GENDER?></td>
                      <td><?php echo $row->SP_RESIDENT_BIRTHDAY?></td>
                      <td><?php echo $row->SP_RESIDENT_EMAIL?></td>
                      <td><?php echo $row->SP_RESIDENT_NIC?></td>
                      <td><?php echo $row->SP_RESIDENT_CREATED_DATETIME	?></td>
                  </tr>

              <?php
                  }
              }
              else
              {
              ?>
                  <tr>
                      <td colspan="3">No Data to Display</td>
                  </tr>
              <?php
              }    
              ?>
            </tbody>
</table>
</div>
<?php include 'application/views/Layout/sideNavFooter.php';?>
