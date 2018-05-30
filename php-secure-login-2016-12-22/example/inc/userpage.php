<!DOCTYPE html>
<html lang="nl">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Welcome <?php print $_SESSION['user']['id'].' '.$_SESSION['user']['email']; ?></h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Email</th>
      </tr>
    </thead><tbody>
    <?php if($_SESSION['user']['user_role'] == 2){
    	foreach ($vars as $user) {
    	?>
    		<tr>
		        <td><?=$user['email']?></td>
		    </tr>
    	<?php
    	}
    }else{ ?>
      <tr>
        <td><?=$_SESSION['user']['email']?></td>
      </tr>
    <?php } ?></tbody>
  </table>
  <p><a href='logout.php'>Logout</a></p>

  <?php var_dump($_SESSION); ?>
</div>

</body>
</html>
