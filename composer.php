<?php
/*
一、 composer简介
    composer就是一个软件，在PHP中帮助去安装PHP安装包的软件。还可以解决依赖关系
    依赖关系：比如一个PHP包需要依赖A、B、C、D四个包才能运行。需要告诉composer需要哪些依赖包即可，它会自己去安装
二、composer的安装
    cmd输入composer测试是否安装成功（不用修改路径，直接C:\Users\hui 路径下测试即可）
三、修改中文镜像
    cmd中执行下面这条命令即可（依然不用修改cmd的路径）
    修改后可以采用国内的镜像去安装那些安装包，比较方便一些
    composer config -g repo.packagist composer https://packagist.phpcomposer.com
四、基本使用
    1、在指定的文件夹下创建composer.json，填写相关的配置代码
    2、在命令行下执行 composer install
    3、创建PHP脚本，并且要引入vendor文件下的autoload.php
    4、查看文档 使用工具包
    工具包地址：https://packagist.org/

比如：安装二维码的包可以搜qrcode
1、在three-composer项目下创建composer.json文件，目的是告诉composer要安装什么。
   注意名字必须是composer.json，并且必须是双引号，而且json字符串格式不能有错
   并且在文件中填写相关内容   {  "require": {"endroid/qr-code": "3.2.12"} }
   这里面是json 的字符串（在安装包中可以找到代码）  "vendor/package" ——包的名称    "1.3.2" ——包的版本
2、在cmd命令行中执行 composer install （注意在命令行中切换路径，切换到创建composer.json的文件夹下。也就是three-composer路径下）
   注意windows下面查看文件的命令不是LS，而是dir
   用composer提示PHP版本过低，则升级PHP版本
   安装成功后会增加两个文件  composer.lock文件——当前软件包的版本   vendor文件夹——存放类包
3、当前目录创建PHP文件（index.php），使用安装包，生成二维码
    (1)引入自动加载的文件（vendor下的autoload.php文件），只要加载了这个文件，所有安装的安装包都可以直接使用。
    include './vendor/autoload.php';
4、查看文档 使用工具包
   点开搜的二维码的安装包，里面会有相关信息（包的名称、版本、guithub地址、依赖关系、实例等等）
   直接使用实例就可以完成。
   用浏览器访问就可以了
五、更新composer.json文件
    当我们需要安装新的软件包
   （1）修改文件：在compose.json文件写包名和版本（用逗号将安装包分割）
   （2）更新：在cmd中执行命令 composer update
六、composer这个软件更新
   执行composer命令，会提示你的composer有多长时间没有更新了，这时候需要不用卸载重新安装，更新这个软件即可
   cmd中执行命令: composer self-update
七、更新laravel版本

*/