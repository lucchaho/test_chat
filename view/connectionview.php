<?php
session_start(); // dfs
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
	<script type="text/javascript">
	</script>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
			<form method="post" action="../controller/connectioncontroller.php">
				 <div class="form-group">
			    <label for="pseudo">Pseudo :</label>
			    <input type="text" name="pseudo" required class="form-control" id="pseudo">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password" name="password" placeholder="****" maxlength="255" size="35" required class="form-control" id="pwd">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			  </form>
			</div>
		</div>
	</div>
	<span>Pas de compte ? <a href="inscriptionview.php">Inscris-toi !</a></span>
</body>
</html>