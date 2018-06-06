<?php require 'header.php'; ?>

<?php if($_SESSION['user']['role'] === 'admin'):?>
<h1>Admin</h1>
<?php else:
  header('location:home.php');
endif;
