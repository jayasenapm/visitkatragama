
<?php 

//index.php

include('database_connection.php');
$dd=$_GET['dname'];

?>

<?php include 'head.php';?>


<div class="container">
	
		<div class="" style="margin:  auto; width: 100%;" >
				



				 <?php
				 	$iid='';

                    $query = "SELECT  * FROM discription WHERE DID = '$dd'  ORDER BY DID DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)

                    {
                    $iid=$row['DID'];
                    ?>

                   
                <h2 class="w3l_header"><?php echo $row['DID'];?> </h2>
				<p><?php echo $row['Discription'];?></p>
					
				
                    	
			</div>
			
		<!-- //map -->
		
		
			<div class="container ">
				<div class="row">

					<?php 
					$query = "SELECT  * FROM user_uploads WHERE user_id = '$iid'  ORDER BY id DESC";
                    $statement1 = $connect->prepare($query);
                    $statement1->execute();
                    $result1 = $statement1->fetchAll();
                    foreach($result1 as $row1)

                    {

					?>


   
   
  <div class="col-md-4 col-sm-12 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#1<?php echo $row1['image_name']; ?>">
          <img src="uploads/<?php echo $row1['image_name']; ?>">
        </a>
        <div class="modal fade" id="1<?php echo $row1['image_name']; ?>" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="uploads/<?php echo $row1['image_name']; ?>">
              </div>
                <div class="col-md-12 description">
                  <h4></h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 
 			<?php 
				} 

				?>
					
					
				
					
			</div>
		</div>



      <!-- /map -->
      <div class="container" style="border:0" allowfullscreen>
        <h1>Find Location</h1>
        <div class="row">
          <div class="col-md-12" wi>
        <?php echo $row['map']; ?>
          </div>
      </div>
    </div>



<?php
                    }
                    ?>
		
	



</div>

<?php include 'footer.php';?>


 



