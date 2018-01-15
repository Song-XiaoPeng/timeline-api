<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15
 * Time: 21:44
 */
function msg($code, $msg, $data = [])
{
    return [
        'code' => $code,
        'msg' => $msg,
        'data' => $data,
    ];
}