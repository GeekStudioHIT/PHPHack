<?php
/**
 * 功能 : 统计页面访问次数
 * 原理 : 利用session , 将访问次数写入文件 , 展示的时候又重新读取文件内容
 * 作者 : 王一航 
 * 时间 : 2016/09/17 01:13
 **/
@session_start();  
$counter = intval(file_get_contents("log.dat"));  
if(!$_SESSION['geekStudio']){  
 $_SESSION['geekStudio'] = true;
 $counter++;
 $logfile = fopen("counter.dat","w");
 fwrite($logfile, $counter);
 fclose($logfile);
}
?> 
