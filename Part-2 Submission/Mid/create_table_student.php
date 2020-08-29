<?php
$link = mysqli_connect('localhost','root','','Mid_Term_Su');
if($link==false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}
$sql = "CREATE TABLE Student(
    snum INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    sname VARCHAR(30) NULL,
    major VARCHAR(25) NULL,
    level VARCHAR(2) NULL,
    age INT NULL)";
if(mysqli_query($link, $sql))
{
    echo "Table Created";
}    
else{
    echo "Error: Could not able to create table." .mysqli_error($link);
}
mysqli_close($link)
?>