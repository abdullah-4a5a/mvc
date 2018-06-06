<?php
session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:index.php');
}
?>
<!doctype html>
<html>
  <head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
td{
  border: 1px solid;
}

.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
}
</style>
</head>
  <body>

<ul>
  <li><a href="crudhandler.php?create" name="create">Create person</a></li>
  <li><a href="medewerker.php">medewerker</a></li>
<?php if($_SESSION['user']['role'] === 'admin'):?>
  <li><a href="admin.php">admin</a></li>
<?php endif; ?>
</ul>
<a class="nav-link" href="logout.php">
  <i class="fa fa-fw fa-sign-out"></i>Logout
</a>

<?php var_dump($_SESSION['user']['role']); ?>
