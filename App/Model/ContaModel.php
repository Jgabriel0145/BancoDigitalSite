<?php

namespace App\Model;

use App\DataService\DataServiceConta;

class ContaModel extends Model
{
    public $id, $tipo, $saldo, $limite, $data_abertura, $id_correntista;
    public $rows_contas;

    public function ListContas($dados)
    {
        return (new DataServiceConta())->SelectContas($dados);
    }
}