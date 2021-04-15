<?php
$jsondata = file_get_contents("user.json");
echo $jsondata;

$userArray = json_decode($jsondata);//json to array

echo "<pre>";
print_r($userArray);
echo "</pre>";

?>
<table>
<tr>
<th> full name</th>
<th> mobile no</th>
<th> city</th>
</tr>
<?php
 foreach($userArray as $row)
 {
	echo "<tr>";
echo "<td> $row->name </td>";	
echo "<td> $row->mobile </td>";	
echo "<td> $row->city </td>";	
echo "</tr>";
 }
 ?>
</table>