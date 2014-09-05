<?php //抓取页面
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,'http://esf.sh.fang.com/agenthome-a025-b01646/-c5%d6%d0%d4%ad%b5%d8%b2%fa-i31-j310/');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

curl_setopt($ch, CURLOPT_HTTPHEADER,array('Accept-Encoding: gzip, deflate'));
curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');

$content=curl_exec($ch);
if(curl_errno($ch)) echo curl_error($ch);
else {
    $content = iconv("gb2312","utf-8//IGNORE",$content);
    //echo $content;
    //print_r($content);
/*    	        preg_match('(<span\sid=\"mobilecode\">([0-9]{11}))',$content,$match);
    	        print_r($match);
	        $tel = $match[0];
	        echo $tel.'<br />';

	    	        preg_match('(<span\sid=\"agentname\">(.*)(</span>))',$content,$match1);
    	        print_r($match1);
	        $tel2 = $match1[0];
	        echo $tel2.'<br />';*/

	        	    	        preg_match_all('(a href=\"\/a\/(.*) target=\"_blank\">([\s]|[\r]|[\n]|[\r\n])+(.*)(</a>))',$content,$match1);
    	        echo '<pre>'.print_r($match1[1]).'</pre>';
    	        print_r($match1[3]);

	        	    	        preg_match_all('(<strong>([\s]|[\r]|[\n]|[\r\n])+(.*)([0-9]{11})([\s]|[\r]|[\n]|[\r\n])+</strong>)',$content,$match2);
    	        print_r($match2[3]);
    	        //print_r($match1[3]);


	        	    	        preg_match_all('(<p class=\"black\">所属公司： <span>(.*)</span></p>)',$content,$match3);
    	        print_r($match3[1]);
	        //$tel2 = $match1[0];
	        //echo $tel2.'<br />';
}
curl_close($ch);
?>
