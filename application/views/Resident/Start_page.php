<?php include 'application/views/Layout/sideNavigation.php';?>
<title>
Visitors you have added......</title>
<br>
<div class="container pt-5">
  <div class="card card-registration" style="border-radius: 20px;  border: 3px solid  #737373;   width:95%;">
    <div class="p-4">
 
<h1 class="fw-normal mb-5" style="color:#3d0099">Visitors you have added......</h1>


<div class=i>
            <a href="<?php echo base_url('index.php/Welcome/Start_page'); ?>" class="btn btn-primary btn-lg float-end" input type="submit" name="update" value="Submit" role="button" aria-pressed="true">Add Visitor +</a>
                 </div>
<style>
.i {
  position: absolute;
  right: 60px;
  width: 300px;
 
  padding: 10px;
}
</style>
<br> 
                
                        


<br>
<div class="p-5">
      <table id="table1" class="table table-hover table-responsive shadow" style="border-radius:5px; opacity: 0.9; background-color:#FFFFFF;">
            <thead class="thead-dark">
            <tr id="myULH">
                <th scope="col">Visitor ID</th>
                <th scope="col">Resident ID</th>
                <th scope="col">Visitor First Name</th>
                <th scope="col">Visitor Last Name</th>
                <th scope="col">Date</th>
                <th scope="col">Time of Arrival</th>  
                <th scope="col">Phone NO</th>  
                     
              </tr>
            </thead>
            <tbody>

              <?php

              if($fetch_Userdata->num_rows() > 0 )
              {
                  foreach($fetch_Userdata->result() as $row)
                  {
              ?>   
                  <tr class="user_rows">
                      <th scope="row"><?php echo $row->SP_VISITOR_ID?></th>
                      <td><?php echo $row->SP_RESIDENT_ID?></td>            
                      <td><?php echo $row->SP_VISITOR_FIRSTNAME?></td>
                      <td><?php echo $row->SP_VISITOR_LASTNAME?></td>
                      <td><?php echo $row->SP_VISITOR_DATE?></td>
                      <td><?php echo $row->SP_VISITOR_TIMEOFARRIVAL?></td>
                      <td><?php echo $row->SP_VISITOR_PHONE_NUMBER?></td>

                     <td> <?php echo form_open('Addvisitor/delete'); ?> 
                   <input type="hidden" name="visitorid" value="<?php echo $row->SP_VISITOR_ID;?>">
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
                      <td colspan="3">No Data to Display</td>
                  </tr>
              <?php
              }    
              ?>
            </tbody>


            
   

 
</table>
</div>
<?php include 'application/views/Layout/sideNavFooter.php';?>
