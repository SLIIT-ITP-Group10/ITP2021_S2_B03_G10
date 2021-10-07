<?php include 'application/views/Layout/ResidentsideNavigation.php';?>
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

          <?php echo form_open('Committee/ResidentCommitteeMemberDetails')?>
          <input type="hidden" name="resid" value="<?php echo $row->SP_COM_RESIDENT_ID?>">
          <input type="submit" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#mymodal" for="success-outlined" value="View Profile"></input>
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
<!------------------------------------------------------ End table --------------------------------------------->  

<?php include 'application/views/Layout/sideNavFooter.php';?>
