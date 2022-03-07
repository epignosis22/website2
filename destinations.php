<?php

	include('config/db_connect.php');

	// write query for all destinations
	$sql = 'SELECT * FROM destinations';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$destinations = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);

?>

<?php include('templates/header.php'); ?>
<h1 class="center py-extreme h1 white">Destinations</h1>
<section id="cards">
<div class="container">
    <div class="grid-cards">
        <?php foreach($destinations as $destination): ?>
        <div class="card">
            <div class="card-img">
                <img src="img/<?php echo htmlspecialchars($destination['image']); ?>" alt="<?php echo htmlspecialchars($destination['name']); ?>" class="img-cover">
            </div>
            <div class="card-body">
                <h3><?php echo htmlspecialchars($destination['name']); ?></h3>
                <p class=""><?php echo htmlspecialchars($destination['description']); ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
</section>

<?php include('templates/footer.php'); ?>
