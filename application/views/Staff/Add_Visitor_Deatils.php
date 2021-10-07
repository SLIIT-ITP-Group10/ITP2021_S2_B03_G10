<?php include 'application/views/Layout/sideNavigation.php';?>

<?php echo validation_errors(); ?>
<?php echo form_open('Visitor_Vehicle_Add/VisitorVehicle'); ?>  
<br>
<br>

    <h4> <p class="text-center"style="color: #4835d4;">Visitor Vehicle!</p></h4><br>
    <h3> <p class="text-center"style="color: #4835d4;">Add Visitor Vehicle Details</p></h3>
    <div class="container pt-5">

<div class="containet p-4">
<div class="card card-registration" style="border-radius:15px; border-color:black;">
<div class="containet p-4">
    <img src="<?= base_url(); ?>/assets/img/Car_vector2.png" class="rounded mx-auto d-block" height="100" width="100">
      <div class="row">
        <div class="col-md-10">
                <div class="mb-3">
                    
                    <label for="exampleInputName" class="form-label"><b>Visitor Vehicle Reg Number</b></label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" name="VVReg">
                </div>
            </div>
            <br>
            <div class="col-md-10">
                <div class="mb-3">
                    
                    <label for="exampleInputName" class="form-label"><b>Visitor ID</b></label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" name="VID">
                </div>
            </div>
            <div class="col-md-10">
                <div class="mb-1">
                    <label for="exampleInputName" class="form-label"><b>Slot Number</b> </label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" name="Snum">
                </div>
            </div>
            <div class="col-md-10">
                <div class="mb-1">
                    <label for="exampleInputName" class="form-label"><b>Vehicle Type</b></label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" name="vtype">
                </div>
            </div>
           
            <div class="col-md-10">
                <div class="mb-1">
                    <label for="exampleInputOccupation" class="form-label"><b>Vehcile Color</b></label>
                    <input type="text" class="form-control" id="exampleInputOccupation" aria-describedby="Occupation" name="vcolor">
                </div>
            </div> 
            <div class="col-md-10">
                <div class="mb-1">
                    <label for="exampleInputOccupation" class="form-label"><b>Owner Type</b></label>
                    <input type="text" class="form-control" id="exampleInputOccupation" aria-describedby="Occupation" name="otype">
                </div>
            </div> 
               <br><br>
            <div class="text-center">
                <br>
          <button type="submit" class="btn btn-primary btn-sm ">Insert Vehicle</button>
          <a href="<?php echo base_url('index.php/Welcome/show'); ?>" class="btn btn-primary btn-sm" type="submit"name="searchBtn" >Vehicle Details</a>
   </div>
   </div>
   </div>
   </div>
   </div>

<?php echo form_close();?>
<?php include 'application/views/Layout/sideNavFooter.php';?>