<?php
$link = mysqli_connect('localhost','root','','Mid_Term_Su');
if($link==false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}
$sql = "CREATE TABLE Department(
    fid INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    fname VARCHAR(30) NULL,
    deptid INT NULL)";
if(mysqli_query($link, $sql))
{
    echo "Table Created";
}    
else{
    echo "Error: Could not able to create table." .mysqli_error($link);
}
mysqli_close($link)
?>