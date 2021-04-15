<?php
  $xml = simplexml_load_file("user.xml");  // to read xml and convert to array 
  
  echo count($xml);
  echo "<pre>";
  print_r($xml);
  echo "</pre>";

?>
<table>
<tr>
<th> full name</th>
<th> mobile no</th>
<th> city</th>
</tr>
<?php
 foreach($xml as $row)
 {
	echo "<tr>";
echo "<td> $row->name </td>";	
echo "<td> $row->mobile </td>";	
echo "<td> $row->city </td>";	
echo "</tr>";
 }
 ?>
</table>