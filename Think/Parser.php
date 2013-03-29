<?php
// +----------------------------------------------------------------------
// | TOPThink [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2011 http://topthink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$

namespace Think;
// 内容解析类
class Parser {
    protected $handler  =   null;
    public function __construct($content,$type){
        $class  =   '\Think\Parser\Driver\\'.ucwords($type);
        $parse  =   new $class();
        return $parse->parse($content);
    }

    // 解析内容
    static public function parse($content,$type){
        return new static($content,$type);
    }

}