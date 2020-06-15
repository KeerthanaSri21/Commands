

<?php
include_once 'Connection.php' ;
//INNER JOIN:
  echo "<br><b>Inner Join</b><br>";
$sql = "SELECT authors.name, books.title
FROM authors
INNER JOIN books ON authors.book_id = books.book_id;";


$Result = mysqli_query($conn, $sql);
$Check = mysqli_num_fields($Result); 
  if($Check > 0){
  while($row = mysqli_fetch_assoc($Result)){
	  print_r($row['name']);
	  echo "<br>";
  } 
  }
  else{
	  echo "No Result";
  }
  
//LEFT JOIN:
echo "<br><b>LEFT Join</b><br>";
$sql = "SELECT authors.name, books.title
FROM authors
LEFT JOIN books ON authors.book_id = books.book_id;";


$Result = mysqli_query($conn, $sql);
$Check = mysqli_num_fields($Result); 
  if($Check > 0){
  while($row = mysqli_fetch_assoc($Result)){
	  print_r($row['title']);
	  echo "<br>";
  } 
  }
  else{
	  echo "No Result";
  }
//RIGHT JOIN:
echo "<br><b>Right Join</b><br>";
$sql = "SELECT authors.name, books.title
FROM authors
Right JOIN books ON authors.book_id = books.book_id;";


$Result = mysqli_query($conn, $sql);
$Check = mysqli_num_fields($Result); 
  if($Check > 0){
  while($row = mysqli_fetch_assoc($Result)){
	  print_r($row['name'])."<br>";
	  print_r($row['title'])."<br>";
	  echo "<br>";
  } 
  }
  else{
	  echo "No Result";
  }

  
?>

