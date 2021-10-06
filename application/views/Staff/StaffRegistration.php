
<?php include 'application/views/Layout/sideNavigation.php';?>

<!-------------------------------------------- Form -------------------------------------------------------->

<div class="shadow-lg p-3 mb-5 bg-white rounded">
<?php echo form_open('Register/RegisterUser'); ?>
<div class="container p-5">
  <div class="card card-registration" style="border-radius: 15px;">
    <div class="p-5 ">
      <h3 class="fw-normal mb-5" style="color: #4835d4;">Staff Registration</h3>

      <!-- <?php if ($this->session->flashdata('msg')){

          echo "<h3>".$this->session->flashdata('msg')."</h3>";
      }
      ?> -->

        <?php if ($this->uri->segment(2) == 'inserted'){

        echo '<p class="text-success"> Registered Successfully!</p>';
        }
        ?>

        <div class="row">
        <div class="col-md-8">
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" placeholder="First Name" name="fname">
                    <span class="text-danger"> <?php echo form_error("fname"); ?> </span>
                </div>
            </div>
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" placeholder="Last Name" name="lname">
                    <span class="text-danger"> <?php echo form_error("lname"); ?> </span>
                </div>
            </div>
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="exampleInputOccupation" class="form-label">Employee Position</label>
                    <input type="text" class="form-control" id="exampleInputOccupation" aria-describedby="Occupation" placeholder="Employee Position" name="position">
                    <span class="text-danger"> <?php echo form_error("position"); ?> </span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleInputOccupation" class="form-label">Address No</label>
                        <input type="text" class="form-control" id="exampleInputName" aria-describedby="name" placeholder="Address No" name="address">
                        <span class="text-danger"> <?php echo form_error("address"); ?> </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleInputOccupation" class="form-label">Address Line 01</label>
                        <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" placeholder="Address Line 01" name="address01">
                        <span class="text-danger"> <?php echo form_error("address01"); ?> </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleInputOccupation" class="form-label">Address Line 02</label>
                        <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" placeholder="Address Line 02" name="address02">
                        <span class="text-danger"> <?php echo form_error("address02"); ?> </span>
                    </div>
                </div>
            </div>

        </div>

            <div class="col-md-8">
                <div class="mb-4 pb-2">
                <label for="exampleInputName" class="form-label">Gender</label><br>
                        <select class="form-select" aria-label="Default select example" name="gender" >
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                </div>
                
            </div>
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="exampleInputOccupation" class="form-label">Date of Birth</label>
                    <input type="text" class="form-control" id="exampleInputOccupation" aria-describedby="Occupation" placeholder="Year/Month/Day" name="birthday">
                    <span class="text-danger"> <?php echo form_error("birthday"); ?> </span>
                </div>
            </div>
            <div class="col-md-8">
                <div class="mb-4 pb-2">
                <label for="exampleInputName" class="form-label">Marital Status</label><br>
                        <select class="form-select" aria-label="Default select example" name="marital">
                          <option value="Unmarried">Unmarried</option>
                          <option value="Married">Married</option>
                        </select>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputName" aria-describedby="Name" placeholder="email@example.com" name="email">
                    <span class="text-danger"> <?php echo form_error("email"); ?> </span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Phone No</label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" placeholder="0777 586 734" name="phoneno">
                    <span class="text-danger"> <?php echo form_error("phoneno"); ?> </span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                        <label for="exampleInputNIC" class="form-label">NIC</label>
                        <input type="text" class="form-control" id="exampleInputNIC" aria-describedby="NIC" placeholder="200019445876V" name="nic">
                        <span class="text-danger"> <?php echo form_error("nic"); ?> </span>
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-md-3">
              <div class="mb-3">
                  <label for="exampleInputName" class="form-label">Staff ID</label>
                  <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" placeholder="SP1098" name="id">
                  <span class="text-danger"> <?php echo form_error("id"); ?> </span>
              </div>
            </div>

        </div>

        <div class="align-left">
          <button type="submit" class="btn btn-primary btn-lg float-end" name="user_id">Save</button>
        </div>
</div>
</div>
</div>
</div>
<?php echo form_close(); ?>
</div>
<!------------------- form end -------------------------->


<?php include 'application/views/Layout/sideNavFooter.php';?>