function getcaptcha($imgpath)
{

$agent = "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:29.0) Gecko/20100101 Firefox/29.0";
  $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
  $headers[] = 'Connection: Keep-Alive';
  $headers[] = 'Accept-Language: en-us,en;q=0.5';
  $headers[] = 'Accept-Encoding gzip,deflate';



$url="http://www.newocr.com/";
$datapage1url=$imgpath;
$datapage1="userfile=&url=".urlencode($datapage1url)."&l=eng&preview=1";

$cookie=tempnam("tempcookie","cookie");
$ch=curl_init();
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_REFERER, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datapage1);
$html=curl_exec($ch);

// Saving html file for debugging laterwards
file_put_contents("error1.txt",$html);

preg_match('/<input type=\"hidden\" name =\"u\" value=\"(.*)\">/',$html,$matches);
$u=$matches[1];
preg_match_all('/<input type=\"hidden\" id=\"(.*)\" name=\"(.*)\" value=\"(.*)\" \/>/',$html,$matches);
$posdata = "".$matches[1][0]."=".$matches[3][0]."&".$matches[1][1]."=".$matches[3][1]."&".$matches[1][2]."=".$matches[3][2]."&".$matches[1][3]."=".$matches[3][3];
$datapage2 = "l=eng&r=0&psm=6&u=$u&$posdata&ocr=1";


curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datapage2);
$html=curl_exec($ch);

// Saving html file for debugging laterwards
file_put_contents("error2.txt",$html);

preg_match('/<textarea id=\"ocr-result\" rows=\"10\" style=\"width:100%;white-space:nowrap;\">(.*)<\/textarea>/',$html,$matches);
$value=$matches[1];

return $value;
}
