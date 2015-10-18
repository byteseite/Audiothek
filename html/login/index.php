<?php $users = array('Franz', 'Annegret', 'Ferdinand'); ?>
<?php if( isset($_GET['user']) ) {
	header('Location: /');
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto+Condensed:400,300italic,300' rel='stylesheet' type='text/css'>
	<link href='/style.css' rel='stylesheet' type='text/css'>
	<link href='/login/style.css' rel='stylesheet' type='text/css'>
	<title></title>
</head>
<body>
	<header>Audiothek</header>
	<div class="login">
<?php foreach($users as $user) {?>
		<a href="?user=<?php echo $user; ?>"><?php echo $user; ?></a>
<?php } ?>
	</div>
</body>
</html>
