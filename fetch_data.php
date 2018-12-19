<?php

//fetch_data.php

include('database_connection.php');

if(isset($_POST["action"]))
{
 $query = "
  SELECT * FROM product WHERE product_status = '1'
 ";
 if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
 {
  $query .= "
   AND product_price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
  ";
 }
 if(isset($_POST["brand"]))
 {
  $brand_filter = implode("','", $_POST["brand"]);
  $query .= "
   AND product_brand IN('".$brand_filter."')
  ";
 }
  if(isset($_POST["brand1"]))
 {
  $brand_filter = implode("','", $_POST["brand1"]);
  $query .= "
   AND product_ram IN('".$brand_filter."')
  ";
 }
 if(isset($_POST["ram"]))
 {
  $ram_filter = implode("','", $_POST["ram"]);
  $query .= "
   AND product_ram IN('".$ram_filter."')
  ";
 }
 if(isset($_POST["storage"]))
 {
  $storage_filter = implode("','", $_POST["storage"]);
  $query .= "
   AND product_storage IN('".$storage_filter."')
  ";
 }

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
 <hi>jayasena</h1>
    <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:0px; height:300px;">
     <a href="Destination.php"><img src="images/'. $row['product_image'] .'" alt=""  class="img-responsive"   ></a>
     <p align="center"><strong><a href="Destination.php">'. $row['product_name'] .'</a></strong></p>
     <h4 style="text-align:center;" class="text-danger" ></h4>
     
     Location : '. $row['product_brand'] .' <br />
     Destination:'. $row['product_ram'] .' <br />
   
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