<?php
session_start();

$productID = $_SESSION['product_id'];
$productTitle = $_SESSION['product_title'];
$productDesc = $_SESSION['product_desc'];
$productImage = $_SESSION['product_image'];
$productKeywords = $_SESSION['product_keywords'];
$productPort = $_SESSION['product_port'];
$productState = $_SESSION['product_state'];
$username = $_SESSION['username'];
$location = $_SESSION["location"];


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
    'Status' => 'out'

);
$payload = json_encode($data);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);

$url = 'http://svr2.tpboc.xyz:'.$productPort;
$ch = curl_init($url);
$data = array(

    'ProductId' => $productID,
    'ProductModel' => $productTitle,
    'Location' => $location,
    'User' => $username,
    'Status' => 'out'

);
$payload = json_encode($data);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);


$url = 'http://svr3.tpboc.xyz:'.$productPort;
$ch = curl_init($url);
$data = array(

    'ProductId' => $productID,
    'ProductModel' => $productTitle,
    'Location' => $location,
    'User' => $username,
    'Status' => 'out'

);
$payload = json_encode($data);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);

$url = 'http://svr4.tpboc.xyz:'.$productPort;
$ch = curl_init($url);
$data = array(

    'ProductId' => $productID,
    'ProductModel' => $productTitle,
    'Location' => $location,
    'User' => $username,
    'Status' => 'out'

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
header("location: getChainCheck.php");
?>