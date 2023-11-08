<?php

namespace App\Model;
use App\DataService\DataServiceCorrentista;

class CorrentistaModel extends Model
{
    public $id, $nome, $cpf, $data_nasc, $email, $senha, $data_cadastro;

    public function Save()
    {
        (new DataServiceCorrentista())->Insert($this);
    }

    public function Auth()
    {
        (new DataServiceCorrentista())->Auth($this);
    }
}