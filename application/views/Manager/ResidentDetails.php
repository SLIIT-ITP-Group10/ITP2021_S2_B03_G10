<?php include 'application/views/Layout/ManagersideNavigation.php';?>
<div class="text text-light">Resident Details</div>


<div class="p-5">

<div class="float-end">

<div class="input-group">
  <div class="form-outline">
    <input type="search" id="Input" class="form-control" onkeyup="myFunction()" placeholder="Search">
  </div>
  <button type="button" class="btn btn-primary">
    <i class="bx bx-search"></i>
  </button>
</div>

</div>
<div class="float-end pb-5 px-2">  
    <a href="<?php echo base_url();?>index.php/RegisterUser/AddResident" class="btn btn-primary bx bx-plus p-2" alt="Add User"></a>
</div>


</div>


</div>
      <div class="p-5">
      <table class="table table-hover table-responsive shadow w-100 mx-auto" id="myTable" style="border-radius:5px; opacity: 0.9; background-color:#FFFFFF; font-size:14px">
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
                <th scope="col">Resident Contact</th>                 
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
                      <td><?php echo $row->SP_RESIDENT_ID?></td>
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
                      <td class="text-center">

                      <?php echo form_open('RegisterUser/GetContact')?>
                      <input type="hidden" name="resid" value="<?php echo $row->SP_RESIDENT_ID?>">
                      <input type="submit" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#mymodal" for="success-outlined" value="View Contact"></input>
                      <?php echo form_close()?>

                      </td>
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

<div class="p-5">

<div class="float-end">

<div class="input-group">
  <div class="form-outline">
    <input type="search" id="Input1" class="form-control" onkeyup="myFunction1()" placeholder="Search">
  </div>
  <button type="button" class="btn btn-primary">
    <i class="bx bx-search"></i>
  </button>
</div>

</div>

</div>

<div class="p-5">
      <table class="table text-center table-hover table-responsive shadow w-100 mx-auto" id="myTable1" style="border-radius:5px; opacity: 0.9; background-color:#FFFFFF; font-size:14px">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Apartment ID</th>
                <th scope="col">Resident ID</th>
                <th scope="col">Apartment Size</th>
                <th scope="col">Apartment Address</th>             
              </tr>
            </thead>
            <tbody>

              <?php

              if($fetch_Apartment->num_rows() > 0 )
              {
                  foreach($fetch_Apartment->result() as $row)
                  {
              ?>
                  <tr>
                      <td><?php echo $row->SP_APARTMENT_ID?></td>
                      <td><?php echo $row->SP_RESIDENT_ID?></td>           
                      <td><?php echo $row->SP_APARTMENT_SIZE?></td>
                      <td><?php echo $row->SP_APARTMENT_ADDRESS?></td>

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

<script>
  function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("Input");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

<script>
  function myFunction1() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("Input1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable1");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<?php include 'application/views/Layout/sideNavFooter.php';?>
