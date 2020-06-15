
CREATE TABLE AUTHORS (
    id INT not null PRIMARY KEY AUTO_INCREMENT, 
    name VARCHAR(20) NOT NULL, 
    email VARCHAR(20) NOT NULL
    );
INSERT INTO Authors (id,name,email) VALUES(1,"Keerthana","keerthana@abc.com");
INSERT INTO Authors (id,name,email) VALUES(2,"Srinivasan","srini@gmail.com");
INSERT INTO Authors (id,name,email) VALUES(3,"Akil","akil@yahoo.com");


INSERT INTO users (id, first_name, enabled, last_login)
VALUES ('1', 'John Smith', 'f',TIMESTAMP(''),
('2', 'Alice Walker', 't', TIMESTAMP(''),
('3', 'Harry potter', 't', TIMESTAMP(''),
('4', 'Jane smith', 't', TIMESTAMP('');

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
	$sql = "SELECT authors.name, books.title, book_authors.AUTHORS_id
FROM ((authors
LEFT JOIN books ON authors.book_id = Customers.book_id)
INNER JOIN book_authors ON authors.book_id= book_authors.book_id);";
	
$Result =  mysqli_query($conn, $sql);

if($Check > 0){
   while($row = mysql_fetch_array($Result, MYSQL_ASSOC)) {
      echo "authors:{$row['name']}  <br> ".
         "books: {$row['title']} <br> ".
         
         "--------------------------------<br>";
   }
   }
   else{
   echo "Fetched data successfully\n";
   }
	
}
else{
	echo "No Result";
}
?>

</body>
</html>
</body>
</html>