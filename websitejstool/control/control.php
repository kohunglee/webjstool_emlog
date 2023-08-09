<?php

require_once "class.php";

require_once '../../../../init.php';
if (ROLE != 'admin') { exit(''); }

$websitejstool_storage = Storage::getInstance('plugin_websitejstool');




$getInfo		= isset($_GET["act"]) ? addslashes($_GET["act"]) : '';
$param		    = isset($_GET["param"]) ? addslashes($_GET["param"]) : '';

$writeHtml      = isset($_POST["writeHtml"]) ? addslashes($_POST["writeHtml"]) : '';




if($getInfo == 'getHtml'){  // 获取信息
    $webtoolset_content = $websitejstool_storage->getValue($param);
    $output = array(
        "msg" => "ok",
        "content" => $webtoolset_content
    );
    echo json_encode($output);




}elseif($getInfo == 'setHtml'){  // 写入信息和将应用外观文件
    if ($writeHtml != ''){
        $websitejstool_storage->setValue($param, $writeHtml);
        $output = array(
            "msg" => "ok",
            "writeHtml" => $writeHtml
        );
        echo json_encode($output);



        
    } else {  // 写入内容为空，则无动作
        $output = array(
            "msg" => "error",
            "writeHtml" => $writeHtml
        );
        echo json_encode($output);
    }




}else{
    exit('NULL');
}