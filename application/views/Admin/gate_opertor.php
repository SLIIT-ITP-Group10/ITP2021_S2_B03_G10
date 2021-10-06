<?php include 'application/views/Layout/sideNavigation.php';?>
<title> Gate opertor page</title>
<br>
<div class="container pt-6">
  <div class="card card-registration"style="border-radius: 20px;  border: 3px solid  #737373;   width:95%;"">
    <div class="p-4">
<h1 class="fw-normal mb-5" style="color: #3d0099";"><center><b>Visitor Details</b></center></h1>
<center><img src="<?= base_url(); ?>/assets/img/vi.png" alt="profileImg"  height="200"></center>



<div id="MyClockDisplay" class="clock" onload="showTime()"></div>
<style>
body {
    background: black;
}

.clock {
    position: absolute;
  
    left: 84%;
    right: 60px;
    transform: translateX(-50%) translateY(-50%);
    color: #737373;
    font-size: 17px;

    letter-spacing: 2px;
   }
   </style>
   <script>
   function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    
}

showTime();
</script>





<input type="text" id="myInput" onkeyup="searchId()" placeholder="Search for names.."  title="Type in a name"> <img src="<?= base_url(); ?>/assets/img/an.png" alt="profileImg"  height="28">



<br>
<div class="p-5">
      <table id="table1" class="table table-hover table-responsive shadow" style="border-radius:5px; opacity: 0.9; background-color:#FFFFFF;">
            <thead class="thead-dark">
            <tr id="myULH">
                <th style=" background-color:#ccccff;" scope="col">Visitor ID</th>
                <th style=" background-color:#ccccff;" scope="col">Resident ID</th>
                <th style=" background-color:#ccccff;"scope="col">Visitor First Name</th>
                <th style="background-color:#ccccff;" scope="col">Visitor Last Name</th>
                <th style=" background-color:#ccccff;"scope="col">Date</th>
                <th style=" background-color:#ccccff;"scope="col">Time of Arrival</th>  
                <th style="width:10%;background-color:#ccccff;" scope="col">Phone No</th>             
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





<!-- 
<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}


</script> -->
<script>
function searchId(){
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
<?php include 'application/views/Layout/sideNavFooter.php';?>