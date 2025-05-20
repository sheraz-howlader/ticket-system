<?php
    class AuthController extends Controller{

        private $UserModel;

        public function __construct() {
            parent::__construct();
            $this->UserModel = $this->load->model('User');
        }

        public function index(){
            session_start();
            if (isset($_SESSION['user'])) {
                header("Location: ".BASE_URL."/dashboard");
            }
            $this->load->view('login/logIn');
        }

        public function signUp(){
            if (isset($_SESSION['user'])) {
                header("Location: ".BASE_URL."/dashboard");
            }
            $this->load->view('login/register');
        }

        public function createUser(){
            $name   = $_REQUEST['name'];
            $email  = $_REQUEST['email'];
            $pass   = $_REQUEST['pass'];

            $this->UserModel->create([
                'name'  => $name,
                'role'  => 'agent',
                'email' => $email,
                'password'  => sha1($pass),
            ]);

            header("Location: ".BASE_URL."/");
        }

        public function loginAuth(){
            $email  = $_REQUEST['email'];
            $pass   = $_REQUEST['pass'];

            $user  = $this->UserModel->checkUser($email);
            $check = sha1($pass) == $user->password;

            if ($check) {
                session_start();
                $_SESSION['user'] = $user;
                header("Location: ".BASE_URL."/dashboard");
            }else{
                header("Location: ".BASE_URL."/?msg=wrong credentials");
            }
         }
    }