<?php

class PagesController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return $this->view('pages/index');
    }

    public function about()
    {
        return $this->view('pages/about');
    }
}
