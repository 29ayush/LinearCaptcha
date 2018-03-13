<?php


if (!isset($_REQUEST['url']))
	{
	die("Behanchod Url To Daal");
	}

$imgurl = $_REQUEST['url'];
$name = rand(0, 999999);
$imgpath = 'img/' . $name . '.jpg';


// Using Curl To Save Image On My Server U Can Also Use file_get_contents

$ch = curl_init($imgurl);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
$raw = curl_exec($ch);
curl_close($ch);
file_put_contents($imgpath,$raw);

// Image Server Par save ho gyi

echo "Your Image Url : " . $imgpath . "<br/>";
$text = getcaptcha1($imgpath); // Calling Captcha Checker
echo "Your Text : $text <br/>";

// Function To Get Captcha

function getcaptcha1($imgpath)
	{


$agent = "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:29.0) Gecko/20100101 Firefox/29.0";
  $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
  $headers[] = 'Connection: Keep-Alive';
  $headers[] = 'Accept-Language: en-us,en;q=0.5';
  $headers[] = 'Accept-Encoding gzip,deflate';




        echo "Function Called"; // For Testing Purposes

	$url = "http://google.com/";
        $datapage1 = "l=eng";

	$urlref = "http://google.com/";
	$ch = curl_init();    			
	curl_setopt($ch, CURLOPT_URL, $url);

	curl_setopt($ch, CURLOPT_REFERER, $urlref);

$cookie=tempnam("tempcookie","cookie");
$ch=curl_init();
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


	$result= curl_exec($ch);
        print_r(curl_getinfo($ch));
	echo $result;


	}
?>
