<!DOCTYPE html>
<html>
<head>
<body>
<?php

// Create a cookie variable that should be accessible on all the pages and should be destroyed if the session is closed or the user closes the website
setcookie("Keerthana", "1158", time(), "/");
// Accessing the Cookies
echo "Cookie is destroyed after the session:".$_COOKIE["Keerthana"];

?>


</head>
</body>		
</html>	