<?php

class ShopController extends Controller
{
    public function __construct()
    {
       
    }

    public function index()
    {
        $data = [
            "title" => "Shop Page",
            "products" => [
                'shirts', 'glasses', 'pants', 'caps'
            ]
        ];

       return $this->view('shop/index', $data);
    }

    public function categories()
    {
        $data = [
            "title" => "Shop by Category",
            "cats" => [
                'man', 'women', 'kids'
            ]
        ];

        return $this->view('shop/categories', $data);
    }
}
