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
//$proxy=isset($_REQUEST['proxy'])?trim($_REQUEST['proxy']):"14.139.210.244:8080";
$proxy = $_REQUEST['proxy'];
$captr=$_REQUEST['captr'];
$cookie=$REQUEST['cookie'];
$username=isset($_REQUEST['username'])?trim($_REQUEST['username']):"9085989675";
$password=isset($_REQUEST['password'])?trim($_REQUEST['password']):"a8c2ca9hkj";

$cap= $_REQUEST['cap'];


$opti1=isset($_REQUEST['opti1'])?trim($_REQUEST['opti1']):"3";

$loogc=0;
$quizz = $_REQUEST["quiz"];
$polll = $_REQUEST["poll"];
$smss = $_REQUEST["sms"];
$jackk = $_REQUEST["jack"];
$upll=$_REQUEST["upl"];

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


	//echo "<br /><font color=SeaGreen><b>Mobile No ::</font><font color=Blue><b>  $username</font><br /><br>  " ;
	//echo "<b><font color=SeaGreen>TIME :: </b></font>" ;
	date_default_timezone_set('Asia/Calcutta');
	//echo date('d-m-Y h:i:s');
	$now = Date("d-m-Y  h:i:s");
	//echo "<br><br>";
	ob_flush();
	relogin:
	$cookie=$_REQUEST['cookie'];
//$cookie="img/".$uid.".txt";
	$stop=0;
	$mobile_field="";
	$msg_field="";	
	$manual=0;
	$ch = curl_init();
	
reloogin:
		curl_setopt($ch, CURLOPT_URL, $secure);
		curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
		curl_setopt($ch, CURLOPT_PROXY, $proxy);
		curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
		curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
		 ///curl_setopt($ch, CURLOPT_PROXY, $proxy);
		curl_setopt($ch, CURLOPT_HEADER, 1);
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				// curl_setopt($ch, CURLOPT_REFERER, $login);
		$cap_data=$captr."=nlp&captcha=$cap";
		//$cap_data=$captr[1]."=deep&lo­ginButton=LOGIN&recaptcha_challenge_fiel­d=03AHJ_VusDlNSHVOAAev-MCgjwXoxkKDRS9aak­RV84iZfpB6lfaZCjtBDo0hneyRI0ebD6lNcDMzQL­FU2oyH2JVvLWu54IrEfuO?5g-bSyQQiGExtdTaUim­ioMwxo_5Gu7vuD1N3qg3BBCRtHUKGQwntXi6UEk2­PxvqhQAVXQIQCj1BVtyY1p?agr54&recaptcha_re­sponse_field=dealings+almlrave";
		curl_setopt($ch, CURLOPT_POSTFIELDS, $cap_data);
		$html=curl_exec($ch);
		
        if(stristr($html,"box do not match"))
		{
		curl_close($ch);
		die("<h3><tt><font color=red>------------ You Have Entered Wrong Captcha. --------</font></h3>");
		}
		if(stristr($html,"mywallet"))
		{
		echo "<h2><tt><font color=green>Ho gaya Login...Earning start !!</tt></h4><br>";
		
		}
		else
		{
		echo "<h3><tt><font color=red>-------- Some Error Occured. ----</font></h3></tt>";
		$loogc++;
		if($loogc>6)
		exit;
		goto reloogin;
		}

	}
	
	
		{	
		asf:
			if($quizz=="yes")
			{
			quiz:
			for($start=1;$start<=65;$start++)
			{
				kwiz:
				flush();
				ob_flush(); 
				curl_setopt($ch, CURLOPT_URL, $answer);
				curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
				curl_setopt($ch, CURLOPT_PROXY, $proxy);
				curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
				curl_setopt($ch, CURLOPT_PROXY, $proxy);
				curl_setopt($ch, CURLOPT_HEADER, 1);
				  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				curl_setopt($ch, CURLOPT_VERBOSE, 1);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_REFERER, $answer );
				$html=curl_exec($ch);
			  
				if(preg_match("/AICompletionFr.php(.*?)'/i", $html, $matches) || stristr($html,'You have completed the'))
				{
					echo"<center><br><font color=Green>You have completed the 'ANSWER IT' section for the day.</font><br><hr></center>";	
					goto poll;
					break;
				}
				if(preg_match("/<p class=\"qtionfont\">Question number:-(.*?)<\/p>/i",$html, $n))
				$qno=$n[1];		  
				if(preg_match('/"ps_bg1">(.*?)</',$html,$matches))
				$ps = $matches[1];
				if(preg_match('/"rs_bg1">(.*?)</',$html,$matches))
				$rs = $matches[1];
				if(preg_match('/input type=\"text\" name=\"(.*?)\" id=\"(.*?)\" class=\"inputtxt\"   value=\"Type your answer here\"  style=\"border:0 none;\"/',$html,$n))
				$ans_field = $n[1];
				$post=array();
				if(preg_match('/input type=\"text\" name=\"(.*?)\" id=\"(.*?)\" class=\"inputtxt\"   value=\"Type your answer here\"  style=\"border:0 none;\"/',$html,$n))
				$ans_field = $n[1];
				preg_match_all("/name=\"(.*?)\" id=/i", $html, $matches);
				$count = count($matches[1]);
				for($i=0;$i<$count;$i++) 
				{
					$temp=$matches[1][$i];
					if($temp==$ans_field)
					{
						$waste=1;
					}
					else 
					{
						$post[$temp]="Type your answer here";
					}
				}

				preg_match_all("/name=\"(.*?)\" value=\"(.*?)\"/i",$html,$matches);
				$count=count($matches[0]);
				for($i=0;$i<$count;$i++) 
				{
					$post[$matches[1][$i]]=$matches[2][$i];
				}

				$post["submit"]="Submit";
				$post_data=http_build_query($post);
				$anf="";
				if(preg_match_all('/unsanswerit.php(.*?)"/i',$html, $matches))
				{
					//var_dump($matches);
					$img="".$url."/unsanswerit.php".$matches[1][$opti1]."";
					curl_setopt($ch, CURLOPT_URL, $img);
					curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
					curl_setopt($ch, CURLOPT_PROXY, $proxy);
					curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
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
					$st=file_get_contents($path);
					$image=imagecreatefromstring($st);
					$anf= img2txt($image);
				//	$anf='11';
				}
				$anf=rtrim($anf);
				$post_data2="".$ans_field."=".$anf."&".$post_data."";
				curl_setopt($ch, CURLOPT_URL, $answer);
				curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
				curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
				curl_setopt($ch, CURLOPT_PROXY, $proxy);
				curl_setopt($ch, CURLOPT_HEADER, 1);
				curl_setopt($ch, CURLOPT_VERBOSE, 1);
				  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_REFERER, $answer);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS,$post_data2);
				$html=curl_exec($ch);
				 // $info = curl_getinfo($ch);
				 // echo 'Took ' . $info['total_time'] . ' seconds to send a request to ' . $info['url'];
				if(preg_match("/AnswereItGraphFr.php(.*?)'/i", $html, $matches))
				{
					echo "<font color=seagreen> $qno. </font><font color=Crimson>Q{Bk}</font><font color=white>,</font>";
					unlink($path);
					$ansnot=0;
					//sleep(3);
					$qs=0;
					flush();
					ob_flush(); 
				}
				else
				{
					if($anf=="")
					{
						$ansnot++;
						if($ansnot>8)
						goto poll;
						echo " Answer not found ,";
						goto kwiz;
						//break;
					}
					else
					{
						$opt11=0;
							qt1:		$opt11=rand(1,4);
						if($opt11==$opti1)
						goto qt1;
						else
						$opti1=$opt11;
						echo " Error($anf), ";
						ob_flush();
						flush();
						
						goto kwiz;
					}				
				}
			}		
//End of Quiz Block
}

poll:
	if($polll=="yes")
{
			for($start=1;$start<=85;$start++)
			{
				repoll:
				flush();
				ob_flush(); 
				$cap="";
				curl_setopt($ch, CURLOPT_URL, $poll);
				curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
				curl_setopt($ch, CURLOPT_PROXY, $proxy);
				curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
				curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
				curl_setopt($ch, CURLOPT_HEADER, 1);
				curl_setopt($ch, CURLOPT_VERBOSE, 1);
				  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_REFERER, $poll);
				$html=curl_exec($ch);

			   if(stristr($html,"ollCompletion"))
				{
					requs:
					$q = rand(1,999);
					$a = rand(1,9);
					$b = rand(8,19);
					$c = rand(21,29);
					$d = rand(5,19);
				
					$post_data = "zxcoiesesscd=&PollUserName=$uid&PollUserQuestion=Which is The Next Letter After $q ??&Option[]=$a&Option[]=$b&Option[]=$c&Option[]=$d";
					curl_setopt($ch, CURLOPT_URL, $question);
					curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
					curl_setopt($ch, CURLOPT_PROXY, $proxy);
					curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
					curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
					curl_setopt($ch, CURLOPT_HEADER, 1);
					  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
					curl_setopt($ch, CURLOPT_VERBOSE, 1);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($ch, CURLOPT_REFERER, $question);
					curl_setopt($ch, CURLOPT_POST, 1);
					curl_setopt($ch, CURLOPT_POSTFIELDS,$post_data);
					$html=curl_exec($ch);
					if(strstr($html,"uestionSaved.php"))
					{
						echo "<br><font color=DeepSkyBlue>Poll Bonus Question Submitted.</font><br>";
						echo "<br><font color=DeepSkyBlue>Poll Completed Successfully. Today's Poll is Over Now.</font><br><hr>";
						goto jack;
					}
					elseif(strstr($html,"be credited for thi"))
					{
						echo "<br><font color=DeepSkyBlue>Poll Question is Already Submitted.</font><br><hr>";
						goto jack;
					}
					else
					{
						echo "<br><b><font color=red>Poll Question Submitting Failed.</font><br><hr>";
						goto jack;
					}
				}
				if(preg_match("/img_single.php(.*?)>/",$html, $matches))
				{
					$imgurl= explode('"',$matches[0]);
					$iurl="$url/".$imgurl[0]."";
					curl_setopt($ch, CURLOPT_URL, $iurl);
					curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
					curl_setopt($ch, CURLOPT_PROXY, $proxy);
					curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
					curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
					curl_setopt($ch, CURLOPT_HEADER, 0);
					  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);		
					$abc=curl_exec($ch);
					
					$im=imagecreatefromstring($abc);
					$binArr=imageToArr($im);
					$cap=match($binArr);
				}			
				if(preg_match("/<h1>Question no: -(.*?)<\/h1>/i",$html,$matches))
				$qno=$matches[1];
				if(preg_match("/name=\"qxci\" value=\"(.*?)\"/i",$html,$matches)) 
				$qxci=urlencode($matches[1]);
				if(preg_match("/name=\"QuestionId\" value=\"(.*?)\"/i",$html,$matches)) 
				$qid=$matches[1];
				$selectoption=rand(1, 4);
				if(preg_match("/id= \"OptionId_" . $selectoption . "\" name=\"OptionId\" value=\"(.*?)\"/i",$html,$matches)) 
				$oid=$matches[1];
				if(preg_match('/"ps_bg1">(.*?)</',$html,$matches))
				$ps = $matches[1];
				if(preg_match('/"rs_bg1">(.*?)</',$html,$matches))
				$rs = $matches[1];

				if($cap=="")
				$p_data="qxci=$qxci&QuestionId=$qid&OptionChecked=1&zxcoiesesscd=&OptionId=$oid";
				else
				{
					$p_data="qxci=$qxci&QuestionId=$qid&OptionChecked=1&zxcoiesesscd=&response_field_single_char=$cap&OptionId=$oid";
				}   
				curl_setopt($ch, CURLOPT_URL, $poll);
				curl_setopt($ch, CURLOPT_PROXY, $proxy);
				curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
				curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
				curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
				curl_setopt($ch, CURLOPT_HEADER, 1);
				  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				curl_setopt($ch, CURLOPT_VERBOSE, 1);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_REFERER, $poll);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS,$p_data);
				$html=curl_exec($ch);
					
				if(stristr($html,"Either this poll has expired or it does not exist"))
				{
					echo"<br><font color=SeaGreen>OOPS!!! TODAYS POLL NOT FOUND ON ULTOO SITE<br><hr>";
					break;
				}	
				if(preg_match("/PollResult.php(.*?)'/i", $html, $matches))
				{
					// echo"<font color=blue> Balance ".$rs.".".$ps." </font>";
					echo"<font color=seagreen> $qno. </font><font color=Crimson>P{Bk}</font><font color=white>,</font>";
					//echo"<br />";
					// sleep(2);
					flush();
					ob_flush(); 
				}
				else
				{
					goto poll;   
				}
			}	
	}

 //sms:
		if($smss=="yes")
{
			
	$head[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
	 $head[] = 'Connection: Keep-Alive';
	 $head[] = 'Content-Type: multipart/form-data; boundary=----------iujOJMCkRMhdFykOmgNlBd';
	 $head[] = 'Accept-Language: en-us,en;q=0.8';
	 $head[] = 'Accept-Encoding gzip,deflate';
	 $head[] = 'Keep-Alive: 300';
	 $head[] = 'Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7';
	 $head[] = 'Cache-Control: max-age=0';
			flush();
			ob_flush(); 
			$cap="";
			curl_setopt($ch, CURLOPT_URL, $sms);
			curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
			curl_setopt($ch, CURLOPT_PROXY, $proxy);
			curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
			curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
			curl_setopt($ch, CURLOPT_HEADER, 1);
			curl_setopt($ch ,CURLOPT_POST,0);
			  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_VERBOSE, 1);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_REFERER, $sms);
			$html=curl_exec($ch);
			
			preg_match('#<input type="text" name="(.*?)" id="(.*?)" placeholder="Enter the letter shown in image"/>#',$html,$capfield);
			
			
			// preg_match_all("/document.CmQqakfwvx.(.*?).focus()/i", $html, $maa);
			// echo count($maa[1]);
			// for($eg=0;$eg<count($maa[1]);$eg++)
			// {
				// echo "<br>$eg----> ".$maa[1][$eg];
			// }
			// $mobile_field=$maa[1][0];
			// $msg_field=$maa[1][1];	
			
			if($mobile_field=="" && $msg_field=="")
	{
		if(preg_match("'document.onkeypress(.*?)function setCookie'si", $html, $matches))
		{
			$document=$matches[1];
            preg_match("/checkMobile(.*?)lue/i",$document, $match);
            preg_match("/document.(.*?).va/i",$match[1], $matches);
            $temp = explode(".",$matches[1]);
            $mobile_field=$temp[1];
            preg_match("/ document.".$temp[0].".(.*?).value=='Enter your SMS text here/i",$document, $matches);
            $msg_field=$matches[1];
		}
	}  
			
			if(preg_match("/img_single.php(.*?)>/",$html, $matches))
			{	 
				$imgurl= explode('"',$matches[0]);
				$iurl="$url/".$imgurl[0]."";
				curl_setopt($ch, CURLOPT_URL, $iurl);
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
				$fh = fopen('img/'.$name.'.png', 'x');
				fwrite($fh, $abc);
				fclose($fh);
				$im=imagecreatefrompng('img/'.$name.'.png');
				$binArr=imageToArr($im);
				$cap=match($binArr);
			}
	
	
			for($start=0;$start<=110;$start++)
			{
				captcha:
				$smscap="$url/captcha/create_image.php";
			curl_setopt($ch, CURLOPT_URL, $smscap);
			curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
			curl_setopt($ch, CURLOPT_PROXY, $proxy);
			curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
			curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch ,CURLOPT_POST,0);
			  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_VERBOSE, 1);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			
			$smshtml=curl_exec($ch);
			$name=rand(0, 999999).'.jpeg';
				$fh = fopen($name, 'x');
				fwrite($fh, $smshtml);
				fclose($fh);
				$cap=smscap($name);
				
				
				flush();
				ob_flush(); 
				upper:
				upit:
				$val = rand(301, 999);
				$no = count($stack);
				for($i=0;$i<$no;$i++)
				{
					if($val==$stack[$i])
					{
						goto upit;
					}
				}
				$rec = "9130098".$val;
				$message = getRandomWord();
	
				if($cap=="")
				{
				echo"<font color=red>,CR </font>";
				$name="cap/$cap".rand(0, 999999).'.jpeg';
				$fh = fopen($name, 'x');
				fwrite($fh, $smshtml);
				fclose($fh);
				goto captcha;
				$p_data="zxcoiesesscd=&MessageLength=140&GlobalKeyValue=1&$mobile_field=$rec&$msg_field=$message&SendNow_=Send Now&BtnSendNow_=Send Now";
				}
				else
				{
					$p_data='------------iujOJMCkRMhdFykOmgNlBd
Content-Disposition: form-data; name="zxcoiesesscd"


------------iujOJMCkRMhdFykOmgNlBd
Content-Disposition: form-data; name="MessageLength"

140
------------iujOJMCkRMhdFykOmgNlBd
Content-Disposition: form-data; name="'.$mobile_field.'"

'.$rec.'
------------iujOJMCkRMhdFykOmgNlBd
Content-Disposition: form-data; name="'.$msg_field.'"

'.$message.'
------------iujOJMCkRMhdFykOmgNlBd
Content-Disposition: form-data; name="onedcapt"

'.$cap.'
------------iujOJMCkRMhdFykOmgNlBd
Content-Disposition: form-data; name="SendNow_"

Send Now
------------iujOJMCkRMhdFykOmgNlBd
Content-Disposition: form-data; name="BtnSendNow_"

Send Now
------------iujOJMCkRMhdFykOmgNlBd--';
				//&MessageLength=140&GlobalKeyValue=1&$mobile_field=$rec&$msg_field=$message&SendNow_=Send Now&BtnSendNow_=Send Now&".$capfield[1]."=$cap";
					
				}	
				unlink($name);
				curl_setopt($ch, CURLOPT_URL, $sms);
				curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
				curl_setopt($ch, CURLOPT_PROXY, $proxy);
				curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
				curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
				curl_setopt($ch, CURLOPT_HEADER, 1);
				curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
				curl_setopt($ch, CURLOPT_VERBOSE, 1);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_REFERER, $sms);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $p_data);
				$html=curl_exec($ch);
				
				
				if(stristr($html,"captcha"))
				{
				$coun++;
				if($coun>9)
				goto d;
				echo "<font color=red>,Captcha Error($cap) </font>";
				$name="cap/$cap".rand(0, 999999).'.jpeg';
				$fh = fopen($name, 'x');
				fwrite($fh, $smshtml);
				fclose($fh);
				goto captcha;
				}
				$cap="";
				if(preg_match('/msgSent.php/', $html, $matches))
				{
					curl_setopt($ch, CURLOPT_URL, $end);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
					curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
					curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
					curl_setopt($ch, CURLOPT_HEADER, 1);
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
					curl_setopt($ch, CURLOPT_VERBOSE, 1);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($ch, CURLOPT_REFERER, $end);
					$html=curl_exec($ch);
					if (stristr($html, "You can earn & send 50 more sms for the day")) 
					{
						echo"<font color=DeepSkyBlue><br><b> All Sms Sent Sucessfully</font></b><br /><font color=DeepSkyBlue><b>Complete Answerit To Get More 50 Sms</font></br><hr>";
						break;
						flush();
						ob_flush(); 
					}
					else if (stristr($html, "SMS Sent successfully")) 
					{
						$coun=0;
						$id=$id+1;
						//echo "<font color=blue><b>$rec</font> :- <font color=red>|$id</font><font color=lime> Message |&nbsp;&nbsp;</font>";
						echo "<font color=seagreen> $id. </font><font color=Crimson> M<font color=white>,</font>&nbsp;&nbsp;</font>";
						// sleep(2);
						array_push($stack, $val);	
						$stop=0;
						//goto jack;
					} 
					else if(stristr($html,"Oops!! You have just tried to send a spam message. Communicate without sending SPAM messages and Earn for Free.."))
					{
						echo "<br><font color=red>Spam Message Error</font>";
						goto jack;
					}
					else if (stristr($html, "You have reached the Overall sms limit for the day"))
					{
						echo"<font color=DeepSkyBlue><br><b> All Sms Sent Sucessfully</font></b><br /><font color=DeepSkyBlue><b><center>You have reached the Overall sms limit for the day</center><hr></font>";	
						//break;
						 goto d;
					}
					else if (stristr($html, "Too many SMS have been sent to this mobile number"))
					{
						echo "<br /><font color=DeepSkyBlue><b><center>Too many SMS $rec,<hr></font>";	
						goto captcha;
						// break;
						//goto poll;
					}
					else
					{
						file_put_contents("checksms.txt", $html, LOCK_EX);
						goto captcha;
					}
				}
				else
				{
					$stop=$stop+1;
					if($stop>=8)
					goto d;
					else
					{
					echo "..$stop..";
					//goto jack;
					goto captcha;
					}
				}	
			}
//Here SMS Loop Ends
d:
$coas=0;
del:				
		curl_setopt($ch, CURLOPT_URL, $delsms);
		curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
		curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
		curl_setopt($ch, CURLOPT_PROXY, $proxy);
		curl_setopt($ch, CURLOPT_HEADER, 1);
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_REFERER, "$url");
        curl_setopt($ch, CURLOPT_POST, 0);
        $html=curl_exec($ch);
		if(stristr($html,'No Sent Messages Found'))
		{
		echo '<br><font color=DeepSkyBlue>ALL Message deleted Successfully!!</font><br><hr>';
		flush();
		ob_flush();
		goto jack;
		}
		
again:       
		preg_match_all('#<input[\s]*type="checkbox"[\s]*id="(.*?)"[\s]*name="checkbox\[\]"[\s]*value=(.*?)>#',$html,$matches);
		preg_match_all('#<input[\s]*type="hidden"[\s]*name="trc"[\s]*value="(.*?)">#',$html,$trc);
                $postdata="trc=".$trc[1];
                foreach($matches[1] as $i => $c){
                $postdata.="&checkbox[]=".$matches[2][$i]."&id[]=".$matches[2][$i];
                }
		curl_setopt($ch, CURLOPT_URL, $delsms);
		curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
		curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
		curl_setopt($ch, CURLOPT_PROXY, $proxy);
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_REFERER, $delsms);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"zxcoiesesscd=&DeleteAll=DeleteAll&checkboxAll=checkbox&NoOfMessages=10&PageNo=1&".$postdata);
        $html=curl_exec($ch);
		
		if(stristr($html,"No Sent Messages Found"))
		{
		echo '<br><font color=DeepSkyBlue>ALL Message deleted Successfully!!</font><br><hr>';
		flush();
		ob_flush();
		goto jack;
		}
		else
		{
		echo "<font color=seagreen> 10. </font><font color=Crimson>Sms Deleted</font><font color=white>,</font>";
		flush();
		ob_flush(); 
		$coas++;
		if($coas>9)
		{
		file_put_contents("delete.txt", $html, LOCK_EX);
		echo '<br><font color=DeepSkyBlue>ALL Message deleted Successfully!!</font><br><hr>';
		goto jack;
		}
		else
		goto del;
		}
	}	
if($jackk=="yes")
{
			jack:
			// goto bal;
			$coas=0;
		for($start=1;$start<=110;$start++)
		{	
 	
			rejack:
			flush();
			ob_flush(); 
			curl_setopt($ch, CURLOPT_URL, $jackmain);
			curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
			curl_setopt($ch, CURLOPT_PROXY, $proxy);
			curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
			curl_setopt($ch, CURLOPT_PROXY, $proxy);
			curl_setopt($ch, CURLOPT_HEADER, 1);
			  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_VERBOSE, 1);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_REFERER, $jackmain);
			$html=curl_exec($ch);
		  if(stristr($html,"Section completed"))
		  {
		  echo "<br><font color=DeepSkyBlue>Jackpot Completed</font><br><hr>";
					goto bal;
		  }
			if(preg_match_all("/<input type=\"text\" id=\"(.*?)\" name=/i",$html,$n))
			{
				$ans_field=$n[1][0];
				$_SESSION['ans_field']=$ans_field;
				$ans_field2=$n[1][1];
			}

			preg_match('/indyarocks.com(.*?)jpg/i',$html,$max);
			$image = "http://ultoo.indyarocks.com".$max[1]."jpg";
			if($image=="http://ultoo.indyarocks.comjpg")
			{
				var_dump($max);
				$counter++;
				echo "($counter)";
				if($counter==5)
				{
					echo "<br><font color=DeepSkyBlue>Jackpot Completed</font><br><hr>";
					goto bal;
				}
			}


			$filedata = $image;
			$tempvalues="";
			$p="/<input type=\"hidden\"(.*?)>/i";
			preg_match_all( $p,$html, $m);
			$c= count($m[1]);
			for($i=0;$i<$c;$i++)
			{
				if(preg_match("/name=\"(.*?)\" value=\"(.*?)\"/i",$m[1][$i],$n))
				{
					$v1= $n[1]; $v2=$n[2];
					if($v1=="qxci")
					{
						$v2=urlencode($v2);
						$temp= "&$v1=$v2";
						$tempvalues[$i]=$temp;
					}
					else
					{
						$temp= "&$v1=$v2";
						$tempvalues[$i]=$temp;
					}
				}
			}
			$values=implode($tempvalues);
			$post_data="".$ans_field2."=Second+Answer".$values."";

			if(preg_match('/"ps_bg1">(.*?)</',$html,$matches))
			$ps = $matches[1];
			if(preg_match('/"rs_bg1">(.*?)</',$html,$matches))
			$rs = $matches[1];


			// echo $filedata;
			//$jw = array("150","15");
			$fh =file_get_contents("jackpot.php");
			$ans=explode("\n",$fh);
			$oid="";
			foreach($ans as $ans1)
			{
				$an = explode(";",$ans1);
				if($an[0]==$filedata)
				{
					$oid=$an[1];
					$oid=urlencode($oid);
					$mic=$oid;
					$mic=urldecode($mic);
					// echo "Answer is : $oid</br>";
					break;
				}
			}
			// echo $oid;


			$post_data2="".$ans_field."=".$oid."&".$post_data."";

			curl_setopt($ch, CURLOPT_URL, $jack);
			curl_setopt($ch, CURLOPT_PROXY, $proxy);
			curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
			curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
			curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
			curl_setopt($ch, CURLOPT_PROXY, $proxy);
			curl_setopt($ch, CURLOPT_HEADER, 1);
			  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_VERBOSE, 1);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_REFERER, $jack);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS,$post_data2);
			$html=curl_exec($ch);
			//echo $html;
			//break;
			if(preg_match("/CorrectAnswer.php(.*?)zxcoiesesscd=/i", $html, $matches))
			{
	
				$end = "".$url."/".$matches[0];
				curl_setopt($ch, CURLOPT_URL, "$end");
				curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
				curl_setopt($ch, CURLOPT_PROXY, $proxy);
				curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
				curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
				curl_setopt($ch, CURLOPT_PROXY, $proxy);
				curl_setopt($ch, CURLOPT_HEADER, 1);
				  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				curl_setopt($ch, CURLOPT_VERBOSE, 1);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_REFERER, "$end");
				$html=curl_exec($ch);
          
				$doc = new DOMDocument();
				@$doc->loadHTML($html);
				$divs = $doc->getElementsByTagName('div');
				foreach($divs as $div) 
				{
					if ($div->getAttribute('class') === 'leftnofont') 
					{
						$rem = $div->nodeValue;
					}
				}
         
				(int)$rem;
				$rem=$rem+1;
        
				$don = 51-$rem;
     
				//$counter=$counter-1;
				//echo $mmm;
				// break;
         
         
				echo "<font color=SeaGreen> $don. </font><font color=Crimson>J{Bk} : </font><font color=Yellow>$mic</font><font color=white>,</font>";
				$counter=$coas=0;
				// sleep(1);

				//echo"<br/><font color=blue><b>Balance ".$rs.".".$ps."</b></br></font>";

		
			}

			else
			{


				if ($oid=="")
				{
					$coas++;
					if($coas>5)
					goto bal;
					echo "<br>Jpot Answer Not Found ".$filedata."<br>";
					goto rejack;
					// break;
					// break;
				}
				else
				{
					echo "<br><font color=SeaGreen>$mic </font>Error In Submitting<br>";
					goto rejack;

				}
			}			
		}
		//JACKPOT ENDS
	}

 if($ball=="yes")
{
			
		bal:
				exec("rm -rf *.jpeg");
				curl_setopt($ch, CURLOPT_URL, $bal);
				curl_setopt($ch, CURLOPT_PROXY, $proxy);
				curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
				curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
				curl_setopt($ch, CURLOPT_HEADER, 1);
				curl_setopt($ch, CURLOPT_VERBOSE, 1);
				  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_REFERER, $bal2);
				$curmonth=date("m");
				$data = "debitMonth=$curmonth&Months=$curmonth&zxcoiesesscd=";
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				$html=curl_exec($ch);
				$d=date("Y-m-d");
				echo "<br><b><font color=SeaGreen>CURRENT TIME :: </b></font>" ;
				date_default_timezone_set('Asia/Calcutta');
				echo date('d-m-Y h:i:s');
				echo "<br><font color=SeaGreen>Today'S Earning ::</font><font color=Yellow> $uid</font></br>";
				 $path='total1.txt';
				 $str1="Current time := ".date('d-m-Y h:i:s').PHP_EOL."UID:= $uid";
				 $nc=file_get_contents('total1.txt');
				 if(!stristr($nc,"".date('d-m-Y').""))
				 unlink($path);
				$str="";
				$pattern="/class=\"monthes_sub_heading\">(.*?)</i";
	            preg_match_all($pattern,$html,$matches);
				for($x=0; $x<count($matches[1]); $x++) 
				{
	                if($matches[1][$x]==date("Y-m-d")) 
					  {
		                 if($matches[1][$x+1]=="Poll Question Bonus")
						 {
			               $pollqbonus=$matches[1][$x+2];
						   $str.= PHP_EOL."poll question bonus:= $pollqbonus";
				           echo "<font color=SeaGreen>Poll Question Bonus = </font><font color=Crimson>$pollqbonus</font></br>"; 
				         }
		                 if($matches[1][$x+1]=="Poll Bonus")
						 {
			               $pollbonus=$matches[1][$x+2];
						   $str.= PHP_EOL."poll:= $pollbonus";
				           echo "<font color=SeaGreen>Poll Bonus = </font><font color=Crimson>$pollbonus</font></br>";
				         }
		                 if($matches[1][$x+1]=="By Sending Sms")
						 {
			               $smsbonus=$matches[1][$x+2];
						   $str.= PHP_EOL."sms:= $smsbonus";
				           echo "<font color=SeaGreen>By Sending Sms = </font><font color=Crimson>$smsbonus</font></br>";
				         }
		                 if($matches[1][$x+1]=="Answer It Bonus")
						 {
			               $answeritbonus=$matches[1][$x+2];
						   $str.= PHP_EOL."Answer IT:= $answeritbonus";
				          echo "<font color=SeaGreen>Answer It Bonus = </font><font color=Crimson>$answeritbonus</font></br>";
				         }
						 if($matches[1][$x+1]=="Jackpot First level Bonus")
						 {
			               $answeritbonus=$matches[1][$x+2];
						   $str.= PHP_EOL."JP 1st:= $answeritbonus";
				          echo "<font color=SeaGreen>Jackpot First level Bonus = </font><font color=Crimson>$answeritbonus</font></br>";
				         }
						 if($matches[1][$x+1]=="Jackpot Second level Bonus")
						 {
			               $answeritbonus=$matches[1][$x+2];
						   $str.= PHP_EOL."JP 2nd:= $answeritbonus";
				          echo "<font color=SeaGreen>Jackpot Second level Bonus = </font><font color=Crimson>$answeritbonus</font></br>";
				         }
						 if($matches[1][$x+1]=="Jackpot Third level Bonus")
						 {
			               $answeritbonus=$matches[1][$x+2];
						   $str.= PHP_EOL."JP 3rd:= $answeritbonus";
				          echo "<font color=SeaGreen>Jackpot Third level Bonus = </font><font color=Crimson>$answeritbonus</font></br>";
				         }
						 if($matches[1][$x+1]=="Jackpot Fourth level Bonus")
						 {
			               $answeritbonus=$matches[1][$x+2];
						   $str.=PHP_EOL."JP 4th:= $answeritbonus";
				          echo "<font color=SeaGreen>Jackpot Fourth level Bonus = </font><font color=Crimson>$answeritbonus</font></br>";
				         }
					
	                  }
	            }
				$abcd=file_get_contents("total1.txt");
		$pattern="/width=\"275\" valign=\"top\" class=\"monthes_heading_final\">(.*?)</i";
		
	            if(preg_match($pattern,$html,$matches1))
				  {
			        $finalamt=$matches1[1];
					
				/*	$ffa = explode("s.",$finalamt);
					///echo $ffa[1];
				    if($ffa[1]>=10)
					{
					//$rc is the first number to recharge $rc="8562952275";
					$rc="7357006085";
					$op="5";
					again123:
					if($ffa[1]>=10 && $ffa[1]<20)
					$amount="10";
					else
					$amount="20";
					$post_data3 = "zxcoiesesscd=&zxcoiesesscd=&showRechargeInfoDivHtml=&showSummaryHtml=1&hidOperatorFinal=$op&hidMobFinal=$rc&hidDenominationFinal=$amount&proceed_x=61&proceed_y=8&proceed=proceed&Otp=%BA%07%DA%BF&SubmitRechargeInfo_x=%F7&SubmitRechargeInfo_y=%D7&SubmitRechargeInfo=J%E6%E6%8A";
		curl_setopt($ch, CURLOPT_URL,"http://ultoo.com/rechargenow.php");    
		curl_setopt ($ch, CURLOPT_HTTPHEADER, Array("Content-Type: application/x-www-form-urlencoded","Accept: * /*"));
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
		curl_setopt($ch, CURLOPT_PROXY, $proxy);
		 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data3);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_REFERER, "http://ultoo.com");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         
			$dt = curl_exec($ch);
		if(strstr($dt,"successfully"))
	{
    
	$str.=PHP_EOL.",,,recharge done,,, :)".PHP_EOL;

	}
	else
	{
	$str.=PHP_EOL."....recharge failed.... :(".PHP_EOL;
	}
	
					}	*/
					if($finalamt=="")
					goto bal;
					$str.=PHP_EOL."Total := $finalamt".PHP_EOL;
					
		
	
				  }
				  else
				  {file_put_contents("check.txt", $html, LOCK_EX);
				  }
				  
				  $str.=PHP_EOL."+++++++++++++++++++++++++++++++++++++++~".PHP_EOL;
				  if(!stristr($abcd,$str))
				  {
					$path='total1.txt';
					$fh = fopen($path, 'a');
					fwrite($fh, PHP_EOL."$str1"."$str".PHP_EOL);
					fclose($fh);
					}
				    echo "<font color=SeaGreen>Final Amount = </font><font color=red size=4><b>$finalamt</font><hr></br>";
	}//END OF CAPTCHA CHECK ELSE
				curl_setopt($ch, CURLOPT_URL, $logout);
				curl_setopt($ch, CURLOPT_PROXY, $proxy);
				curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
				curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
				curl_setopt($ch, CURLOPT_HEADER, 1);
				curl_setopt($ch, CURLOPT_VERBOSE, 1);
				curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_REFERER, $bal2);
				curl_setopt($ch, CURLOPT_POST, 0);
				$html=curl_exec($ch);
				
}//END OF SECURE.PHP
///end of else	
next:


flush();
ob_flush();
flush();
ob_flush();  

function getRandomWord() {
                 $file="words.txt";
                 $lineno=rand(1,1000);
                 $line=false;
                 $fp=fopen($file, 'r');
                 while (!feof($fp) && $lineno--)
                 {
                   $line=fgets($fp);
                 }
                fclose($fp);
                return trim($line);
                 }

function match($ar){
	$db=array(
array("M",0x000000,0x000000,0x000000,0x000000,0x070607,0x8e078e,0x078e06,0xde06de,0x06f606,0x760676,0x000000,0x000000,0x000000,0x000000),
		array("W",0x000000,0x000000,0x000000,0x000000,0x063806,0x390779,0x036d03,0x6d03cf,0x01cf01,0xc701c6,0x000000,0x000000,0x000000,0x000000),
		array("C",0x000000,0x000000,0x000000,0x000000,0x01f803,0x9c030c,0x070006,0x000700,0x030c03,0x9c01f8,0x000000,0x000000,0x000000,0x000000),
		array("H",0x000000,0x000000,0x000000,0x000000,0x061806,0x180618,0x07f806,0x180618,0x061806,0x180618,0x000000,0x000000,0x000000,0x000000),
		array("9",0x000000,0x000000,0x000000,0x000000,0x03e003,0x700730,0x073003,0x7003f0,0x023003,0x7003e0,0x000000,0x000000,0x000000,0x000000),
		array("A",0x000000,0x000000,0x000000,0x000000,0x00e000,0xe001f0,0x01b003,0x3003f8,0x03f806,0x1c060c,0x000000,0x000000,0x000000,0x000000),
		array("S",0x000000,0x000000,0x000000,0x000000,0x03f003,0x380718,0x03c001,0xf80038,0x061807,0xb803f0,0x000000,0x000000,0x000000,0x000000),
		array("K",0x000000,0x000000,0x000000,0x000000,0x061c06,0x7006e0,0x07c007,0xe00760,0x063006,0x38061c,0x000000,0x000000,0x000000,0x000000),
		array("5",0x000000,0x000000,0x000000,0x000000,0x03f003,0x000300,0x03e003,0x700030,0x063003,0x7003e0,0x000000,0x000000,0x000000,0x000000),
		array("R",0x000000,0x000000,0x000000,0x000000,0x07f806,0x180618,0x063807,0xf80670,0x063806,0x18061c,0x000000,0x000000,0x000000,0x000000),
		array("X",0x000000,0x000000,0x000000,0x000000,0x071c03,0xb801f0,0x00e000,0xe001f0,0x03b003,0x18071c,0x000000,0x000000,0x000000,0x000000),
		array("Z",0x000000,0x000000,0x000000,0x000000,0x03f800,0x380030,0x006000,0xe001c0,0x018003,0x0003f8,0x000000,0x000000,0x000000,0x000000),
		array("P",0x000000,0x000000,0x000000,0x000000,0x07f806,0x180618,0x063807,0xf80600,0x060006,0x000600,0x000000,0x000000,0x000000,0x000000),
		array("4",0x000000,0x000000,0x000000,0x000000,0x006000,0xe000e0,0x01e003,0xe00360,0x03f800,0x600060,0x000000,0x000000,0x000000,0x000000),
		array("D",0x000000,0x000000,0x000000,0x000000,0x07f806,0x1c060c,0x060c06,0x0c060c,0x060c06,0x3c07f8,0x000000,0x000000,0x000000,0x000000),
		array("Y",0x000000,0x000000,0x000000,0x000000,0x071c03,0x1803b8,0x01f000,0xe000c0,0x00c000,0xc000c0,0x000000,0x000000,0x000000,0x000000),
		array("F",0x000000,0x000000,0x000000,0x000000,0x07f806,0x000600,0x060007,0xf00600,0x060006,0x000600,0x000000,0x000000,0x000000,0x000000),
		array("J",0x000000,0x000000,0x000000,0x000000,0x006000,0x600060,0x006000,0x600060,0x066003,0x6003e0,0x000000,0x000000,0x000000,0x000000),
		array("3",0x000000,0x000000,0x000000,0x000000,0x03e007,0x600060,0x01e000,0x600060,0x066007,0x6003c0,0x000000,0x000000,0x000000,0x000000),
		array("N",0x000000,0x000000,0x000000,0x000000,0x071807,0x980798,0x07d806,0xf80678,0x063806,0x380618,0x000000,0x000000,0x000000,0x000000),
		array("7",0x000000,0x000000,0x000000,0x000000,0x03f000,0x300060,0x006000,0xc000c0,0x00c000,0xc00180,0x000000,0x000000,0x000000,0x000000),
		array("6",0x000000,0x000000,0x000000,0x000000,0x01f003,0xb00330,0x07e007,0x700730,0x033003,0x7001e0,0x000000,0x000000,0x000000,0x000000),
		array("Q",0x000000,0x000000,0x000000,0x000000,0x01fc03,0xde0306,0x070606,0x060706,0x033603,0xfe01fe,0x000200,0x000000,0x000000,0x000000),
		array("2",0x000000,0x000000,0x000000,0x000000,0x01f003,0xb00330,0x003000,0x7000e0,0x01c003,0x8003f0,0x000000,0x000000,0x000000,0x000000),
		array("B",0x000000,0x000000,0x000000,0x000000,0x07f806,0x180618,0x063807,0xf80638,0x061806,0x1807f8,0x000000,0x000000,0x000000,0x000000),
		array("E",0x000000,0x000000,0x000000,0x000000,0x07f806,0x000600,0x060007,0xf80600,0x060006,0x0007f8,0x000000,0x000000,0x000000,0x000000),
		array("8",0x000000,0x000000,0x000000,0x000000,0x03f007,0x300730,0x03f003,0x700730,0x073003,0x7003e0,0x000000,0x000000,0x000000,0x000000),
		array("G",0x000000,0x000000,0x000000,0x000000,0x01fc03,0xce0306,0x070006,0x3e0706,0x030603,0xce01fc,0x000000,0x000000,0x000000,0x000000),
		array("U",0x000000,0x000000,0x000000,0x000000,0x061806,0x180618,0x061806,0x180618,0x071803,0xb803f0,0x000000,0x000000,0x000000,0x000000),
		array("V",0x000000,0x000000,0x000000,0x000000,0x060c06,0x1c0318,0x031803,0xb001b0,0x01f000,0xe000e0,0x000000,0x000000,0x000000,0x000000)
	);
	
	for($c=0;$c<30;$c++){
		$mask=array();
		for($i=0;$i<14;$i++){
			$mask[$i]=$db[$c][$i+1] & $ar[$i];
			if($mask[$i]!=$db[$c][$i+1]){
				break;
			}
		}
		if($i==14){
			return $db[$c][0];
		}
	}
	
}

function imageToArr($image){
	$bin="";
	for($i=0;$i<21;$i++){
		for($j=0;$j<16;$j++){
			$px=imagecolorat($image,$j,$i);
			$bit=($px==0xffffff)?0:1;
			$bin.=$bit;
		}
	}
	$bin=str_split($bin,24);

	for($i=0;$i<14;$i++){
		$bin[$i]=bindec($bin[$i]);
	}
	return $bin;
}

function img2txt($im){
	//Convert to Grey Scale
	for($i=0;$i<155;$i++){
		for($j=0;$j<36;$j++){
			$px=imagecolorat($im,$i,$j);
			if($px<0x303030){
				imagesetpixel($im,$i,$j,0);
			}
			else{
				imagesetpixel($im,$i,$j,0xffffff);
			}
		}
	}
	
	$txt="";
	$offset=15;
	$prev=" ";//init space
	//Break up image into individual characters
	while($offset<155) {
		$chr_im=imagecreate(8,13);
		imagecopy($chr_im,$im,0,0,$offset,12,155,36);
		$chr=img2char($chr_im);
		if($chr==" " && $prev==" "){ //Check for end of Text.. Double space..
			break;
		}
		$prev=$chr;
		$txt.=$chr;
		$offset+=9;
	}
	return $txt;
}

function img2char($im){
	
	$alphabet="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789,.;:'\"()- ";
	
	//This hash is generated using above alphabet. Do not change $alphabet!
	$hash=array(
		"A" => "A",
		"B" => "B",
		"C" => "C",
		"D" => "D",
		"E" => "E",
		"F" => "F",
		"G" => "G",
		"H" => "H",
		"I" => "I",
		"J" => "J",
		"K" => "K",
		"EL" => "L",
		"M" => "M",
		"N" => "N",
		"OQ" => "O",
		"PR" => "P",
		"Q" => "Q",
		"R" => "R",
		"S" => "S",
		"T" => "T",
		"U" => "U",
		"V" => "V",
		"W" => "W",
		"X" => "X",
		"Y" => "Y",
		"Z" => "Z",
		"a" => "a",
		"b" => "b",
		"c" => "c",
		"d" => "d",
		"e" => "e",
		"f" => "f",
		"g" => "g",
		"h" => "h",
		"i" => "i",
		"j" => "j",
		"k" => "k",
		"Il" => "l",
		"m" => "m",
		"hn" => "n",
		"o" => "o",
		"p" => "p",
		"q" => "q",
		"r" => "r",
		"s" => "s",
		"t" => "t",
		"uy" => "u",
		"v" => "v",
		"w" => "w",
		"x" => "x",
		"y" => "y",
		"z" => "z",
		"0" => "0",
		"1" => "1",
		"2" => "2",
		"B3" => "3",
		"4" => "4",
		"5" => "5",
		"6" => "6",
		"7" => "7",
		"8" => "8",
		"9" => "9",
		",;" => ",",
		"." => ".",
		";" => ";",
		":" => ":",
		"'" => "'",
		"\"" => "\"",
		"(" => "(",
		")" => ")",
		"-" => "-",
		"ABC" => " ",
	);
	
	$letters=str_split($alphabet);
	$len=count($letters);
	
	$key="";
	for($i=0;$i<$len;$i++){
		$refr_im=imagecreate(8,13);
		$bg_color=imagecolorallocate($refr_im,255,255,255);
		$txt_color=imagecolorallocate($refr_im,0,0,0);
		imagestring($refr_im,5,0,-2,$letters[$i],$txt_color);
		for($x=0;$x<8;$x++){
			for($y=0;$y<13;$y++){
				$px1=imagecolorat($refr_im,$x,$y);
				$px2=imagecolorat($im,$x,$y);
				$pxM=$px1 & $px2;
				if($pxM != $px2){
					break;
				}
			}
			if($y!=13){
				break;
			}
		}
		if($x==8){
			$key.=$letters[$i];
		}
		if(strlen($key)==3){
			break;
		}
	}
	return($hash[$key]);
}
?>

