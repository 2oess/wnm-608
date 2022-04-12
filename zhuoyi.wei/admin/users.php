<?php

include "../lib/php/functions.php";

$users = file_json("../data/users.jason");






function showUserPage($user) {

$classes = implode(", ", $user->classes);
//heredoc
echo <<<HTML
<nav class="nav nav-crumbs">
	<ul>
		<li><a href="admin/users/php">Back</a></li>
	</ul>
</nav>
<div>
	<h2>$user->name</h2>
	<div>
		<strong>Type</strong>strong>
		<span>$user->type</span>
	</div>
	<div>
		<strong>Classes</strong>
		<span>$user->classes</span>
	</div>
</div>
HTML;
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Admin Page</title>

	<?php include "../parts/meta.php"; ?>
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<div class="card soft">
			

			<?php 

			if(isset($_GET['id'])){
				showUserPage($users[$_GET['id']]);
			} else {

			?>	
			<h2>User List</h2>

			<nav class="nav">
				<ul>
			<?php 

			for($i=0;$i<count($users);$i++){
				echo "<li>
					<a href='admin/users.php?id=$i'>{users[$i]->name}</a>
					</li>";
			}

			?>	
		</ul>
	</nav>

	<?php } ?>
		</div>
	</div>


</body>
</html>