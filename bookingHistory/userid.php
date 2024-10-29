<?php

require_once 'Order-list.php';

try{
    $SQL = "SELECT * FROM user WHERE Id = $user_id";
    $exec = $con->prepare($SQL);
    $exec->execute();
    $result2 = $exec->fetchAll(PDO::FETCH_NUM);

    // $new = count($result2);
	// $newResult = $result1[$new-1];
	// echo $user_name = $newResult[1];
	// echo "\n";
    // echo $user_email = $newResult[2];

	// print_r($user_id);

	echo "<h1>Login & Register Data</h1>";
	echo "<table border='1px solide black'><tr><th>Id</th><th>User Name</th><th>Email</th><th>Password</th></tr>";
	foreach($result2 as $row)
	{
		echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
        // echo $row[1]." ".$row[2];
	}
	echo "</table>";

} catch (PDOException $ex) 
{
	echo "Connection failed: ".$ex->getMessage();
}
?>