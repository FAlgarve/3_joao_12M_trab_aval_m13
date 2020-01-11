<h1><?= h($personagem->Nome) ?></h1>
<p><h3>Tipo de personagem: <?= h($personagem->tipo_personagem)?></h3> </p>
<p><?= $this->Html->link('Voltar', ['action' => 'index']) ?></p>