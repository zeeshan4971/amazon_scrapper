<?php

/* $ch = curl_init('https://www.cvs.com/shop/beauty-360-cotton-swabs-500ct-prodid-1015774?skuId=695263');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

$response = curl_exec($ch);

$start = stripos($response, "<body");
     $end = stripos($response, "</body");

     $body = substr($response,$start,$end-$start);

	 print_r($response);
	 die();

	 $dom = new DOMDocument;
	$dom->loadHTML($body);
	foreach($dom->getElementsByTagName('a') as $node)
	{
		$array[] = $dom->saveHTML($node);
	}

	print_r($array); */


/* 	$homepage = file_get_contents('https://www.cvs.com/shop/beauty-360-cotton-swabs-500ct-prodid-1015774?skuId=695263');
echo $homepage;
 */

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.cvs.com/shop/beauty-360-cotton-swabs-500ct-prodid-1015774?skuId=695263");
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_USERAGENT, 'Your application name');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($ch);



$my_file = 'test.html';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = 'This is the data';
fwrite($handle, print_r($response,true));

?>