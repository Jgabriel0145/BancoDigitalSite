<?php

namespace App\DataService;

use Exception;

abstract class DataService
{
    private $localhost = 'http://localhost:8000';

    public function EnviarDados($api_url, $dados)
    {
        try
        {
            $post_json = json_encode($dados);
            $url = $this->localhost . $api_url;
            $curl = curl_init($url);

            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $post_json);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curl);
        
            curl_close($curl);
        
            return $response;
        }
        catch (Exception $ex)
        {
            throw new Exception('Erro: ' . $ex);
        }
    }  
}