<?php

$time=time1();
if(!is_file('proxiesold.txt')) file_put_contents('proxiesold.txt',"");
if(!is_file('proxylist.txt')) file_put_contents('proxylist.txt',"");
$proxies=file('proxylist.txt',FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES );
if(count($proxies)==0 && empty($_REQUEST['explicit']) ) die("No Proxies Submitted");
$oldproxies=file_get_contents("proxiesold.txt");
foreach($proxies as $proxy)
{
if(!stristr($oldproxies,$proxy))
{
file_put_contents('proxiesold.txt',$proxy.";\n",FILE_APPEND);
}
}
file_put_contents('proxylist.txt',"");

if(!is_file('proxies.txt')) file_put_contents('proxies.txt',"");
$proxiesinuse=file_get_contents("proxies.txt");
$proxiesupdate=file_get_contents("proxiesold.txt");
preg_match_all('/(.*);(.*)\s/',$proxiesupdate,$matches);

for($i=0;$i<count($matches[1]);$i++)
{ 
$proxy=$matches[1][$i];
if(!stristr($proxiesinuse,$proxy))
{
if($time-$matches[2][$i] >= 86400 || !empty($_REQUEST['deleted']))
{
file_put_contents('proxies.txt',$proxy.";0\n",FILE_APPEND);
$proxiesupdate = preg_replace('/' . $proxy . ';(.*)\s/', $proxy . ";" . $time . "\n", $proxiesupdate);
}
}
}
file_put_contents('proxiesold.txt', $proxiesupdate);

function time1()
{
$t= time();
$off=intval(530 - date("O",$t));
if($off % 100 == 30) $t =$t + (floor($off/100) + 0.50) * 3600 - 319;
else if($off % 100 == 60) $t =$t + (floor($off/100) + 1) * 3600 - 319;
else $t =$t + (floor($off/100)) * 3600 - 319;
return $t;
}

echo "Proxies Parsed";
?>