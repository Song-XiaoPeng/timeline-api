<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15 0015
 * Time: 17:53
 */
namespace app\index\controller;

use think\Exception;
use think\Db;

class Index
{
    public function index()
    {
        return "<p>欢迎</p><a href='http://sone.timeline.hellobirds.top/Timeline.html'>sone的好看的时光轴</a><br /><a href='http://sone.timeline.hellobirds.top'>sone的时光轴</a><br />
<a href='http://sone.hellobirds.top'>sone的博客</a>";
    }

    public function addArticle()
    {
        try {
            $data = input();
            $data['date'] = strtotime(date('ymd', time()));//年月日
            $data['time'] = time() - strtotime(date('ymd', time()));//时间
            Db::name('article')->insert($data);
            return json(msg(0, 'success'));
        } catch (Exception $e) {
            return json(msg(1, $e->getMessage()));
        }
    }

    public function getTimeLineData()
    {
        try{
            $data = Db::name('article')->select();
            return json(msg(0, 'success',$data));
        }catch(Exception $e){
            return json(msg(1, $e->getMessage()));
        }
    }

}
