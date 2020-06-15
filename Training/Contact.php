<!DOCTYPE html>
<html>
<head>
<body>
<?php include 'Index.php';?>

<?php
session_start();
/* creating Session */
$_SESSION["Age"] = "21";
$_SESSION["Address"] = "Chennai";
/*session created*/
print_r( $_SESSION);

/* Updating Session */
$_SESSION["Name"]="Keerthana";
/*it is my new session*/
$_SESSION["Name"]="KeerthanaSrinivasan";
/*session updated*/

/* Deleting Session */
unset($_SESSION);
echo "Session are removed";


?>
</head>
</body>		
</html>	