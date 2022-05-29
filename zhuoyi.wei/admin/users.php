

<?php

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");



$empty_user = (object)[
	"name"=>"",
	"type"=>"",
	"email"=>"",
	"classes"=>[],
];



// file_put_contents json_encode explode $_POST
// CRUD, Create Read Update Delete


// print_p([$_GET,$_POST)];

if(isset($POST['action'])) {
	switch($_GET['action']) {
		case "update":
			$users[$_GET['id']]->name = $_POST['user-name'];
			$users[$_GET['id']]->type = $_POST['user-type'];
			$users[$_GET['id']]->email = $_POST['user-email'];
			$users[$_GET['id']]->classes = explode(", ", $_POST['user-classes']);

			file_put_contents($filename,json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		case "create":
			$empty_user->name = $_POST['user-name'];
			$empty_user->type = $_POST['user-type'];
			$empty_user->email = $_POST['user-email'];
			$empty_user->classes = explode(", ", $_POST['user-classes']);

			$id = count($users);

			$users[] = $empty_user;

			file_put_contents($filename,json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}?id=id");
			break;
		case "delete":
			array_splice($users,$_GET['id'],1);
			file_put_contents($filename,json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}");
			break;
	}
}



function showUserPage($user) {

$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";
$classes = implode(", ", $user->classes);

//heredoc
$display = <<<HTML
<div>
	<h2>$user->name</h2>
	<div>
		<strong>TYPE</strong>
		<span>$user->type</span>
	</div>
	<div>
		<strong>Email</strong>
		<span>$user->email</span>
	</div>
	<div>
		<strong>Classes</strong>
		<span>$classes</span>
	</div>
</div>
HTML;

$form = <<<HTML
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=createorupdate">
	<h2>$addoredit User</h2>
	<div class="form-control">
		<label class="form-label" for="user-name">Name</label>
		<input class="form-input" name="user-name" id="users-name" type="text" value="$user->name" placeholder="Enter the User Name">
	</div>
	<div class="form-control">
		<label class="form-label" for="user-type">Type</label>
		<input class="form-input" name="user-type" id="users-type" type="text" value="$user->type" placeholder="Enter the User Type">
	</div>
	<div class="form-control">
		<label class="form-label" for="user-email">Email</label>
		<input class="form-input" name="user-email" id="user-email" type="text" value="$user->email" placeholder="Enter the User Email">
	</div>
	<div class="form-control">
		<label class="form-label" for="user-classes">Classes</label>
		<input class="form-input" name="user-classes" id="user-classes" type="text" value="$classes" placeholder="Enter the User Classes, comma separated">
	</div>
	<div class="form-control">
	<input class="form-button" type="submit" value="Save Change"> 
	</div>
</form>
HTML;


$output = $id == "new" ? $form :
	"<div class='grid gap'>
		<div class='col-xs-12 col-md-7'>$display</div>
		<div class='col-xs-12 col-md-5'>$form</div>
	</div>
	";


$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";



echo <<<HTML
<nav class="display-flex">
	<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
	<div class="flex-none">$delete</div>
</nav>
$output
HTML;
}
?>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" type="text/css" href="../lib/css/styleguide.css">
	<link rel="stylesheet" type="text/css" href="../lib/css/gridsystem.css">
	<link rel="stylesheet" type="text/css" href="../css/storetheme.css">
	<title>User Admin Page</title>

	
	
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>User Admin </h1>
			</div> 
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
			<ul>
				<li><a href="./index.php">Home</a></li>
				<li><a href="./users.php">User List</a></li>
				<li><a href="./users.php ?id=new">Add New User</a></li>
			</ul>
				
			</nav>
		</div>
	</header>

	 <div class="container">
	

	 		<div class="card soft">

	 			 		<h2>User List</h2>
	 	<nav class="nav">
	 		<ul>
	 	<li>
	 			<a href='users.php?id=0'>Zhuoyi Wei</a>
	 		</li><li>
	 			<a href='users.php?id=1'>Amy Yang</a>
	 		</li><li>
	 			<a href='users.php?id=2'>Jenny</a>
	 		</li><li>
	 			<a href='users.php?id=3'>Lily</a>
	 		</li><li>
	 			<a href='users.php?id=4'>Zoe</a>
	 		</li><li>
	 			
	 		</ul>
	 	</nav>	
	 	
	 		</div>
	 </div> 

	 

</body>
</html>