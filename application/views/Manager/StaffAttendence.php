<?php include 'application/views/Layout/sideNavigation.php';?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.1/html2pdf.bundle.min.js"></script>


<!-- staff attendence table -->

<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"> -->
<div class="container pt-3">
<div class="text">
<h3 class="fw-normal mb-3" style="color: #4835d4;">Monthly Attendece Details </h3>
</div><hr>
<div class="container">
    <div class="align-left">
              <div class="col-sm-11">
              <button class="btn btn-primary btn-active float-end btn-success" id="download" type="button">Generate Report</button> 
              </div><br><br>
    </div>
</div>
<div class="containet p-3">
<div class="card card-registration" style="border-radius:15px; border-color:black;">
<div class="containet p-5">
<div id="report">
<table class="table table-hover ">
  <thead>
    <tr>
      <th scope="col">Employee Id</th>
      <th scope="col">Time In</th>
      <th scope="col">Time Out</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  <?php
      if($fetch_attendenceData->num_rows() > 0 ){
        foreach($fetch_attendenceData->result() as $row)
        {
          ?> 
           <tr>
             <td><?php echo $row->SP_EMP_ID; ?> </td>
             <td><?php echo $row->SP_TIME_IN; ?> </td>
             <td><?php echo $row->SP_TIME_OUT; ?> </td>
             <td><?php echo $row->SP_DATE; ?> </td>
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
    <!-- <tr>
      <th scope="row">SP1098</th>
      <td>7.45 a.m</td>
      <td>5.10 p.m</td>
      <td>2021/08/15</td>
    </tr>
    <tr>
      <th scope="row">SP1099</th>
      <td>7.54 a.m</td>
      <td>5.05 p.m</td>
      <td>2021/08/15</td>
    </tr> -->
    <!-- <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<br>

<script>
 window.onload = function () {
	    document.getElementById("download")
	        .addEventListener("click", () => {
	            const invoice = this.document.getElementById("report");
	            console.log(invoice);
	            console.log(window);
	            var opt = {
	                margin: 1,
	                filename: 'Staff_Attendence_Report.pdf',
	                image: { type: 'jpeg', quality: 0.98 },
	                html2canvas: { scale: 8},
	                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
	            };
	            html2pdf().from(invoice).set(opt).save();
	        })
	}

</script>



<?php include 'application/views/Layout/sideNavFooter.php';?>