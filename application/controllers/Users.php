<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller
{

    private $registerErrors = array();
    private $user_id;
    private $num_rows = 5;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
    }

    public function index()
    {
        show_404();
    }

    public function login(){
        if (isset($_POST['login'])) {
            $result = $this->Public_model->checkPublicUserIsValid($_POST);
            if ($result !== false) {
                $_SESSION['logged_user'] = $result; //id of user
                //redirect(LANG_URL . '/checkout');
                echo '{success:true, totalrecords:'.count($result).', listData:'.json_encode($result).'}';
            }else{
                echo 'false';
            } 
        }
    }

    public function register(){
        if (isset($_POST['register'])) {
            $result = $this->registerValidate();
            if ($result == false) {
                // var_dump($result);
                // die();
                $this->session->set_flashdata('userError', $this->registerErrors);
                 redirect(LANG_URL . '/home');
            } else {
                 $data = $this->Public_model->checkLoginAfterRegister($_POST['email'],$_POST['password_register']);
                 // var_dump($data);
                 // die();
                 $_SESSION['logged_user'] = $data; //id of user
                 redirect(LANG_URL . '/home');
            }
        }
    }

    public function myaccount($page = 0)
    {
        if (isset($_POST['update'])) {
            $_POST['id'] = $_SESSION['logged_user'];
            $count_emails = $this->Public_model->countPublicUsersWithEmail($_POST['email'], $_POST['id']);
            if ($count_emails == 0) {
                $this->Public_model->updateProfile($_POST);
            }
            redirect(LANG_URL . '/myaccount');
        }
        $head = array();
        $data = array();
        $head['title'] = lang('my_acc');
        $head['description'] = lang('my_acc');
        $head['keywords'] = str_replace(" ", ",", $head['title']);
        $data['userInfo'] = $this->Public_model->getUserProfileInfo($_SESSION['logged_user']);
        $rowscount = $this->Public_model->getUserOrdersHistoryCount($_SESSION['logged_user']);
        $data['orders_history'] = $this->Public_model->getUserOrdersHistory($_SESSION['logged_user'], $this->num_rows, $page);
        $data['links_pagination'] = pagination('myaccount', $rowscount, $this->num_rows, 2);
        $this->render('user', $head, $data);
    }

    public function logout()
    {
        unset($_SESSION['logged_user']);
        redirect(LANG_URL);
    }

    private function registerValidate()
    {
        $errors = array();
        if (mb_strlen(trim($_POST['email'])) == 0) {
            $errors[] = lang('please_enter_email');
        }
        // if (mb_strlen(trim($_POST['password_register'])) == 0) {
        //     $errors[] = lang('please_enter_register');
        // }
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = lang('invalid_email');
        }
        if (mb_strlen(trim($_POST['nama'])) == 0) {
            $errors[] = lang('enter_nama');
        }
        if (mb_strlen(trim($_POST['notelpon'])) == 0) {
            $errors[] = lang('please_enter_no_telpon');
        }
        if ($_POST['password_register'] != $_POST['password_ulang']) {
            $errors[] = lang('passwords_dont_match');
        }

        $count_emails = $this->Public_model->countPublicUsersWithEmail($_POST['email']);
        if ($count_emails > 0) {
            $errors[] = lang('user_email_is_taken');
        }
        if (!empty($errors)) {
            $this->registerErrors = $errors;
            return false;
        }
        $this->user_id = $this->Public_model->registerUser($_POST);
        return true;
    }

}
