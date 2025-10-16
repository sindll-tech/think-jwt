<?php
declare (strict_types = 1);

namespace think\service;

use think\JWT;

class JWTService extends \think\Service
{
    public $bind = [
        'jwt' => JWT::class,
    ];

    /**
     * 注册服务
     *
     * @return mixed
     */
    public function register()
    {
    	//
    }

    /**
     * 执行服务
     *
     * @return mixed
     */
    public function boot()
    {
        //
    }
}
