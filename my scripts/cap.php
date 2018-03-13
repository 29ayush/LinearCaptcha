<center><body bgcolor=black><font color=crimson>
<title>Site Create By Suvo_Ghosh</title>
<b>
<img src=http://rczone.tk/2.png>
<br>
<font color="blue">Site Create By Suvo_Ghosh</font>
<br>
</b>
<a target="_blank" href="http://cashtasks.com/?ref=314131"><img src="http://CashTasks.com/images/ban5.gif" border="0" height="60" width="400"></a>
<br><br><b><i>
<?php
flush();
ob_flush(); 
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);

if(!ini_get('safe_mode'))

$cookie=tempnam("/tmp","CURLCOOKIE");
$uid=$_REQUEST['uid']; 
$pwd=$_REQUEST['pwd'];
$url="www.amulyam.in";
$login="$url/login.do";
$home="$url/home.do";
$wallet="$url/displayMyWallet.do";

$header = Array("Content-Type: application/x-www-form-urlencoded","Accept: */*");
$agent = "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7";

echo "<h1><font color=pink>!!... Hi _ : ".$uid." ...!!</font></div></h1><br>";

$ch = curl_init();
flush();
ob_flush();
curl_setopt($ch, CURLOPT_URL, $url);    
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_ENCODING,"gzip,deflate");
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_REFERER, $url);
curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
$html=curl_exec($ch);

$data = "mobile=$uid&password=$pwd&button=LOGIN";
flush();
ob_flush();
curl_setopt($ch, CURLOPT_URL, $login);    
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_ENCODING,"gzip,deflate");
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_REFERER, $login);
curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"$data");
$html=curl_exec($ch);
preg_match('#input type="hidden" name="lk" value="(.*?)"#', $html, $ldf);
$ikl = $ldf[1];
preg_match('#<input type="hidden" name="lekv" value="(.*?)"#', $html, $jhu);
$jkl = $jhu[1];

if(preg_match("/Invalid login/i",$html,$matches)) //check login data
{
echo "<font color=red><b>Invalid Username or Password</font></b>"; 
//exit if invalid login
break;
} 
else 


curl_setopt($ch, CURLOPT_URL, $wallet);    
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_ENCODING,"gzip,deflate");
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_REFERER, $home);
curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
$html=curl_exec($ch);

if(preg_match_all("/<b>(.*?)<\/b>/i",$html,$matches))
{
$bal = $matches[0][0];
echo "<b><font color=green> Balance Rs: </font><font color=blue>$bal </font>";
}
else
{
echo "<b><font color=red>(Unable) [Suvo] {Se Bat Karo.}</font></b>";
}
tr:
flush();
ob_flush();
$trc="$url/playTrivia.do";
$trm="$url/checkTrivia.do";
$captcha="$url/triviaLinkCaptcha.do";
$trd="$url/checkTriviaLinkCaptcha.do";
curl_setopt($ch, CURLOPT_URL, $trc);
curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$cg=curl_exec($ch);
preg_match('#Question (.*?) of 25#', $cg, $cs);
$cp = $cs[1];

flush();
ob_flush();
$posttrv="cp=$cp&answer=TRUE";
curl_setopt($ch, CURLOPT_URL, $trm);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$posttrv);
$gf=curl_exec($ch);
preg_match('#img src="(.*?)" alt="captcha"#', $gf, $cl);
$cau = $cl[1];
$ucap = "$url/$cau";
flush();
ob_flush();
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $ucap);
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,  true);
$cpty = curl_exec($ch);
curl_close($ch);
$name = "img/".rand(1,99999).".jpg";
$myFile = $name;
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = $cpty;
fwrite($fh, $stringData);
fclose($fh);
?><br>
<form method="post" action="suvo.php">
<img src=<?php echo $name; ?>><br> <input type=text name=cap>
<?php
echo '<input type="hidden" name="cookie" value="'.$cookie.'">';
echo '<input type="hidden" name="cp" value="'.$cp.'">';
echo '<input type="hidden" name="uid" value="'.$uid.'">';
echo '<input type="hidden" name="pwd" value="'.$pwd.'">';

?>
<br><input type=Submit value=Submit>
