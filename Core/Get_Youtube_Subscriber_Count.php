<?php
require "../Addons/GoogleApi/vendor/autoload.php";
include "../config.php";

$channel_id = "UCzvAe1RszPc48hsCKXL25SQ";
$api_key = "AIzaSyBWGzZwEItIFZ3j-ugZ-ZOres_8xckdd6w";
$api_response = curl_get_contents('https://www.googleapis.com/youtube/v3/channels?part=statistics&id='.$channel_id.'&fields=items/statistics/subscriberCount&key='.$api_key);
$api_response_decoded = json_decode($api_response, true);
echo $api_response_decoded['items'][0]['statistics']['subscriberCount'];
$Followers=$api_response_decoded['items'][0]['statistics']['subscriberCount'];
$db=config::getConnexion();
$sql="UPDATE  social_media set Followers=$Followers  where Plateforme='Youtube'";
$db->query($sql);





function curl_get_contents($url,$useragent='cURL',$headers=false, $follow_redirects=false,$debug=false) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	if ($headers==true){
		curl_setopt($ch, CURLOPT_HEADER,1);
	}
	if ($headers=='headers only') {
		curl_setopt($ch, CURLOPT_NOBODY ,1);
	}
		if ($follow_redirects==true) {
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
	}
	if ($debug==true) {
		$result['contents']=curl_exec($ch);
		$result['info']=curl_getinfo($ch);
	} else {
		$result=curl_exec($ch);
	}
	curl_close($ch);
	return $result;
}

?>

