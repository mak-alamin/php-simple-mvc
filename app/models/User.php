<?php

class User extends Model{
    public function getUsers()
    {
        return $this->getAllData('users');
    }
}
