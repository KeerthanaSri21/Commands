<?php
 
 include_once 'Connection.php' ;
 ?>
 <!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php
	$sql = "SELECT * FROM authors";
	$Result = mysqli_query($conn, $sql);
	$Check = mysqli_num_fields($Result);
	
	if($Check > 0){
		while($row = mysqli_fetch_assoc($Result)){
			echo $row['name'] ."<br>";
		}
	}
?>

</body>
</html>