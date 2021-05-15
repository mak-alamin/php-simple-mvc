<?php

class Users extends Controller
{
    public $userModel;

    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        $data = $this->userModel->getUsers();
        
        return $this->view('users', $data);
    }
}
