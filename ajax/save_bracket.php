<?php
if (isset($_POST['name']) === true && empty($_POST['name']) === false){

require '../inc/opendb.php';

$name = trim($_POST['name']);

//$initial_sql = "SELECT users_table.user_name FROM users_table";

// try{
// 	$db->query("INSERT INTO users_table (user_name) VALUES(". trim($_POST['name']) .")");
// }catch(Exception $e){
// 	echo "Data not retrieved";
// }

// $query = 
$bracket_name = trim($_POST['name']);
$r1aa = trim($_POST['r1aa']);
$r1ab = $r1ac = $r1ad= $r1ba= $r1bb= $r1bc= $r1bd= $r2aa= $r2ab= $r2ba= $r2bb= $r3a= $r3b= $r4 = $r1aa;
$bracket_lock = 0;
$sql = "INSERT INTO users_table (user_name) VALUES ('$name');";
$sql2 = "INSERT INTO brackets_table (bracket_lock, bracket_name, r1aa, r1ab,	r1ac, r1ad,	r1ba, r1bb, r1bc, r1bd,	r2aa, r2ab,	r2ba, r2bb,	r3a, r3b, r4) VALUES ('$bracket_lock','$bracket_name','$r1aa','$r1ab','$r1ac','$r1ad','$r1ba','$r1bb','$r1bc','$r1bd','$r2aa','$r2ab','$r2ba','$r2bb','$r3a','$r3b','$r4');";
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
if (!mysqli_query($con,$sql2)) {
  die('Error: ' . mysqli_error($con));
}
 $sql_return = "SELECT brackets_table.id FROM brackets_table WHERE bracket_name = '$bracket_name';";
 $resulting = mysqli_query($con,$sql_return);
 $result = $resulting->fetch_array();
 $sql_name = "UPDATE users_table SET bracket_id = '$result[0]' WHERE user_name = '$name';";
 if (!mysqli_query($con,$sql_name)) {
  die('Error: ' . mysqli_error($con));
}
echo $name . " has been saved!";	


}

mysqli_close($con);
