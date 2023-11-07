<?php

namespace App\DataService;

abstract class DataService
{
    private $api_url = 'http://localhost:8000';

    public function EnviarDados($url, $dados)
    {
        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($dados));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);

        if (curl_errno($curl)) {
            echo 'Erro na solicitação cURL: ' . curl_error($curl);
        } else {
            echo 'Resposta da API: ' . $response;
        }

        curl_close($curl);
    }  
}