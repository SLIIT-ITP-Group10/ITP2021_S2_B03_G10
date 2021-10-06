<?php include 'application/views/Layout/sideNavigation.php';?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.1/html2pdf.bundle.min.js"></script>
<title>
  visitor Details Report
  </title><br>
  <div class="container pt-6">
  <div class="card card-registration" style="border-radius: 20px;  border: 3px solid  #737373;   width:95%;">
    <div class="p-4"><br>


	
			
              
      				 <h1 style=" color: #000000;"><Center>  Visitors Details Report Generate </center></h1><br>
               <center><img src="<?= base_url(); ?>/assets/img/gee.png" alt="profileImg"  height="150"></center>
          

</div>      <div class="col-sm-11">
         
		  <button class="btn btn-success" onclick="myFunction()" id="download"  style="color:#fff; background: #4d4d4d; float:right; font-size:22px; min-width:50px; border-radius: 10px; "type="button">Generate PDF</button>



<script>
function myFunction() {
  alert("report found for this month you that you have specified !");
}
</script>
		 
		
		 <br><br><br>
 <div class="p-5">
     
<!-- <table style="width:100%">
  <tr>
    <th style="width:100%">Firstname</th> -->
<div id="report">
      <table class="table table-hover table-responsive shadow" style="border-radius:11px; width:110%; font-size:20px; opacity: 10; background-color:#FFFFFF;">
            <thead class="thead-dark">
              <tr>
                  
                <th style=" background-color:#999999;" scope="col">Visitor ID</th>
                <th style=" background-color:#999999;"scope="col">Resident ID</th>
                <th style=" background-color:#999999;"scope="col">Visitor First Name</th>
                <th style=" background-color:#999999;"scope="col">Visitor Last Name</th>
                <th style=" background-color:#999999;"scope="col">Date</th>
                <th style=" background-color:#999999;" scope="col">Time of Arrival</th>    
                <th style=" background-color:#999999;"style="width:10%" scope="col">Phone No</th>             
              </tr>
            </thead>

            <tbody>


              <?php

              if($fetch_Userdata->num_rows() > 0 )
              {
                  foreach($fetch_Userdata->result() as $row)
                  {
              ?>
                  <tr>
                      <th scope="row"><?php echo $row->SP_VISITOR_ID?></th>
                      <td><?php echo $row->SP_RESIDENT_ID?></td>            
                      <td><?php echo $row->SP_VISITOR_FIRSTNAME?></td>
                      <td><?php echo $row->SP_VISITOR_LASTNAME?></td>
                      <td><?php echo $row->SP_VISITOR_DATE?></td>
                      <td><?php echo $row->SP_VISITOR_TIMEOFARRIVAL?></td>
                      <td><?php echo $row->SP_VISITOR_PHONE_NUMBER?></td>
                      
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
 window.onload = function () {
	    document.getElementById("download")
	        .addEventListener("click", () => {
	            const invoice = this.document.getElementById("report");
	            console.log(invoice);
	            console.log(window);
	            var opt = {
	                margin: 1,
	                filename: 'Visitors_Report.pdf',
	                image: { type: 'jpeg', quality: 0.98 },
	                html2canvas: { scale: 8},
	                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
	            };
	            html2pdf().from(invoice).set(opt).save();
	        })
	}

</script>





<?php include 'application/views/Layout/sideNavFooter.php';?>




      