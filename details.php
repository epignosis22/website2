<?php 

	include('config/db_connect.php');
	// check GET request id param
	if(isset($_GET['id'])){
		
		// escape sql chars
		$id = mysqli_real_escape_string($conn, $_GET['id']);

		// make sql
		$sql = "SELECT * FROM sites_tbl WHERE id = $id";

		// get the query result
		$result = mysqli_query($conn, $sql);

		// fetch result in array format
		$site = mysqli_fetch_assoc($result);

		mysqli_free_result($result);
		mysqli_close($conn);

	}

?>

<?php include('templates/header.php'); ?>

<?php if($site): ?>
	<div class="container">
		<!-- head -->
		<div class="head">
			<div class="brand"><h3>Safari Adventure</h3></div>
			<div class="search"></div>
		</div>
		<!-- banner -->
		<div class="banner">
			<div class="img">
				<img src="images/<?php echo htmlspecialchars($site['image']); ?>" alt="">
			</div>
			<div class="text">
				<h1><?php echo htmlspecialchars($site['name']); ?></h1>
			</div>
		</div>
	</div>
<section class="abouts">
	<div class="container">
		<h2><?php echo htmlspecialchars($site['name']); ?></h2>
		<h3>Location:<span><?php echo htmlspecialchars($site['location']); ?></span></h3>
		<h3>About:</h3>
		<p class="lead">
			<?php echo htmlspecialchars($site['description']); ?>
		</p>
		<h3>What to expect:</h3>
		<p class="lead">
			<?php echo htmlspecialchars($site['activities']); ?>
		</p>
	</div>
</section>

<?php else: ?>
	<h1 class="hcenter">No such site exists.</h1>
<?php endif ?>

	<?php include('templates/footer.php'); ?>