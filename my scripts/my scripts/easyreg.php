<?php

if(!is_dir("img")) mkdir("img");
if(!is_dir("Cookie")) mkdir("Cookie");


function uidcheck()
{
$usite = isset($_REQUEST['usite']) ? $_REQUEST['usite'] : "false";
$pwdsite = isset($_REQUEST['pwdsite']) ? $_REQUEST['pwdsite'] : "false";
if($usite=="false" || $pwdsite=="false") return 'false';
$acc = file_get_contents('accsite.txt');
$details=$usite.";".$pwdsite;
if(stristr($acc,$details)) return true;
else return false;
}

if(uidcheck()=='true') { $usite = $_REQUEST['usite']; $pwdsite = $_REQUEST['pwdsite']; }
else die("Username/Password For Login On Site Invalid");

function proxy($update = 'false', $proxy = "nil", $count = "nil", $explicit = 0)
	{
        if(!is_file('proxies.txt')) file_put_contents('proxies.txt',"");
	$proxies = file_get_contents('proxies.txt');
        if (empty($proxies)) {die("Site Proxy List is Empty Consider Updating It Or Use Manual Proxy ");}
	if ($update == 'false')
		{
		preg_match_all('/(.*);(.*)\s*/i', $proxies, $matches);
		$id = rand(0, count($matches[2]) - 1);
		$proxy = $matches[1][$id];
		$count = $matches[2][$id];
		if ($count >= 9)
			{
			$proxies = preg_replace('/' . $proxy . ';(.*)\s/', '', $proxies);
			file_put_contents('proxyfinal.txt', $proxies);
			return proxy();
			}

		return array($proxy,$count);
		}
	  else
		{
		if ($count >= 8 || $explicit == 1) $proxies = preg_replace('/' . $proxy . ';(.*)\s/', '', $proxies);
           	else $proxies = preg_replace('/' . $proxy . ';(.*)\s/', $proxy . ";" . intval($count + 1) . "\n", $proxies);
		file_put_contents('proxies.txt', $proxies);
		}
	}


function generateRandomString($length = 10) {
$names = file('name.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
return $names[rand(0,count($names)-1)];
}

function getcity()
{
$cityarray=array("141_11","241_16","507_30","128_9","9_1","640_34","353_20","4_1","544_32","141_11","337_20","391_23","469_28","338_20","545_32","546_32","615_33","470_28","168_12","339_20","142_11","450_27","143_11","5_1","288_19","68_4","289_19","340_20","549_32","552_32","290_19","413_25","553_32","554_32","555_32","241_16","471_28","204_14","557_32","473_28","291_19","242_16","243_16","292_19","342_20","474_28","145_11","146_11","105_6","475_28","73_4","294_19","416_25","244_16","245_16","559_32","476_28","106_6","189_13","418_25","560_32","343_20","295_19","74_4","246_16","190_13","617_33","618_33","101_5","344_20","507_30","296_19","297_19","247_16","248_16","562_32","6_1","508_30","509_30","419_25","123_7","147_11","125_8","298_19","107_6","75_4","634_34","47_3","299_19","250_16","619_33","128_9","219_15","300_19","301_19","510_30","345_20","126_8","109_6","635_34","7_1","271_17","512_30","564_32","565_32","566_32","170_12","452_27","567_32","171_12","568_32","569_32","346_20","149_11","423_25","570_32","77_4","571_32","572_32","574_32","253_16","226_15","303_19","8_1","172_12","53_3","304_19","191_13","575_32","483_28","305_19","620_33","254_16","636_34","513_30","637_34","256_16","9_1","377_21","307_19","308_19","484_28","485_28","457_27","349_20","206_14","150_11","228_15","309_19","487_28","579_32","488_28","489_28","10_1","11_1","514_30","428_25","273_17","582_32","515_30","445_26","207_14","12_1","516_30","13_1","311_19","639_34","312_19","152_11","275_17","402_24","351_20","640_34","276_17","491_28","277_17","278_17","14_1","15_1","286_18","586_32","587_32","459_27","518_30","16_1","591_32","279_17","433_25","261_16","135_10","592_32","17_1","594_32","595_32","102_5","596_32","353_20","643_34","597_32","89_4","262_16","644_34","519_30","354_20","621_33","90_4","18_1","355_20","356_20","155_11","357_20","358_20","156_11","19_1","20_1","598_32","359_20","137_10","181_12","182_12","318_19","360_20","158_11","465_27","92_4","599_32","211_14","21_1","447_26","361_20","438_25","601_32","263_16","362_20","118_6","119_6","319_19","22_1","320_19","160_11","120_6","524_30","602_32","235_15","23_1","321_19","363_20","322_19","603_32","323_19","604_32","525_30","96_4","364_20","365_20","324_19","24_1","325_19","326_19","328_19","329_19","197_13","265_16","330_19","496_28","647_34","497_28","367_20","498_28","25_1","214_14","162_11","163_11","368_20","527_30","529_30","282_17","530_30","283_17","332_19","532_30","533_30","26_1","500_28","215_14","333_19","369_20","612_32","164_11","165_11","166_11","613_32","139_10","535_30","335_19","27_1","536_30","28_1","29_1","30_1","31_1","448_26","372_20");
return $cityarray[rand(0,302)];
}



function img2txt($imgpath)
	{

       $url = "http://maggie.ocrgrid.org/cgi-bin/weocr/ocr_scene_old.cgi";
       $urlref = "http://maggie.ocrgrid.org/scene";

       $datapage1 = array(
		'userfile' => '@'.$imgpath,
		'outputencoding' => 'utf-8',
		'outputformat' => 'txt',
	);
	
        $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_REFERER, $urlref);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $datapage1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$exec= curl_exec($ch);
        return $exec;

	}

$tries=0;

restart:

$proxydet=proxy();
$proxy=$proxydet[0];
$count=$proxydet[1];

$cookie=tempnam('Cookie','CURL');

$url="http://www.amulyam.in";
$signup="$url/signUpForAmulyam.do";

$ch = curl_init();
curl_setopt($ch , CURLOPT_URL , "$url/?home");
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
$html=curl_exec($ch);
if(!stristr($html,'Signup')) { echo "Proxy not working : ".$proxy."<hr>"; proxy('true',$proxy,$count,1); goto restart; }

preg_match('/name="org.apache.struts.taglib.html.TOKEN" value="(.*)"/i',$html,$matches);
$token=$matches[1];


$montharray=array("Jan","Feb","Mar","Apr","May","June","July","Aug","Sep","Oct","Nov","Dec");


$email=isset($_REQUEST['email']) ? $_REQUEST['email'] : die("Email Not Specified");
$random = "false";
$email = urlencode($email);
email:

if($email=="random") { $email="spy".rand(0,9999999)."%40yahoo.com"; $random="true"; }

else
{
preg_match("/(.*)%40(.*)/",$email,$matches);
if(strlen($matches[1])<=0) die("Invalid Email. Email Length < 0");
if(!$matches[2]=="gmail.com" && !$matches[2]=="yahoo.com") die("Inalid Email.Use Only gmail.com or yahoo.com mails");
}

$response =trim(file_get_contents("http://www.amulyam.in/jsp/ajax/validateEmail.jsp?email=$email"));
if($response =="-1") 
{
if($random=="true") goto email;
else die("Sorry Try Again Email Already Registered");
}


$password=isset($_REQUEST['password']) ? $_REQUEST['password'] : die("Email Not Specified");
if(strlen($password)<8) die("Invalid Password. Password Length Should Be Of Atleast 8 charachters");


$mobile=isset($_REQUEST['mobile']) ? $_REQUEST['mobile'] : die("Mobile Not Specified");

$random="false";
mobile:
if($mobile=="random") { $mobile= file_get_contents('Mobile50.txt'); $random ="true"; }
if(strlen($mobile)<10) die("Invalid Mobile. Mobile Length Should Be Of Atleast 10 charachters");
if($mobile[0]!='9' && $mobile[0]!='8' && $mobile[0]!='7' ) die("Invalid Mobile No.");

$response =trim(file_get_contents("http://www.amulyam.in/jsp/ajax/validateMobile.jsp?mobile=$mobile"));
if($response !="0") 
{
if($random=="true") {mobfail($mobile); goto mobile;}
else die("Sorry Try Again Mobile Already Registered");
}


$name= !empty($_REQUEST['name'])? $_REQUEST['name'] : generateRandomString();

$day= rand(1,30);
$year= rand(1970,1990);
$month= $montharray[rand(0,11)];
$city= getcity();


$img="$url/signupCaptcha.jsp";
curl_setopt($ch, CURLOPT_URL, $img);
		curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
		curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
		$abc = curl_exec($ch);
		$name1 = "img".rand(0, 999999999);
		$path = 'img/'.$name1.'.png';
		$fh = fopen($path, 'x');
		fwrite($fh, $abc);
		fclose($fh);
                
		$captcha = trim(img2txt($path));

$postdata="org.apache.struts.taglib.html.TOKEN=$token&email=$email&password=$password&mobile=$mobile&gender=Male&name=".$name."&day=$day&month=$month&year=$year&city=$city&captcha=$captcha&rid=&sid=";
                curl_setopt($ch, CURLOPT_URL, $signup);
		curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
		curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_BINARYTRANSFER, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		$abc = curl_exec($ch);

if(stristr($abc,'We just sent an activation email'))
{
mobfail($mobile);
proxy("true",$proxy,$count);
echo "Registertion Successful<br> Your Email : ".urldecode($email)."<br> Your Password: ".$password;
file_put_contents('accounts.txt',$postdata."&usite=".$usite."&pwdsite=".$pwdsite."\n",FILE_APPEND);
}
elseif($tries<4)
{
$tries++;
echo "Captcha Error  ".$tries."&nbsp;&nbsp;&nbsp;IMAGE = <img src=".$path.">"." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Captcha Submitted = ".$captcha."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Proxy = ".$proxy."<hr>";
goto restart;
}
else 
{
echo "Captcha Error 5 IMAGE = <img src=".$path.">"." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Captcha Submitted = ".$captcha."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Proxy = ".$proxy."<hr>";
}

function mobfail($mobile)
{
file_put_contents('Mobile50.txt',($mobile+1));
}
?>