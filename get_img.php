<?php
{
    $cookie_file = dirname(__FILE__)."/".'cookie.txt';
    $login_url = "http://jwgl.ujn.edu.cn/default2.aspx";

    $cu_1 = curl_init();
    $timeout=10;
    curl_setopt($cu_1,CURLOPT_URL,$login_url);
    curl_setopt($cu_1,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($cu_1,CURLOPT_CONNECTTIMEOUT,$timeout);
    curl_setopt($cu_1,CURLOPT_COOKIEJAR,$cookie_file); //保存cookie文件
    ob_start();
    $contents = curl_exec($cu_1);
    curl_close($cu_1);
    ob_clean();
    //echo $contents;

    $cu_2=curl_init();
    $img_url = "http://jwgl.ujn.edu.cn/CheckCode.aspx?";
    curl_setopt($cu_2,CURLOPT_URL,$img_url);
    curl_setopt($cu_2,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($cu_2,CURLOPT_CONNECTTIMEOUT,$timeout);
    curl_setopt($cu_2,CURLOPT_COOKIEFILE,$cookie_file);
    $img_data=curl_exec($cu_2);
    curl_close($cu_2);
    $file_name = dirname(__FILE__)."/"."a.jpg";
    $tp=fopen($file_name,'w');
    fwrite($tp,"$img_data");
    fclose($tp);
    //var_dump($img_data);
    echo $img_data;
}
?>