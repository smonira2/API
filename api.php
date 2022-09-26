<?php
$host="localhost";
$db_user="id6980198_fahad";
$db_password="fahad";
$db="id6980198_firstdb";

$con= mysqli_connect($host,$db_user,$db_password,$db);

$sql="select *from StudentInfo";

$result=mysqli_query($con,$sql);

$response = arry();

	while ($row=mysqli_fetch_arry($result)) {

			array_push($response, $array("StudentName" => $row[1],"StudentImage" => $row[2],"StudentAddress" => $row[3],"StudentPhone" => $row[4]));
		}

		echo json_encode(array("server_responce"=>$response));

?>