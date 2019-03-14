
<!DOCTYPE html>

<html>
<head>
<style>
table {
font-family: arial, sans-serif;
border-collapse: collapse;
width:100%;
}
td, th{
border:1px solid #dddddd
text-align: left;
padding: 8 px;
}
tr:nth-child(even) {
background-color: #dddddd;
}
</style>
<title>Welcome to Wendu Coding Class Website!</title>
</head>
<body>
<center><h1>Teacher Table</h1></center>
<?php
$hostname =“localhost”;
$username=“harry”;
$password=“20182018”;
$databasename=“school”;
$dbConnected = new mysqli($hostname,$username,$password,$databasename);
?>

<?php
$sql=“SELECT * FROM teacher”;
$result = mysqli_query($dbConnected,$sql);

echo “<table>
<tr><th>teacherID</th>
<th>full name</th>
<th>email</th>
<th>phone</th>
<th>username</th>
<th>salaryRate</th>
<th>campus</th>

</tr>”;
if (mysqli_num_rows($result)>0){
while($row = mysqli_fetch_assoc($result)) {
echo”<tr>
<td>”.$row[“teacherID”].”</td>
<td>”.$row[“firstname”].” “.$row[“lastname”].”</td>
<td>”.$row[“email”].”</td>
<td>”.$row[“phone”].”</td>
<td>”.$row[“username”].”</td>
<td>”.$row[“salaryRate”].”</td>
<td>”.$row[“campus”].”</td>

</tr>”;
}}
echo “</table>”;
?>
</body>
</html>