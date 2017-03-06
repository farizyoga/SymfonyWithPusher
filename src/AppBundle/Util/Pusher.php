<?php

namespace AppBundle\Util;

use Pusher as BasePusher;

class Pusher
{
    private $pusher;

    public function __construct($appId, $key, $secret)
    {
        $this->pusher = new BasePusher($key, $secret, $appId, ['encrypted' => true, 'cluster' => 'ap1']);
    }

    public function __call($method, $arguments)
    {
        return call_user_func_array(array($this->pusher, $method), $arguments);
    }
}
