<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Public_model');
    }

    public function index()
    {
        $data = array();
        $head = array();
        $arrSeo = $this->Public_model->getSeo('shoppingcart');
        $head['title'] = @$arrSeo['title'];
        $head['description'] = @$arrSeo['description'];
        $head['keywords'] = str_replace(" ", ",", $head['title']);
        $this->render('front', $head, $data);
    }

}
