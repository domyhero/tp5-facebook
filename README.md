ThinkPHP 5.0  for facebook
===============

采用ThinkPHP5+bootstrap+layer

=vendor public因为权限问题,无法上传，解压static解压到public目录，vendor可以从官方tp5.05提取出来=

 + 发布微博
 + 发布评论
 + 个人资料
 + 密码修改
 + 资料修改
 + 用户推荐
 + 用户搜索
 + 点赞
 + 转发
 +...
 
> ThinkPHP5的运行环境要求PHP5.4以上。

详细开发文档参考 [ThinkPHP5完全开发手册](http://www.kancloud.cn/manual/thinkphp5)




> 切换到public目录后，启动命令：php -S localhost:8888  router.php

## 使用

  1.修改 config.php
  
 
     // 视图输出字符串内容替换
    'view_replace_str'       => [
        '__STATIC__' =>   '/tp5/public/static',         // 静态资源存放目录
        '__PUBLIC__' =>   '/tp5/public',         // 静态资源存放目录
    ],


  2.数据库配置
        return [
           // 数据库类型
           'type'            => 'mysql',
           // 服务器地址
           'hostname'        => '127.0.0.1',
           // 数据库名
           'database'        => 'tp5',
           // 用户名
           'username'        => 'root',
           // 密码
           'password'        => '',
           // 端口
           'hostport'        => '3306',
           // 连接dsn
           'dsn'             => '',
           // 数据库连接参数
           'params'          => [],
           // 数据库编码默认采用utf8
           'charset'         => 'utf8',
           // 数据库表前缀
           'prefix'          => 'fb_',
           // 数据库调试模式
           'debug'           => true,
           // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
           'deploy'          => 0,
           // 数据库读写是否分离 主从式有效
           'rw_separate'     => false,
           // 读写分离后 主服务器数量
           'master_num'      => 1,
           // 指定从服务器序号
           'slave_no'        => '',
           // 是否严格检查字段是否存在
           'fields_strict'   => true,
           // 数据集返回类型
           'resultset_type'  => 'array',
           // 自动写入时间戳字段
           'auto_timestamp'  => false,
           // 时间字段取出后的默认时间格式
           'datetime_format' => 'Y-m-d H:i:s',
           // 是否需要进行SQL性能分析
           'sql_explain'     => false,
           // Builder类
           'builder'         => '',
           // Query类
           'query'           => '\\think\\db\\Query',
       ];



  3.数据库创建

   命令行切换到tp所在目录

   php think migrate:run

   注：详细命令 php think

## 版权信息

本项目由布尔开发。
