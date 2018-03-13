<?php

if (isset($_POST['submit']))
	{

	// This makes sure they did not leave any fields blank

	if (!$_POST['pass'] | !$_POST['ans'])
		{
		die('You did not complete all of the required fields');
		}

	$_POST['pass'] = md5($_POST['pass']);
	if ($_POST['pass'] != "feacfe26530c4451448da7fef608a8ec")
		{
		die('Incorrect password, please try again.');
		}
	  else
		{
		$data = $_POST['ans'];
		if (preg_match('/[A-Z]/', $data) | preg_match('/[a-z]/', $data))
			{
			die("Invalid Proxy List Contains Characters");
			}

		if (is_dir('proxytemp'))
			{
			$filesdelete = glob('proxytemp/*'); // get all file names
			foreach($filesdelete as $filedel)
				{ // iterate files
				if (is_file($filedel) && $filedel != "proxytemp/proxyreceived.txt") unlink($filedel); // delete file
				}
			}
		  else
			{
			mkdir('proxytemp');
			}

		$errorcode = file_put_contents('proxytemp/proxyreceived.txt', $data, FILE_APPEND);
		if ($errorcode != 0)
			{
			echo "Request Received Proxy Updated";
			}
		  else
			{
			echo "Some Error Occured while Uploading Please Try Again";
			}
		}
	}
  else
	{
?>

<title>Update New Proxies</title>
<div style="background:darkorange; color:white;">Update Proxy</div>
<form action="<?php
	echo $_SERVER['PHP_SELF']; ?>" method='post'>Password: <br />
<input type='text' name='pass'>
<br />New Answ:<br />
<textarea name='ans'>
</textarea><br />
<input type='submit' name='submit' value='Update New '></form>

 <?php
	}

?>