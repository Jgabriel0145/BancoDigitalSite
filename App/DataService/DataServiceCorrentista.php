<?php

namespace App\DataService;
use App\Model\CorrentistaModel;

class DataServiceCorrentista extends DataService
{
    public function Insert(CorrentistaModel $model)
    {
        return $model = parent::EnviarDados('/correntista/save', $model);
    }
}