<?php

namespace Controller;

class LoginController extends Controller {

    public function login() {
        if (!empty($_POST)) {
            $user = \Model\User::login($_POST['username'], $_POST['password']);
        } else {
            $this->view("login");
        }
    }

    public function register() {
        $user = new \Model\User();
    }

    public function logout() {

    }
}