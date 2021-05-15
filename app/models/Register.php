<?php

class Register extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function postData($data)
    {
        $name = $data['name'];
        $email  = $data['email'];
        $phone  = $data['phone'];
        $password  = $data['password'];

        $this->insertData( 
            'users',
            [ 'uname', 'uemail', 'uphone', 'upass' ],
            [ $name, $email, $phone, $password ],
        );
    }
}
