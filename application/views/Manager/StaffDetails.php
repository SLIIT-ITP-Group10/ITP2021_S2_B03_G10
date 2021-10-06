<?php include 'application/views/Layout/sideNavigation.php';?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.1/html2pdf.bundle.min.js"></script>

<!-- staff details table -->
<!-- <div class="shadow-lg p-3 mb-5  bg-white rounded "> -->
<div class="container pt-3">
<div class="text">
<h3 class="fw-normal mb-2" style="color: #4835d4;">Staff Member Details</h3>
</div> <hr>
<a href="<?php echo base_url('index.php/Staff/register'); ?>" class="btn btn-primary btn-active float-end " role="button" aria-pressed="true">Add New Staff Member</a>
    </div><br><br>
<div class="containet p-3">
<div class="card card-registration" style="border-radius:15px; border-color:black;">
<div class="containet p-5">
<div class="align-left mb=3">
<table class="table table-hover ">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">User</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email</th>
      <th scope="col">See More</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
  <?php
      if($fetch_userData->num_rows() > 0 ){
        foreach($fetch_userData->result() as $row)
        {
          ?> 
           <tr>
           <td><?php echo $row->SP_EMP_POSITION; ?> </td>
             <td><?php echo $row->SP_EMPLOYEE_ID; ?> </td>
             <td><?php echo $row->SP_EMP_MOBILE; ?> </td>
             <td><?php echo $row->SP_EMP_EMAIL; ?> </td>
             <td><a href="<?php echo base_url(); ?>index.php/Staff/manager/<?php echo $row->SP_EMPLOYEE_ID;?>" class="btn btn-primary btn-active" role="button" aria-pressed="true">View</a></td>
             <td><a href="<?php echo base_url(); ?>index.php/Register/Edit/<?php echo $row->SP_EMPLOYEE_ID;?>" class="btn btn-primary btn-active" role="button" aria-pressed="true">Edit</a></td>
           </tr>
          <?php
        }
      } 
      else {
        ?> 
          <tr>
            <td colspan="5"> No Data Found. </td> 
          </tr>
        <?php
      }
    
    ?>
    <!-- <tr>
     <th><img src="<?= base_url(); ?>/assets/img/manager.jpg" alt="Admin" class="rounded-circle" width="40"> Manager</th>
      <td>Mohan </td>
      <td>+94 715248639</td>
      <td>mohan.silva@gmail.com</td>
      <td>
        <a href="<?php echo base_url('index.php/Staff/manager'); ?>" class="btn btn-primary btn-active" role="button" aria-pressed="true">View More</a>
      </td>
    </tr> -->
  </tbody>
</table>
</div>
</div>
</div>
</div>

<!-- staff salary details table -->
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"> -->
<div class="container pt-3">
<div class="text">
<h3 class="fw-normal mb-2" style="color: #4835d4;">Staff Salary Details</h3>
</div> <hr>
<a href="<?php echo base_url('index.php/Staff/Add'); ?>" class="btn btn-primary btn-active float-end " role="button" aria-pressed="true">+ Add</a>
              <div class="col-sm-11">
              <button class="btn btn-primary btn-active float-end btn-success" id="download" type="button">Generate Report</button> 
              </div><br><br>
<div class="containet pt-3">
<div class="card card-registration" style="border-radius:15px; border-color:black;">
<div class="containet pt-5">
<div id="report">
<table class="table table-hover ">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">Month</th>
      <th scope="col">Amount(Rs.)</th>
      
    </tr>
    </thead>
    <tbody>
    <div class="container">
    <div class="align-left">
    </div>
    </div>
    <?php
      if($fetch_data->num_rows() > 0 ){
        foreach($fetch_data->result() as $row)
        {
          ?> 
           <tr>
             <td><?php echo $row->SP_EMP_ID; ?> </td>
             <td><?php echo $row->SP_SALARY_DATE; ?> </td>
             <td><?php echo $row->SP_SALARY_AMOUNT; ?> </td>
           </tr>
          <?php
        }
      } 
      else {
        ?> 
          <tr>
            <td colspan="3"> No Data Found. </td> 
          </tr>
        <?php
      }
    
    ?>
   </tbody>
    
</table>
</div>
</div>
</div>
</div>
<script>
 window.onload = function () {
	    document.getElementById("download")
	        .addEventListener("click", () => {
	            const invoice = this.document.getElementById("report");
	            console.log(invoice);
	            console.log(window);
	            var opt = {
	                margin: 1,
	                filename: 'Staff_Salary_Report.pdf',
	                image: { type: 'jpeg', quality: 0.98 },
	                html2canvas: { scale: 8},
	                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
	            };
	            html2pdf().from(invoice).set(opt).save();
	        })
	}

</script>

 <br><br><br>
 
 <div class="container">
    <div class="align-left">
    <a href="<?php echo base_url('index.php/Staff/Next_page'); ?>" class="btn btn-primary btn-active float-end " role="button" aria-pressed="true">Next Page</a>
    </div>
  </div>
 
    <br><br><br><br><br><br>



<?php include 'application/views/Layout/sideNavFooter.php';?>