<?php require('includes/header.php'); ?>
<?php require('includes/db.php'); ?>


<!-- main content -->
<div id="content" class="row">
	
	<h2>We have cars from many manufacturers around the world!</h2>
		
	<!-- manufacturer list -->
	<div id="manufacturer-list" class="row">
		
		<!-- ==================================== -->
		<!-- PART 1 MANUFACTURER LIST PLACEHOLDER -->
		<!-- ==================================== -->

		<?php 

			// this store the query output from table manufacturer table
			$manufacturers = $db->query("SELECT * FROM manufacturer;");

			//loop thought the $manufactuerer and select the attribute to display
			while ($manufacturer = $manufacturers->fetch_object()){

				$id = $manufacturer->id;
				$name = $manufacturer->name;

				echo "<div class = 'well'>";

				echo "<p> id is <b> $id </b> </p>";
				echo "<p> name is <b> $name </b> </p>";
				echo "</div>";

			}

		?>
		
	</div><!-- /manufacturer list -->
	
</div><!-- /main content -->


<?php require('includes/footer.php'); ?>