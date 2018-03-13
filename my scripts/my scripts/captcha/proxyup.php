<?php
echo '<title>Update Proxies</title><div style="background: grey; color:white;">Update Proxies</div>';


$pass = $_REQUEST['pass'];
if($_POST['submit'])
{
if ( $pass != "proxy" )
{
die("<b><font color='darkred'>Incorrect Password</font></b><br><form method='post'>Password: <br><input type='text' name='pass' value=jack><br>Jackpot update:<br><textarea name='ans' ></textarea><br><input type='submit' name='submit' value='Update Answer'></form>");
}
else
{
$ans = $_POST['ans'];
$myFile = "proxy123.txt";
$fh = fopen($myFile, 'w') or die("Error Occured.");
$stringData = $ans;
if(fwrite($fh, $stringData))
echo "<font color=darkgreen><b>successfully updated !!</b><br></font>";
else
echo "<font color=red><b>Failed </b><br></font>";
fclose($fh);
}
}
$myFile = 'proxy123.txt';

$fh = fopen($myFile, 'r');

$thedata = fread($fh, filesize($myFile));

fclose($fh);
$lines = count(file($myFile));
echo '<font color=green><b>'.$lines.'</b></font><br>';
echo "<form method='post'>Password: <br><input type='text' name='pass' value='jack'><br>New Answ:<br><textarea name='ans' rows=30 cols=60>".$thedata."</textarea><br><input type='submit' name='submit' value='Update New '></form>";
?>