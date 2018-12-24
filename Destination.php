
<?php include 'head.php';?>
<!--main-contaner section start here-->
<div class="destination ">
  

</div> 
<br>
<div class="container main-contaner ">

<div class="row">

<?php

//fetch_data.php

include('database_connection.php');

$dname='';
 $query = "SELECT * FROM destination WHERE Distination = 'Mahiyanganaya'";
 

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($total_row > 0)
 {
  foreach($result as $row)
  {
$dname=$row['DName'];
    ?>
<div class="col-sm-6 col-md-4 ">
    <div class="card text-center">
      <div class="card-block">
        <a href="">
           <div class="item">
        <a href="Detail.php?dname=<?php echo $dname ?>" ><img src="http://localhost/dashboard/TrawelToElla2/TrawelToElla/uploads/<?php echo $row['Thumb'] ?>" alt="" class="img-fluid"></a>
      </div>

        </a>
       
        <div class="card-title"><?php echo $row['DName'] ?></div>
        <div class="card-text">
          This is my palse...
        </div>
        <a href="" class="btn btn-success">Click Here</a>
      </div>
    </div>
  </div>



    <?php
   
  }
 }else
 {
  $output = '<h3>No Data Found</h3>';
 }
 


?>




  
  

 

</div>

<br>


</div>
<!-- end main content-->




<?php include 'footer.php';?>