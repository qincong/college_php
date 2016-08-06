<?php
{   //http://jwgl.ujn.edu.cn/xskbcx.aspx?xh=20141223251&xm=%D5%D4%D5%F0&gnmkdm=N121603
    $cookie_file = dirname(__FILE__)."/".'cookie.txt';
    $class_url="http://jwgl.ujn.edu.cn/xskbcx.aspx?xh=20141223251&xm=еде№&gnmkdm=N121603";//.iconv( "UTF-8","GB2312//IGNORE", "еде№")."&gnmkdm=N121601";
    //echo $class_url;
    $cu_3=curl_init();
    curl_setopt($cu_3,CURLOPT_URL,$class_url);
    curl_setopt($cu_3,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($cu_3,CURLOPT_CONNECTTIMEOUT,10);
    curl_setopt($cu_3,CURLOPT_COOKIEFILE,$cookie_file);
    $post_data = array(
        "__EVENTARGUMENT"=>"",
        "__EVENTTARGET"=>"xqd",
        "__VIEWSTATE"=>"dDwzOTI4ODU2MjU7dDw7bDxpPDE+Oz47bDx0PDtsPGk8MT47aTwyPjtpPDQ+O2k8Nz47aTw5PjtpPDExPjtpPDEzPjtpPDE1PjtpPDI0PjtpPDI2PjtpPDI4PjtpPDMwPjtpPDMyPjtpPDM0Pjs+O2w8dDxwPHA8bDxUZXh0Oz47bDxcZTs+Pjs+Ozs+O3Q8dDxwPHA8bDxEYXRhVGV4dEZpZWxkO0RhdGFWYWx1ZUZpZWxkOz47bDx4bjt4bjs
+Pjs+O3Q8aTwyPjtAPDIwMTUtMjAxNjsyMDE0LTIwMTU7PjtAPDIwMTUtMjAxNjsyMDE0LTIwMTU7Pj47bDxpPDA+Oz4+Ozs+O3Q8dDw7O2w8aTwwPjs
+Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPOWtpuWPt++8mjIwMTQxMjIzMjUxOz4+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDzlp5PlkI3vvJrotbXpnIc7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPOWtpumZou
+8muS/oeaBr+enkeWtpuS4juW3peeoi+WtpumZojs+Pjs+Ozs+O3Q8cDxwPGw8VGV4dDs+O2w85LiT5Lia77ya6YCa5L+h5bel56iLOz4
+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDzooYzmlL/nj63vvJrpgJrkv6ExNDA0Oz4+Oz47Oz47dDw7bDxpPDE+Oz47bDx0PEAwPDs7Ozs7Ozs7Ozs
+Ozs+Oz4+O3Q8cDxsPFZpc2libGU7PjtsPG88Zj47Pj47bDxpPDE+Oz47bDx0PEAwPDs7Ozs7Ozs7Ozs+Ozs+Oz4+O3Q8QDA8cDxwPGw8UGFnZUNvdW50O18hSXRlbUNvdW50O18hRGF0YVNvdXJjZUl0ZW1Db3VudDtEYXRhS2V5czs
+O2w8aTwxPjtpPDI+O2k8Mj47bDw+Oz4+Oz47Ozs7Ozs7Ozs7PjtsPGk8MD47PjtsPHQ8O2w8aTwxPjtpPDI+Oz47bDx0PDtsPGk8MD47aTwxPjtpPDI
+O2k8Mz47aTw0PjtpPDU+O2k8Nj47aTw3Pjs+O2w8dDxwPHA8bDxUZXh0Oz47bDwxMTIwMzM4MDs+Pjs+Ozs+O3Q8cDxwPGw8VGV4dDs
+O2w8MTEyMDMzODA7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPOiwgzA0NjM7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPCgyMDE1LTIwMTYtMSktMTJBMDgwMjAtMTEyMDMzODAtMTs
+Pjs+Ozs+O3Q8cDxwPGw8VGV4dDs+O2w85L+h5Y+35LiO57O757ufOz4+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDzlkagx56ysM+iKgui
/nue7rTLoioJ756ysMTYtMTblkah9LzEwSjMxMy/njovngbXlnqA7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPOWRqDTnrKwx6IqC6L
+e57utMuiKgnvnrKwxNi0xNuWRqOWPjOWRqH0vMTFKMTEwMi/njovngbXlnqA7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPDIwMTUtMTItMDgtMDktNDg7Pj47Pjs7Pjs
+Pjt0PDtsPGk8MD47aTwxPjtpPDI+O2k8Mz47aTw0PjtpPDU+O2k8Nj47aTw3Pjs+O2w8dDxwPHA8bDxUZXh0Oz47bDwxMTIwMzM4MDs
+Pjs+Ozs+O3Q8cDxwPGw8VGV4dDs+O2w8MTEyMDMzODA7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPOiwgzA0NjQ7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPCgyMDE1LTIwMTYtMSktMTJBMDgwMjAtMTEyMDMzODAtMTs
+Pjs+Ozs+O3Q8cDxwPGw8VGV4dDs+O2w85L+h5Y+35LiO57O757ufOz4+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDzlkagy56ysM+iKgui
/nue7rTLoioJ756ysMTYtMTblkah9LzExSjYzMDIv546L54G15Z6gOz4+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDzlkag156ysNeiKgui
/nue7rTLoioJ756ysMTYtMTblkajlj4zlkah9LzExSjM0MDEv546L54G15Z6gOz4+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDwyMDE1LTEyLTA4LTA5LTUwOz4
+Oz47Oz47Pj47Pj47Pj47dDxAMDxwPHA8bDxQYWdlQ291bnQ7XyFJdGVtQ291bnQ7XyFEYXRhU291cmNlSXRlbUNvdW50O0RhdGFLZXlzOz47bDxpPDE
+O2k8MT47aTwxPjtsPD47Pj47Pjs7Ozs7Ozs7Ozs+O2w8aTwwPjs+O2w8dDw7bDxpPDE+Oz47bDx0PDtsPGk8MD47aTwxPjtpPDI
+O2k8Mz47aTw0PjtpPDU+O2k8Nj47PjtsPHQ8cDxwPGw8VGV4dDs+O2w85qih5ouf55S15a2Q5oqA5pyv6K++56iL6K6+6K6hOz4
+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDzotbXkv53ljY47Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPDIuMDs+Pjs+Ozs+O3Q8cDxwPGw8VGV4dDs
+O2w8MTctMTg7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPCZuYnNwXDs7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPCZuYnNwXDs7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPCZuYnNwXDs7Pj47Pjs7Pjs
+Pjs+Pjs+Pjt0PEAwPHA8cDxsPFBhZ2VDb3VudDtfIUl0ZW1Db3VudDtfIURhdGFTb3VyY2VJdGVtQ291bnQ7RGF0YUtleXM7PjtsPGk8MT47aTwwPjtpPDA
+O2w8Pjs+Pjs+Ozs7Ozs7Ozs7Oz47Oz47dDxAMDxwPHA8bDxQYWdlQ291bnQ7XyFJdGVtQ291bnQ7XyFEYXRhU291cmNlSXRlbUNvdW50O0RhdGFLZXlzOz47bDxpPDE
+O2k8MT47aTwxPjtsPD47Pj47Pjs7Ozs7Ozs7Ozs+O2w8aTwwPjs+O2w8dDw7bDxpPDE+Oz47bDx0PDtsPGk8MD47aTwxPjtpPDI
+O2k8Mz47aTw0Pjs+O2w8dDxwPHA8bDxUZXh0Oz47bDwyMDE1LTIwMTY7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPDE7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPOaooeaLn
+eUteWtkOaKgOacr+ivvueoi+iuvuiuoTs+Pjs+Ozs+O3Q8cDxwPGw8VGV4dDs+O2w86LW15L+d5Y2OOz4+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDwyLjA7Pj47Pjs7Pjs
+Pjs+Pjs+Pjs+Pjs+Pjs+85hmPEgp6UyUDM5noEyVncZBh4Y=",
        "__VIEWSTATEGENERATOR"=>"55530A43",
        "xnd"=>"2015-2016",
        "xqd"=>"2"
    );
    $header = array(
        "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
        "Accept-Encoding: gzip, deflate",
        "Accept-Language: zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3",
        "Connection: keep-alive",
        //"Cookie: ASP.NET_SessionId=dzlryq554j2wof3tvo4s0545",
        "Host: jwgl.ujn.edu.cn",
        "Referer: http://jwgl.ujn.edu.cn/xskbcx.aspx?xh=20141223251&xm=%D5%D4%D5%F0&gnmkdm=N121603",
        "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0)"
    );
    curl_setopt($cu_3, CURLOPT_HTTPHEADER, $header);
    curl_setopt($cu_3, CURLOPT_POSTFIELDS, $post_data);
    $contents = curl_exec($cu_3);
    if (curl_errno($cu_3)) {
        echo 'Curl error: ' . curl_error($cu_3);
    }
    curl_close($cu_3);
    print_r( $contents);
}
?>