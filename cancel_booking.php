<?php 
$db = mysql_connect('localhost','root','') or die('could not connect to server');
mysql_select_db('carrental',$db) or die('coluldnot connect to databse');
$id=$_GET['del'];
$sql = "delete from tblbooking  WHERE id="+$id;
mysql_query($sql);
header('Location my-booking.php');


?>