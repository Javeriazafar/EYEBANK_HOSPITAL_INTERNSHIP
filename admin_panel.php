<?Php

$conn=mysqli_connect("localhost","root","","pebs");

$sql="select * from image_container";
$query=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($query);

?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<style>
.img-fluid{
    height:400px;
}



</style>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
  <?php
  for($i=1;$i<=$rowcount;$i++)
  {
	  $row=mysqli_fetch_array($query);
	  
  ?>
  
  <?php 
  if($i==1)
  {
  ?>
  <div class="carousel-item active">
      <img class="d-block img-fluid" src="img/<?php echo $row["image"] ?>" alt=" "width="100%">
    </div>
  <?php	
  }
  else
  {
	?> 
  	<div class="carousel-item">
      <img class="d-block img-fluid" src="img/<?php echo $row["image"] ?>" alt="" height ="1000px" width="100%">
    </div>
 
  <?php
   }
  }
  ?>
 
    
  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>