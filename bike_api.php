<?php


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://api.citybik.es/v2/networks?fields=id,name,href');
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
foreach($data as $key=>$value){
$arr[] = $value; 
 }?>
<table border=2>
 	<?php
  echo "<tr>";
  echo "<th>href</th>";
  echo "<th>id</th>";
  echo "<th>name</th>";
  echo "</tr>";
  
   

//print_r($arr);
foreach ($data[networks] as $key => $value) {
	echo "<tr>";
	echo "<td>". $value['href'].'</td>';
	echo "<td>". $value['id'].'</td>';
	echo "<td>". $value['name'].'</td>';
	echo "</tr>";

}

 ?>
 </table>