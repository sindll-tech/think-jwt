<?php
declare (strict_types = 1);

namespace think;

use Firebase\JWT\JWT as FirebaseJWT;
use Firebase\JWT\Key as FirebaseKey;

class JWT
{
    public function encode($payload)
    {
        return FirebaseJWT::encode($payload, config('jwt.key'), config('jwt.alg', 'HS256'));
    }

    public function decode($jwt)
    {
        return FirebaseJWT::decode($payload, new FirebaseKey(config('jwt.key'), config('jwt.alg', 'HS256')));
    }
}
