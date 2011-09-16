<?php
ini_set('display_errors', 1);
	error_reporting(E_ALL);
	
$curl = curl_init('http://www.vibescm.com/api/subscription_campaigns/259646/subscriptions.xml');       //1
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);                          //2
curl_setopt($curl, CURLOPT_USERPWD, 'mpacheco@sitv.com:abc1234');   //3
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);                     //4
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);                          
//curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);                           
curl_setopt($curl, CURLOPT_USERAGENT, 'Wufoo Sample Code');             //5

echo $response = curl_exec($curl);                                           //6
$resultStatus = curl_getinfo($curl);                                    //7


if($resultStatus['http_code'] == 200) {                     //8
    $xml = simplexml_load_string($response);

	//print_r($xml);
	//echo $xml->Entry->EntryId . "<br />";

	foreach($xml->Field as $field)
	{
		$id = $field->ID;
		$title = $field->Title;
		$fields["$id"] = "$title";
	}
  
} else {
	echo 'There was a problem loading this page';
    //echo 'Call Failed '.print_r($resultStatus);                         //9
}


$url = 'http://www.vibescm.com/api/subscription_campaigns/1/subscriptions.xml';
$xml_data ='<subscription>'.
    '<user>'.
        '<mobile-phone>6262213143</mobile-phone>'.
    '</user>'.
    '</subscription>';

//$fields = 'mobile-phone=6262213143';
//$curl = curl_init($url); 
curl_setopt($curl, CURLOPT_URL,$url);
curl_setopt($curl, CURLOPT_MUTE, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/XML'));
curl_setopt($curl, CURLOPT_POSTFIELDS, "$xml_data");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		
//execute post
echo $result = curl_exec($curl);

//close connection
curl_close($curl);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >




</html>