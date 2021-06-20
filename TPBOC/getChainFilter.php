<?php
// PORT 3001 Validation

$url3001 = "http://svr1.tpboc.xyz:3001/";

$curl3001 = curl_init($url3001);
curl_setopt($curl3001, CURLOPT_URL, $url3001);
curl_setopt($curl3001, CURLOPT_RETURNTRANSFER, true);

$headers3001 = array(
   "Accept: application/json",
);
curl_setopt($curl3001, CURLOPT_HTTPHEADER, $headers3001);
//for debug only!
curl_setopt($curl3001, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl3001, CURLOPT_SSL_VERIFYPEER, false);

$resp3001 = curl_exec($curl3001);
curl_close($curl3001);
//var_dump($resp);



$decodedJson = json_decode($resp3001); 
$size3001 = sizeof($decodedJson);
$size3001 = $size3001 - 1;
#echo $size;
#var_dump($decodedJson);
/* echo "<h1>SVR1.TPBOC.XYZ</h1>";
echo "Iteration: " . $decodedJson[$size3001]->Index . " <br> " . "Product Id: " . $decodedJson[$size3001]->ProductId . " <br> " . "Product Model: " . $decodedJson[$size3001]->ProductModel.  " <br> " . "Location: " . $decodedJson[$size3001]->Location. " <br> " . "User: " . $decodedJson[$size3001]->User. " <br> " . "Status: " . $decodedJson[$size3001]->Status. " <br> " . "Timestamp: " . $decodedJson[$size3001]->Timestamp. " <br> " . "Previous Hash: " . $decodedJson[$size3001]->PrevHash. " <br> " . "Hash: " . $decodedJson[$size3001]->Hash;
 */
$svr3001Index = $decodedJson[$size3001]->Index;
$svr3001ProductId = $decodedJson[$size3001]->ProductId;
$svr3001ProductModel = $decodedJson[$size3001]->ProductModel;
$svr3001Location = $decodedJson[$size3001]->Location;
$svr3001User = $decodedJson[$size3001]->User;
$svr3001Status = $decodedJson[$size3001]->Status;
$svr3001Timestamp = $decodedJson[$size3001]->Timestamp;
echo $svr3001Index;
echo "<br>";
echo $svr3001ProductId;
echo "<br>";
echo $svr3001ProductModel;
echo "<br>";
echo $svr3001Location;
echo "<br>";
echo $svr3001User;
echo "<br>";
echo $svr3001Status;
echo "<br>";
echo $svr3001Timestamp;
echo "<br>";
echo "<br>";

?>


<?php
// PORT 3002 Validation

$url3002 = "http://svr1.tpboc.xyz:3002/";

$curl3002 = curl_init($url3002);
curl_setopt($curl3002, CURLOPT_URL, $url3002);
curl_setopt($curl3002, CURLOPT_RETURNTRANSFER, true);

$headers3002 = array(
   "Accept: application/json",
);
curl_setopt($curl3002, CURLOPT_HTTPHEADER, $headers3002);
//for debug only!
curl_setopt($curl3002, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl3002, CURLOPT_SSL_VERIFYPEER, false);

$resp3002 = curl_exec($curl3002);
curl_close($curl3002);
//var_dump($resp);



$decodedJson = json_decode($resp3002); 
$size3002 = sizeof($decodedJson);
$size3002 = $size3002 - 1;
#echo $size;
#var_dump($decodedJson);
/* echo "<h1>SVR1.TPBOC.XYZ</h1>";
echo "Iteration: " . $decodedJson[$size3001]->Index . " <br> " . "Product Id: " . $decodedJson[$size3001]->ProductId . " <br> " . "Product Model: " . $decodedJson[$size3001]->ProductModel.  " <br> " . "Location: " . $decodedJson[$size3001]->Location. " <br> " . "User: " . $decodedJson[$size3001]->User. " <br> " . "Status: " . $decodedJson[$size3001]->Status. " <br> " . "Timestamp: " . $decodedJson[$size3001]->Timestamp. " <br> " . "Previous Hash: " . $decodedJson[$size3001]->PrevHash. " <br> " . "Hash: " . $decodedJson[$size3001]->Hash;
 */
$svr3002Index = $decodedJson[$size3002]->Index;
$svr3002ProductId = $decodedJson[$size3002]->ProductId;
$svr3002ProductModel = $decodedJson[$size3002]->ProductModel;
$svr3002Location = $decodedJson[$size3002]->Location;
$svr3002User = $decodedJson[$size3002]->User;
$svr3002Status = $decodedJson[$size3002]->Status;
$svr3002Timestamp = $decodedJson[$size3002]->Timestamp;
echo $svr3002Index;
echo "<br>";
echo $svr3002ProductId;
echo "<br>";
echo $svr3002ProductModel;
echo "<br>";
echo $svr3002Location;
echo "<br>";
echo $svr3002User;
echo "<br>";
echo $svr3002Status;
echo "<br>";
echo $svr3002Timestamp;
echo "<br>";
echo "<br>";

?>

<?php
// PORT 3003 Validation

$url3003 = "http://svr1.tpboc.xyz:3003/";

$curl3003 = curl_init($url3003);
curl_setopt($curl3003, CURLOPT_URL, $url3003);
curl_setopt($curl3003, CURLOPT_RETURNTRANSFER, true);

$headers3003 = array(
   "Accept: application/json",
);
curl_setopt($curl3003, CURLOPT_HTTPHEADER, $headers3003);
//for debug only!
curl_setopt($curl3003, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl3003, CURLOPT_SSL_VERIFYPEER, false);

$resp3003 = curl_exec($curl3003);
curl_close($curl3003);
//var_dump($resp);



$decodedJson = json_decode($resp3003); 
$size3003 = sizeof($decodedJson);
$size3003 = $size3003 - 1;
#echo $size;
#var_dump($decodedJson);
/* echo "<h1>SVR1.TPBOC.XYZ</h1>";
echo "Iteration: " . $decodedJson[$size3001]->Index . " <br> " . "Product Id: " . $decodedJson[$size3001]->ProductId . " <br> " . "Product Model: " . $decodedJson[$size3001]->ProductModel.  " <br> " . "Location: " . $decodedJson[$size3001]->Location. " <br> " . "User: " . $decodedJson[$size3001]->User. " <br> " . "Status: " . $decodedJson[$size3001]->Status. " <br> " . "Timestamp: " . $decodedJson[$size3001]->Timestamp. " <br> " . "Previous Hash: " . $decodedJson[$size3001]->PrevHash. " <br> " . "Hash: " . $decodedJson[$size3001]->Hash;
 */
$svr3003Index = $decodedJson[$size3003]->Index;
$svr3003ProductId = $decodedJson[$size3003]->ProductId;
$svr3003ProductModel = $decodedJson[$size3003]->ProductModel;
$svr3003Location = $decodedJson[$size3003]->Location;
$svr3003User = $decodedJson[$size3003]->User;
$svr3003Status = $decodedJson[$size3003]->Status;
$svr3003Timestamp = $decodedJson[$size3003]->Timestamp;
echo $svr3003Index;
echo "<br>";
echo $svr3003ProductId;
echo "<br>";
echo $svr3003ProductModel;
echo "<br>";
echo $svr3003Location;
echo "<br>";
echo $svr3003User;
echo "<br>";
echo $svr3003Status;
echo "<br>";
echo $svr3003Timestamp;
echo "<br>";
echo "<br>";

?>

<?php
// PORT 3004 Validation

$url3004 = "http://svr1.tpboc.xyz:3004/";

$curl3004 = curl_init($url3004);
curl_setopt($curl3004, CURLOPT_URL, $url3004);
curl_setopt($curl3004, CURLOPT_RETURNTRANSFER, true);

$headers3004 = array(
   "Accept: application/json",
);
curl_setopt($curl3004, CURLOPT_HTTPHEADER, $headers3004);
//for debug only!
curl_setopt($curl3004, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl3004, CURLOPT_SSL_VERIFYPEER, false);

$resp3004 = curl_exec($curl3004);
curl_close($curl3004);
//var_dump($resp);



$decodedJson = json_decode($resp3004); 
$size3004 = sizeof($decodedJson);
$size3004 = $size3004 - 1;
#echo $size;
#var_dump($decodedJson);
/* echo "<h1>SVR1.TPBOC.XYZ</h1>";
echo "Iteration: " . $decodedJson[$size3001]->Index . " <br> " . "Product Id: " . $decodedJson[$size3001]->ProductId . " <br> " . "Product Model: " . $decodedJson[$size3001]->ProductModel.  " <br> " . "Location: " . $decodedJson[$size3001]->Location. " <br> " . "User: " . $decodedJson[$size3001]->User. " <br> " . "Status: " . $decodedJson[$size3001]->Status. " <br> " . "Timestamp: " . $decodedJson[$size3001]->Timestamp. " <br> " . "Previous Hash: " . $decodedJson[$size3001]->PrevHash. " <br> " . "Hash: " . $decodedJson[$size3001]->Hash;
 */
$svr3004Index = $decodedJson[$size3004]->Index;
$svr3004ProductId = $decodedJson[$size3004]->ProductId;
$svr3004ProductModel = $decodedJson[$size3004]->ProductModel;
$svr3004Location = $decodedJson[$size3004]->Location;
$svr3004User = $decodedJson[$size3004]->User;
$svr3004Status = $decodedJson[$size3004]->Status;
$svr3004Timestamp = $decodedJson[$size3004]->Timestamp;
echo $svr3004Index;
echo "<br>";
echo $svr3004ProductId;
echo "<br>";
echo $svr3004ProductModel;
echo "<br>";
echo $svr3004Location;
echo "<br>";
echo $svr3004User;
echo "<br>";
echo $svr3004Status;
echo "<br>";
echo $svr3004Timestamp;
echo "<br>";
echo "<br>";

?>

<?php
// PORT 3005 Validation

$url3005 = "http://svr1.tpboc.xyz:3005/";

$curl3005 = curl_init($url3005);
curl_setopt($curl3005, CURLOPT_URL, $url3005);
curl_setopt($curl3005, CURLOPT_RETURNTRANSFER, true);

$headers3005 = array(
   "Accept: application/json",
);
curl_setopt($curl3005, CURLOPT_HTTPHEADER, $headers3005);
//for debug only!
curl_setopt($curl3005, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl3005, CURLOPT_SSL_VERIFYPEER, false);

$resp3005 = curl_exec($curl3005);
curl_close($curl3005);
//var_dump($resp);



$decodedJson = json_decode($resp3005); 
$size3005 = sizeof($decodedJson);
$size3005 = $size3005 - 1;
#echo $size;
#var_dump($decodedJson);
/* echo "<h1>SVR1.TPBOC.XYZ</h1>";
echo "Iteration: " . $decodedJson[$size3001]->Index . " <br> " . "Product Id: " . $decodedJson[$size3001]->ProductId . " <br> " . "Product Model: " . $decodedJson[$size3001]->ProductModel.  " <br> " . "Location: " . $decodedJson[$size3001]->Location. " <br> " . "User: " . $decodedJson[$size3001]->User. " <br> " . "Status: " . $decodedJson[$size3001]->Status. " <br> " . "Timestamp: " . $decodedJson[$size3001]->Timestamp. " <br> " . "Previous Hash: " . $decodedJson[$size3001]->PrevHash. " <br> " . "Hash: " . $decodedJson[$size3001]->Hash;
 */
$svr3005Index = $decodedJson[$size3005]->Index;
$svr3005ProductId = $decodedJson[$size3005]->ProductId;
$svr3005ProductModel = $decodedJson[$size3005]->ProductModel;
$svr3005Location = $decodedJson[$size3005]->Location;
$svr3005User = $decodedJson[$size3005]->User;
$svr3005Status = $decodedJson[$size3005]->Status;
$svr3005Timestamp = $decodedJson[$size3005]->Timestamp;
echo $svr3005Index;
echo "<br>";
echo $svr3005ProductId;
echo "<br>";
echo $svr3005ProductModel;
echo "<br>";
echo $svr3005Location;
echo "<br>";
echo $svr3005User;
echo "<br>";
echo $svr3005Status;
echo "<br>";
echo $svr3005Timestamp;
echo "<br>";
echo "<br>";
?>

<?php
// PORT 3006 Validation

$url3006 = "http://svr1.tpboc.xyz:3006/";

$curl3006 = curl_init($url3006);
curl_setopt($curl3006, CURLOPT_URL, $url3006);
curl_setopt($curl3006, CURLOPT_RETURNTRANSFER, true);

$headers3006 = array(
   "Accept: application/json",
);
curl_setopt($curl3006, CURLOPT_HTTPHEADER, $headers3006);
//for debug only!
curl_setopt($curl3006, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl3006, CURLOPT_SSL_VERIFYPEER, false);

$resp3006 = curl_exec($curl3006);
curl_close($curl3006);
//var_dump($resp);



$decodedJson = json_decode($resp3006); 
$size3006 = sizeof($decodedJson);
$size3006 = $size3006 - 1;
#echo $size;
#var_dump($decodedJson);
/* echo "<h1>SVR1.TPBOC.XYZ</h1>";
echo "Iteration: " . $decodedJson[$size3001]->Index . " <br> " . "Product Id: " . $decodedJson[$size3001]->ProductId . " <br> " . "Product Model: " . $decodedJson[$size3001]->ProductModel.  " <br> " . "Location: " . $decodedJson[$size3001]->Location. " <br> " . "User: " . $decodedJson[$size3001]->User. " <br> " . "Status: " . $decodedJson[$size3001]->Status. " <br> " . "Timestamp: " . $decodedJson[$size3001]->Timestamp. " <br> " . "Previous Hash: " . $decodedJson[$size3001]->PrevHash. " <br> " . "Hash: " . $decodedJson[$size3001]->Hash;
 */
$svr3006Index = $decodedJson[$size3006]->Index;
$svr3006ProductId = $decodedJson[$size3006]->ProductId;
$svr3006ProductModel = $decodedJson[$size3006]->ProductModel;
$svr3006Location = $decodedJson[$size3006]->Location;
$svr3006User = $decodedJson[$size3006]->User;
$svr3006Status = $decodedJson[$size3006]->Status;
$svr3006Timestamp = $decodedJson[$size3006]->Timestamp;
echo $svr3006Index;
echo "<br>";
echo $svr3006ProductId;
echo "<br>";
echo $svr3006ProductModel;
echo "<br>";
echo $svr3006Location;
echo "<br>";
echo $svr3006User;
echo "<br>";
echo $svr3006Status;
echo "<br>";
echo $svr3006Timestamp;
echo "<br>";
echo "<br>";
?>