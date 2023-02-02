<?php

class Product extends Controller
{
    private $model_product;
    public $data = [];

    public function __construct()
    {
        $this->model_product = $this->model('ProductModel'); // add model 
    }

    public function index() 
    {
        $this->data['sanpham'] = $this->model_product->getlist(); // lay methol trong model

       // render views
       $this->render('Product/ListProduct', $this->data);
    }

    public function listID($id = 0) 
    {
        $this->data['id'] = $this->model_product->listid($id); // lay methol trong model
        
       // render views
       $this->render('Product/listid', $this->data);
    }
}
