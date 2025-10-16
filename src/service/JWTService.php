<?php
declare (strict_types = 1);

namespace think\jwt\service;

use think\jwt\JWT;

class JWTService extends \think\Service
{
    /**
     * 注册服务
     *
     * @return mixed
     */
    public function register()
    {
    	//
        var_dump($this);
        $this->app->bind('jwt', JWT::class);
    }

    /**
     * 执行服务
     *
     * @return mixed
     */
    public function boot()
    {
        //
        echo 123;
    }
}
