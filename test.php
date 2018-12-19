<?php

//fetch_data.php

include('database_connection.php');


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
   $output .= '
   <div class="col-sm-4 col-lg-4 col-md-4">
  
    <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:300px;">
     <a href="Detail.php?dname='.$row['DName'].'"><img src="uploads/'. $row['Thumb'] .'" alt="" class="img-responsive" width="100%"   ></a>
     <p align="center"><strong><a href="Detail.php?dname='.$row['DName'].'">'. $row['DName'] .'</a></strong></p>
     <h4 style="text-align:center;" class="text-danger" ></h4>
     
     
    
    </div>

   </div>
   ';
  }
 }
 else
 {
  $output = '<h3>No Data Found</h3>';
 }
 echo $output;
}

?>