<?php
$url = "http://www.google.com";
$proxy = "183.207.224.39:80";

$ch = curl_init($url);
curl_setopt($ch,CURLOPT_PROXY,$proxy);
curl_setopt($ch,CURLOPT_HTTPTUNNELPROXY,$proxy);
$page = curl_exec($ch);
curl_close($ch);
$check = stripos($page,'html'); // not pretty :)
if($check > 0)
{
    echo $proxy . " Works!";
}else{
    echo $proxy . " Is Dead!";
}
echo "here".$check."here";
echo "Script Working";
?>