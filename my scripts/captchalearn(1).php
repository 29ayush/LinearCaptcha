<?php

ob_implicit_flush(1);
flush();
ob_flush();
set_time_limit(0);
error_reporting(0);

$dir="./img";
if(!is_dir($dir)) 
{ 
	mkdir($dir);  
}	


echo "<center><font size=6pt color=Crimson><b>ULTOO CAPTCHA </b></font></center><br>";

$proxy =trim($_REQUEST['proxy']);

$username=trim($_REQUEST['username']);

$password=trim($_REQUEST['password']);

$uid = $username;
{
	$url	= "http://ultoo.com";

	$re	= "$url/relogin.php";

  	$login	= "$url/login.php";

	$secure	= "$url/secure.php";
	

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
	echo "<br><br>";
        flush();
 	ob_flush();

	relogin:
                       	$cookie = tempnam("/coki", "CURLCOOKIE");
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
                               	$pro = $f_contents[array_rand($f_contents)]; 
                                $ranpro = $pro;
                       		$proxy = trim($ranpro);


		
                  nh:		
                                echo "finding proxy:-$proxy<br>";
                    		flush();
                     		ob_flush();
 
                     // Connecting To Login Page
                               	curl_setopt($ch, CURLOPT_URL, "$re");
                            	curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
                               	curl_setopt($ch, CURLOPT_PROXY, $proxy);
                              	curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
                               	curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
                               	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
                               	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                               	curl_setopt($ch, CURLOPT_REFERER, $re);
                               	$html=curl_exec($ch);

                     // Getting name of userid and pass for post 

                             	preg_match('#alert\(\'Please Enter Your Mobile\'\);[\s]*document.getElementById\(\'(.*?)\'\)#',$html,$matches);
                        	$user = $matches[1];
                               	preg_match('#alert\(\'Please enter the password\'\);[\s]*document.getElementById\(\'(.*?)\'\)#',$html,$matches);
                          	$pass = $matches[1];

                // Checking If Connetion Successful Proxy Worked Or Not	

              	if(stristr($html,"Welcome"))
               		$finalam="yes";

 		if($finalam=="yes")
 		{
 					$finalam="no";
 					echo "<font color=red><b>$proxy</b>:-Connection Successful.</font><br>";
                                        flush();
 					ob_flush();
 					$path='proxy.txt';
 					file_put_contents($path,$proxy."\n", FILE_APPEND);
 					goto reloogin;
 		}
 		else 
		{ 
		        if($manual==1)
                    		{       
                                        echo "Your Proxy Not Working, Auto Proxy Will Find Its Proxy</br>";
                                        flush();
                                        ob_flush();
                        		$manual=0;
                        		goto r;
                 		}
             		goto r1;
		
		}


		reloogin:
                 
                 sleep(2);
		 $header[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
	         $header[] = 'Connection: Keep-Alive';
               	 $header[] = 'Accept-Language: en-us,en;q=0.8';
            	 $header[] = 'Accept-Encoding gzip,deflate';
           	 $header[] = 'Keep-Alive: 300';
            	 $header[] = 'Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7';
         	 $header[] = 'Cache-Control: max-age=0';

		$logdata="Rpidci=&".$user."=".$uid."&".$pass."=".$password."&ulzesx=";

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
					file_put_contents($path,$abc);
        }
        else
            echo "--------Some Error Occured---------------";
        }
}
                ?>
                <html>
                    <body> 
<form action=learntrial.php method=post>
                            <br>
<input type="radio" name="learnandearn" value="yes" checked>Learn And Earn<br /><br />
                            Enter Captcha:</br>
                            <input type=hidden name=proxy value="<?php echo $proxy; ?>">
                            <input type=hidden name=cookie value="<?php echo $cookie; ?>">
                            <input type=hidden name=captr value="<?php echo $captr[1]; ?>">
							<input type=hidden name=username value="<?php echo $username; ?>">
							<input type=hidden name=password value="<?php echo $password; ?>">
                            <img src="<?php echo $path; ?>"</br><br>
                            <input type=text name=cap><br>
                                <br>
                            <input type=submit name=submit value="     submit    ">
                        </form>

                    </body>
                </html>