<center><body bgcolor=black><font color=crimson>
<title>Site Create By Suvo_Ghosh</title>
<b>
<img src=http://rczone.tk/3.png>
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
$cookie = $_REQUEST['cookie'];
$cap = $_REQUEST['cap'];
$cp = $_REQUEST['cp'];
$uid = $_REQUEST['uid'];
$pwd = $_REQUEST['pwd'];

$agent = "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7";
$header = Array("Content-Type: application/x-www-form-urlencoded","Accept: */*");
$url="www.amulyam.in";
$trd="$url/checkTriviaLinkCaptcha.do";

$data1 = "val=$cap&cp=$cp&answer=TRUE";
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, $trd);
curl_setopt($ch, CURLOPT_COOKIESESSION, false);
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_USERAGENT, $agent );
curl_setopt($ch, CURLOPT_HTTPHEADER, $header );
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $data1 );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$html=curl_exec($ch);
if(stristr($html,"CAPTCHA"))
{
echo "<font color=red>Captcha Not Ok</font>";
}
else
{
echo "<font color=blue>$cp )</font><font color=green>!! Wow!! That's the correct answer. !!</font>";
}
$necp="$url/checkTriviaCaptcha.do";
$bdata="captcha=$cap&cp=$cp";
curl_setopt($ch, CURLOPT_URL, $necp);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$bdata);
$sux=curl_exec($ch);
?>
<br><form method="post" action="cap.php">
<?php
echo '<input type="hidden" name="uid" value="'.$uid.'">';
echo '<input type="hidden" name="pwd" value="'.$pwd.'">';
?>
<br><input type=Submit value=Next>
