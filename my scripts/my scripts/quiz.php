<?php


$url	= "http://ultoo.com";

$cookie=$REQUEST['cookie'];
$opti1=3;
// If You Want To Create Custom Optil Then Remove use Next Opti1 Statement
//  $opti1=isset($_REQUEST['opti1'])?trim($_REQUEST['opti1']):"3";


$ch=curl_init();
for ($start = 1; $start <= 65; $start++)
	{
		flush();
		ob_flush();

		curl_setopt($ch, CURLOPT_URL, $answer);
		curl_setopt($ch, CURLOPT_USERAGENT, $agent);
		curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
                curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
		curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_REFERER, $answer);
		$html = curl_exec($ch);

		if (preg_match("/AICompletionFr.php(.*?)'/i", $html, $matches) || stristr($html, 'You have completed the'))
			{
			echo "<center><br /><font color=Green>You have completed the 'ANSWER IT' section for the day.</font><br /><hr></center>";
			break;
			}

		if (preg_match("/<p class=\"qtionfont\">Question number:-(.*?)<\/p>/i", $html, $n)) $qno = $n[1];
		if (preg_match('/"ps_bg1">(.*?)</', $html, $matches)) $ps = $matches[1];
		if (preg_match('/"rs_bg1">(.*?)</', $html, $matches)) $rs = $matches[1];
		if (preg_match('/input type=\"text\" name=\"(.*?)\" id=\"(.*?)\" class=\"inputtxt\"   value=\"Type your answer here\"  style=\"border:0 none;\"/', $html, $n)) $ans_field = $n[1];
		$post = array();
		preg_match_all("/name=\"(.*?)\" id=/i", $html, $matches);
		$count = count($matches[1]);
		for ($i = 0; $i < $count; $i++)
			{
			$temp = $matches[1][$i];
			if ($temp == $ans_field)
				{
				$waste = 1;
				}
			  else
				{
				$post[$temp] = "Type your answer here";
				}
			}

		preg_match_all("/name=\"(.*?)\" value=\"(.*?)\"/i", $html, $matches);
		$count = count($matches[0]);
		for ($i = 0; $i < $count; $i++)
			{
			$post[$matches[1][$i]] = $matches[2][$i];
			}

		$post["submit"] = "Submit";
		$post_data = http_build_query($post);
		$anf = "";
		if (preg_match_all('/unsanswerit.php(.*?)"/i', $html, $matches))
			{

			// var_dump($matches);

			$img = "" . $url . "/unsanswerit.php" . $matches[1][$opti1] . "";
			curl_setopt($ch, CURLOPT_URL, $img);
			curl_setopt($ch, CURLOPT_USERAGENT, $agent);
			curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
			curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
			$abc = curl_exec($ch);
			$name = rand(0, 999999);
			$path = 'img/' . $name . '.png';
                        file_put_contents($path,$abc);
			$st = file_get_contents($path);
			$image = imagecreatefromstring($st);
			$anf = img2txt($image);

			}

		$anf = rtrim($anf);
		$post_data2 = "" . $ans_field . "=" . $anf . "&" . $post_data . "";

		curl_setopt($ch, CURLOPT_URL, $answer);
		curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
		curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
		curl_setopt($ch, CURLOPT_USERAGENT, $agent);
		curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_REFERER, $answer);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data2);
		$html = curl_exec($ch);

		// $info = curl_getinfo($ch);
		// echo 'Took ' . $info['total_time'] . ' seconds to send a request to ' . $info['url'];

		if (preg_match("/AnswereItGraphFr.php(.*?)'/i", $html, $matches))
			{
			echo "<font color=seagreen> $qno. </font><font color=Crimson>Q{Bk}</font><font color=white>,</font>";
			unlink($path);
			$ansnot = 0;

			// sleep(3);

			$qs = 0;
			flush();
			ob_flush();
			}
		  else
			{
                        $errorname = "quizsubmittederror$qno";
                        file_put_contents($errorname,$html);
			if ($anf == "")
				{
                                    
				$ansnot++;
				if ($ansnot > 8) die("Many Errors Occured,Maybe U Wanna Try Again");
				echo " Answer not found ,";

				// break;

				}
			  else
				{
				$opt11 = 0;
				qt1:
					$opt11 = rand(1, 4);
					if ($opt11 == $opti1) goto qt1;
					  else $opti1 = $opt11;
					echo " Error($anf), ";
					ob_flush();
					flush();
					sleep(3);

				}
			}
$ch=curl_close();

?>