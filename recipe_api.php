<?php


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://www.recipepuppy.com/api/?i=onions,garlic&q=omelet&p=3');
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
//print_r($data['results']);

 ?>

<table border=2>
 	<?php
  echo "<tr>";
  echo "<th>title</th>";
  echo "<th>href</th>";
  echo "<th>ingredients</th>";
  echo "<th>thumbnail</th>";
  echo "</tr>";

  foreach ($data['results'] as $key => $value) {
	echo "<tr>";
	echo "<td>". $value['title'].'</td>';
	echo "<td>". $value['href'].'</td>';
	echo "<td>". $value['ingredients'].'</td>';
	echo "<td>". $value['thumbnail'].'</td>';
	echo "</tr>";

}

 ?>
 </table>

