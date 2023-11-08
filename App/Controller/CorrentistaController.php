<?php

namespace App\Controller;

use App\Model\CorrentistaModel;

class CorrentistaController extends Controller
{
    public static function Save()
    {
        $model = new CorrentistaModel();

        $model->nome = $_POST['nome'];
        $model->cpf = $_POST['cpf'];
        $model->email = $_POST['email'];
        $model->data_nasc = $_POST['data_nasc'];
        $model->senha = $_POST['senha'];
        $model->data_cadastro = (new \DateTime())->format('Y-m-d H:i:s');

        $model->Save();

        header('Location: /login');
    }

    public static function Index()
    {
        parent::render('Correntista/CorrentistaCadastro');
    }

    public static function List()
    {

    }

    public static function Login()
    {
        parent::render('Login/Login');
    }

    public static function Auth()
    {
        $model = new CorrentistaModel();

        $model->cpf = $_POST['cpf'];
        $model->senha = $_POST['senha'];

        $model->Auth();
    }
}