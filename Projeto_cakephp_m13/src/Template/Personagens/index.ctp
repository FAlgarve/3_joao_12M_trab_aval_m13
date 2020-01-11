<h1>Personagens</h1>

<?= $this->Html->link('Armas', '/Armas/index')?><br>

<?= $this->Html->link('Adicionar Personagem', '/Personagens/add')?>

<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Tipo de Personagem</th>
    </tr>
    
    <?php foreach ($personagens as $personagem) : ?>
        <tr>
            <td><?= $personagem->ID_personagem ?></td>

            <td>
                <?= $this->Html->link($personagem->Nome, ['action' => 'view', $personagem->ID_personagem]) ?>
            </td>

            <td>
                <?= $this->Html->link($personagem->tipo_personagem, ['action' => 'view', $personagem->ID_personagem]) ?>
            </td>

            <td>
                <?= $this->Html->link('Editar', ['action' => 'edit', $personagem->ID_personagem]) ?>
            </td>

            <td>
                <?= $this->Form->postLink('Deletar', ['action' => 'delete', $personagem->ID_personagem], ['confirm' => 'Confirma a eliminação do personagem?']) ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>