<?php include 'application/views/Layout/sideNavigation.php';?>

<?php echo validation_errors(); ?>
<?php echo form_open('Add_Resident_Vehicle_Details/ResidentUser'); ?>   

<div class="container p-5">
  <div class="card card-registration" style="border-radius: 15px; border-color:black;">
    <div class="p-5">
    <h3> <p class="text-center"style="color: #4835d4;">Add / Update Resident Vehicle Details</p></h3>
      
    <img src="<?= base_url(); ?>/assets/img/CAR_VECTOR.png" class="rounded mx-auto d-block" height="200" width="200">
    
    <div class="row">
    <div class="col-md-8">
                <div class="mb-3">
                    
                    <label for="validationDefault01" class="form-label"><b>Resident ID</b></label>
                    <input type="text" class="form-control"  id="validationDefault01"  aria-describedby="Name" name="resID"  required>
                </div>
            </div>
         
        <div class="col-md-8">
                <div class="mb-3">
                       
                    <label for="validationDefault01"class="form-label"><b>Resident Vehicle Reg Number</b></label>
                    <input type="text" class="form-control"  id="validationDefault01" aria-describedby="Name" name="regnumber"  required>
                </div>
            </div>
            <br>
        
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="validationDefault01" class="form-label"><b>Slot Number</b></label>
                    <input type="text" class="form-control"  id="validationDefault01" aria-describedby="Name" name="snumber"  required>
                </div>
            </div>
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="validationDefault01" class="form-label"><b>Vehicle Type</b></label>
                    <input type="text" class="form-control"  id="validationDefault01" aria-describedby="Name" name="vtype"  required>
                </div>
            </div>
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="validationDefault01" class="form-label"><b>Vehicle Brand</b></label>
                    <input type="text" class="form-control"  id="validationDefault01" aria-describedby="Occupation" name="vbrand"  required> 
                </div>
            </div>
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="validationDefault01" class="form-label"><b>Vehcile Color</b></label>
                    <input type="text" class="form-control"  id="validationDefault01" aria-describedby="Occupation" name="vcolor" required>
                </div> 
            </div> 
            <div class="col-md-8">
                <div class="mb-3">
                    
                    <label for="validationDefault01"class="form-label"><b>Vehicle Owner Type</b></label>
                    <input type="text" class="form-control"  id="validationDefault01" aria-describedby="Name" name="vowner" required>
                
                </div>
            </div>

        <div class="align-left">
          <button type="submit" class="btn btn-primary btn-sm rounded mx-auto d-block" >Add Vehicle</button><br>
          <button type="submit" name="update" class="btn btn-primary btn-sm rounded mx-auto d-block">Update Vehicle</button><br>
          <div class="col-md-12 text-center">
          <a href="<?php echo base_url('index.php/Welcome/Next'); ?>" class="btn btn-primary btn-sm" type="submit"name="searchBtn" >Show Vehicle Details </a>
   </div>
</div>
  </div>
 </div>
</div>

<?php echo form_close();?>
<?php include 'application/views/Layout/sideNavFooter.php';?>