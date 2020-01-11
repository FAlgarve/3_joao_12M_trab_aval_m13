<h1>Editar Personagem</h1>
<?php
    echo $this->Form->create($personagem);
    echo $this->Form->input('Nome');
    echo $this->Form->input('tipo_personagem', ['rows' => '3']);
    echo $this->Form->button(__('Salvar personagem'));
    echo $this->Form->end();
?>