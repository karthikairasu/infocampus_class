<?php  

$conn = mysqli_connect("localhost", "root", "", "phpsession");
$res=mysqli_query($conn,"select * from user");



$content='<html>



<body>
	<table align="center"  cellpadding="8">
		<tr style="background:pink;">
			<th> USER ID </th>
			<th> FULL NAME </th>
			<th> MOBILE NO </th>
			<th>  EMAIL </th>
			<th>  PASSWORD </th>
		</tr>';
	while($srow = mysqli_fetch_object($res))
	{
		$content.='<tr>';
		$content.='<td>'. $srow->id . '</td>';
		$content.='<td>'. $srow->name . '</td>';
		$content.='<td>'. $srow->mobile . '</td>';
		$content.='<td>'. $srow->email . '</td>';
		$content.='<td>'. $srow->password . '</td>';
		$content.='</tr>';
	}		
		
	$content.='</table></body></html>';
	
$data = $content;
require_once("dompdf/dompdf_config.inc.php");

$fileName = "file_".time().".pdf";
  if ( get_magic_quotes_gpc() )
  $old_limit = ini_set("memory_limit", "200M");
  $dompdf = new DOMPDF();
  $dompdf->load_html($data);
  $dompdf->set_paper('a3','portrait');
  $dompdf->render();
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header('Content-type: application/pdf');
    header('Content-Disposition: attachment; filename="'.$fileName.'"');
    header("Content-Transfer-Encoding: binary");
    echo $dompdf->output();
   
  exit(0);
?>