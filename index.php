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
</style>
</head>
<body  bgcolor="D3D3D3">
  <form action="viewusers.php">

<ul >
  <li><a  href="viewusers.php">View Users</a></li>
<li><a class="active" href="index.php" >Home</a></li>
  
</ul>
<br><br><br><br>
<center>
  <strong>
    <b>
      <font size="5" color="blue">
      <h1>Welcome</h1>
      <h2> to</h2>
      <h1> Credit Management!!!</h1>
   </font>
    </b>
  </strong>
  
<br><br><br><br>
<h3>To proceed further <button class="button" type="submit"><strong>Click here!!</strong></button></h3>
</center>
</form>
</body>
</html>
