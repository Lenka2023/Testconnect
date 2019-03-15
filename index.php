<?php
$mysqli=new mysqli ('localhost', 'one', '', "mysite");
//$query="INSERT INTO news(name_new, new,time) VALUES ('new', 'new11', '01:02:03')";
//$result= mysqli_fetch_assoc($query);
//var_dump $result;
$query1="SELECT* FROM news ";
$res = mysqli_query($mysqli, $query1);
$result1= mysqli_fetch_assoc($res);
//var_dump ($result1);
$query2="SELECT new FROM news where `id`=2";
$res2 = mysqli_query($mysqli, $query2);
$result2= mysqli_fetch_row($res2);
//var_dump ($result2[0]);
echo $result2[0];
//print_r ("$result2");
