
<?php 

//index.php

include('database_connection.php');
$dd=$_GET['dname'];

?>

<?php include 'head.php';?>










<div class="destination ">
  

</div>










<div class="container">
	
		<div class="title-2">
				



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

                   
                <h2 ><?php echo $row['DID'];?> </h2>
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


   
   
  <div class="col-md-6 col-sm-12 co-xs-12 gal-item">
     
        <a href="#" data-toggle="modal" data-target="#1<?php echo $row1['image_name']; ?>">
          <img src="http://localhost/dashboard/TrawelToElla2/TrawelToElla/uploads/<?php echo $row1['image_name']; ?>" width="100%">
        </a>
        <div class="modal fade" id="1<?php echo $row1['image_name']; ?>" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="http://localhost/dashboard/TrawelToElla2/TrawelToElla/uploads/<?php echo $row1['image_name']; ?>" width="100%">
              </div>
                <div class="col-md-12 description">
                  <h4></h4>
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
        <div class="title-2"><h2>Find Location</h2></div>
        <div class="row">
          <div class="col-md-12" wi>
        <?php echo $row['map']; ?>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31718.730679287444!2d81.3098223864343!3d6.4144275529679105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae4260426c19ea1%3A0x722d6bf359bc2aca!2sKataragama!5e0!3m2!1sen!2slk!4v1545640476006" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
      </div>
    </div>



<?php
                    }
                    ?>
		
	



</div>





<?php include 'footer.php';?>


 



