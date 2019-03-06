<?php
// load Smarty library
require('Smarty.class.php');

class smarty_connect extends Smarty 
{
   function __construct()
   {
        // Class Constructor. 
        // These automatically get set with each new instance.
        parent::__construct();
        $smarty_dir = "C:/xampp/htdocs/smarty/";
        $this->template_dir = $smarty_dir.'templates';//指定模板存放目录
        $this->config_dir = $smarty_dir.'configs';//指定配置文件目录
        $this->compile_dir = $smarty_dir.'templates_c';//指定编译后的模板目录
        $this->cache_dir = $smarty_dir.'cache';//指定缓存目录
        //$this->assign('app_name', 'Intranet');
   }
}

?>