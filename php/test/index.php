<?php
$pass = 'DapHne';
$pass_hash = md5($pass);
$val=6;
$cutval=substr($pass_hash,0,$val);
$code=strtoupper($cutval);
//$pass_hash2 = md5($pass_hash);


?>

<input type="text"/>
<?php
echo $pass_hash;
echo '</br>';
echo $code;
//mail('pixar1942@yahoo.com', 'HTNL Email', '<h1>header</h1>', 'from: pixar1942@yahoo.com');
//echo -e "\033[32m Hello World"
echo "<br><font color='#ff0000'><strong>weeee</strong></font>";
?>
<br>
<br>
<br>
<?php
$var = 3;

if($var == 2) {
echo "<textarea  value='helloword' readonly='readonly' ></textarea>";
}
else{
echo "<textarea type='text' /></textarea>";
}

?>

<br>

<?php
// CAPTCHA-------------
session_start();

if(!isset($_POST['secure']))   {
	$_SESSION['secure'] = rand(1000,9999);
} else {
	if ($_SESSION['secure']!=$_POST['secure'])  {
		echo 'not match';
		$_SESSION['secure'] = rand(1000,9999);
	}  else {
		echo 'a match';
	
	}
}


?>
<br>


<form action="index.php" method="POST">
<img src="generate.php" /><br>
Type the value you see: <input type="text" size="6" name="secure"> <input type="submit" value="submit">
</form>

<!-- END OF CAPTCHA -->
<br>
<br>
<?php

$hostname='localhost';
$username='root';
$password='';
$dbname='xlibris';
$dbtable='wp_ap_appointments';

$con=mysql_connect($hostname, $username, $password) or die('unable to connect to database.');
mysql_select_db($dbname, $con);
// Searching start here!!
echo "
<form action='#' method='post'>
<strong>Search: </strong><input type='text' name='name' style='width:300px;'></br>
<input type='submit' name='submit' value='Submit'>
</form>
";
	 
if (empty($_POST['name'])) {

	echo 'Text field is empty. Please input your name or appointment key.';
}

	else{
$searching=$_POST['name'];

$sql = mysql_query("SELECT * FROM ($dbtable) WHERE name LIKE '$searching' or appointment_key LIKE '$searching'");
	if(mysql_num_rows($sql) <= 0 ) {
		echo 'Sorry no results found from database.';
	}
		else {
		while ($row = mysql_fetch_array($sql)){
			echo '<b>ID: </b>'.$row['id'];
			echo '<br/><b> Name: </b>'.$row['name'];
			echo '<br/><b> Start time: </b>'.$row['start_time'];
			echo '<br/><b> End time: </b>'.$row['end_time'];
			echo '<br/><b> Date: </b>'.$row['date'];
			echo '<br/><b> Appointment key: </b>'.$row['appointment_key'];			
			echo '<br/><br/>';
		}//end of while
	}//end of else for validation if name exist
}//end of else for Searching

echo "
<table style='text-decoration:none' border='2' width='800'><tr>
<th>ID<a href='?sort=id' style='text-decoration:none'> ^</a></th>
<th>Name<a href='?sort=name' style='text-decoration:none'> ^</a></th>
<th>Start Time<a href='?sort=start_time' style='text-decoration:none'> ^</a></th>
<th>End Time<a href='?sort=end_time' style='text-decoration:none'> ^</a></th>
<th>Appointment Date<a href='?sort=date' style='text-decoration:none'> ^</a></th>
<th>Appointment Key</th></tr>
";

$query = "SELECT id, name, start_time, end_time, date, appointment_key FROM ($dbtable)";
//sorting start
if (!empty($_GET['sort'])) {
   $sort = $_GET['sort'];
} else { 
   $sort = 'error on sorting'; //whatever your default value
}

if ($sort == 'id')
{
    $query .= " ORDER BY id";
}
elseif ($sort == 'name')
{
    $query .= " ORDER BY name";
}
elseif ($sort == 'start_time')
{
    $query .= " ORDER BY start_time";
}
elseif($sort == 'end_time')
{
    $query .= " ORDER BY end_time";
}
elseif($sort == 'date')
{
    $query .= " ORDER BY date";
}
//sorting end

	$result = mysql_query($query);
	
		if($result){
			while($row = mysql_fetch_array($result)) {

				echo"<tr width='500'>";
				echo "<td>".$row['id']."</td>";				
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['start_time']."</td>";
				echo "<td>".$row['end_time']."</td>";
				echo "<td>".$row['date']."</td>";
				echo "<td>".$row['appointment_key']."</td>";

				echo "</tr>";
	
			}
		echo "</table>";	

		}



?>





















<!------------------------------------------------------------- updatable

<?php

$hostname='localhost';
$username='root';
$password='';
$dbname='xlibris';
$dbtable='wp_ap_appointments';

$con=mysql_connect($hostname, $username, $password) or die('unable to connect to database.');
mysql_select_db($dbname, $con);
// Searching start here!!
echo "
<form action='#' method='post'>
<strong>Search: </strong><input type='text' name='formname' style='width:300px;'></br>
<input type='submit' name='submit' value='Submit'>
</form>
";
	 
if (empty($_POST['formname'])) {

	echo "<font color='#ff0000'><strong>Text field is empty. Please input your name or appointment key.</strong></font>";
}

	else{
$searching=$_POST['formname'];

$sql = mysql_query("SELECT * FROM ($dbtable) WHERE name LIKE '%$searching%' or appointment_key LIKE '%$searching%'");
	if(mysql_num_rows($sql) <= 0 ) {
		echo "<font color='#ff0000'><strong>Sorry no results found from database.</strong></font>";
	}
		else {
		while ($row = mysql_fetch_array($sql)){
			echo '<b>ID: </b>'.$row['id'];
			echo '<br/><b> Name: </b>'.$row['name'];
			echo '<br/><b> Start time: </b>'.$row['start_time'];
			echo '<br/><b> End time: </b>'.$row['end_time'];
			echo '<br/><b> Date: </b>'.$row['date'];
			echo '<br/><b> Appointment key: </b>'.$row['appointment_key'];			
			echo '<br/><br/>';
		}//end of while
	}//end of else for validation if name exist
}//end of else for Searching

echo "
<table style='text-decoration:none' border='2' width='800'><tr>
<th>ID<a href='?sort=id' style='text-decoration:none'> ^</a></th>
<th>Name<a href='?sort=name' style='text-decoration:none'> ^</a></th>
<th>Start Time<a href='?sort=start_time' style='text-decoration:none'> ^</a></th>
<th>End Time<a href='?sort=end_time' style='text-decoration:none'> ^</a></th>
<th>Appointment Date<a href='?sort=date' style='text-decoration:none'> ^</a></th>
<th>Appointment Key</th></tr>
";

$query = "SELECT id, name, start_time, end_time, date, appointment_key FROM ($dbtable)";
//sorting start
if (!empty($_GET['sort'])) {
   $sort = $_GET['sort'];
} else { 
   $sort = 'error on sorting'; //whatever your default value
}

if ($sort == 'id')
{
    $query .= " ORDER BY id";
}
elseif ($sort == 'name')
{
    $query .= " ORDER BY name";
}
elseif ($sort == 'start_time')
{
    $query .= " ORDER BY start_time";
}
elseif($sort == 'end_time')
{
    $query .= " ORDER BY end_time";
}
elseif($sort == 'date')
{
    $query .= " ORDER BY date";
}
//sorting end

	$result = mysql_query($query);
	
		if($result){
			while($row = mysql_fetch_array($result)) {

				echo"<tr width='500'>";
				echo "<td>".$row['id']."</td>";				
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['start_time']."</td>";
				echo "<td>".$row['end_time']."</td>";
				echo "<td>".$row['date']."</td>";
				echo "<td>".$row['appointment_key']."</td>";

				echo "</tr>";
	
			}
		echo "</table>";	

		}

?>


------------------->








