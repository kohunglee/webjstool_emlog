<?php
!defined('EMLOG_ROOT') && exit('error');

function callback_init() {  //  初始化项目配置
	$websitejstool_storage = Storage::getInstance('plugin_websitejstool');
	
	$websitejstool_storage->setValue('test01', 'hello 世界');
}