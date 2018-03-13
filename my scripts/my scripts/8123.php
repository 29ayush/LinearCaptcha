    <?php
    $proxies= file('proxy.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
     
    $t = time()+34247;
    echo "<h1 style=\"color:Green; text-align:center; border-bottom:2px solid black\">WELCOME !!!! </h1>";
    echo "<span style=\"color:Green; font-size:18px; border-bottom:1px solid brown\">Finding Initiated At : : ".date("h:i:s A jS-M-Y",$t)." IST </span><hr/>";
    if( $proxies=="")
    {
    echo "No Proxies Found. Please Update List <br/>";
    }
     
    foreach ($proxies as $proxy) {
    // $proxy="36.76.247.5:8080";
    // $proxy="117.53.163.120:80";
     
    echo "Trying :- ".$proxy;
    ob_flush();
    flush();
    $loginUrl = 'http://www.ultoo.com/login.php';
     
    $ch = curl_init();
     
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_URL, $loginUrl);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $store = curl_exec($ch);
    curl_close($ch);
    file_put_contents('abcd.html', $store);
     
    if( stristr($store,'</html>'))
    {
    echo "<p style=\"background : red; padding:10px\"> Proxy : ".$proxy.str_repeat('&nbsp;', 15). "Status :- Working"."<br/>";
    exit("Thank You For Using Our Service</p>");
    }
    else{
    $len= strlen("Trying :- ".$proxy);
    echo str_repeat('&nbsp;', 60-$len )."Status :- Not Working"."<br/>";
    }
    echo "<hr />";
    ob_flush();
    flush();
    }
    echo "Thank You For Using Our Service";
    ?>