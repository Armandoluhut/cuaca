<?php 

// $data = http_request("example.com");

function http_request($url){

    //create curl resource
$ch = curl_init();

//set url
curl_setopt($ch, CURLOPT_URL, "$url");

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//$output contains the output string
$output = curl_exec($ch);

//tutup curl
curl_close($ch);

//menampilkan hasil curl
return $output;

}

$profile = http_request("")

?>