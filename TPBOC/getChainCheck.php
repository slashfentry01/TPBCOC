<?php
session_start();
$productPort = $_SESSION['product_port'];
echo $productPort;

// ########################################################
$url = "http://svr1.tpboc.xyz:" . $productPort;

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
// ########################################################

// ########################################################
$url = "http://svr2.tpboc.xyz:" . $productPort;

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

$resp2 = curl_exec($curl);
curl_close($curl);
//var_dump($resp);
// ########################################################

// ########################################################
$url = "http://svr3.tpboc.xyz:" . $productPort;

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

$resp3 = curl_exec($curl);
curl_close($curl);
//var_dump($resp);
// ########################################################

// ########################################################
$url = "http://svr4.tpboc.xyz:" . $productPort;

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

$resp4 = curl_exec($curl);
curl_close($curl);
//var_dump($resp);
// ########################################################



// ########################################################
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
$svr1Hash = $decodedJson[$size]->Hash;
$svr1PrevHash = $decodedJson[$size]->PrevHash;
echo $svr1Location;
// ########################################################

// ########################################################
echo "<h1>SVR2.TPBOC.XYZ</h1>";
$decodedJson = json_decode($resp2); 
$size = sizeof($decodedJson);
$size = $size - 1;
#echo $size;
#var_dump($decodedJson);
echo "Iteration: " . $decodedJson[$size]->Index . " <br> " . "Product Id: " . $decodedJson[$size]->ProductId . " <br> " . "Product Model: " . $decodedJson[$size]->ProductModel. " <br> " . "Location: " . $decodedJson[$size]->Location. " <br> " . "User: " . $decodedJson[$size]->User. " <br> " . "Status: " . $decodedJson[$size]->Status. " <br> " . "Timestamp: " . $decodedJson[$size]->Timestamp. " <br> " . "Previous Hash: " . $decodedJson[$size]->PrevHash. " <br> " . "Hash: " . $decodedJson[$size]->Hash;

$svr2Index = $decodedJson[$size]->Index;
$svr2ProductId = $decodedJson[$size]->ProductId;
$svr2ProductModel = $decodedJson[$size]->ProductModel;
$svr2Location = $decodedJson[$size]->Location;
$svr2User = $decodedJson[$size]->User;
$svr2Status = $decodedJson[$size]->Status;
$svr2Hash = $decodedJson[$size]->Hash;
$svr2PrevHash = $decodedJson[$size]->PrevHash;
// ########################################################

// ########################################################
echo "<h1>SVR2.TPBOC.XYZ</h1>";
$decodedJson = json_decode($resp3); 
$size = sizeof($decodedJson);
$size = $size - 1;
#echo $size;
#var_dump($decodedJson);
echo "Iteration: " . $decodedJson[$size]->Index . " <br> " . "Product Id: " . $decodedJson[$size]->ProductId . " <br> " . "Product Model: " . $decodedJson[$size]->ProductModel. " <br> " . "Location: " . $decodedJson[$size]->Location. " <br> " . "User: " . $decodedJson[$size]->User. " <br> " . "Status: " . $decodedJson[$size]->Status. " <br> " . "Timestamp: " . $decodedJson[$size]->Timestamp. " <br> " . "Previous Hash: " . $decodedJson[$size]->PrevHash. " <br> " . "Hash: " . $decodedJson[$size]->Hash;

$svr3Index = $decodedJson[$size]->Index;
$svr3ProductId = $decodedJson[$size]->ProductId;
$svr3ProductModel = $decodedJson[$size]->ProductModel;
$svr3Location = $decodedJson[$size]->Location;
$svr3User = $decodedJson[$size]->User;
$svr3Status = $decodedJson[$size]->Status;
$svr3Hash = $decodedJson[$size]->Hash;
$svr3PrevHash = $decodedJson[$size]->PrevHash;
// ########################################################

// ########################################################
echo "<h1>SVR2.TPBOC.XYZ</h1>";
$decodedJson = json_decode($resp4); 
$size = sizeof($decodedJson);
$size = $size - 1;
#echo $size;
#var_dump($decodedJson);
echo "Iteration: " . $decodedJson[$size]->Index . " <br> " . "Product Id: " . $decodedJson[$size]->ProductId . " <br> " . "Product Model: " . $decodedJson[$size]->ProductModel. " <br> " . "Location: " . $decodedJson[$size]->Location. " <br> " . "User: " . $decodedJson[$size]->User. " <br> " . "Status: " . $decodedJson[$size]->Status. " <br> " . "Timestamp: " . $decodedJson[$size]->Timestamp. " <br> " . "Previous Hash: " . $decodedJson[$size]->PrevHash. " <br> " . "Hash: " . $decodedJson[$size]->Hash;

$svr4Index = $decodedJson[$size]->Index;
$svr4ProductId = $decodedJson[$size]->ProductId;
$svr4ProductModel = $decodedJson[$size]->ProductModel;
$svr4Location = $decodedJson[$size]->Location;
$svr4User = $decodedJson[$size]->User;
$svr4Status = $decodedJson[$size]->Status;
$svr4Hash = $decodedJson[$size]->Hash;
$svr4PrevHash = $decodedJson[$size]->PrevHash;
// ########################################################




echo "<br><br><br>";

// ########################################################
// if ($svr1Index == $svr2Index){
//     echo "They are both the same";
//     echo "<br>";
//     echo $svr1Index;
//     echo "<br><br>";
// }
// else{
//     echo "They are both different";
//     echo "<br>";
//     echo "SVR1:" . $svr1Index;
//     echo "SVR2:" . $svr2Index;
//     echo "<br><br>";

// }
// ########################################################
// if ($svr1ProductId == $svr2ProductId){
//     echo "They are both the same";
//     echo "<br>";
//     echo $svr1ProductId;
//     echo "<br><br>";
// }
// else{
//     echo "They are both different";
//     echo "<br>";
//     echo "SVR1:" . $svr1ProductId;
//     echo "SVR2:" . $svr2ProductId;
//     echo "<br><br>";

// }
// ########################################################
// if ($svr1ProductModel == $svr2ProductModel){
//     echo "They are both the same";
//     echo "<br>";
//     echo $svr1ProductModel;
//     echo "<br><br>";
// }
// else{
//     echo "They are both different";
//     echo "<br>";
//     echo "SVR1:" . $svr1ProductModel;
//     echo "SVR2:" . $svr2ProductModel;
//     echo "<br><br>";

// }
// ########################################################
// if ($svr1Location == $svr2Location){
//     echo "They are both the same";
//     echo "<br>";
//     echo $svr1Location;
//     echo "<br><br>";
// }
// else{
//     echo "They are both different";
//     echo "<br>";
//     echo "SVR1:" . $svr1Location;
//     echo "SVR2:" . $svr2Location;
//     echo "<br><br>";

// }
// ########################################################
// if ($svr1User == $svr2User){
//     echo "They are both the same";
//     echo "<br>";
//     echo $svr1User;
//     echo "<br><br>";
// }
// else{
//     echo "They are both different";
//     echo "<br>";
//     echo "SVR1:" . $svr1User;
//     echo "SVR2:" . $svr2User;
//     echo "<br><br>";

// }
// ########################################################
// if ($svr1Status == $svr2Status){
//     echo "They are both the same";
//     echo "<br>";
//     echo $svr1Status;
//     echo "<br><br>";
// }
// else{
//     echo "They are both different";
//     echo "<br>";
//     echo "SVR1:" . $svr1Status;
//     echo "SVR2:" . $svr2Status;
//     echo "<br><br>";

// }
// ########################################################

########################################################
$a=array("svr1Hash"=>$svr1Hash,"svr2Hash"=>$svr2Hash,"svr3Hash"=>$svr3Hash,"svr4Hash"=>$svr4Hash);
$processedA=array_unique($a);
#$processedCount=var_dump(count($processedA));
$processedCount=count($processedA);
$processedCount = +$processedCount;
#print_r($processedA);
#echo $processedCount;
if ($processedCount == 1){
  $ifloop=true;
  #echo "yes";
}
elseif ($processedCount < 3) {
  $ifloop=true;
}
else{
  header("location: hashNotMatching.php");
}


echo "SVR1:" . $svr1PrevHash;
echo "<br>";
echo "SVR2:" . $svr2PrevHash;
echo "<br>";
echo "SVR3:" . $svr3PrevHash;
echo "<br>";
echo "SVR4:" . $svr4PrevHash;
########################################################
// echo "<br><br><br><br>";
// if ($svr1Hash == $svr2Hash){
//     if ($svr1PrevHash == $svr2PrevHash){
//         echo "They are both the same";
//         echo "<br>";
//         echo "SVR1:" . $svr1PrevHash;
//         echo "SVR2:" . $svr2PrevHash;
//         echo "<br><br>";
//     }
//     else{
//         echo "They are both different";
//         echo "<br>";
//         echo "SVR1:" . $svr1PrevHash;
//         echo "SVR2:" . $svr2PrevHash;
//         echo "<br><br>";
//         header("location: hashNotMatching.php");
    
//     }
// }
// else{
//     echo "They are both different";
//     echo "<br><br>";
//     echo "SVR1:" . $svr1Hash;
//     echo "<br>";
//     echo "SVR2:" . $svr2Hash;
//     echo "<br><br>";
//     header("location: hashNotMatching.php");

// }
########################################################

$_SESSION['location'] = '';
$_SESSION['product_id'] = '';
$_SESSION['product_title'] = '';
$_SESSION['product_desc'] = '';
$_SESSION['product_image'] = '';
$_SESSION['product_keywords'] = '';
$_SESSION['product_port'] = '';
$_SESSION['product_state'] = '';

// sleep(5);

// header("location: plogindex.php");
?>

<html>
<body>
  <form method="POST" action="plogindex.php">
    <input type="submit"/>
  </form>
</body>
</html>