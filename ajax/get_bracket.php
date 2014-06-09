<?php
if (isset($_POST['name']) === true && empty($_POST['name']) === false){

require '../inc/opendb.php';

$name = trim($_POST['name']);
$sql_return = "SELECT users_table.bracket_id FROM users_table WHERE user_name = '$name';";
$resulting = mysqli_query($con,$sql_return);
$result = $resulting->fetch_array();

$sql_return_2 = "SELECT * FROM brackets_table WHERE id = '$result[0]';";
$resulting = mysqli_query($con,$sql_return_2);
$result = $resulting->fetch_array();

echo json_encode($result);

}

mysqli_close($con);
