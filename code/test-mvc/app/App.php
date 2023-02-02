<?php

class App
{
    private $_controller;
    private $_action = 'index';
    private $_params = [];

    public function __construct() // goi ham xu ly
    {
        $this->handleUrl();
    }

    public function getUrl() // lay url
    {
        if (!empty($_SERVER['PATH_INFO'])) 
        {
            $url = $_SERVER['PATH_INFO'];
        }
        else 
        {
            $url = '/';
        }

        return $url;
    }

    public function handleUrl() // xu ly url 
    {
        $url = $this->getUrl();

        $urlArray = array_values(array_filter(explode('/', $url))); // reset index mang, xoa null trong mang, bien chuoi thanh mang



        // xu ly controller
        global $routers; // khoi tao bien global

        if (!empty($urlArray[0])) 
        {
            $this->_controller = ucfirst($urlArray[0]); // index[0] : controller 
        } 
        else 
        {
            $this->_controller = ucfirst($routers['default_controller']); // controller mac dinh tu file config/router
        }

        if (file_exists('app/controllers/'.($this->_controller).'.php')) // kiem tra duong dan 
        {
            require_once 'controllers/'.($this->_controller).'.php';

            if (class_exists($this->_controller)) // kiem tra class trong cotroller co ton tai khong
            {
                $this->_controller = new $this->_controller(); // khoi tao doi tuong class controller
                unset($urlArray[0]); // xoa controller khoi mang sau khi da xu ly
            }
            else 
            {
                $this->errors();
            }
            
        }
        else 
        {
            $this->errors();
        }



        // xu ly action
        if (!empty($urlArray[1])) // index[1] : action 
        {
            $this->_action = $urlArray[1];
            unset($urlArray[1]); // xoa action khoi mang sau khi da xu ly
        }



        // xu ly params
        $this->_params = array_values($urlArray); // reset index mang

        if (method_exists($this->_controller, $this->_action)) // kiem tra methol trong cotroller co ton tai khong
        {
            call_user_func_array([$this->_controller, $this->_action], $this->_params); 
        }
        else 
        {
            $this->errors();
        }
        



        // echo '<pre>';
        // print_r($this->_params);
        // echo '<pre>';
        
    }

    public function errors($name = '404')
    {
        require_once 'errors/'.$name.'.php';
    }
}
