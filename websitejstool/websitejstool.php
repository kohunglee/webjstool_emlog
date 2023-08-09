<?php
/*
Plugin Name: 万能前端代码工具
Version: 1.0
Plugin URL: https://www.ccgxk.com/447.html
Description: 根据 emlog pro 系统内置的事件钩子，自定义插入前端代码，以便捷地实现一些网页效果。
Author: 串串狗xk
Author URL: https://www.ccgxk.com
*/

!defined('EMLOG_ROOT') && exit('error');
error_reporting(E_ALL);

$websitejstool_storage = Storage::getInstance('plugin_websitejstool');



addAction('index_footer', 'websitejstool_echocontent');
function websitejstool_echocontent() {
    global $websitejstool_storage;
    $webtoolset_content = $websitejstool_storage->getValue('test01');
    echo $webtoolset_content;
}



// 在后台侧边栏显示选项
function gpu_echo_websitejstool()
{
    echo '<a class="collapse-item" id="gpu_ame02" href="plugin.php?plugin=websitejstool">前端代码工具</a>';
}
addAction('adm_menu_ext', 'gpu_echo_websitejstool');