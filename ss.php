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

		$num = 227918468;
		$ch = 'http://huizhou.anjuke.com/prop/view/';


		$ch1 ='http://esf.sz.fang.com/chushou/3_158859468.htm';
		$content = file_get_contents($ch1);



		function curl_get($url, $gzip=false){
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
        if($gzip)
         curl_setopt($curl, CURLOPT_ENCODING, "gzip"); // 关键在这里
        $content = curl_exec($curl);
        curl_close($curl);
        return $content;
		}


		$content = curl_get($ch1);
		//echo str_replace('gb2312', 'utf-8', $content);
		echo 
		//echo $content;


/*		for($i = 0 ; $i<=100; $i++)
		{
	        $url = 'http://huizhou.anjuke.com/prop/view/'.$num;

	        echo $url;

	 	    getinfo($url);

        	$num--;

        	echo $num;
        }*/





        //print_r($match);(<p id=\"broker_true_name\" class=\"broker_true_name .*)
        //(<p id=\"broker_true_name\" class=\"broker_true_name .*)([^\x00-\xff]{3}|[^\x00-\xff]{2})(<\/p>)



?>