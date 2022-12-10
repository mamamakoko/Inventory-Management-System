<?php
// including the database connection file
include_once("../source/database.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($connection, $_POST['id']);
	
	$name = mysqli_real_escape_string($connection, $_POST['name']);
	$date = mysqli_real_escape_string($connection, $_POST['date']);	
	
	// checking empty fields
	if(empty($name) || empty($date)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($date)) {
			echo "<font color='red'>Date field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($connection, "UPDATE inventory SET itemName='$name',date='$date' WHERE itemID=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: ../dashboard.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['updateID'];

//selecting data associated with this particular id
$result = mysqli_query($connection, "SELECT * FROM inventory WHERE itemID=$id");

while($row = mysqli_fetch_array($result))
{
	$name = $row['itemName'];
	$date = $row['date'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	
	<form name="form1" method="post" action="modification.php">
		<table>
			<tr> 
				<td>Product Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Date Added</td>
				<td><input type="text" name="date" value="<?php echo $date;?>"></td>
			</tr>

            <tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['updateID'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>