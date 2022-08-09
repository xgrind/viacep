<?php

namespace App\Controllers;

class Home extends BaseController
{    
    public function index()
    {            
        $cep = $this->request->getGet('cep');                

        if ($cep) {            
            $cep = getCep($cep);
    
            if (isset($cep->erro)) {
                return redirect('/')->with('erro', 'CEP não encontrado.');
            }                            
        } 
        

        $dados['cep'] = $cep;

        return view('index', $dados);
    }   
}