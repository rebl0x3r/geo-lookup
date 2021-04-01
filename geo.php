<?php
$url = "https://geolocation.onetrust.com/cookieconsentpub/v1/geo/location";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_POST, 0);

$data = curl_exec($curl);
curl_close($curl);
$data = str_replace("jsonFeed({", "", $data);
$data = str_replace("});", "", $data);
$data = str_replace("\"","", $data);
$data1 = explode(",", $data);
$dataf = array();
foreach ($data1 as $value) {
        $ds = explode(":", $value);
        $dataf[$ds[0]] = $ds[1];
        //$dataf[] += [$ds[0] => $ds[1]];
}

print_r($dataf);

// Print A Value Example :
/*

echo $dataf['country']; 

Prints => "DE"

*/

?>