<h1><?= h($arma->Nome) ?></h1>
<p><h3>Tipo de arma: <?= h($arma->tipo_arma)?></h3> </p>
<p><h3>Nº de balas: <?= h($arma->n_balas)?></h3> </p>
<p><?= $this->Html->link('Voltar', ['action' => 'index']) ?></p>