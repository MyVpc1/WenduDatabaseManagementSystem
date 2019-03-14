
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
<title>List of Courses</title>
</head>
<body>
<center><h1>Courses</h1></center>
<?php
$hostname =“localhost”;
$username=“harry”;
$password=“20182018”;
$databasename=“school”;
$dbConnected = new mysqli($hostname,$username,$password,$databasename);
?>

<?php
$sql=“SELECT * FROM course”;
$result = mysqli_query($dbConnected,$sql);

echo “<table>
<tr><th>courseNo</th>
<th>name</th>
<th>tuition</th>
<th>start_time</th>
<th>end_time</th>
<th>class duration</th>
<th>teacher</th>
<th>seats</th>
<th>campus</th>
</tr>”;
if (mysqli_num_rows($result)>0){
while($row = mysqli_fetch_assoc($result)) {
echo”<tr>
<td>”.$row[“courseNo”].”</td>
<td>”.$row[“name”].”</td>
<td>”.$row[“tuition”].”</td>
<td>”.$row[“start_time”].”</td>
<td>”.$row[“end_time”].”</td>
<td>”.$row[“length”].”</td>
<td>”.$row[“seats”].”</td>
<td>”.$row[“campus”].”</td>
</tr>”;
}}
echo “</table>”;
?>
</body>
</html>