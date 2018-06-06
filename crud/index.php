<?php
session_start();
require_once "db.php";
//Getting Input value
if(isset($_POST['login'])){
  $username=mysqli_real_escape_string($conn,$_POST['username']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);
  if(empty($username)&&empty($password)){
  $error= 'Fileds are Mandatory';
  }else{
 //Checking Login Detail
 $result=mysqli_query($conn,"SELECT * FROM people WHERE email='$username' AND password='$password'");
 $row=mysqli_fetch_assoc($result);
 $count=mysqli_num_rows($result);

 if($count==1){
      $_SESSION['user']=array(
   'username'=>$row['username'],
   'password'=>$row['password'],
   'role'=>$row['role']
   );
	 header('location:home.php');
 }else{
 $error='Your PassWord or UserName is not Found';
 }

}
}
?>
<html>
<head>
<title>PHP MySQL Role Based Access Control</title>
</head>
<div align="center">
<h3>PHP MySQL Role Based Access Control</h3>
<form method="POST" action="">
<table>
   <tr>
     <td>UserName:</td>
  <td><input type="text" name="username"/></td>
   </tr>
   <tr>
     <td>PassWord:</td>
  <td><input type="text" name="password"/></td>
   </tr>
   <tr>
     <td></td>
  <td><input type="submit" name="login" value="Login"/></td>
   </tr>
</table>
</form>
<?php if(isset($error)){ echo $error; }?>
</div>
</html>
