<?php

namespace AppBundle\Event\Listener;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class LoginSuccessListener
{
    private $pusher;
    private $tokenStorage;

    public function __construct($pusher, TokenStorage $tokenStorage)
    {
        $this->pusher = $pusher;
        $this->tokenStorage = $tokenStorage;
    }

    public function onLoginSuccess($event)
    {
        $data = ['message' => $this->tokenStorage->getToken()->getUser().' is connected to Application'];
        $this->pusher->trigger('app', 'global', $data);
    }
}
