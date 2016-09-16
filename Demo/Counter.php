<?php
/**
 * 功能 : 统计页面访问次数
 * 作者 : 王一航 
 * 时间 : 2016/09/17 01:13
 **/
@session_start();  
$counter = intval(file_get_contents("log.dat"));  
if(!$_SESSION['jingyun'])  
{  
 $_SESSION['jingyun'] = true;  
 $counter++;  
 $logfile = fopen("counter.dat","w");  
 fwrite($fp, $counter);  
 fclose($fp);  
}  
?> 
