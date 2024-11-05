<?php 


$conn = mysqli_connect('localhost','bp','1234','urbanease');

if(!$conn){
 echo 'Conncection error: '.mysql_connect_error();
}
?>