<?php
echo '<title>Update jackpot answer</title><div style="background: green; color:white;">Update Jackpot Answers</div>';

$pass = $_REQUEST['pass'];
if($_POST['submit'])
{
if ( $pass != "ul2jack" )
{
die("<b><font color='darkred'>Incorrect Password</font></b><br><form method='post'>Password: <br><input type='text' name='pass'><br>New users:<br><textarea name='ans'></textarea><br><input type='submit' name='submit' value='Update Answer'></form>");
}
else
{
$ans = $_POST['ans'];
$myFile = "jackpot.php";
$fh = fopen($myFile, 'w') or die("Error Occured.");
$stringData = "$ans";
fwrite($fh, $stringData);
fclose($fh);
echo "<b><font color='darkgreen'>New Users  Updated</font></b><br>";
}
}
$myFile = 'jackpot.php';

$fh = fopen($myFile, 'r');

$thedata = fread($fh, filesize($myFile));

fclose($fh);
echo "<form method='post'>Password: <br><input type='text' name='pass'><br>New Answers:<br><textarea name='ans'>".$thedata."</textarea><br><input type='submit' name='submit' value='Update New '></form>";
?>
