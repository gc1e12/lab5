<?php require('includes/header.php'); ?>
<?php require('includes/db.php'); ?>
<?php include('classes/car.class.php'); ?>

<!-- main content -->
<div id="content" class="row">


	
	<h2>See all cars we have available from <?php echo $_GET["name"] ?></h2>
		
	<!-- car list -->
	<div id="car-list" class="row">
		
		<!-- =========================== -->
		<!-- PART 2 CAR LIST PLACEHOLDER -->
		<!-- =========================== -->

		<?php 

			$id = $_GET["id"];

			$cars = $db->query("SELECT * FROM car WHERE manufacturer_id = $id;");

			while ($targetcar = $cars->fetch_object("car")){

				//print_r($targetcar);
				echo "<div class = 'well'>";
				echo "<p><b>ID is </b> $targetcar->id ";
				//echo "<p><b>manufacturer_id is </b> $targetcar->manufacturer_id ";
				echo "<p><b>Colour : </b> $targetcar->colour_id ";
				echo "<p><b>Price : &pound </b> $targetcar->price ";
				echo "<p><b>Description </b> is $targetcar->description ";
				echo "<p><b>RegNumber is </b> $targetcar->regNumber ";
				echo "<p><b>RegDate is </b> $targetcar->regDate ";
				echo "</div>";
			}

			

		?>
		
	</div><!-- /car list -->
	
</div><!-- /main content -->


<?php require('includes/footer.php'); ?>