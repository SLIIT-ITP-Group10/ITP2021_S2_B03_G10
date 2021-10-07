<header>

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
              <img src="<?= base_url(); ?>/assets/img/member.png" width="50" height="50" class="rounded-circle align-top" alt="">
              </div>
              <div class="col text-light py-4">
              </div>
              <div class="col text-light py-4">
              <?php echo form_open('RegisterUser/loadLogin'); ?>
                <button class="btn btn-success" style="border-radius:20px;">Sign In</button>
              </div>

              <div class="col text-light py-4">
              <?php echo form_open('RegisterUser/loadSignup'); ?>
                <button class="btn btn-primary" style="border-radius:20px;">Sign Up</button>
              <?php echo form_close(); ?>

              </div>
          </div>
      </div>
  </a>
</nav>


</header>

