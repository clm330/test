<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
	require 'C:\xampp\htdocs\s\simple_html_dom.php';

		// Create DOM from URL or file
	$html = file_get_html('http://shenzhen.anjuke.com/prop/view/227918467');

	//echo file_get_html('http://shenzhen.anjuke.com/prop/view/227918467')->plaintext; 

	//$ret = file_get_html('http://shenzhen.anjuke.com/prop/view/227918467')->find('div[.container]');
	//$ret = $html->find('div[id=broker_name broker_margin_10]'); 
	$ret = file_get_html('http://shenzhen.anjuke.com/prop/view/227918467')->find('.broker_name broker_margin_10');
	//echo $ret->plaintext;
	$main = $html->find('div.broker_name',0)->content;

	//echo $main;

	echo 'done';

    include_once('simple_html_dom.php');

    //$domain = "http://epg.tvsou.com";
    $target_url = "http://shenzhen.anjuke.com/prop/view/227918467";
    $html = new simple_html_dom();
    $html->load_file($target_url);

    // 查找channel

	print_r($html->find('div[class=broker_icon]'));






    //this is the develop add

?>