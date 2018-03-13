<html>
<head>
<title>Ultoo Proxy Finder</title>
</head>
<body>
<h1 style="color:green; border-bottom:1px solid black; text-align:center;">WELCOME</h1>

<?php
ob_implicit_flush(1);
$proxies=file('proxy.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES );

foreach($proxies as $proxy)
{
$login = 'http://www.ultoo.com/login.php';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $login);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookiechecker.txt');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
$store = curl_exec($ch);
if(stristr($store,'ultoo'))
{
echo $proxy." Status :- Working<br/>";
ob_flush();
flush();
}
else
{
echo $proxy." Status :- Not Working<br/>";
ob_flush();
flush();
}
}
echo "Thanks For Using Our Service</body></html>";
?>
