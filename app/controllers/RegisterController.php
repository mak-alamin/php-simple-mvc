<?php

class RegisterController extends Controller
{
    public $notice = [];

    public $registerModel;

    public function __construct()
    {
        $this->registerModel= $this->model('Register');
    }

    public function index()
    {
        if($this->isPost()){
        
            if($this->validate($_POST)){
                $inserted = $this->registerModel->postData($_POST);

                if($inserted){
                    $this->notice['success'] = 'User added Successfully';
                } else {
                    $this->notice['error'] = 'Insertion Failed!';
                }
            }
        }

        return $this->view('register', $this->notice);
    }
}
