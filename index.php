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

	
</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a id="brand" data-toggle="collapse" data-target="#navbar-left" class="navbar-brand">Your Resources</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<!-- <li id="listLi"><a class="navbutton" value="list">Liste</a></li>
				<li><a class="navbutton" value="create">Erstellen</a></li> -->
			</ul>
			<ul class="nav navbar-nav navbar-right">
			<?php if(isset($_SESSION['loggedin'])) { ?>
        		<li><a href="/management/functions/logout.php">Logout</a></li>
        	<?php } ?>
      		</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>


<div class="container container-backend">
	<div class="row">
		<div class="col-md-3">
			<div id="navbar-left" class="nav-custom collapse" aria-expanded="false">
				<div class="">
					<div class="resource-list">
						<div class="resource-item">
							
								<p>Link</p>
								<div class="nav-line"></div>

						</div>
						<div class="resource-item">
							
								<p>link 2</p>
								<div class="nav-line"></div>

						</div>
						<div class="resource-item">
							
								<p>Link 3</p>
								<div class="nav-line"></div>

						</div>
					</div>	
				</div>
			</div>
		</div>
		<div class="col-md-9">
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
		
		</div>
	</div>
</div>


</body>
<script type="text/javascript" src="/management/src/js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="/management/src/js/bootstrap.js"></script>

	<link rel="stylesheet" href="/management/src/css/bootstrap.css">
	<link rel="stylesheet" href="/management/src/css/style.css">
<script type="text/javascript" src="/management/src/js/stylefunc.js"></script>

</html>