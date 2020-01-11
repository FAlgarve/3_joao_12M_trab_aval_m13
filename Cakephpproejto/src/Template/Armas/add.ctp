<h1>Adicionar Arma</h1>
<?php
    echo $this->Form->create($arma);
    echo $this->Form->input('Nome');
    echo $this->Form->input('tipo_arma', ['rows' => '3']);
    echo $this->Form->input('n_balas', ['rows' => '1']);
    echo $this->Form->button(__('Salvar arma'));
    echo $this->Form->end();
?>