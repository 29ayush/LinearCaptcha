<?php
echo '<title>Update Proxies</title><div style="background: grey; color:white; text-align:center;">Update Proxies</div>';
if(isset($_REQUEST['submit']))
{
$ans = $_POST['ans'];
if(file_put_contents('proxylist.txt',$ans) == FALSE)
die( "Some Error While Saving Proxies Try Again ");
else
echo "Proxies Successfully Saved";
require_once "proxyparser.php";
echo "<br/>";
}
else
{
echo "<center><form method='post' style=\"width:400px\">
<span style=\"color:  #4cff4c; background:  #ffff00; font-weight:bold\">New Proxies ( One Proxy Per Line : No Alphabets ) :</span>
<hr><br><textarea name='ans' style=\"width: 400px; height: 400px; resize:none\" ></textarea>
<br><input type='submit' name='submit' value='Submit Proxies'></form>
</center>";
}
?>