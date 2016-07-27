<?php
{
    function a() {
        echo "a";
    }
    $json='{"a":1,"b":2}';
    $obj=json_decode($json);
    echo $obj->{"a"};
    a();
}
?>
