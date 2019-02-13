<?php


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://anapioficeandfire.com/api/characters/583');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);

$data = json_decode($result, true);
echo "<pre>";
$i=0;
$arr = array();
//print_r($data);
foreach($arr as $key=>$value){
$arr[] = $value; 
 }?>
<table border=2>
 	<?php
  echo "<tr>";
  
  echo "<th>Aliases</th>";
  
  echo "</tr>";
  
   

//print_r($data);
foreach ($data['aliases'] as $key => $value) {
	echo "<tr>";
	
	echo "<td>". $value."</td>";
	
	echo "</tr>";

}

 ?>
 </table>