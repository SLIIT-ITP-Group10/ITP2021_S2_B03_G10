<?php include 'application/views/Layout/sideNavigation.php';?>

<?php echo form_open('Addvisitor/RegisterVisitor'); ?>
<title>
  Visitor Registration
  </title>


<br>
<div class="container pt-6">
  <div class="card card-registration" style="border-radius: 20px;  border: 3px solid  #737373;   width:95%;">
    <div class="p-4">
      <h1 class="fw-normal mb-5" style="color: #3d0099;">Visitor Registration</h1><br>
    
      <link rel="stylesheet" type="text/css" href="sweetalert.css">
    
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="validationDefault01" style="text-align:right">First Name</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="first name" name="firstname"required>
       </div>
      
       <div class="col-md-6 mb-3">
            <label for="validationDefault01">Last Name</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="last name" name="lastname"  required>
       </div>

      

            
            <div class="col-md-5">
                <div class="mb-3">
                    <label for="validationDefault01" class="form-label">Date Of Arrival</label>
                    <input type="date" class="form-control" id="validationDefault01"  aria-describedby="date" name="date" required>
                </div>
            </div>

            <div class="col-md-3" >
                <div class="mb-4">
                    <label for="validationDefault01" class="form-label">Select a time</label>
                    <input type="time" class="form-control" id="validationDefault01" aria-describedby="time" name="time" required>
                </div>
            </div>



            <div class="row mb-4">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="validationDefault01" class="form-label">Phone NO</label>
                    <input type="text" class="form-control" maxlength="10" pattern="\d{10}"  title="Please enter exactly 10 digits" name="phoneno"   placeholder=_________ required />
                 
                </div>
            </div>

            <div class="row mb-5">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="validationDefault01" class="form-label">Resident ID</label>
                    <input type="text" class="form-control" id="validationDefault01" name="residentid" placeholder="SPE_____" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-3">
                    <label for="validationDefault01" class="form-label">Visitor ID</label>
                    <input type="text" class="form-control" id="validationDefault01" name="visitorid" placeholder="SPV109___" required>
                </div>
            </div>

      
            <div class="form-group">
            <div class="form-check"><br>
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                  <label class="form-check-label" for="invalidCheck2">
                  Agree to terms and conditions
                  </label>
            </div>
            </div>

                <!-- <div class="align-left">
                    <button type="submit" class="btn btn-primary btn-lg float-end" >Add Visitor </button>  -->

                   
              <div class="align-left" id="i">
                        <input type="submit"  name="update" value="Submit" class="btn btn-primary btn-lg float-end"></a>
              </div>


</div>
</div>

<?php echo form_close (); ?>

</div>

<?php include 'application/views/Layout/sideNavFooter.php';?>
