<?php

/* Get Real IP */
function get_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
 
    return $ipaddress;
}

/* Convert IPV4To6 */
function IPv4To6($ip) {
 if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === true) {
  if (strpos($ip, '.') > 0) {
   $ip = substr($ip, strrpos($ip, ':')+1);
  } else { //native ipv6
   return $ip;
  }
 }
 $is_v4 = filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
 if (!$is_v4) { return false; }
 $iparr = array_pad(explode('.', $ip), 4, 0);
    $Part7 = base_convert(($iparr[0] * 256) + $iparr[1], 10, 16);
    $Part8 = base_convert(($iparr[2] * 256) + $iparr[3], 10, 16);
    return '::ffff:'.$Part7.':'.$Part8;
}

/* Geo location library */
class geolib{

	private $api_url="http://ipinfo.io/";
	function __construct($ip=NULL){
		var_dump($this->getinfo($ip));
	}

	function getinfo($ip=NULL){
		$ch = curl_init();   
		$url=$this->api_url.$ip;
		curl_setopt($ch, CURLOPT_URL,$url);  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
		curl_setopt($ch, CURLOPT_HEADER, 0);  
		$data = curl_exec($ch);
		curl_close($ch);
		if($data===FALSE)
		{
			return FALSE;
		}

		$geo_json=json_decode($data);
		if(isset($geo_json->ip)){$geo_ip=$geo_json->ip;}else{$geo_ip=FALSE;}
		if(isset($geo_json->country)){$geo_country=$geo_json->country;}else{$geo_country=FALSE;}
		if(isset($geo_json->region)){$geo_region=$geo_json->region;}else{$geo_region=FALSE;}
		if(isset($geo_json->city)){$geo_city=$geo_json->city;}else{$geo_city=FALSE;}
		$geo_location=array(
					'GEO_TRACK'=>true,
					'GEO_COUNTRY'=>$geo_country,
					'GEO_REGION'=>$geo_region,
					'GEO_CITY'=>$geo_city
					);
		return $geo_location;
}



}


echo 'Default : '.get_ip();
echo '<br/>4-6 : '.IPv4To6(get_ip());

echo '<br/>Location :';
$g=new geolib(get_ip());


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<input type="text" name="name" placeholder="SSSSS" />>
</body>
</html>
