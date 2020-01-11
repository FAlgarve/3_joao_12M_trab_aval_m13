<h1>Armas</h1>

<?= $this->Html->link('Personagens', '/Personagens/index')?><br>

<a><?= $this->Html->link('Adicionar Arma', '/Armas/add') ?></a>

<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Tipo de Arma</th>
    </tr>
    
    

    <?php foreach ($armas as $arma) : ?>
        <tr>
            <td><?= $arma->ID_arma ?></td>
            <td>
                <?= $this->Html->link($arma->Nome, ['action' => 'view', $arma->ID_arma]) ?>
            </td>

            <td>
                <?= $this->Html->link($arma->tipo_arma, ['action' => 'view', $arma->ID_arma]) ?>
            </td>

            <td>
                <?= $this->Html->link($arma->n_balas, ['action' => 'view', $arma->ID_arma]) ?>
            </td>

            <td>
                <?= $this->Html->link('Editar', ['action' => 'edit', $arma->ID_arma]) ?>
            </td>

            <td>
                <?= $this->Form->postLink('Apagar', ['action' => 'delete', $arma->ID_arma], ['confirm' => 'Confirma a eliminação da arma?']) ?>
            </td>
        </tr>

    <?php endforeach; ?>
</table>