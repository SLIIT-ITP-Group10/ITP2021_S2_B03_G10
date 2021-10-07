
<?php include 'application/views/Layout/ResidentsideNavigation.php';?>
<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/welcomevisitor.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<div class="container pt-5">

  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="background-color:#FFFFFF; border-radius:12px;">

  
   
   
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
  

      <div class="item active">
        <img src="<?= base_url(); ?>/assets/img/home.png" style="width:50%;">
        <div class="carousel-caption">
        <h3 align="right" class="fw-normal mb-5" style="color: #263238;"><p>Hello Resident.<br>Hi,Good Day! Help us to know<br>about the visitors who come to<br>our apartment.<br>Thank you..<br><br><br><br><br>
      </align></p></h3>
      </div>
      </div>
    
      <div class="item">
      <img src="<?= base_url(); ?>/assets/img/family.png" alt="profileImg" alt="Los Angeles" style="width:50%;">
      <div class="carousel-caption">
        <h3 align="right" class="fw-normal mb-5" style="color: #263238;"><p>Hello Resident.<br>Hi,Good Day! Help us to know<br>about the visitors who come to<br>our apartment.<br>Thank you..<br><br><br><br><br>
      </align></p></h3>
      </div>
     </div>
   
      <div class="item">
      <img src="<?= base_url(); ?>/assets/img/safe.png" alt="profileImg" alt="Los Angeles" style="width:50%;">
        <div class="carousel-caption">
        
        <h3 align="right" class="fw-normal mb-5" style="color: #263238;"><p>Hello Resident.<br>Hi,Good Day! Help us to know<br>about the visitors who come to<br>our apartment.<br>Thank you..<br><br><br><br><br>
      </align>

      <br><br> <br><br><br>
  </div>
     
     </div>
    </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>



<!-- <div class="text-right">

<button class="button" type="submit"   style="vertical-align:middle"><span>Get </span></button> -->



<br><br><br><br>
                    <div class="align-left">
          <a href="<?php echo base_url('index.php/Welcome/welcome_visitor'); ?>" button type="submit" class="btn btn-primary btn-lg float-end"  >Get</a>
              </div>

       

</div>
<br>

            
<?php include 'application/views/Layout/sideNavFooter.php';?>