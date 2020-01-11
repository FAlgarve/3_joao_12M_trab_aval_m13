<?php

use App\Controller\AppController;

namespace App\Controller;

class ArmasController extends AppController
{

    public function index()
    {
        $this->set('armas', $this->Armas->find('all'));
    }

    public function view($id = null)
    {
        $arma = $this->Armas->get($id);
        $this->set(compact('arma'));
    }

    public function add()
    {
        $arma = $this->Armas->newEntity();
        if ($this->request->is('post')) {
            $arma = $this->Armas->patchEntity($arma, $this->request->getData());
            if ($this->Armas->save($arma)) {
                $this->Flash->success(__('Seu arma foi guardada.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não é possível adicionar a sua arma.'));
        }
        $this->set('arma', $arma);
    }

    public function edit($id = null)
    {
        $arma = $this->Armas->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Armas->patchEntity($arma, $this->request->getData());
            if ($this->Armas->save($arma)) {
                $this->Flash->success(__('Seu artigo foi atualizado.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Seu artigo não pôde ser atualizado.'));
        }

        $this->set('arma', $arma);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $arma = $this->Armas->get($id);
        if ($this->Armas->delete($arma)) {
            $this->Flash->success(__('A arma com id: {0} foi apagada.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
}
