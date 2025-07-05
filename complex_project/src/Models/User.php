<?php
namespace Models;

class User {
    public $username;
    protected $role;

    public function __construct($username, $role = 'guest') {
        $this->username = $username;
        $this->role = $role;
    }

    public function hasPermission($action) {
        if ($this->role === 'admin') {
            return true;
        } elseif ($this->role === 'editor' && $action !== 'delete') {
            return true;
        }
        return false;
    }
}
