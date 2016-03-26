<?php 
$menua= array('rakiq','wine','whiskey','beer','rom');
$menub = array('cola','fanta','sprite','beana','water');
$counter = count($menua);
if (!isset($_POST['submit'])) {
	echo "<form action='task01.php' method='post'> ";
	echo "<p>How old are you?</p>";
	echo "<select name ='age'>";
	echo "<option value='under 18'>Under 18</option>";
	echo "<option value='up 18'>Up 18</option>";
	echo "</select>";
	echo "  <input type='submit' name='submit' value='submit'>";
	echo "</form>";
}else{
	$c = $_POST['age'];
	if ($c == 'under 18') {
		echo "<ul>";
		for ($i=0; $i < $counter ; $i++) { 
			echo "<li>".$menua[$i]."</li>";
		}
		echo "</ul>";
		
	}elseif ($c == 'up 18') {
		echo "<ul>";
		for ($k=0; $k < $counter ; $k++) { 
			echo "<li>".$menub[$k]."</li>";
		}
		echo "</ul>";
	}
}
/*Създайте форма, в която потребителят въвежда своята възраст. В зависимост от въведената информация - до 18 години или над 18 години - потребителят получава меню с алкохолни или безалкохолни напитки, отпечатани в неномериран списък./Закупуването и консумацията на алкохолни напитки не е позволена на лица, ненавършили 18 години!/ Формата и PHP кода, с който ще обработвате постъпилата информация и ще дадете отговор, трябва да бъдат в различни файлове.*/
?>