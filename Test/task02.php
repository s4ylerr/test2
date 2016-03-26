<?php
$arrayName = array(array('Ime' => 'Ivan',  'Familiq' => 'Vasilev', 'Ocenka ot pismen izpit' => '6', 'Ocenka ot usten izpit' => '4','Ocenka ot test' => '5'),
				  array('Ime' => 'Petar', 'Familiq' => 'Todorov', 'Ocenka ot pismen izpit' => '5', 'Ocenka ot usten izpit' => '5', 'Ocenka ot test' => '4'),
				  array('Ime' => 'Tihomir', 'Familiq' => 'Kardjiev', 'Ocenka ot pismen izpit' => '4', 'Ocenka ot usten izpit' => '6', 'Ocenka ot test' => '6'),
				  array('Ime' => 'Kalin', 'Familiq' => 'Vasilev', 'Ocenka ot pismen izpit' => '3', 'Ocenka ot usten izpit' => '3', 'Ocenka ot test' => '3'),
				  array('Ime' => 'Boris', 'Familiq' => 'Borisov', 'Ocenka ot pismen izpit' => '2', 'Ocenka ot usten izpit' => '6', 'Ocenka ot test' => '4'));	
/*
var_dump($arrayName);
*/
$count = count ($arrayName);
$sum = 0;

for ($i=0; $i < $count ; $i++) { 
	$arrayName[$i]['uspeh'] = ($arrayName[$i]['Ocenka ot pismen izpit']+$arrayName[$i]['Ocenka ot usten izpit']+$arrayName[$i]['Ocenka ot test'])/3;
	$sum += $arrayName[$i]['uspeh']/5;
}
echo "<table border=1>";
echo "<tr>";
echo "<td>Ime</td>
	  <td>Familiq</td>
	  <td>Ocenka ot pismen izpit</td>
	  <td>Ocenka ot usten izpit</td>
	  <td>Ocenka ot test</td>
	  <td>Sreden uspeh</td>";
echo "</tr>";

for ($j=0; $j < $count ; $j++) {
	echo "<tr>"; 
	foreach ($arrayName[$j] as $value) {
		echo "<td>".$value."</td>";
	}echo "</tr>";
}echo "</table>";
echo "Sredniqt uspeh na grupata uchenici e ".$sum;
/*2. Дефинирайте масив, в който съхранявате информация за пет ученика. 
Информацията е - име, фамилия, оценка от писмен изпит, оценка от устен изпит, оценка от тест.
 Изчислете средния успех на всеки ученик и я добавете  към информацията, която съхранявате в масива.
  Изчислете средния успех на групата ученици, за които имате информация и го отпечатайте.
Oтпечатайте информацията от масива в таблица, като всяка колона трябва да има заглавие - име, фамилия, оценка от писмен изпит и т.н. 
Намерете и отпечатайте името на уценика с най-висок среден успех.
*/
?>