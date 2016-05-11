<?php
session_start();
// var_dump($_SESSION);
if(!isset($_SESSION['loggedin'])) {
	require('management/templates/login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Backend</title>

	<script type="text/javascript" src="/management/src/js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="/management/src/js/bootstrap.js"></script>

	<link rel="stylesheet" href="/management/src/css/bootstrap.css">
	<link rel="stylesheet" href="/management/src/css/style.css">
</head>
<body>



	<div class="container container-login">
		<div class="panel panel-custom panel-login">
			<div class="panel-body">
				<?php if($_SESSION['user'] == "jessi") { ?>
					<p>Hallo Jessi! Hier kommt bald noch viel mehr!</p>
				<?php } ?>
					<a href="/usatrip/" title="" style="color:#000">USA-Trip-Link</a>
			</div>
		</div>
	</div>
</body>
<script>

	
</script>

</html>