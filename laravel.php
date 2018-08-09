<?php
/*
laravel
一、简介
laravel就是一个框架
二、运行环境要求
laravel对PHP版本的要求很高
1、PHP版本>=5.5.9
2、在安装laravel框架之前先去检测PHP扩展有没有开启（必须开启4个）
（1）Mcrypt PHP 扩展——PHP的加密扩展，提供了多种加密算法
（2）OpenSSL扩展————数据传出加密扩展，对传输的数据进行加密
（3）mbstring扩展———对多字节字符串处理，提供了针对多字节字符串字节编码
（4）tokenizer PHP扩展——PHP代码解析
三、安装
1、composer安装 composer create-project laravel/laravel your-project-name --prefer-dist "5.1.*"
                 命令    命令（创建项目）  包的名称      你的文件夹名称     优先   版本
  在相应的cmd路径中执行该条命令，就会安装在指定路径下。
  为什么优先有5.1版本：它是LTS（long time server）长期维护版本。
  千万不要认为版本越高越好，而是越稳定越好
2、直接复制一份安装好的

问题1：如果应用到项目中，是不是连composer都要全部移植？
答：不是。如果用到项目中，就不用把vendor目录提交了。vendor目录是安装包，提交的时候不用提价。
    在框架中vendor—》.gitignore文件中已经说明当前文件中的vendor目录不需要写进版本库中。
    只需要把compose.json文件交给文本库，然后到服务器做更新，直接把composer.json更新到服务器中，然后运行 composer install完成相关软件包的安装。
    所以vendor目录是不用提交的。
问题2：虚拟主机解析到哪个文件夹下？
答：如果是laravel框架的话，解析到public目录下才可以。（laravel框架的根目录是public目录，而不是laravel的安装目录）
    如果是其他网站，到网站根目录是a文件夹，就把域名指向a文件夹即可


四、配置
五、路由
六、中间价
七、控制器
八、请求


 */