
<?php include 'head.php';?>

<body>
  







    <div class="container">
        <div class="col-md-12"> 
         <br />
         <h2 align="center"> Destination </h2>
         <br />
            

            <div class="col-md-12" style="">
          
                <div class="row filter_data">
                    <?php

//fetch_data.php

include('database_connection.php');


 $query = "SELECT * FROM destination WHERE Distination = 'Bandarawela'";
 

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($total_row > 0)
 {
  foreach($result as $row)
  {

?>

<div class="col-md-4 ">


      <center>
       <div class="ih-item square colored effect7"><a href="#">
        <div class="img"><img src="uploads/<?php echo $row['Thumb'] ?>" alt="img" ></div>
        <div class="info">
          <h3><?php echo $row['DName'] ?></h3>
          <p></p>
        </div>

      </div>
      <a href="Detail.php?dname=<?php echo $row['DName'];?> "><h3><?php echo $row['DName'] ?></h3></a>
    </center>



 </a>
  

 
  </div>
    



<?php
}
 }else
 {
  echo '<h3>No Data Found</h3>';
 }
 

?>

             </div>
            </div>
        </div>

    </div>




<?php include 'footer.php';?>