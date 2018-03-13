<?php

ob_implicit_flush(1);
flush();
ob_flush();
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
$sample_Date=  date("d-m-Y");
$dir="./img";
if(!is_dir($dir)) 
{ 
	mkdir($dir);  
}	
$ansnot=$coun=0;
echo "<center><font size=6pt color=Crimson><b>Captcha Page By Khiladi</b></font></center><br>";
$proxy =isset($_REQUEST['proxy'])?trim($_REQUEST['proxy']):"14.139.210.244:8080";
$proxy = $_REQUEST['proxy'];
$username=isset($_REQUEST['username'])?trim($_REQUEST['username']):"9034278725";
$password=isset($_REQUEST['password'])?trim($_REQUEST['password']):"nodsfakjdgh";
$recap=isset($_REQUEST['recaptcha_challenge_field'])?trim($_REQUEST['recaptcha_challenge_field']):"99999999";
$cap= isset($_REQUEST['recaptcha_response_field'])?trim($_REQUEST['recaptcha_response_field']):"99999999";
$mb=isset($_REQUEST['mobile'])?trim($_REQUEST['mobile']):"99999999";
$opti1=isset($_REQUEST['opti1'])?trim($_REQUEST['opti1']):"3";

$ball = "yes";

$stack=array();
$mobi = explode(",",$mx);
$tteemmpp="";
$uid = $username;
{
	$url	= "http://ultoo.com";
	$sms	= "$url/home.php";
	$re	= "$url/relogin.php";
	$login	= "$url/login.php";
	//$answer	= "$url/AnswereIt.php";
	$answer	= "$url/AnswereItFr.php";
	$delsms= "$url/sentSms.php";
	$secure	= "$url/secure.php";
	$poll="$url/poll.php";
	$question="$url/PollCompleted.php";
	$end	= "$url/msgSent.php";
	$jack	= "$url/Ukbc.php";
	$jackmain="$url/Ukbc.php?zxcoiesesscd=";
	$main	= "$url/mywallet.php?zxcoiesesscd=";
	$bal	= "$url/transaction.php?credit=1&debit=0";
	$bal2	= "$url/transaction.php";
	$logout = "$url/logout.php?LogOut=1";
	
	$matches[0]="";
	$id=0;
	$qs=0;
	$jc=0;
	$jck=0;
	$qc=0;
	$stop=0;
$anserror=0;
$agent = "Opera/9.80 (J2ME/MIDP; Opera Mini/4.5.33634/32.1440; U; en) Presto/2.8.119 Version/11.10";
  $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
  $headers[] = 'Connection: Keep-Alive';
  $headers[] = 'Content-type: application/x-www-form-urlencoded;charset=UTF-8';
  $headers[] = 'Accept-Language: en-us,en;q=0.8';
  $headers[] = 'Accept-Encoding gzip,deflate';
  $headers[] = 'Keep-Alive: 300';
  $headers[] = 'Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7';
  $headers[] = 'Cache-Control: max-age=0';


	echo "<br /><font color=SeaGreen><b>Mobile No ::</font><font color=Blue><b>  $uid</font><br /><br>  " ;
	echo "<b><font color=SeaGreen>TIME :: </b></font>" ;
	date_default_timezone_set('Asia/Calcutta');
	echo date('d-m-Y h:i:s');
	$now = Date("d-m-Y  h:i:s");
	echo "<br><br>";
	ob_flush();
	relogin:
	$cookie = tempnam("/coki", "CURLCOOKIE");
//$cookie="img/".$uid.".txt";
	$stop=0;
	$mobile_field="";
	$msg_field="";	
	$manual=0;
	$ch = curl_init();
	if(isset($_REQUEST['proxy']))
	{
	$proxy=$_REQUEST['proxy'];
	$manual=1;
	goto nh;
	}
	else
	{
		
r:	
	$f_contents = file("proxy123.txt"); 
r1:
	$pro = $f_contents[array_rand($f_contents)]; $ranpro = $pro;
		$proxy = trim($ranpro);


		
nh:		echo "finding proxy:-$proxy<br>";
		ob_flush();
		flush();
	curl_setopt($ch, CURLOPT_URL, "$re");
	curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
	curl_setopt($ch, CURLOPT_PROXY, $proxy);
	curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
	curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
	///curl_setopt($ch, CURLOPT_PROXY, $proxy);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_VERBOSE, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	  //curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_REFERER, $re);
	$html=curl_exec($ch);

	preg_match('#alert\(\'Please Enter Your Mobile\'\);[\s]*document.getElementById\(\'(.*?)\'\)#',$html,$matches);
	$user = $matches[1];
	preg_match('#alert\(\'Please enter the password\'\);[\s]*document.getElementById\(\'(.*?)\'\)#',$html,$matches);
	$pass = $matches[1];
	
	if(stristr($html,"Welcome"))
		$finalam="yes";
		ob_flush();
		if($finalam=="yes")
		{
					$finalam="no";
					echo "<font color=red><b>$proxy</b>:-mil gaya proxy</font><br>";
					ob_flush();
					$path='proxy.txt';
					$fh = fopen($path, 'a');
					fwrite($fh, "$proxy".PHP_EOL);
					fclose($fh);
					goto reloogin;
		}
		else 
		{
		if($manual==1)
		{
		$manual=0;
		goto r;
		}
		goto r1;
		
		}
		reloogin:
		$header[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
	 $header[] = 'Connection: Keep-Alive';
	 $header[] = 'Content-Type: multipart/form-data; boundary=----------LzLCx8fo3WIQstzqaStJeL';
	 $header[] = 'Accept-Language: en-us,en;q=0.8';
	 $header[] = 'Accept-Encoding gzip,deflate';
	 $header[] = 'Keep-Alive: 300';
	 $header[] = 'Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7';
	 $header[] = 'Cache-Control: max-age=0';
		$logdata='------------LzLCx8fo3WIQstzqaStJeL
Content-Disposition: form-data; name="Rpidci"


------------LzLCx8fo3WIQstzqaStJeL
Content-Disposition: form-data; name="'.$user.'"

'.$uid.'
------------LzLCx8fo3WIQstzqaStJeL
Content-Disposition: form-data; name="'.$pass.'"

'.$password.'
------------LzLCx8fo3WIQstzqaStJeL--
';
	
	curl_setopt($ch, CURLOPT_URL, $login);
	curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
	curl_setopt($ch, CURLOPT_PROXY, $proxy);
	curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
	curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_VERBOSE, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_REFERER, $login);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,"$logdata");
	//curl_setopt($ch, CURLOPT_POSTFIELDS,"Rpidci=&sFiigE=$uid&mvqKtYyRmwfxn=$password&RememberMe=1&login_btn=login here");
	$html=curl_exec($ch);
	if(stristr($html,"Mobile number & password"))
	{
	curl_close($ch);
	die("<h3><tt><font color=red>------------ Mobile number & password don't match.. --------</font></h3>");
	}
	if(stristr($html,"secure.php"))
	{
		curl_setopt($ch, CURLOPT_URL, $secure);
		curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
		curl_setopt($ch, CURLOPT_PROXY, $proxy);
		curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
		curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
		 ///curl_setopt($ch, CURLOPT_PROXY, $proxy);
	        curl_setopt($ch, CURLOPT_POST,0);
		curl_setopt($ch, CURLOPT_HEADER, 1);
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$html=curl_exec($ch);
		
		preg_match('<input type="hidden" name="(.*?)" id="(.*?)" value="">',$html,$captr);
                                        
                                        $img="".$url."/captcha.php";
					curl_setopt($ch, CURLOPT_URL, $img);
					curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
					curl_setopt($ch, CURLOPT_PROXY, $proxy);
					curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
						curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
					curl_setopt($ch, CURLOPT_HEADER, 0);
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);		
					$abc=curl_exec($ch);
					$name=rand(0, 999999);
					$path='img/'.$name.'.png';
					$fh = fopen($path, 'x');
					fwrite($fh, $abc);
					fclose($fh);
        }
        }
}
                ?>
                <html>
                    <body>
                   <center>    
<form action=cs.php method=get>
                            <br>

<input type="checkbox" name="quiz" value="yes" checked><tt> Play Quiz <br><input type="checkbox" name="poll" value="yes" checked><tt> Play Poll <br><input type="checkbox" name="jack" value="yes" checked><tt> Play Jackpot <br><input type="checkbox" name="bal" value="yes" checked><tt> Check Balance<br><br>
                            Enter Captcha:</br>
                            <input type=hidden name=proxy value="<?php echo $proxy; ?>">
                            <input type=hidden name=cookie value="<?php echo $cookie; ?>">
                            <input type=hidden name=captr value="<?php echo $captr[1]; ?>">
							<input type=hidden name=username value="<?php echo $username; ?>">
                            <img src="<?php echo $path; ?>"</br><br>
                            <input type=text name=cap><br>
                                <br>
                            <input type=submit name=submit value="     submit    ">
                        </form>

                       </center>
                    </body>
                </html>