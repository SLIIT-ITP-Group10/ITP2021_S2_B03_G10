<?php include 'application/views/Layout/sideNavigation.php';?>

<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"> -->
<div class="containet p-5">
<div class="card card-registration" style="border-radius:15px; border-color:black;">
<div class="container pt-5 ">
<div class="text">
<h3 class="fw-normal mb-5" style="color: #4835d4;">Add Staff Salary Details</h3>
</div>

<!-------------------- form ------------------------>


<?php echo form_open('AddSalary/addSalary'); ?>

  <!-- <?php if ($this->session->flashdata('msg')){

      echo "<h3>".$this->session->flashdata('msg')."</h3>";
    }
  ?> -->

  <?php if ($this->uri->segment(2) == 'inserted'){

      echo '<p class="text-success"> Data Inserted Successfully!</p>';
    }
  ?>
  
<div class="col-md-12">
            <div class="container my-3">
            <div class="col-md-12 text-center">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                    <label for="exampleInputName" class="form-label">Name</label>
                    </div>
                    <div class="col-sm-5 text-secondary">
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" name="name">
                    <span class="text-danger"> <?php echo form_error("name"); ?> </span>
                  </div>
                    </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                    <label for="exampleInputName" class="form-label">User ID</label>
                    </div>
                    <div class="col-sm-5 text-secondary">
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" name="id">
                    <span class="text-danger"> <?php echo form_error("id"); ?> </span>
                  </div>
                    </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                    <label for="exampleInputName" class="form-label">Date</label>
                    </div>
                    <div class="col-sm-5 text-secondary">
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" name="month">
                    <span class="text-danger"> <?php echo form_error("month"); ?> </span>
                  </div>
                    </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                    <label for="exampleInputName" class="form-label">Amount</label>
                    </div>
                    <div class="col-sm-5 text-secondary">
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="Name" name="amount">
                    <span class="text-danger"> <?php echo form_error("amount"); ?> </span>
                  </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>      


<div class="container my-3 ">
<div class="col-md-12 text-center">
        <button type="submit" class="btn btn-dark ">Save</button>
    </div>
</div>

<?php echo form_close(); ?>
</div>

<?php include 'application/views/Layout/sideNavFooter.php';?>