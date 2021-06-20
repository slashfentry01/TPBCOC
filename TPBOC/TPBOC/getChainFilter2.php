<?php
// PORT 3002 Validation

$url = "http://svr1.tpboc.xyz:3002/";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp1 = curl_exec($curl);
curl_close($curl);
//var_dump($resp);



$decodedJson = json_decode($resp1); 
$size = sizeof($decodedJson);
$size = $size - 1;
#echo $size;
#var_dump($decodedJson);
echo "<h1>SVR1.TPBOC.XYZ</h1>";
echo "Iteration: " . $decodedJson[$size]->Index . " <br> " . "Product Id: " . $decodedJson[$size]->ProductId . " <br> " . "Product Model: " . $decodedJson[$size]->ProductModel.  " <br> " . "Location: " . $decodedJson[$size]->Location. " <br> " . "User: " . $decodedJson[$size]->User. " <br> " . "Status: " . $decodedJson[$size]->Status. " <br> " . "Timestamp: " . $decodedJson[$size]->Timestamp. " <br> " . "Previous Hash: " . $decodedJson[$size]->PrevHash. " <br> " . "Hash: " . $decodedJson[$size]->Hash;

$svr1Index = $decodedJson[$size]->Index;
$svr1ProductId = $decodedJson[$size]->ProductId;
$svr1ProductModel = $decodedJson[$size]->ProductModel;
$svr1Location = $decodedJson[$size]->Location;
$svr1User = $decodedJson[$size]->User;
$svr1Status = $decodedJson[$size]->Status;


?>

