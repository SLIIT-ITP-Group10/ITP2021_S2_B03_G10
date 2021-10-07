<?php include 'application/views/Layout/sideNavigation.php';?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.1/html2pdf.bundle.min.js"></script>

<div class="container p-5">
  <div class="card card-registration" style="border-radius: 15px; border-color:black;">
    <div class="p-5">
     <h3> <p class="text-center"style="color: #4835d4;">Check the Vehicles</p></h3>
</form>
<img src="<?= base_url(); ?>/assets/img/Car_vector2.png" class="rounded mx-auto d-block" height="100" width="100">
<div class="container pt-5">
<div class="text"><u>Search Resident Vehicle Details</u></div>
<br>
<br>
<input type="text" id="myInput" onkeyup="searchId()" placeholder="Search for names.."  title="Type in a name">

<table id="table1" class="table table-hover shadow ">
  <thead>
    <tr id="myULH">
 
      <th scope="col">Reg Number</th>
      <th scope="col">Resident ID</th>
      <th scope="col">Vehicle Type</th>
      <th scope="col">Vehicle Color</th>
      <th scope="col">Vehicle Brand</th>
      <th scope="col">Slot Number</th>
      <th scope="col">Owner Type</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    if($fetch_Visitor->num_rows() > 0)
    {
      foreach($fetch_Visitor->result() as $row)
      {

        ?>
         <tr class="user_rows">
         <th scope="row"><?php echo $row->SP_RESIDENT_VEHICLE_REG_NUMBER; ?> </th> 
      
       <td> <?php echo $row->SP_RESIDENT_ID; ?> </td>
        <td> <?php echo $row->SP_VEHICLE_TYPE; ?> </td>
        <td> <?php echo $row->SP_VEHICLE_COLOR; ?> </td>
        <td> <?php echo $row->SP_VEHICLE_BRAND; ?> </td>
        <td> <?php echo $row->SP_SLOT_NUMBER; ?> </td>
        <td> <?php echo $row->SP_OWNER_TYPE; ?> </td>
      </tr>

      <?php
      }
    }
    else
    {
?>

   <tr>
       <td colspan="3"> No Data Found</td>
  </tr>
  <?php
    }
    ?>
  </tbody>
  </table>
  <!-------------------------------------------------resident search box------------------------------------>
<script>
function searchId()
{
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
<!----------------------search box css part---------------------------->
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');

  background-repeat: no-repeat;
 
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
</style>  
</div>
</div>
</div>
</div>
</div>

<a href="<?php echo base_url('index.php/Welcome/add'); ?>" class="btn btn-primary submit" type="submit"name="searchBtn" >Add Visitor</a>


</div>
</div>
</div>
</div>

<?php include 'application/views/Layout/sideNavFooter.php';?>