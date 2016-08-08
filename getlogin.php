<?php
//??????
{
    require_once ("get_class.php");
    $student_number = $_GET["number"];
    $student_name = $_GET["name"];
    $password = $_GET["password"];
    $checkcode = $_GET["checkcode"];
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
        "TextBox2" =>$password,
        "__VIEWSTATE" => "dDwyODE2NTM0OTg7Oz7SB83rscHSkDngMd3SzAQW8HUNsA==",
        "__VIEWSTATEGENERATOR"=>"92719903",
        "hidPdrs" =>"",
        "hidsc"=>"",
        "lbLanguage"=>"",
        "txtSecretCode"=>$checkcode,
        "txtUserName"=>$student_number
    );
    //aecho $post_data["txtSecretCode"];
    //echo $post_data["txtSecretCode"];
    curl_setopt($cu_3, CURLOPT_POSTFIELDS, $post_data);
    $data = curl_exec($cu_3);
    curl_setopt($cu_3,CURLOPT_URL,"http://jwgl.ujn.edu.cn/xs_main.aspx?xh=".$student_number);
    $data = curl_exec($cu_3);
    get_classtable($student_number,$student_name);
    //echo $data;
    //echo $student_name;
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




