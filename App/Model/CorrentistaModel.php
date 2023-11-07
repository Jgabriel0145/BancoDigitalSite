<?php

namespace App\Model;
use App\DataService\DataServiceCorrentista;

class CorrentistaModel extends Model
{
    public $nome, $cpf, $data_nasc, $email, $senha;

    public function Save()
    {
        (new DataServiceCorrentista())->Insert($this);
    }
}