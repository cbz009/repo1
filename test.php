<?php
$action=$_GET["action"];
if($action=="phpinfo"){
    phpinfo();
}
function func2(){
    echo "func2";
}
function func3(){
    echo "func3";
}
?>