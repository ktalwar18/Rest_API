<?php


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.openbrewerydb.org/breweries');
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
  echo "<th>id</th>";
  echo "<th>name</th>";
  echo "<th>brewery_type</th>";
  echo "<th>street</th>";
  echo "<th>city</th>";
  echo "<th>state</th>";
  echo "<th>postal_code</th>";
  echo "<th>country</th>";
  echo "<th>longitude</th>";
  echo "<th>latitude</th>";
  echo "<th>phone</th>";
  echo "<th>website_url</th>";
  echo "<th>updated_at</th>";
  echo "<th>tag_list</th>";
  echo "</tr>";
  
   

//print_r($arr);
foreach ($arr as $key => $value) {
	echo "<tr>";
	echo "<td>". $value['id'].'</td>';
	echo "<td>". $value['name'].'</td>';
	echo "<td>". $value['brewery_type'].'</td>';
	echo "<td>". $value['street'].'</td>';
	echo "<td>". $value['city'].'</td>';
	echo "<td>". $value['state'].'</td>';
	echo "<td>". $value['postal_code'].'</td>';
	echo "<td>". $value['country'].'</td>';
	echo "<td>". $value['longitude'].'</td>';
	echo "<td>". $value['latitude'].'</td>';
	echo "<td>". $value['phone'].'</td>';
	echo "<td>". $value['website_url'].'</td>';
	echo "<td>". $value['updated_at'].'</td>';
	echo "<td>". $value['tag_list'].'</td>';
	echo "</tr>";

}

 ?>
 </table>




 
