<?php include 'application/views/Layout/ManagersideNavigation.php';?>

<!-------------------------------------------- Form -------------------------------------------------------->
<?php echo form_open('RegisterUser/RegisterResident'); ?>
<div class="container p-5">
  <div class="card card-registration shadow" style="border-radius: 15px; opacity:0.9">
    <div class="p-5">
      <h3 class="fw-normal mb-5" style="color:black;">Resident Registration</h3>
        <div class="row">
            <div class="col-md-2">
                <div class="mb-4 pb-2">
                <label for="exampleInputM" class="form-label">Mrs./Mr./Miss.</label><br>
                        <select class="form-select" aria-label="Default select example" name="mr" required>
                          <option value="">Mrs./Mr./Miss.</option>
                          <option value="Mrs">Mrs.</option>
                          <option value="Mr.">Mr.</option>
                          <option value="Miss.">Miss.</option>
                        </select>
                        <span class="text-danger"><?php echo form_error("mr");?></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="exampleInputFirstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="FirstName" name="firstname" required>
                    <span class="text-danger"><?php echo form_error("firstname");?></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="exampleInputLastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="LastName" name="lastname" required>
                    <span class="text-danger"><?php echo form_error("lastname");?></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="exampleInputOccupation" class="form-label">Occupation</label>
                    <input type="text" class="form-control" id="Occupation" name="occupation" required>
                    <span class="text-danger"><?php echo form_error("occupation");?></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="exampleInputDOB" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="exampleInputDOB" name="dob" placeholder="Year/Month/Day" required>
                    <span class="text-danger"><?php echo form_error("dob");?></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-4 pb-2">
                <label for="exampleInputGender" class="form-label">Gender</label><br>
                        <select class="form-select" aria-label="Default select example" name="gender" required>
                        <option value="">Select Your Gender</option>  
                        <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                        <span class="text-danger"><?php echo form_error("gender");?></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-4 pb-2">
                <label for="exampleInputMaritalStatus" class="form-label">Marital Status</label><br>
                        <select class="form-select" aria-label="Default select example" name="status" required>
                        <option value="">Select Your Marital Status</option>  
                        <option value="Single">Single</option>
                          <option value="Married">Married</option>
                        </select>
                        <span class="text-danger"><?php echo form_error("status");?></span>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="exampleEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail" placeholder="email@example.com" name="email" required>
                    <span class="text-danger"><?php echo form_error("email");?></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Phone No</label>
                    <input type="tel" id="phone" placeholder="123-4588-678" pattern="[0-9]{3}-[0-9]{4}-[0-9]{3}"  class="form-control" id="exampleInputName" aria-describedby="Name" name="phoneno" required>
                    <span class="text-danger"><?php echo form_error("phoneno");?></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                        <label for="exampleInputNIC" class="form-label">NIC</label>
                        <input type="text" class="form-control" id="exampleInputNIC" aria-describedby="NIC" placeholder="200019445876" name="nic" required>
                        <span class="text-danger"><?php echo form_error("nic");?></span>
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-md-3">
              <div class="mb-3">
                  <label for="exampleInputResidentID" class="form-label">Resident ID</label>
                  <input type="text" class="form-control" id="exampleInputResidentID" placeholder="SPE10900" name="residentid" required>
                  <span class="text-danger"><?php echo form_error("residentid");?></span>
              </div>
            </div>

            <div class="col-md-3">

            <div class="mb-4 pb-2">
                <label for="exampleInputName" class="form-label">Apartment ID</label><br>
                        <select class="form-select" aria-label="Default select example" name="apartmentid" required>
                        <option value="">Select Apartment ID</option>
                        <?php 
                        foreach($apartmentid->result() as $row)
                        {
                          echo '<option value="'.$row->SP_APARTMENT_ID.'">'.$row->SP_APARTMENT_ID.'</option>';
                        }
                        ?>  
                        </select>
                        <span class="text-danger"><?php echo form_error("apartmentid");?></span>
            </div>
            </div>

        </div>

        <div class="row mb-5">

        <div class="align-left">
          <button type="submit" class="btn btn-primary btn-lg float-end">Register</button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo form_close(); ?>

<!------------------------------------------------------- Form End ------------------------------------------------------------------>
</section>
<?php include 'application/views/Layout/sideNavFooter.php';?>