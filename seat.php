<?php
    $con = mysql_connect("localhost","root","pzwwca");
    if(!$con) { 
        echo "can not connect";
    }
 	mysql_select_db("college",$con);
	$query="select * from classroom";
	$res = mysql_query($query);
	while($row = mysql_fetch_array($res)) {
        //		echo $row['is_occupy'];
	}
    echo '{"seat":"101010101"}';
?>
