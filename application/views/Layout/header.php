<nav class="navbar navbar-expand navbar-light justify-content-end" style="background-color: #000000; padding-left:120px; height:60px;">
  <!-- Navbar content -->
  <!-- <form class="form-inline">
    <button class="btn btn-outline-success" type="button">Main button</button>
    <button class="btn btn-sm btn-outline-secondary" type="button">Smaller button</button>
  </form> -->
  
  <a class="navbar-brand" href="#">
      <div class="container">
          <div class="row">
          <div class="col py-4">
              <img src="<?= base_url(); ?>/assets/img/emilyz.jpg" width="50" height="50" class="rounded-circle align-top" alt="">
              </div>
              <div class="col text-light py-4">
                <?php
              if($SystemLogin->num_rows() > 0 )
              {
                      //$row = $SystemLogin->result();
                      if($usertype == 'RES'){

                        foreach($SystemLogin->result() as $row)
                        {?>
                            <h6><?php echo $row->SP_RESIDENT_FIRSTNAME;?> <?php echo $row->SP_RESIDENT_LASTNAME ?></br> <?php echo $row->SP_RESIDENT_ID ?></h6>
                        <?php
                        }

                      } 
                      else if ($usertype == 'EMP' || $usertype == 'MAN'){

                        foreach($SystemLogin->result() as $row)
                        {?>
                            <h6><?php echo $row->SP_EMP_FIRSTNAME;?> <?php echo $row->SP_EMP_LASTNAME ?></br> <?php echo $row->SP_EMPLOYEE_ID ?></h6>
                        <?php
                        }

                      }
              }
              ?>

              </div>
              <div class="col text-light py-4">
                <button class="btn btn-success" style="border-radius:20px;">Sign In</button>
                <button class="btn btn-primary" style="border-radius:20px;">Sign Up</button>
              </div>
          </div>
      </div>
  </a>
</nav>

