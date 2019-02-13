<?php


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.publicapis.org/entries?category=animals&https=true');
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
 //print_r($data['entries']);
 foreach($data as $key=>$value){
$arr[] = $value;
 }
 //print_r($arr);

 ?>

<table border=2>
 	<?php
  echo "<tr>";
  echo "<th>API</th>";
  echo "<th>Description</th>";
  echo "<th>Auth</th>";
  echo "<th>HTTPS</th>";
  echo "<th>Cors</th>";
  echo "<th>Link</th>";
  echo "<th>Category</th>";
  echo "</tr>";

  foreach ($data['entries'] as $key => $value) {
	echo "<tr>";
	echo "<td>". $value['API'].'</td>';
	echo "<td>". $value['Description'].'</td>';
	echo "<td>". $value['Auth'].'</td>';
	echo "<td>". $value['HTTPS'].'</td>';
	echo "<td>". $value['Cors'].'</td>';
	echo "<td>". $value['Link'].'</td>';
	echo "<td>". $value['Category'].'</td>';
	echo "</tr>";

}

 ?>
 </table>





 