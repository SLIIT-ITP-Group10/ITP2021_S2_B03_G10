<?php include 'application/views/Layout/sideNavigation.php';?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.1/html2pdf.bundle.min.js"></script>
<br>
     <h3> <p class="text-center"style="color: #4835d4;">All Vehicle Informations</p></h3>

<img src="<?= base_url(); ?>/assets/img/Car_vector2.png" class="rounded mx-auto d-block" height="100" width="100">

<div class="container p-5">
  <div class="card card-registration" style="border-radius: 15px; border-color:black;">
    <div class="p-5">
    
<div class="col-sm-6">
<div class="text"><u>Resident Vehicle Details</u></div>
<button class="btn btn-dark btn-sm " id="download"  style="color:#fff; float:end; font-size:15px; min-width:50px; border-radius: 5px; "type="button">Generate PDF</button>
<br>
<input type="text" id="myInput" onkeyup="searchId()" placeholder="Search for names.." title="Type in a name"> <i class="bx bx-search"></i>

</div> 


<!--------------------------------------------------resident tabele--------------------------------------->

<table id="table1" class="table table-hover shadow ">


  <thead>
  <tr id="myULH">
      <th scope="col">Reg Number</th>
      <th scope="col">Resident ID</th>
      <th scope="col">Vehicle Type</th>
      <th scope="col">Vehicle Color</th>
      <th scope="col">Vehicle Brand</th>
      <th scope="col">Slot Number</th>
      <th scope="col">Owner Type</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    if($fetch_data->num_rows() > 0)
    {
      foreach($fetch_data->result() as $row)
      {
        ?>
      
         <tr class="user_rows">
         <th scope="row"><?php echo $row->SP_RESIDENT_VEHICLE_REG_NUMBER; ?> </th> 
     
      <td> <?php echo $row->SP_RESIDENT_ID; ?> </td>
        <td> <?php echo $row->SP_VEHICLE_TYPE; ?> </td>
        <td> <?php echo $row->SP_VEHICLE_COLOR; ?> </td>
        <td> <?php echo $row->SP_VEHICLE_BRAND; ?> </td>
        <td> <?php echo $row->SP_SLOT_NUMBER; ?> </td>
        <td> <?php echo $row->SP_OWNER_TYPE; ?> </td>
        <td>
          <?php echo form_open('Manager_view/delete');?>
          <input type="hidden" name="regnum" value="<?php echo $row->SP_RESIDENT_VEHICLE_REG_NUMBER;?>">
          <button type="submit "class="btn btn-danger btn-sm">Delete</button>
          <?php echo form_close();?>
        </td>
      </tr>
      <?php
      }
    }
    else
    {
?>
    
   <tr>
       <td colspan="3"> No Data Found</td>
  </tr>
  <?php
    }
    ?>
  </tbody>
</table>
<!-------------------------------------------------resident search box------------------------------------>
<script>
function searchId()
{
    q = document.getElementById("myInput");
    filter = q.value.toUpperCase();         
    rows = document.getElementById("table1").getElementsByClassName("user_rows");
    // ids= rows.getElementsByTagName("th")
    for(i=0; i < rows.length; i++){
        data = rows[i].getElementsByTagName('th')[0].innerText;
        if (data.toUpperCase().indexOf(filter) > -1) {
            rows[i].style.display= '';
           // console.log(data);
        } else {
             rows[i].style.display = "none";
             //console.log(data);
        }
        
    }
    
}
</script>
</div>
</div>
</div>
</div>
  </div>
  <!------------------------------------genarate report resident vehicle--------------------------------->
  <script>
 window.onload = function () {
	    document.getElementById("download")
	        .addEventListener("click", () => {
	            const invoice = this.document.getElementById("table1");
	            console.log(invoice);
	            console.log(window);
	            var opt = {
	                margin: 1,
	                filename: 'Resident_Vehicle_Report.pdf',
	                image: { type: 'jpeg', quality: 0.98 },
	                html2canvas: { scale: 8},
	                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
	            };
	            html2pdf().from(invoice).set(opt).save();
	        })
	}

</script>

  
<!----------------------------------visitor table------------------------------------>
<br>
<div class="container p-5">
  <div class="card card-registration" style="border-radius: 15px; border-color:black;">
    <div class="p-5">
<div class="text"><u>Resident Vehicle Details</u></div><br>
<input type="text" id="myInput1" onkeyup="searchId1()" placeholder="Search for names.."  title="Type in a name"><i class="bx bx-search"></i><br>
<table id="table11" class="table table-hover shadow">
  <thead>
  <tr id="myULH1">
     <th scope="col">Reg Number</th>
      <th scope="col">visitor ID</th>
      <th scope="col">Vehicle Type</th>
      <th scope="col">Vehicle Color</th>
      <th scope="col">Slot Number</th>
      <th scope="col">Owner Type</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
    if($Allview->num_rows() > 0)
    {
      foreach($Allview->result() as $row)
      {
        ?>
          <tr class="user_rows1">
          <th scope="row"> <?php echo $row->SP_VISITOR_VEHICLE_REG_NUM; ?> </th>
    
      
      <td> <?php echo $row->SP_VISITOR_ID; ?> </td>
        <td> <?php echo $row->SP_VEHICLE_TYPE; ?> </td>
        <td> <?php echo $row->SP_VEHICLE_COLOR; ?> </td>
        <td> <?php echo $row->SP_SLOT_NUMBER; ?> </td>
        <td> <?php echo $row->SP_OWNER_TYPE; ?> </td>
        <td> 
        <?php echo form_open('Manager_view/delete1');?>
          <input type="hidden" name="regnum" value="<?php echo $row->	SP_VISITOR_VEHICLE_REG_NUM ;?>">
          <button type="submit "class="btn btn-danger btn-sm">Delete</button>
        <?php echo form_close();?>
      </td>
      </tr>
      <?php
      }
    }
    else
    {
?>
    
   <tr>
       <td colspan="3"> No Data Found</td>
  </tr>
  <?php
    }
    ?>
  </tbody>
</table>
<!-------------------------------------------seach box visitor-------------------->
<script>
function searchId1(){
    q = document.getElementById("myInput1");
    filter = q.value.toUpperCase();         
    rows = document.getElementById("table11").getElementsByClassName("user_rows1");
    // ids= rows.getElementsByTagName("th")
    for(i=0; i < rows.length; i++){
        data = rows[i].getElementsByTagName('th')[0].innerText;
        if (data.toUpperCase().indexOf(filter) > -1) {
            rows[i].style.display= '';
           // console.log(data);
        } else {
             rows[i].style.display = "none";
             //console.log(data);
        }
        
    }
    
}
</script>
   
<!----------------------search box css part---------------------------->
 <style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');

  background-repeat: no-repeat;
 
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 2px solid #ddd;
  margin-bottom: 12px;
}
#myInput1 {
  background-image: url('/css/searchicon.png');

  background-repeat: no-repeat;
 
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
</style>  

</div>
</div>
</div>
</div>




<?php include 'application/views/Layout/sideNavFooter.php';?>