<?php

namespace Controller;

class LoginController extends Controller {

    public function login() {
        if (!empty($_POST)) {
            $user = \Model\User::login($_POST['username'], $_POST['password']);
            $_SESSION['user'] = $user;
            $this->_router->redirect('Default#home');
        } else {
            $this->_view("login");
        }
    }

    public function register() {
        if (!empty($_POST)) {
            var_dump($_POST);
            $user = new \Model\User(
                $_POST['pseudo'],
                $_POST['nom'],
                $_POST['prenom'],
                $_POST['motDePasse'],
                $_POST['adresse'],
                $_POST['codePostal'],
                $_POST['ville'],
                $_POST['adresseMail']
            );
            if ($user->register()) {
                $_SESSION['user'] = $user;
            }
        } else {
            $this->_view("register");
        }
    }

    public function logout() {
        session_destroy();
        $this->_router->redirect('Default#home');

    }
}