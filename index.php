<?php
if (isset($_GET['number'])) {
	$n_character = (int) $_GET['number'];
	var_dump($n_character . 'debug');
}

?>

<!DOCTYPE html>
<html lang="it">

<head>
	<?php
	include __DIR__ . '/head.php';
	?>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-6 mx-auto mt-5">
				<div class="card">
					<div class="card-header">
						<h1>Generatore</h1>
					</div>
					<div class="card-body">
						<form class="form-floating" action="./" method="GET">
							<input type="number" nome="number" class="form-control" id="number">
							<label for="number">Lunghezza Pass...</label>
							<button type="submit" class=" mt-3 btn btn-primary">GENERA</button>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>

</body>

</html>