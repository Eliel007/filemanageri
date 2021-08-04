<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document[]|\Cake\Collection\CollectionInterface $documents
 */
?>
<div class="documents index content">
    <?= $this->Html->link(__('Novo documento'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Documentos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Utilizador') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('data') ?></th>
                    <th><?= $this->Paginator->sort('situacao') ?></th>
                    <th><?= $this->Paginator->sort('dataval') ?></th>
                    <th class="actions"><?= __('Ação') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($documents as $document): ?>
                <tr>
                    <td><?= $this->Number->format($document->id) ?></td>
                    <td><?= $document->has('user') ? $this->Html->link($document->user->id, ['controller' => 'Users', 'Actions' => 'view', $document->user->id]) : '' ?></td>
                    <td><?= $this->Number->format($document->numero) ?></td>
                    <td><?= h($document->data) ?></td>
                    <td><?= h($document->situacao) ?></td>
                    <td><?= h($document->dataval) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $document->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $document->id]) ?>
                        <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $document->id], ['confirm' => __('Are you sure you want to delete # {0}?', $document->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} of {{pages}}, Ver {{current}} Gravar
         out of {{count}} total')) ?></p>
    </div>
</div>
