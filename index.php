<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ubuntu Server-PHP deployment</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body>

	<p>Ubuntu Server-PHP deployment - Ellysha Lao</p>

</body>
<form action="submit.php" method="POST">
	<div class="container">
		<label>Firstname:</label>
		<input type="text" name="firstname" class="form-control" required>
	</div>
	<div class="container">
		<label>Middle:</label>
		<input type="text" name="middlename" class="form-control">
	</div>
	<div class="container">
		<label>Lastname:</label>
		<input type="text" name="lastname" class="form-control" required>
	</div>
	<div class="container">
		<label>Age:</label>
		<input type="number" name="age" class="form-control" required>
	</div>
	<div class="container">
		<label>Address:</label>
		<input type="text" name="address" class="form-control" required>
	</div>
	<div class="container">
		<label>Course & Section:</label>
		<input type="text" name="courseandsec" class="form-control" required>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>