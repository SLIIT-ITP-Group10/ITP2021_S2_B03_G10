<?php include 'application/views/Layout/ManagersideNavigation.php';?>

<div class="container justify-content-center p-5">
        <div class="card text-center w-50 mx-auto">
            <div class="card-header">
                Committee Member
            </div>
            
            <div class="card-body">
            <?php
                                        if($contact->num_rows() > 0)
                                        {
                                            foreach($contact->result() as $row)
                                            {?>                        
                                                    
                                                        <h5 class="card-title"><?php echo $row->SP_RESIDENT_PHONENO?></h5>
                                                        <p class="card-text"><?php echo $row->SP_RESIDENT_ID?></p>
                                                        <a href="<?php echo base_url();?>index.php/Committee/ResidentDetails" class="btn btn-primary">Go Back</a>
                                                    
                                            <?php
                                            }
                                            }
                                            else
                                            {
                                            ?>
                                                        <h6 colspan="3">No Data to Display</h6>
                                                        <a href="<?php echo base_url();?>index.php/Committee/ResidentDetails" class="btn btn-primary">Go Back</a>
                                            <?php
                                            }    
                                            ?>

            </div>
                <div class="card-footer text-muted">
                    Spathodea
                </div>
            </div>
</div>

  <?php include 'application/views/Layout/sideNavFooter.php';?>