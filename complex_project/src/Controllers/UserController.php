<?php
namespace Controllers;

use Models\User;
use Services\EmailService;

class UserController {
    public function authenticate($username, $password) {
        if ($username === 'admin' && $password === '1234') {
            $user = new User($username, 'admin');
            if ($user->hasPermission('delete')) {
                EmailService::send($user->username, 'Login Successful');
            }
        }
    }
}
