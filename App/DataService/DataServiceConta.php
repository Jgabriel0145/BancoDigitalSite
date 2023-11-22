<?php

namespace App\DataService;

use App\Model\ContaModel;

class DataServiceConta extends DataService
{
    public function SelectContas($dados)
    {
        return parent::EnviarDados('/conta/searchcontas', $dados);
    }
}