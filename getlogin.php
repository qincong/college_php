<?php
//??????
{
    $cookie_file = dirname(__FILE__)."/".'cookie.txt';
    $login_url = "http://jwgl.ujn.edu.cn/default2.aspx";

    $cu_3 = curl_init();
    curl_setopt($cu_3,CURLOPT_URL,$login_url);
    curl_setopt($cu_3,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($cu_3,CURLOPT_CONNECTTIMEOUT,1000);
    curl_setopt($cu_3,CURLOPT_COOKIEFILE,$cookie_file);
    $post_data = array(
        "Button1" => "",
        "RadioButtonList1" =>iconv( "UTF-8","GB2312//IGNORE", "学生"),
        "TextBox2" =>"zhzh1995.",
        "__VIEWSTATE" => "dDwyODE2NTM0OTg7Oz7SB83rscHSkDngMd3SzAQW8HUNsA==",
        "__VIEWSTATEGENERATOR"=>"92719903",
        "hidPdrs" =>"",
        "hidsc"=>"",
        "lbLanguage"=>"",
        "txtSecretCode"=>"brt6",  //?????
        "txtUserName"=>"20141223251"
    );
    //aecho $post_data["txtSecretCode"];
    //echo $post_data["txtSecretCode"];
    curl_setopt($cu_3, CURLOPT_POSTFIELDS, $post_data);
    $data = curl_exec($cu_3);
    curl_setopt($cu_3,CURLOPT_URL,"http://jwgl.ujn.edu.cn/xs_main.aspx?xh=20141223251");
    $data = curl_exec($cu_3);
    echo $data;
}

function read()
{
    $fp = fopen('/dev/stdin', 'r');
    $input = fgets($fp, 255);
    fclose($fp);
    $input = chop($input);
    return $input;
}
?>




