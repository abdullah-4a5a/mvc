<?php require 'header.php'; ?>

<?php if($_SESSION['user']['role'] === 'medewerker'):?>
<h1>Medewerker</h1>
<?php else:
  header('location:home.php');
endif;
