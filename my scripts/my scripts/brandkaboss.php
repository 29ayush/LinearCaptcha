<?php

function method($intake)
{
if($intake=="autoref" && $_REQUEST['auth']!="alltechspeccron") return "false";
if($_REQUEST['auth']=="alltechspeccron") return trim($_REQUEST[$intake]);
else return trim($_POST[$intake]);

}

error_reporting(0);
ob_implicit_flush(1);
$url = "http://ultoo.com";
$secure = "$url/secure.php";
$brandstart = "$url/brands.php";
$brandques = "$url/brands_ques.php";
$login = "$url/mywallet.php?zxcoiesesscd=";
$brandend = "$url/brands_result.php";
$brandmid = "$url/brands_graph.php";

$agent = "Opera/9.80 (J2ME/MIDP; Opera Mini/4.5.33634/32.1440; U; en) Presto/2.8.119 Version/11.10";
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
$headers[] = 'Connection: Keep-Alive';
$headers[] = 'Content-type: application/x-www-form-urlencoded;charset=UTF-8';
$headers[] = 'Accept-Language: en-us,en;q=0.8';
$headers[] = 'Accept-Encoding gzip,deflate';
$headers[] = 'Keep-Alive: 300';
$headers[] = 'Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7';
$headers[] = 'Cache-Control: max-age=0';


$cookie = method('cookie');
$username = method('username');
$proxy = method('proxy');
$playno=method('playno');
$playno=empty($playno) ? 5 : $count;
$count=method('count');
$count=empty($count) ? 1 : $count;

if(empty($proxy)) die("Invalid Details Submit Error Notify Admin Or Try Again");

$type=method('type');
if($type=="refresh")
{
echo "<h2><font color=green>Logged In : Successfully</h2><br/>";
echo "<span style=\"float:left;\">Welcome User : $username</span>
<a title=\"Refresh AlltechInoNe Ultoo\"  href=\"#\" onclick=\"submit()\" style=\"display:block; text-align:center;\">!..Refresh/Play AGAIN..!</a>";

echo "<form id=\"refresher\" method=\"post\" style=\"display:none\">
        <input type=\"text\" name=\"username\" value=\"$username\">
        <input type=\"text\" name=\"proxy\" value=\"$proxy\">
        <input type=\"text\" name=\"cookie\" value=\"$cookie\">
        <input type=\"text\" name=\"count\" value=\"".intval($count+$playno)."\">
        <input type=\"text\" name=\"type\" value=\"refresh\">
        </form>
        <br/><hr>
        <script>function submit() { document.getElementById('refresher').submit(); }</script>";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_USERAGENT, $agent);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_PROXY, $proxy);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	flush();
	ob_flush();
	sleep(3);

goto BrandkabossStart;
}

// Start Submitting Captcha

$captr = method('captr');
$cap = method('cap');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $secure);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$cap_data = $captr . "=nlp&captcha=$cap";
curl_setopt($ch, CURLOPT_POSTFIELDS, $cap_data);
$html = curl_exec($ch);

if (stristr($html, "box do not match"))
	{
	die("<h3><tt><font color=red>------------ You Have Entered Wrong Captcha. --------</font></h3>");
	}

if (stristr($html, "mywallet"))
	{
	
echo "<h2><font color=green>Logged In : Successfully</h2><br/>";
echo "<span style=\"float:left;\">Welcome User : $username</span>
<a title=\"Refresh AlltechInoNe Ultoo\"  href=\"#\" onclick=\"submit()\" style=\"display:block; text-align:center;\">!..Refresh/Play AGAIN..!</a>";
//       <span style=\"float:right;\">Initial Balance : $username</span>

echo "<form id=\"refresher\" method=\"post\" style=\"display:none\">
        <input type=\"text\" name=\"username\" value=\"$username\">
        <input type=\"text\" name=\"proxy\" value=\"$proxy\">
        <input type=\"text\" name=\"cookie\" value=\"$cookie\">
        <input type=\"text\" name=\"count\" value=\"".intval($count+$playno)."\">
        <input type=\"text\" name=\"type\" value=\"refresh\">
        </form>
        <br/><hr>
        <script>function submit() { document.getElementById('refresher').submit(); }</script>";
	flush();
	ob_flush();
	sleep(3);

        

	}
  else die("<h3><tt><font color=red>-------- Some Error Occured. ----</font></h3></tt>");

// Captcha Ended	Brand Ka Boss Start

BrandkabossStart:


	require_once 'ultoogamefunctions.php';

	curl_setopt($ch, CURLOPT_URL, $brandstart);
	curl_setopt($ch, CURLOPT_POST, 0);
	curl_setopt($ch, CURLOPT_REFERER, $brandstart);

	//  Remaining Curl OPTIONS DECLARED ABOVE

	$brandstarthtml = curl_exec($ch);

	for ($i = 0; $i < 10; $i++)
		{

		// Getting Question Page

		curl_setopt($ch, CURLOPT_URL, $brandques);
		curl_setopt($ch, CURLOPT_POST, 0);

		// If First QUestion referrer = start page else graph page

		if ($i == 0) curl_setopt($ch, CURLOPT_REFERER, $brandstart);
		  else curl_setopt($ch, CURLOPT_REFERER, $brandmid);
		$getqueshtml = curl_exec($ch);

		$data = getbrandgamepostdata($getqueshtml);

		curl_setopt($ch, CURLOPT_URL, $brandques);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_REFERER, $brandques);
		$quessubmithtml = curl_exec($ch);


		curl_setopt($ch, CURLOPT_URL, $brandmid);
		curl_setopt($ch, CURLOPT_POST, 0);
		curl_setopt($ch, CURLOPT_REFERER, $brandques);
		$quesgraphhtml = curl_exec($ch);

		$qno = $i + 1;
		if (stristr($quesgraphhtml, "Result No.$qno"))
			{
			echo "<font color=seagreen>| $qno. </font><font color=Crimson>Answer Submitted|</font>,";
			flush();
			ob_flush();
			}
		  else
			{
			file_put_contents("Brandkapart1error$i.txt", $getqueshtml);
			file_put_contents("Brandkapart2error$i.txt", $quessubmithtml);
			file_put_contents("Brandkapart3error$i.txt", $quesgraphhtml);
			die("|$qno error|");
			flush();
			ob_flush();
			}
		}
        echo "<hr><span style=\"text-align:center;  display:block;\">Completed The Brand Ka Boss Quiz $count times.</span><hr>";
        $count++;
        sleep(3);
        if($count % $playno != 1 ) goto BrandkabossStart;
/*	echo "Brands Complete. Go Check Your Earnings<br/>Cookie: $cookie";
        echo"<br/> Url : http://localhost:9543/Brand/brandkabosscont.php?username=$username&cookie=$cookie&playno=$playno"; */ 
curl_close($ch);
        if(method('autoref')=="active") echo "<script> submit(); </script>";
?>


IP: 94.249.201.9

Username: console-4820

Password:MfyCkIaijE
