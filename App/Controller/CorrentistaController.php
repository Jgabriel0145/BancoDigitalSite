<?php

namespace App\Controller;

use App\Model\ContaModel;
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

    public static function Login()
    {
        parent::render('Login/Login');
    }

    public static function Auth()
    {
        $model = new CorrentistaModel();

        $model->cpf = $_POST['cpf'];
        $model->senha = $_POST['senha'];

        $usuario = $model->Auth();

        if ($usuario->id != null)
        {
            $dados = ['id' => $usuario->id, 'nome' => $usuario->nome, 'cpf' => $usuario->cpf, 
            'data_nasc' => $usuario->data_nasc, 'email' => $usuario->email, 'senha' => $usuario->senha, 
            'data_cadastro' => $usuario->data_cadastro];

            $_SESSION['dados_usuario'] = $dados;

            header('Location: /inicio');
        }
        else header('Location: /login?erro=true');
    }

    public static function Logout()
    {
        unset($_SESSION['dados_usuario']);
        header('Location: /login');
    }

    public static function PagInicio()
    {
        parent::IsAuthenticated();

        $model = new ContaModel();
        $model->rows_contas = $model->ListContas($_SESSION['dados_usuario']);

        foreach ($model->rows_contas as $conta)
        {
            if ($conta->tipo == 'C')
                $_SESSION['conta_corrente'] = $conta;
            
            else if ($conta->tipo == 'P')
                $_SESSION['conta_poupanca'] = $conta;
        }
        
        parent::render('Inicio', $model);
    }
}