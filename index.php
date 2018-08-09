<?php
//composer的使用步骤

//安装二维码的包

//安装xiaohigh/curl的包，使用curl类文件 进行请求发送
//访问127.0.0.1，返回的是兄弟连官网
  //
include './vendor/autoload.php';
//实例化
$curl = new \xiaohigh\Curl;
//发送get请求
 $res = $curl -> get('http://www.itxdl.cn');
//发送post请求
//$res = $curl -> post('http://www.xiaohigh.com', []);
echo $res;
