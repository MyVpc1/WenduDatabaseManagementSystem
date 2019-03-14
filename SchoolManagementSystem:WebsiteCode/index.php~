
<!DOCTYPE html>
<?php
header("Location: http://wendu.ca");
?>
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
<center><h1>Student Table</h1></center>
<?php
$hostname =“localhost”;
$username=“harry”;
$password=“20182018”;
$databasename=“school”;
$dbConnected = new mysqli($hostname,$username,$password,$databasename);
?>

<?php
$sql=“SELECT * FROM student”;
$result = mysqli_query($dbConnected,$sql);

echo “<table>
<tr><th>studentID</th>
<th>full name</th>
<th>email</th>
<th>username</th>

<th>campus</th>
<th>fund</th>
</tr>”;
if (mysqli_num_rows($result)>0){
while($row = mysqli_fetch_assoc($result)) {
echo”<tr>
<td>”.$row[“studentID”].”</td>
<td>”.$row[“firstname”].” “.$row[“lastname”].”</td>
<td>”.$row[“email”].”</td>
<td>”.$row[“username”].”</td>

<td>”.$row[“campus”].”</td>
<td>”.$row[“fund”].”</td>
</tr>”;
}}
echo “</table>”;
?>
</body>
</html>