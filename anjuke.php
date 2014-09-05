<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />

<?php

    	set_time_limit(0);    //设置程序的运行上限时间为不限，稍大规模的采集必备，不然默认运行5分钟后强制退出

        function getinfo($url){

	        $content = file_get_contents($url);
	        //tel
	        preg_match("([0-9]{3}\s[0-9]{4}\s[0-9]{4})",$content,$match);
	        $tel = $match[0];
	        echo $tel.'<br />'; 
	        //name
	        preg_match("(<p id=\"broker_true_name\" class=\"broker_true_name .*)",$content,$match3);
	        $name = $match3[0];
	        echo $name.'<br />';        
	        //com
	        preg_match("(<p class=\"comp_info\">公司： <a href=\"http://(.*)\">(.*)(<\/a>))",$content,$match2);    
	        $com=$match2[2];
	        echo $com.'<br />';

	        //com_info
	        preg_match('(<p class=\"comp_info\">门店：([\n]|[\r]|[\r\n])[\s]+<a href="http://(.*)\">(.*)(<\/a>))',$content,$match4); 
	        $com=$match4[3];
	        echo $com.'<br />'; 
		}

		// $num = 227918468;
		// $ch = 'http://huizhou.anjuke.com/prop/view/';
		$ch1 = 'http://shenzhen.anjuke.com/tycoon/bagualing/st1';

		$content = file_get_contents($ch1);
		//echo str_replace('gb2312', 'utf-8', $content);
		//echo $content;
		//echo $content;

	    preg_match_all('(<a href=(.*) class="name" target="_blank">(.*)                    </a>)',$content,$match1);
    	        echo '<pre>'.print_r($match1[2]).'</pre>';
    	        //print_r($match1[3]);

	    preg_match_all('(<span class=\"mobile_number\">([\s]|[\r]|[\n]|[\r\n])+([0-9]{11})([\s]|[\r]|[\n]|[\r\n])+</span>)',$content,$match2);
    	        echo '<pre>'.print_r($match2[2]).'</pre>';

	    preg_match_all('(<a href=(.*)class="job" target="_blank">([\s]|[\r]|[\n]|[\r\n])+(.*)([\s]|[\r]|[\n]|[\r\n])+</a>)',$content,$match3);
    	        echo '<pre>'.print_r($match3[3]).'</pre>';
