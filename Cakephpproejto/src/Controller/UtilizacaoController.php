<?php

use App\Controller\AppController;

namespace App\Controller;

class UtilizacaoController extends AppController
{

    public function index()
    {
         $this->set('utilizacoes', $this->Utilizacao->find('all'));
    }

    public function view($id = null)
    {
        $utilizacao = $this->utilizacoes->get($id);
        $this->set(compact('utilizacao'));
    }
}