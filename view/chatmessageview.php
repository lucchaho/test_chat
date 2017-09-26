<?php 
include_once("../controller/messagescontroller.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta charset="UTF-8" />
</head>
<body>
	<div class="container">
		<div class="row">
			<div id="messages" class="col-xs-12">
				<?php get_message(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<form method="post" action="../controller/messagescontroller.php">
					<div class="form-group">
						<label for="messages">Message:</label>
						<textarea class="form-control" rows="5" id="messages" name="messages"></textarea>
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
			<div class="col-xs-12">
				<form method="post" action="../controller/messagescontroller.php?deco=1">
					<button type="submit" class="btn btn-default">Deconnexion</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>