<?php
{
    $cookie_file = dirname(__FILE__)."/".'cookie.txt';
    $login_url = "http://jwgl.ujn.edu.cn/default2.aspx";

    /*$cu_1 = curl_init();
      $timeout=10;
      curl_setopt($cu_1,CURLOPT_URL,$login_url);
      curl_setopt($cu_1,CURLOPT_RETURNTRANSFER,1);
      curl_setopt($cu_1,CURLOPT_CONNECTTIMEOUT,$timeout);
      curl_setopt($cu_1,CURLOPT_COOKIEJAR,$cookie_file);
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
      $cookie_file = dirname(__FILE__)."/".'cookie.txt';
      $login_url = "http://jwgl.ujn.edu.cn/default2.aspx";*/

    $cu_3 = curl_init();
    curl_setopt($cu_3,CURLOPT_URL,$login_url);
    curl_setopt($cu_3,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($cu_3,CURLOPT_CONNECTTIMEOUT,$timeout);
    curl_setopt($cu_3,CURLOPT_COOKIEFILE,$cookie_file);
    $post_data = array(
        "Button1" => "",
        "RadioButtonList1" =>"Ñ§Éú",
        "TextBox2" =>"zhzh1995.",
        "__VIEWSTATE" => "dDwyODE2NTM0OTg7Oz7SB83rscHSkDngMd3SzAQW8HUNsA==",
        "__VIEWSTATEGENERATOR"=>"92719903",
        "hidPdrs" =>"",
        "hidsc"=>"",
        "lbLanguage"=>"",
        "txtSecretCode"=>"pmlw",
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




