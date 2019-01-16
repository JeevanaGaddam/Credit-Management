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
<body  bgcolor="D3D3D3">
 <form action="qw.php"> 
<ul >
  <li><a class="active" href="viewusers.php">View Users</a></li>
<li><a  href="index.php" >Home</a></li>
  
</ul>
<center>
<h1 style="color:blue;">Users are:</h1>

<?php

$con=mysqli_connect('localhost','root','root','credittransfer');

$s="SELECT name,credit from users";
$result=$con->query($s);

if($result->num_rows>0)
{
  ?>

<h2><table cellpadding="5" cellspacing="10"><tr><th>Name </th><th>Credit</th></tr>
  <?

  while($row=$result->fetch_assoc())
  {
    echo "<tr><td>".$row['name']."</td><td>".$row['credit']."</td></tr>";
  }
echo "</table></h2>";
}
?>

<button class="button" type="submit"><strong>Next</strong></button>

</center>

</body>
</html>



