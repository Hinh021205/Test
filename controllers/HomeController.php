<?php 

class HomeController
{
    public $modelProdcut;

    public function __construct()
    {

    }

    public function home()
    {
        // $listProdcut = $this->modelProdcut = new Product();
        echo 'Đây là home';
    }

    public function trangChu()
    {
        echo 'Đây là trang chủ';
    }

}