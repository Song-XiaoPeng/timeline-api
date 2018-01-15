<?php
namespace app\index\controller;

use think\Exception;
use think\Db;

class Index
{
    public function index1()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
    }

    public function index()
    {
        /*
  create database timeline ;
  use timeline;

  create table article (
    id int auto_increment primary key,
    title varchar(64) not null default '' comment '标题',
    desc varchar(255) not null default '' comment '摘要',
    content text  comment '内容',
    mood varchar(255) not null default '' comment '心情',
    author varchar(255) not null default '' comment '昵称',
    address varchar(255) not null default '' comment '地点',
    weather varchar(255) not null default '' comment '天气',
    time varchar(255) not null default '' comment '发布时间'
  )engine=innodb charset=utf8;

 *
 */

        /**
         * Created by PhpStorm.
         * User: Administrator
         * Date: 2018/1/15 0015
         * Time: 17:53
         */
        try {
            $data = input();
	    $data['time'] = time();
            Db::name('article')->insert($data);
            return json($this->msg(0, 'success'));
        } catch (Exception $e) {
            return json($this->msg(1, $e->getMessage()));
        }
    }

    public function msg($code, $msg, $data=[])
    {
        return [
            'code' => $code,
            'msg' => $msg,
            'data' => $data,
        ];
    }

}
