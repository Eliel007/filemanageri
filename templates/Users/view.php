<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($user->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= $this->Number->format($user->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefone') ?></th>
                    <td><?= $this->Number->format($user->telefone) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Apelido') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($user->apelido)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Funcao') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($user->funcao)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Email') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($user->email)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Departamento') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($user->departamento)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Documents') ?></h4>
                <?php if (!empty($user->documents)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Data') ?></th>
                            <th><?= __('Situacao') ?></th>
                            <th><?= __('Dataval') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->documents as $documents) : ?>
                        <tr>
                            <td><?= h($documents->id) ?></td>
                            <td><?= h($documents->user_id) ?></td>
                            <td><?= h($documents->numero) ?></td>
                            <td><?= h($documents->data) ?></td>
                            <td><?= h($documents->situacao) ?></td>
                            <td><?= h($documents->dataval) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Documents', 'action' => 'view', $documents->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Documents', 'action' => 'edit', $documents->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Documents', 'action' => 'delete', $documents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $documents->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
