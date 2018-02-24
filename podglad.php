<?php 
/********************************************* 
* plik podglad.php 
*********************************************/ 

// wczytanie zawartości pliku do tablicy 
$file = file("baza.txt"); 
// przechodzimy przez tablicę za pomocą pętli foreach 
foreach($file as $value) { 
// rozbijamy poszczególne linie na części 
$exp = explode("`",$value); 
// wyświetlamy rozbity tekst 
echo "Rezerwacja na:"."<br />"."Imię: ".$exp[0]."<br />"."Nazwisko: ".$exp[1]."<br />"."Email: ".$exp[2]."<br />"."Tel: ".$exp[3]."<br />"."Od: ".$exp[4]."<br />"."Do: ".$exp[5]."<br />"."Ilość: ".$exp[6]."<br />"."Posiłki: ".$exp[7]."<br />"."<hr />"; 
} 


echo "<table>
<tr>
<td></td>
</tr>";

echo "<br />
<a href=\"index.php\">Wróć</a>
";

?>