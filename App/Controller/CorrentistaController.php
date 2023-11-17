<?php

namespace App\Controller;

use App\Model\CorrentistaModel;

class CorrentistaController extends Controller
{
    public static function Save()
    {
        $model = new CorrentistaModel();

        $model->nome = $_POST['nome_cadastro'];
        $model->cpf = $_POST['cpf_cadastro'];
        $model->email = $_POST['email_cadastro'];
        $model->data_nasc = $_POST['data_nasc_cadastro'];
        $model->senha = $_POST['senha_cadastro'];
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