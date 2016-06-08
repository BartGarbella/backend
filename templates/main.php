<?php


$req = new Query();

$array = $req->getResources($_SESSION['user']);



?>

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
		<div class="">
			<div id="navbar-left" class="col-md-2 collapse" aria-expanded="false">
				<div  class="nav-custom" >
					<div class="">
						<div class="resource-list">
							<?php 	foreach ($array as $row) { ?>
								<div class="resource-item" value="" href="">
									<a href="/<?= $row['name'] ?>/" title="">
										<div class="nav-link">
											<p href=""><?= $row['name'] ?></p>
										</div>
									</a>
									<div class="nav-line"></div>
								</div>
								<?php } ?>
							</div>	
						</div>
					</div>
				</div>
				<div id="content" class="col-md-12">
				</div>
			</div>
		</div>


	</body>
	<script type="text/javascript" src="/management/src/js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="/management/src/js/bootstrap.js"></script>

	<link rel="stylesheet" href="/management/src/css/bootstrap.css">
	<link rel="stylesheet" href="/management/src/css/style.css">
	<script type="text/javascript" src="/management/src/js/stylefunc.js"></script>
	<script type="text/javascript" src="/management/src/js/rendering.js"></script>

	</html>