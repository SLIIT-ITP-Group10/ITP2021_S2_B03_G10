<?php include 'application/views/Layout/ManagersideNavigation.php';?>

<!-------------------------------------------- Form -------------------------------------------------------->
<?php echo form_open('Committee/insert_CommitteeFee'); ?>
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
                <label for="exampleInputName" class="form-label">Apartment ID</label><br>
                        <select class="form-select" aria-label="Default select example" name="apartmentid">
                          <option value="109001">109001</option>
                          <option value="109002">109002</option>
                          <option value="109003">109003</option>
                          <option value="109004">109004</option>
                          <option value="109005">109005</option>
                          <option value="109006">109006</option>
                          <option value="109007">109007</option>
                          <option value="109008">109008</option>
                          <option value="109009">109009</option>
                          <option value="109010">109010</option>
                          <option value="109011">109011</option>
                          <option value="109012">109012</option>
                          <option value="109013">109013</option>
                          <option value="109014">109014</option>
                          <option value="109015">109015</option>
                          <option value="109016">109016</option>
                        </select>
                        <span class="text-danger"><?php echo form_error("apartmentid");?></span>
            </div>
        </div>

        </div>

        <div class="row mb-5">

        <div class="col-md-3">

        <div class="col-mb-4 pb-2">
              <div class="mb-6">
                  <label for="exampleInputSize" class="form-label">Size(sqrt)</label>
                  <input type="number" step="any" class="form-control" id="size" name="size" placeholder="1969">
                  <span class="text-danger"><?php echo form_error("size");?></span>
              </div>
        </div>

        </div>


        <div class="col-md-3">

        <div class="col-mb-4 pb-2">
              <div class="mb-6">
                  <label for="exampleInputBedrooms" class="form-label">Rate Per Sqrt</label>
                  <input type="number" step="any" class="form-control" id="rate" name="rate" placeholder="16.94">
                  <span class="text-danger"><?php echo form_error("rate");?></span>
              </div>
        </div>

        </div>

        <div class="col-md-3">

        <div class="col-mb-4 pb-2">
              <div class="mb-6">
                  <label for="exampleInputBedrooms" class="form-label">Monthly Amount</label>
                  <input type="number" step="any" class="form-control" id="month" name="month" onclick="Calamount()" placeholder="100000">
                  <span class="text-danger"><?php echo form_error("month");?></span>
              </div>
        </div>
      </div>

      <div class="col-md-3">
            <div class="mb-4 pb-2">
                  <label for="exampleInputBedrooms" class="form-label">6 Month Amount</label>
                  <input type="number" step="any" class="form-control" id="sixmonth" name="sixmonth" placeholder="100000">
                  <span class="text-danger"><?php echo form_error("sixmonth");?></span>
              </div>
        </div>

        <div class="row mb-5">

        <div class="col-md-3">
        <div class="col-mb-4 pb-2">
                <label for="exampleInputName" class="form-label">Membership Season</label><br>
                        <select class="form-select" aria-label="Default select example" onclick="Calamount()" name="season">
                          <option value="1">1</option>
                          <option value="2">2</option>
                        </select>
                        <span class="text-danger"><?php echo form_error("season");?></span>
        </div>
        </div>

        <div class="col-md-3">
        <div class="col-mb-4 pb-2">
                <label for="exampleInputName" class="form-label">Payment Method</label><br>
                        <select class="form-select" aria-label="Default select example" onclick="Calamount()" name="method">
                          <option value="Not Yet Specified">Not Yet Specified</option>
                          <option value="Cheque">Cheque</option>
                          <option value="BankSlip">Bank Slip</option>
                          <option value="Cash">Cash</option>
                        </select>
                        <span class="text-danger"><?php echo form_error("method");?></span>
            </div>
        </div>

        <div class="col-md-3">

        <div class="col-mb-4 pb-2">
                  <label for="exampleApartmentAddress" class="form-label">Deposited Date</label>
                  <input type="date" class="form-control" id="exampleInputApartmentAddress" onclick="Calamount()" name="depositeddate">
                  <span class="text-danger"><?php echo form_error("depositeddate");?></span>
              </div>
        </div>

        <div class="col-md-3">

        <div class="col-mb-4 pb-2">
              <label for="exampleInputName" class="form-label">Payment Status</label><br>
                        <select class="form-select" aria-label="Default select example" name="status">
                          <option value="NotPaid">Not Paid</option>
                          <option value="Paid">Paid</option>
                        </select>
                        <span class="text-danger"><?php echo form_error("status");?></span>
              </div>
        </div>
        
        </div>

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