<?php

if (!function_exists('getCep'))
{
    function getCep($cep)
    {
        $client = \Config\Services::curlrequest([
            'baseURI' => 'https://viacep.com.br/ws/'
        ]);        
    
        $response = $client->get("$cep/json/");                  
        $corpo = $response->getBody();
    
        if (strpos($response->getHeader('content-type'), 'application/json') !== false) {            
            $cep = json_decode($corpo);
        }   
    
        return $cep;
    }
}

if (!function_exists('getError')) {
    function getError()
    {
        if (session('erro')) {
            $msg = session('erro');
    
            $erro = <<< alert
                <div class="alert alert-danger" role="alert">
                    $msg
                </div>
            alert;
    
            return $erro;
        }
    }
}