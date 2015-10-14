<?php

/**
 * 主机记录的接口逻辑处理
 * 
 * @author CLoudXNS <support@cloudxns.net>
 * @link https://www.cloudxns.net/
 * @copyright Copyright (c) 2015 Cloudxns.
 */

namespace CloudXNS;

use CloudXNS\Api;

final class Host extends Api {
    
    public function __construct() {
        $this->setApiType("Host");
    }
    
    //主机记录的列表
    public function hostList($urlExtend = '') {
        //设置URL扩展
        $this->setUrlExtend($urlExtend);
        
        //初始化参数
        $this->initParam();

        //设置请求的方法
        $this->request->setMethod('GET');

        //获取返回值
        $this->response();
    }

    //主机记录的删除
    public function hostDelete($urlExtend = '') {
        //设置URL扩展
        $this->setUrlExtend($urlExtend);
        
        //初始化参数
        $this->initParam();

        //设置请求的方法
        $this->request->setMethod('DELETE');

        //获取返回值
        $this->response();
    }

}
