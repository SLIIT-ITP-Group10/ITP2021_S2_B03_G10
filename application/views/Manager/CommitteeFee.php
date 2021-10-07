<?php include 'application/views/Layout/ManagersideNavigation.php';?>
<div class="text text-light">Committee Fee</div>
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
    <?php echo form_open('Committee/GetReport');?>
    <input type="submit" name="export" value="Generate Report" class="btn btn-info"></input>
    <?php echo form_close();?>
</div>


</div>

<div class="p-5" id="report">

<table class="table table-hover w-100 mx-auto" id="myTable" style="border-radius:12px; background-color:#FFFFFF; opacity:0.9; font-size: 14px;">
  <thead>
    <tr>
      <th scope="col" class="text-center">Receipt ID</th>
      <th scope="col" class="text-center">Apartment ID</th>
      <th scope="col" class="text-center">Owner ID</th>
      <th scope="col" class="text-center">Floor Area in sqft</th>
      <th scope="col" class="text-center">Rate per sqft</th>
      <th scope="col" class="text-center">Total for a month</th>
      <th scope="col" class="text-center">Total for 6 month</th>
      <th scope="col" class="text-center">Season</th>
      <th scope="col" class="text-center">Payment Method</th>
      <th scope="col" class="text-center">Deposit Date</th>
      <th scope="col" class="text-center">Payment Status</th>      
      <th scope="col" class="text-center">Update</th>
      <th scope="col" class="text-center">Delete</th>
    </tr>
  </thead>
  <tbody>

    
      <?php
      if($fetch_Committee->num_rows() > 0)
      {
        foreach($fetch_Committee->result() as $row)
        {?>

        <tr class="user_rows"> 
          <td class="text-center"><?php echo $row->SP_MEMBERSHIP_RECEIPT_ID?></td>
          <td class="text-center"><?php echo $row->SP_APARTMENT_ID?></td>
          <td class="text-center"><?php echo $row->SP_RESIDENT_ID?></td>
          <td class="text-center"><?php echo $row->SP_APRTMENT_SIZE?></td>
          <td class="text-center"><?php echo $row->SP_RATE_PER_SQRT?></td>
          <td class="text-center"><?php echo $row->SP_MONTH_AMOUNT?></td>
          <td class="text-center"><?php echo $row->SP_6MONTHS_AMOUNT?></td>
          <td class="text-center"><?php echo $row->SP_MEMBERSHIP_SEASON?></td>
          <td class="text-center"><?php echo $row->SP_PAYMENT_METHOD?></td>
          <td class="text-center"><?php echo $row->SP_DEPOSITED_DATE?></td>
          <td class="text-center"><?php echo $row->SP_PAYMENT_STATUS?></td>
          
          <td>
          <button type="button" class="btn btn-success update btn-sm" data-toggle="modal" data-target="#exampleModal">Update</button>
          </td>

          <td>
          <button type="button" class="btn btn-danger delete btn-sm" data-toggle="modal" data-target="#exampleModal">Delete</button>
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
<!-- Update Model Use here -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Committee Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('Committee/UpdateMembershipFee'); ?>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Payement Method</label>
                        <select class="form-select" aria-label="Default select example" name="method">
                          <option value="Not Specified">Not Specified</option>
                          <option value="Cheque">Cheque</option>
                          <option value="Bank Slip">Bank Slip</option>
                          <option value="Cash">Cash</option>
                        </select>
                        <input type="hidden" class="form-control" id="id" name="id">
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Deposited Date</label>
                        <input type="date" class="form-control" id="depositeddate" name="depositeddate">
                        <span class="text-danger"><?php validation_errors("depositeddate"); ?></span>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Payment Status</label>
                        <select class="form-select" aria-label="Default select example" name="status">
                          <option value="Not Paid">Not Paid</option>
                          <option value="Paid">Paid</option>
                        </select>
                        <span class="text-danger"><?php validation_errors("status"); ?></span>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Status</button>
                </div>
                <?php echo form_close(); ?>
                </div>
            </div>
 </div>

 <!-- Delete Use here -->
<div class="modal fade" id="userdeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampledeleteModalLabel" aria-hidden="true" data-backdrop="false" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" >Update Committee Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('Committee/DeleteMembershipFee'); ?>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Receipt ID</label>
                        <input type="text" class="form-control" id="receiptid" name="receiptid" readonly>
                        <span class="text-danger"><?php validation_errors("receiptid"); ?></span>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Apartment ID</label>
                        <input type="text" class="form-control" id="apid" name="apid" disabled>
                        <span class="text-danger"><?php validation_errors("apid"); ?></span>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Owner ID</label>
                        <input type="text" class="form-control" id="ownerid" name="ownerid" disabled>
                        <span class="text-danger"><?php validation_errors("ownerid"); ?></span>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Monthly Amount</label>
                        <input type="text" class="form-control" id="month" name="month" disabled>
                        <span class="text-danger"><?php validation_errors("month"); ?></span>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Six Month Amount</label>
                        <input type="text" class="form-control" id="sixmonth" name="sixmonth" disabled>
                        <span class="text-danger"><?php validation_errors("sixmonth"); ?></span>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
                <?php echo form_close(); ?>
                </div>
            </div>
 </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.1/html2pdf.bundle.min.js"></script>
<script>

$(document).ready(function(){

// code to read selected table row cell data (values).
$("#myTable").on('click','.update',function(){
     // get the current row
     var currentRow=$(this).closest("tr"); 
     
     var col0=currentRow.find("td:eq(0)").text(); 
     var col1=currentRow.find("td:eq(8)").text(); 
     var col2=currentRow.find("td:eq(9)").text(); 
     var col3=currentRow.find("td:eq(10)").text(); 
     
     var data="Receipt ID : "+col0+"\n"+"Payment Method : "+col1+"\n"+"Deposited Date : "+col2+"\n"+"Payment Status : "+col3;
     
     alert(data);

            $('#userModal').modal('show');  
            $('#id').val(col0);
            $('#method').val(col1);   
            $('#depositeddate').val(col2);  
            $('#status').val(col3); 
});
});

$(document).ready(function(){

// code to read selected table row cell data (values).
$("#myTable").on('click','.delete',function(){
     // get the current row
     var currentRow=$(this).closest("tr"); 
     
     var col0=currentRow.find("td:eq(0)").text(); 
     var col1=currentRow.find("td:eq(1)").text(); 
     var col2=currentRow.find("td:eq(2)").text(); 
     var col3=currentRow.find("td:eq(5)").text(); 
     var col4=currentRow.find("td:eq(6)").text(); 
     
     var data="Receipt ID : "+col0+"\n"+"Payment Method : "+col1+"\n"+"Deposited Date : "+col2+"\n"+"Payment Status : "+col3;
     
     //alert(data);

            $('#userdeleteModal').modal('show');  
            $('#receiptid').val(col0);
            $('#apid').val(col1); 
            $('#ownerid').val(col2); 
            $('#month').val(col3);   
            $('#sixmonth').val(col4); 
});
});

function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("Input");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
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

window.onload = function () {
	    document.getElementById("download")
	        .addEventListener("click", () => {
	            const invoice = this.document.getElementById("report");
	            console.log(invoice);
	            console.log(window);
	            var opt = {
	                margin: 1,
	                filename: 'MembershipFee_Report.pdf',
	                image: { type: 'jpeg', quality: 0.98 },
	                html2canvas: { scale: 8},
	                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
	            };
	            html2pdf().from(invoice).set(opt).save();
	        })
	}
</script>

<!------------------------------------------------------ End table --------------------------------------------->
<?php include 'application/views/Layout/sideNavFooter.php';?>
