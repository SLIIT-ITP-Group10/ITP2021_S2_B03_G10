<?php include 'application/views/Layout/sideNavigation.php';?>


  
    <div class="p-5">
     <h3> <p class="text-center"style="color: #4835d4;">Complaints</p></h3>
     






<div class="align-left" style="padding-left:100px">
<button class="btn btn-light btn-sm float-end" id="download" style=" font-size:15px; min-width:50px; border-radius: 5px; "type="button">Generate PDF</button>
    </div>


    <!------------------------------------genarate report for complaints--------------------------------->
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.1/html2pdf.bundle.min.js"></script>


<div class="containet p-4">

<div class="containet p-4">
<table id="table1" class="table table-hover shadow" >
<input type="text" id="myInput" onkeyup="searchId()" placeholder="Search for names.." title="Type in a name">

  <thead>
    <tr>
    <tr id="myULH">
    
      <th scope="col"> </th>
      <th scope="col">Resident ID</th>
      <th scope="col">Complaint ID</th>
      <th scope="col"> Date & Time</th>
      <th scope="col">Subtitle</th>
      <th scope="col"> Description</th> 
     

      
    </tr>
  </thead>
  <tbody>
    <?php 
    if($DataView->num_rows() > 0 ){
                 
        foreach($DataView->result() as $row){

      ?>    
    <tr>
    <tr class="user_rows">

    <!-- <th scope="row"><?php echo $row->SP_RESIDENT_ID; ?> </th> -->
    <td> <img src="<?= base_url(); ?>/assets/img/Maintenance.png" alt="profileImg" width="28" height="28"> </td>
    <th scope="row"><?php echo $row->SP_RESIDENT_ID; ?> </th>
      <!-- <?php echo $row->SP_RESIDENT_ID; ?> </th>       
      <td><?php echo $row-> SP_COMPLAINT_ID;?></td>     
      <td><?php echo $row->SP_DATETIME; ?></td>
      <td><?php echo $row->SP_SUBTITLE; ?></td>
      <td><?php echo $row->SP_DESCRIPTION; ?></td>
      
    
      </tr>
      <?php
        }
      }
      else{

      ?>  
         <tr>
            <td colspan="3">No Data to Display</td>
      </tr>
      <?php
       }
       ?>


                     
  

    <!-- <tr>
    <td> <img src="<?=base_url();?>/assets/img/Maintenance.png" alt="Maintenance"  height="30" width="30" >002</td>
    <td>SPE10903</td>
      <td>16:00 11/08/2021</td>
      <td>Get a electricity mechanic</td>
    
      
     
    </tr>
    <tr>
    <td> <img src="<?=base_url();?>/assets/img/Maintenance.png" alt="Maintenance"  height="30" width="30" >003</td>
    <td>SPE10904</td>
      <td>18:00 02/09/2021</td>
      <td>Unworking bulbs</td>
    
    
      
      
    </tr>
    <tr>
    <td> <img src="<?=base_url();?>/assets/img/Maintenance.png" alt="Maintenance"  height="30" width="30" >004</td>
    <td>SPE10905</td>
      <td>13:00 05/10/2021</td>
      <td> Unworking bulbs</td>
     
    
      
      
    </tr>
    <tr>
    <td> <img src="<?=base_url();?>/assets/img/Maintenance.png" alt="Maintenance"  height="30" width="30" >005</td>
    <td>SPE10906</td>
      <td>13:00 08/10/2021</td>
      <td>Get a electricity mechanic</td>
      
     
     
      
    </tr>  -->
  </tbody>
</table>

       <!-------------------------------------------------resident search box------------------------------------>
       <script>
function searchId(){
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
</form>
      

<?php include 'application/views/Layout/sideNavFooter.php';?>