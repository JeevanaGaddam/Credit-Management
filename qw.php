
<!DOCTYPE html>
<html>
<head>
<style >
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: right;
}
.button {
  background-color: #F3E8F4;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.btn{
  background-color: #4CAF50;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


li a {
  display: block;
  color: white;
  text-align: right;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body  bgcolor= "D3D3D3">
 <form action="qw.php" method="POST"> 
<ul >
  <li><a class="active" href="viewusers.php">View Users</a></li>
<li><a  href="index.php" >Home</a></li>
  
</ul>
<center>
<br><br><br><br><br><br>
<h1 style="color:blue;">To transfer the credit please select one user</h1><br><br>
  <form action="qw.php" method="POST">
<select class="button" name="us" required >
  <option value="">Select one User</option>
  <option value="x">X</option>
  <option value="y">Y</option>
  <option value="q">Q</option>
  <option value="w">W</option>
  <option value="p">P</option>
  <option value="ik">IK</option>
  <option value="h">H</option>
  <option value="k">K</option>
  <option value="r">R</option>
  <option value="f">F</option>

</select>
<br><br><br>
<input class="button" type="text" name="credit"  placeholder="Enter the credit" required><br><br><br>
<input name="submit" class="btn" type="submit" value="Credit Transfer">
</form>
</body>
</center>
</HTML>

<?php
$con=mysqli_connect('localhost','root','root','credittransfer');
$name=$_POST['us'];
$amount=$_POST['credit'];
if(isset($_POST['submit']))
{
  $q="INSERT into transfers(name,credit) values('$name','$amount')";
  $v=mysqli_query($con,$q);
  $q1="SELECT credit from users where name='$name'";
  $re=$con->query($q1);
if($re->num_rows>0)
{
  $row=$re->fetch_assoc();
$q22=$row['credit'];
  $q2=$q22+$amount;

}
  $q12="UPDATE users SET credit='$q2' where name='$name'";
  $r=mysqli_query($con,$q12);
#header("location: crdtr.php");
#die();
  ?>
  <html>
  <script type="text/javascript">
    window.location.replace("crdtr.php");
  </script>
  </html>
  <?
}

?>


