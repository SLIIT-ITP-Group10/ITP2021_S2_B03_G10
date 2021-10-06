<?php include 'application/views/Layout/ManagersideNavigation.php';?>

<!-------------------------------------------- Form -------------------------------------------------------->
<?php echo form_open('Committee/Add_CommitteeMember'); ?>
<div class="container pt-5">
  <div class="card card-registration shadow" style="border-radius: 15px; opacity:0.9">
    <div class="p-5">
      <h3 class="fw-normal mb-5" style="color: #4835d4;">Add Committee Fee</h3>

        <div class="row">

            <div class="col-md-3">
              <div class="mb-3">
                  <label for="exampleInputResidentID" class="form-label">Resident ID</label>
                  <input type="text" class="form-control" id="exampleInputResidentID" placeholder="SPE10900" name="resid">
                  <span class="text-danger"><?php echo form_error("resid");?></span>
              </div>
            </div>

            <div class="col-md-3">
            <div class="mb-4 pb-2">
                <label for="exampleInputName" class="form-label">Position of the Committe</label><br>
                        <select class="form-select" aria-label="Default select example" name="position">
                          <option value="President">President</option>
                          <option value="Secretary">Secretary</option>
                          <option value="Member">Member</option>
                        </select>
                        <span class="text-danger"><?php echo form_error("position");?></span>
            </div>
            </div>

            <div class="col-md-3">
            <div class="mb-4 pb-2">
            <label for="exampleApartmentAddress" class="form-label">Joined Date</label>
                  <input type="date" class="form-control" id="exampleInputApartmentAddress"  name="joineddate">
                  <span class="text-danger"><?php echo form_error("joineddate");?></span>
            </div>
            </div>


        </div>

        <div class="row mb-5">
        <div class="align-left">
          <button type="submit" class="btn btn-primary btn-lg float-end" onclick="Calamount()">Add</button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo form_close(); ?>

<!------------------------------------------------------- Form End ------------------------------------------------------------------>

</section>

<script>
 function Calamount(){
   var size = document.getElementById("size").value;
   var rate = document.getElementById("rate").value;
   var month = document.getElementById("month").value;
   var sixmonth = document.getElementById("sixmonth").value;

   var size1 = parseFloat(size);
   var rate1 = parseFloat(rate);
   

   var monthamount = rate1 * size1;

   document.getElementById("month").value = monthamount;
   document.getElementById("sixmonth").value = monthamount*6;

 }
</script>

<?php include 'application/views/Layout/sideNavFooter.php';?>