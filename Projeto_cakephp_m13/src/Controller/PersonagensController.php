<?php

use App\Controller\AppController;

namespace App\Controller;

class PersonagensController extends AppController
{

    public function index()
    {
         $this->set('personagens', $this->Personagens->find('all'));
    }

    public function view($id = null)
    {
        $personagem = $this->Personagens->get($id);
        $this->set(compact('personagem'));
    }

    public function add()
    {
        $personagem = $this->Personagens->newEntity();
        if ($this->request->is('post')) {
            $personagem = $this->Personagens->patchEntity($personagem, $this->request->getData());
            if ($this->Personagens->save($personagem)) {
                $this->Flash->success(__('Seu personagem foi salvo.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não é possível adicionar o seu personagem.'));
        }
        $this->set('article', $personagem);
    }

    public function edit($id = null)
{
    $personagem = $this->Personagens->get($id);
    if ($this->request->is(['post', 'put'])) {
        $this->Personagens->patchEntity($personagem, $this->request->getData());
        if ($this->Personagens->save($personagem)) {
            $this->Flash->success(__('Seu Personagem foi atualizado.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Seu personagem não pôde ser atualizado.'));
    }

    $this->set('personagem', $personagem);
}

public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $personagem = $this->Personagens->get($id);
    if ($this->Personagens->delete($personagem)) {
        $this->Flash->success(__('O personagem com id: {0} foi apagado.', h($id)));
        return $this->redirect(['action' => 'index']);
    }
}

}