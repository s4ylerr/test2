<?php 
header('content-type:text/html;charset=utf-8');

$conn = mysqli_connect('localhost', 'root', '', 'clothes');
// if (!$conn) {
// 	die("Connection failed: " .mysqli_connect_error());
// 	} else {
// 	echo "Connected successfully !";
// 	}
if(empty($_POST['submit'])){
	echo "<p>Insert new type </p>";
	echo "<form action='create.php' method='post'>";
//type_name!!! same as in the DB!!!
	echo "<input type='text' name='type_name'>";
	echo "<input type='submit' name='submit' value='insert'>";
	echo "</form>";
}
else{
//type_name!!! same as in the DB!!!	
	$type_name = $_POST['type_name'];
		//you can shorten var names - $insert_query - $q or smth else
	$insert_query = 	"INSERT INTO types (type_name) 
						VALUES ('$type_name')";
			//or $result
			$insert_result= mysqli_query($conn, $insert_query);
			if ($insert_result) {
				//success code can be read db query - 
				//you can print the entire info your newly inserted in the db query 
				//is appended to
				//it depends on you and UI you have designed ...
				//the same with unseccess code=
				echo "Успешно добавихте $type_name в базата данни!";
				echo "<p><a href='read.php'>Read DB</a></p>";
			}else{
				echo "Неуспешно добавяне на запис в базата данни! Моля опитайте по-късно!";
			}
		}

 ?>