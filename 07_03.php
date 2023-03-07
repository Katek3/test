
<?php   
$firstName = "Janusz";
$lastName = "Kowalsky";

echo "Imie i nazwisko:   $firstName $lastName <br>";

//heredoc
$data = <<< DATA
Imie: $firstName<br>
Nazwisko: $lastName<br>
<hr>
DATA;
echo $data;
echo $data;
echo "<br>";
//nowdoc
echo <<< 'DATA'
Imie: $firstName<br>
Nazwisko: $lastName
<hr>
DATA;
?>
