<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<title>Users</title>
</head>
<body>
	<div class="container mt-5">
		<div class="table">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Username</th>
				<th>Lastname</th>
				<th>Email</th>
				<th>Ações</th>
			</tr>
			<?php foreach($users as $user): ?>
				<tr>
					<td><?php echo $user ['id'] ?></td>
					<td><?php echo $user ['name'] ?></td>
					<td><?php echo $user ['username'] ?></td>
					<td><?php echo $user ['lastname'] ?></td>
					<td><?php echo $user ['email'] ?></td>
					<td>Ações</td>
				</tr>	
			<?php endforeach; ?>	
		</div>
	</div>

</body>
</html>