<center><title>Amulyam Vocublary Game</title>
<img src=http://rczone.tk/2.png>
<br>
<img src=http://www.amulyam.in/images/amulyam_logo.png>
<body bgcolor=yellow>
<font color=crimson>
<?php
//Plz Don't Removed This Line, Script Devloping By Suvo_Ghosh.
f:
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

if(stristr($html,"Invalid login"))
{
echo "<font color=red><b>Invalid Username or Password</font></b>";
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

preg_match('/span class="balance">Rs.(.*?)</i',$html,$matches);
$bal = $matches[1];
echo "<b><font color=green> Balance Rs: </font><font color=blue>$bal </font>";

flush();
ob_flush();
$vrc="$url/vocabulary.do";
curl_setopt($ch, CURLOPT_URL, $vrc);
curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$fgh=curl_exec($ch);

if(stristr($fgh,"Click here to claim 50 paise"))
{
preg_match_all('/bid=(.*?)" target="_blank"/',$fgh,$captr);
$ad = $captr[1];
$url1="http://www.amulyam.in/amulyamCo.do?cafp=goToBanner&bid=$ad[0]";
$url2="http://www.amulyam.in/amulyamCo.do?cafp=goToBanner&bid=$ad[1]";
curl_setopt( $ch, CURLOPT_URL, $url1);
curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$fgh=curl_exec($ch);
curl_setopt( $ch, CURLOPT_URL, $url2);
curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$fgh=curl_exec($ch);
curl_setopt( $ch, CURLOPT_URL, "$url/amulyamCo.do?cafp=claimVocabulary");
curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, "");
$fgh=curl_exec($ch);
if(stristr($fgh,"has been credited"))
{
echo "<br><font color=green>Claim Vocabulary Complet.</font><br>";
goto bal;
}
else
{
echo "<hr><font color='red'>Unable Claim Vocabulary.</font><hr>";
}
}
if(stristr($fgh,"You have played vocabulary builder today and got 50paise. You can earn 50paise every day with this game"))
{
echo "<br><font color='green'>Today's Vocublary Game Completed.</font><br>";
goto bal;
}



preg_match('#id="(.*?)__#', $fgh, $and);
$enw = $and[1];

preg_match('#Word (.*?) of 15#', $fgh, $plo);
$num = $plo[1];


flush();
ob_flush();
$ang="$url/enterLWord.do";
$poyt="cp=$num";
curl_setopt($ch, CURLOPT_URL, $trm);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$poyt);
$kijhg=curl_exec($ch);


flush();
ob_flush();
$ajvb="$url/showLWord.do";
$pyuj="word=$enw&cp=$num";
curl_setopt($ch, CURLOPT_URL, $ajvb);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$pyuj);
$jhyy=curl_exec($ch);


preg_match("#cp=$num\">(.*?)</a></li>#",$jhyy,$ter);
$bnv = $ter[1];


flush();
ob_flush();
$ajvb="$url/checkVocabularyLinkCaptcha.do";
$pyuj="val=$bnv&cp=$num";
curl_setopt($ch, CURLOPT_URL, $ajvb);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$pyuj);
$jhyy=curl_exec($ch);
echo "Qustion Number: $num Bypass Code: $bnv Answear: $enw";
goto f;
bal:
curl_setopt($ch, CURLOPT_URL, $wallet);    
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_ENCODING,"gzip,deflate");
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_REFERER, $home);
curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
$html=curl_exec($ch);

preg_match('/span class="balance">Rs.(.*?)</i',$html,$matches);
$bal = $matches[1];
echo "<font color=green> Fainal Balance Rs: </font><font color=blue>$bal </font>";
//Plz Don't Removed This Line, Script Devloping By Suvo_Ghosh.
?>