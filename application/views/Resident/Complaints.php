<?php include 'application/views/Layout/sideNavigation.php';?>

<div class="container p-5">
 
    <div class="p-5">
     <h3> <p class="text-center"style="color: #4835d4;">Complaints</p></h3>
</form>

<!-- <div class="align-left" style="padding-top:50px">
              <button type="submit" class="btn btn-primary float-end">+Add</button> -->

              <a href="<?php echo base_url('index.php/Complaint_Control/add');?>" class="btn btn-primary btn-active" role="button" aria-pressed="true"> +Add </a>
              
<!-- <div class="container pt-5"> -->
<!-- <div class="text">Resident Vehicle Details</div><button type="button" class="btn btn-primary btn-sm">Genarate Report</button> -->

<div class="containet p-4">
<!-- <div class="card card-registration" style="border-radius:15px; border-color:black;"> -->
<div class="containet p-4">
<table id="table1" class="table table-hover shadow">
<input type="text" id="myInput" onkeyup="searchId()" placeholder="Search for names.." title="Type in a name">

  <thead>
    <tr>
    <tr id="myULH">
      <th scope="col"></th>
      <th scope="col">Resident ID</th>
      <th scope="col"> Date & Time</th>
      <th scope="col">Subtitle</th>
      <th scope="col">Description</th>
      <th scope="col"></th>   
    </tr>
  </thead>
  <tbody>

  <?php 
    if($DataView->num_rows() > 0 ){
                 
        foreach($DataView->result() as $row){

      ?>    
    <tr>
    <tr class="user_rows">
    
      <!-- <td><?php echo $row-> SP_COMPLAINT_ID;?></td> -->
      <td> <img src="<?= base_url(); ?>/assets/img/Maintenance.png" alt="profileImg" width="28" height="28"> </td>
      <th scope="row"><?php echo $row->SP_RESIDENT_ID; ?> </th>
      <!-- <td><?php echo $row-> SP_RESIDENT_ID; ?></td> -->
      <td><?php echo $row->SP_DATETIME; ?></td>
      <td><?php echo $row->SP_SUBTITLE; ?></td>
      <td><?php echo $row->SP_DESCRIPTION; ?></td>
      <td> <button type="button" name="update "class="btn btn-danger" > Delete</button> </td>
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
      <td>aaaa</td>
      <td>13:00</td>
      <td>SP71652</td>
     
    
      
    </tr> -->
    
  
   
  </tbody>
</table>
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