<?php

class ContactController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return $this->view('contact');
    }
}
