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

<ul >
  <li><a  class="active" href="crdtr.php">View Users</a></li>
<li><a  href="index.php" >Home</a></li>
</ul>
<center>

<h1  style="color:blue;">Successfully credit transfered!!</h1>

<br>
<?php

$con=mysqli_connect('localhost','root','root','credittransfer');

$s="SELECT * from users";
$result=$con->query($s);

if($result->num_rows>0)
{
  echo "<h2><table ><tr><th>Name </th><th>E-mail</th><th>Credit</th></tr>";

  while($row=$result->fetch_assoc())
  {
    echo "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['credit']."</td></tr>";
  }
echo "</table></h2>";
}
?>
</center>
</body>
</html>
