<?php include 'application/views/Layout/ManagersideNavigation.php';?>
<div class="text">Committee Members</div>
<div class=" p-5">


<table class="table table-hover w-75 mx-auto" id="myTable" style="border-radius:12px; background-color:#FFFFFF; opacity:0.9; font-size: 14px;">
  <thead>
    <tr>
      <th scope="col" class="text-center"></th>
      <th scope="col" class="text-center">ID</th>
      <th scope="col" class="text-center">Position</th>
      <th scope="col" class="text-center">Resident ID</th>
      <th scope="col" class="text-center">Joined Date</th>
      <th scope="col" class="text-center">View</th>
      <th scope="col" class="text-center">Update</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <?php
      if($fetch_CommitteeMember->num_rows() > 0)
      {
        foreach($fetch_CommitteeMember->result() as $row)
        {?>

          <th class="text-center"> <img src="<?= base_url(); ?>/assets/img/member.png" alt="Admin" class="rounded-circle " width="35px"></th>
          <td class="text-center"><?php echo $row->SP_COMMITTEE_MEMBER_ID?></td>
          <td class="text-center"><?php echo $row->SP_COMMITTEE_MEMBER_POSITION?></td>
          <td class="text-center"><?php echo $row->SP_COM_RESIDENT_ID?></td>
          <td class="text-center"><?php echo $row->SP_COMMITTEE_MEMBER_JOINDATE?></td>  
          <td class="text-center">

          <?php echo form_open('Committee/CommitteeMemberDetails')?>
          <input type="hidden" name="resid" value="<?php echo $row->SP_COM_RESIDENT_ID?>">
          <input type="submit" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#mymodal" for="success-outlined" value="View Profile"></input>
          <?php echo form_close()?>

          </td>


          <td class="text-center">

          <!-- <?php echo form_open('Committee/UpdateCommitteeMemberDetails')?>
          <input type="hidden" name="resid" value="<?php echo $row->SP_COM_RESIDENT_ID?>">
          <input type="hidden" name="recid" value="<?php echo $row->SP_COMMITTEE_MEMBER_ID?>">
          <input type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#mymodal" for="success-outlined" value="Update"></input>
          <?php echo form_close()?> -->

          <button type="button" class="btn btn-primary update" data-toggle="modal" data-target="#exampleModal">Update</button>

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
<!------------------------------------------------------ End table --------------------------------------------->  

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card  text-white bg-dark">
            <div class="card-body">

                <div class="row">
                    <div class="col">
                    <h3 class="card-title">Resident Membership Details</h3>
                    </div>
                    <div class="col text-center align-self-center">
                    <a href="<?php echo base_url();?>index.php/Committee/CommitteeMembership" class="btn btn-primary rounded-pill" style="width:150px">More</a>
                    </div>
                </div>
                
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white bg-danger">
            <div class="card-body">
                <div class="row">
                        <div class="col">
                        <h3 class="card-title">Post<br>a<br>Notices</h3>
                        </div>
                        <div class="col text-center align-self-center">
                        <a href="<?php echo base_url();?>index.php/Committee/CommitteeMembers" class="btn btn-primary rounded-pill" style="width:150px">Post</a>
                        </div>
                </div>
            </div>            
            </div>

        </div>
        <div class="col">
            <div class="card text-white bg-success">
            <div class="card-body">

                <div class="row">
                    <div class="col">
                    <h3 class="card-title">Add New Committee Member</h3>
                    </div>
                    <div class="col text-center align-self-center">
                    <a href="<?php echo base_url();?>index.php/Committee/AddCommitteeMember" class="btn btn-primary rounded-pill" style="width:150px">Add</a>
                    </div>
                </div>

            </div>
            </div>

        </div>
    </div>
</div>

<!-- Model Use here -->
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
                    <?php echo form_open('Committee/UpdateCommitteeMemberDetails'); ?>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Position</label>
                        <!-- <input type="text" class="form-control" id="position" name="position" disabled> -->
                        <select class="form-select" aria-label="Default select example" name="position">
                          <option value="President">President</option>
                          <option value="Secretary">Secretary</option>
                          <option value="Member">Member</option>
                        </select>
                        <input type="hidden" class="form-control" id="id" name="id">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Resident ID</label>
                        <input type="text" class="form-control" id="resid" name="resid">
                        <span class="text-danger"><?php validation_errors("resid"); ?></span>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Joined Date</label>
                        <input type="date" class="form-control" id="joineddate" name="joineddate">
                        <span class="text-danger"><?php validation_errors("joineddate"); ?></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                <?php echo form_close(); ?>
                </div>
            </div>
 </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>

$(document).ready(function(){

// code to read selected table row cell data (values).
$("#myTable").on('click','.update',function(){
     // get the current row
     var currentRow=$(this).closest("tr"); 
     
     var col0=currentRow.find("td:eq(0)").text(); // get current row 3rd TD
     var col1=currentRow.find("td:eq(1)").text(); // get current row 1st TD value
     var col2=currentRow.find("td:eq(2)").text(); // get current row 2nd TD
     var col3=currentRow.find("td:eq(3)").text(); // get current row 3rd TD
     
     var data=col0+"\n"+col1+"\n"+col2+"\n"+col3;
     
     alert(data);

            $('#userModal').modal('show');  
            $('#id').val(col0);
            $('#position').val(col1);  
            $('#resid').val(col2);  
            $('#joineddate').val(col3);  
});
});

</script>

<?php include 'application/views/Layout/sideNavFooter.php';?>
