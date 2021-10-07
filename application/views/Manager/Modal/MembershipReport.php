<!DOCTYPE html>
<!-- Created by Spathodea |www.youtube.com/SpathodeaYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive  Menu  | Spathodea </title>-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/side-nav-bar.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.css">

    <style>
      body {
        background-image: url('<?=base_url();?>/assets/img/pixel.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed; 
        background-size: 100% 100%;
      }
    </style>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

<div class="text-light text-center p-4" style="font-size:35px"><b>Committee Memebership</b></div>

<div class="p-5" id="report">

<table class="table table-hover w-100 mx-auto" id="myTable" style="border-radius:12px; background-color:#FFFFFF; opacity:0.95; font-size: 14px;">
  <thead>
    <tr>
      <th scope="col" class="text-center">Receipt ID</th>
      <th scope="col" class="text-center">Apartment ID</th>
      <th scope="col" class="text-center">Owner ID</th>
      <th scope="col" class="text-center">Floor Area in sqft</th>
      <th scope="col" class="text-center">Rate per sqft</th>
      <th scope="col" class="text-center">Total for a month</th>
      <th scope="col" class="text-center">Total for 6 month</th>
      <th scope="col" class="text-center">Season</th>
      <th scope="col" class="text-center">Payment Method</th>
      <th scope="col" class="text-center">Deposit Date</th>
      <th scope="col" class="text-center">Payment Status</th>
    </tr>
  </thead>
  <tbody>

    
      <?php
      if($fetch_Committee->num_rows() > 0)
      {
        foreach($fetch_Committee->result() as $row)
        {?>

        <tr class="user_rows"> 
          <td class="text-center"><?php echo $row->SP_MEMBERSHIP_RECEIPT_ID?></td>
          <td class="text-center"><?php echo $row->SP_APARTMENT_ID?></td>
          <td class="text-center"><?php echo $row->SP_RESIDENT_ID?></td>
          <td class="text-center"><?php echo $row->SP_APRTMENT_SIZE?></td>
          <td class="text-center"><?php echo $row->SP_RATE_PER_SQRT?></td>
          <td class="text-center"><?php echo $row->SP_MONTH_AMOUNT?></td>
          <td class="text-center"><?php echo $row->SP_6MONTHS_AMOUNT?></td>
          <td class="text-center"><?php echo $row->SP_MEMBERSHIP_SEASON?></td>
          <td class="text-center"><?php echo $row->SP_PAYMENT_METHOD?></td>
          <td class="text-center"><?php echo $row->SP_DEPOSITED_DATE?></td>
          <td class="text-center"><?php echo $row->SP_PAYMENT_STATUS?></td>
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
<div class="float-end pt-5 px-2">  
    <?php echo form_open('Committee/GenarateReport');?>
    <div class="btn btn-success float-end">
      <div class="row">
        <div class="col">
            <i class="bx bx-download bx-md"></i>
        </div>
        <div class="col-md">
            <input type="submit" name="export" value="Download Report" class="btn btn-success float-end"></input>
        </div>
      </div>

    
    </div>
    <?php echo form_close();?>
</div>

</div>
    </body>
    </html>
<!------------------------------------------------------ End table --------------------------------------------->
