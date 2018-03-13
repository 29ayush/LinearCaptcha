<?php
ob_implicit_flush(1);
$url = "http://ultoo.com";
$secure = "$url/secure.php";
$brandstart= "$url/brands.php";
$brandques= "$url/brands_ques.php";
$brandmid= "$url/brands_graph.php";

$agent = "Opera/9.80 (J2ME/MIDP; Opera Mini/4.5.33634/32.1440; U; en) Presto/2.8.119 Version/11.10";
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
$headers[] = 'Connection: Keep-Alive';
$headers[] = 'Content-type: application/x-www-form-urlencoded;charset=UTF-8';
$headers[] = 'Accept-Language: en-us,en;q=0.8';
$headers[] = 'Accept-Encoding gzip,deflate';
$headers[] = 'Keep-Alive: 300';
$headers[] = 'Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7';
$headers[] = 'Cache-Control: max-age=0';

$captr = $_REQUEST['captr'];
$cookie = $_REQUEST['cookie'];
$username = trim($_REQUEST['username']);
$password = trim($_REQUEST['password']);
$cap = $_REQUEST['cap'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $secure);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$cap_data = $captr . "=nlp&captcha=$cap";
curl_setopt($ch, CURLOPT_POSTFIELDS, $cap_data);
$html = curl_exec($ch);

file_put_contents('log.html',$html);
if (stristr($html, "box do not match"))
	{
	die("<h3><tt><font color=red>------------ You Have Entered Wrong Captcha. --------</font></h3>");
	}

if (stristr($html, "mywallet"))
	{
	echo "<h2><tt><font color=green>Ho gaya Login...Earning start !!</tt></h4><br />";
	flush();
	ob_flush();
	sleep(3);
	}
  else
	{
	echo "<h3><tt><font color=red>-------- Some Error Occured. ----</font></h3></tt>";
	$loogc++;
	flush();
	ob_flush();
	if ($loogc > 6) exit;
	}


require_once 'ultoogamefunctions.php';

curl_setopt($ch, CURLOPT_URL, $brandstart);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_REFERER, $brandstart);
$html = curl_exec($ch);

for($i=0;$i<10;$i++)
{
flush();
ob_flush();
curl_setopt($ch, CURLOPT_URL, $brandques);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
if($i==0)
curl_setopt($ch, CURLOPT_REFERER, $brandstart);
else
curl_setopt($ch, CURLOPT_REFERER, $brandmid);
$html = curl_exec($ch);

$data=getbrandgamepostdata($html);

curl_setopt($ch, CURLOPT_URL, $brandques);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_REFERER, $brandques);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$html = curl_exec($ch);

curl_setopt($ch, CURLOPT_URL, $brandmid);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_REFERER, $brandques);
$html = curl_exec($ch);

$qno = $i+1;
if(stristr($html,"Result No.$qno"))
{
echo "<font color=seagreen>| $qno. </font><font color=Crimson>Correct Answer|</font><font color=white>,</font>";
flush();
ob_flush();
if($qno %2==0)
sleep(3);
flush();
ob_flush();
}
else
{
file_put_contents("error$i.txt",$html);
echo "|".$qno."error|";
flush();
ob_flush();
}
}
echo "Brands Complete. Go Check Your Earnings";
?>