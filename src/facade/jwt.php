<?php

namespace think\facade;

use think\Facade;

/**
 * Class JWT
 * @package think\facade
 * @mixin \think\JWT
 */
class JWT extends Facade
{
    protected static function getFacadeClass()
    {
        return 'jwt';
    }
}
