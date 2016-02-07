<?php

// Масив 1.0 

$userData = array( 'first_name'  => "Venislav",
                   'second_name' => 'Ivanov',
                   'third_name'  => 'Georgiev',
                   'age'         => 37,
                   'prefession'  => 'Director');
echo "<ul>";

echo "<li>".$userData['first_name']."</li>";
echo "<li>".$userData['second_name']."</li>";
echo "<li>".$userData['third_name']."</li>";
echo "<li>".$userData['age']."</li>";
echo "<li>".$userData['prefession'].  "</li>" ;
echo "</ul>";

// Масив 1.1

$namePhone = array( 'Peter'  => "Peter - 0123456789",
					'Ivan'   => "Ivan - 9876543210",
					'Todor'  => "Todor - 456137980",
					'Plamen' => "Plamen - 321654987" );

echo "<ul>";

echo "<li>".$namePhone['Peter']. "</li>";
echo "<li>".$namePhone['Ivan']. "</li>";
echo "<li>".$namePhone['Todor']. "</li>";
echo "<li>".$namePhone['Plamen']. "</li>";

echo "</ul>";

echo "<table border=1>
		<tr>
		 	<td>".$namePhone['Peter']. "</td>
		 </tr>
		 <tr>
		 	<td>".$namePhone['Ivan']. "</td>
		 </tr>
		 <tr>
		 	<td>".$namePhone['Todor']. "</td>
		 </tr>
		 <tr>
		 	<td>".$namePhone['Plamen']. "</td>
		 </tr> ";

// 







?>