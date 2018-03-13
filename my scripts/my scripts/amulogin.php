<?php

$url="http://www.amulyam.in";
$login="$url/login.do";
$home="$url/displayMyWallet.do";
$mobile=$_REQUEST['mobile'];
$password=$_REQUEST['password'];
$agent=isset($_REQUEST['agent']) ? $_REQUEST['agent'] : "Opera/12.02 (Android 4.1; Linux; Opera Mobi/ADR-1111101157; U; en-US) Presto/2.9.201 Version/12.02";
$cookie="Cookie/".rand(0,99999999).".txt";

$unverified=isset($_REQUEST['unverified']) ? $_REQUEST['unverified'] : 0;


$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
$headers[] = 'Connection: Keep-Alive';

$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, $login);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$logindata = "mobile=$mobile&password=$password";
curl_setopt($ch, CURLOPT_POSTFIELDS, $logindata);
$loginhtml=curl_exec($ch);
 

if(stristr($loginhtml,"Forgot Password")) echo "<font size=10pt><font color='red'>wrongUSER&PASS</font></font>";
else echo "<h1 style=\"color:green;\" >Login Successfull</h1>";

if($unverified==1)
{
require_once 'logincredits.php';
$check= unverified($mobile,$password);
}
else
{
require_once 'dlc.php';
$check = logincredits($loginhtml,$cookie,$agent,$login);
}
echo "<hr> ";
curl_setopt($ch, CURLOPT_URL, $home);
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_REFERER, $login);
$homehtml= curl_exec($ch);


preg_match('/src=\"images\/rupee_symbol_verysmall.png\"> <b>(.*)<\//i',$homehtml,$matches);
$initbal="Rs. ".$matches[1];

echo "<span style=\"font-size:20px; color:blue; padding-left:2%;\"> $check </span> <span style=\"display:block; float:right; color:red; margin-right:10%; font-size:20px;\">Initial Balance : $initbal </span> <hr>";


?>


