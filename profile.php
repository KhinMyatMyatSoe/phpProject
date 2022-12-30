




<?php
	include("vendor/autoload.php");
	use Helpers\Auth;
	$user = Auth::check();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-4" style="max-width: 600px">
		<h1 class="h4"><?= $user->name ?> (<?= $user->role ?>)</h1>

		<form action="_actions/upload.php" method="post" enctype="multipart/form-data" class="my-4">
			<div class="input-group">
				<input type="file" class="form-control">
				<input type="submit" value="upload" class="btn btn-secondary">
			</div>
		</form>

		<ul class="list-group mb-4">
			<li class="list-group-item">
				<b>Email:</b> <?= $user->email ?>
			</li>
			<li class="list-group-item">
				<b>Phone:</b> <?= $user->phone ?>
			</li>
			<li class="list-group-item">
				<b>Address:</b> <?= $user->address ?>
			</li>
		</ul>

		<a href="_actions/logout.php" class="text-danger">Logout</a> |
		<a href="admin.php">User Admin</a>
	</div>
</body>
</html>