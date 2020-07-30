<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ApplicationUser[]|\Cake\Collection\CollectionInterface $applicationUsers
 */
?>
<div class="applicationUsers index content">
    <?= $this->Form->create($applicationUsers, ['type' => 'post', 'url' => ['controller' => 'ApplicationUsers', 'action' => 'search']]); ?>
    <h3>申込み一覧</h3>
    <div class="container">
        <div class="row">
            <div class="column column-50">
                <?= $this->form->text('contractor_name', ['placeholder' => '契約者氏名']); ?>
            </div>
            <div class="column column-50">
                <?= $this->form->text('company', ['placeholder' => '会社名']); ?>
            </div>
        </div>
        <div class="row">
            <div class="column column-50">
                <?= $this->form->text('application_status', ['placeholder' => '申込みステータス']); ?>
            </div>
            <div class="column column-50">
                <?= $this->form->text('service_category', ['placeholder' => 'サービスカテゴリー']); ?>
            </div>
        </div>
        <div class="row">
            <div class="column column-30">
                <?= $this->form->text('application_status', ['placeholder' => '申込みステータス']); ?>
            </div>
            <div class="column column-30">
                <?= $this->form->date('application_date', ['placeholder' => '申込日']); ?>
            </div>
            <div class="column column-30">
                <?= $this->form->date('start_date_use', ['placeholder' => '利用開始日']); ?>
            </div>
        </div>
    </div>
    <?= $this->Form->submit('search'); ?>
    <?= $this->Form->end(); ?>
    <?= $this->Html->link(__('検索'), ['action' => 'search'], ['class' => 'button float-left']) ?>
    <div class="table-responsive">
        <table>
            <thead style="background-color: #bdbdbd; border-color: #bdbdbd;">
                <tr>
                    <th><?= $this->Paginator->sort('contractor_name', '契約者氏名') ?></th>
                    <th><?= $this->Paginator->sort('company', '会社名') ?></th>
                    <th><?= $this->Paginator->sort('application_status', '申込みステータス') ?></th>
                    <th><?= $this->Paginator->sort('service_category', 'サービスカテゴリー') ?></th>
                    <th><?= $this->Paginator->sort('inflow_route', '流入経路') ?></th>
                    <th><?= $this->Paginator->sort('application_date', '申込日') ?></th>
                    <th><?= $this->Paginator->sort('start_date_use', '利用開始日') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($applicationUsers as $applicationUser): ?>
                <tr>
                    <td><?= h($applicationUser->contractor_name) ?></td>
                    <td><?= h($applicationUser->company) ?></td>
                    <td><?= h($applicationUser->application_status) ?></td>
                    <td><?= h($applicationUser->service_category) ?></td>
                    <td><?= h($applicationUser->inflow_route) ?></td>
                    <td><?= h($applicationUser->application_date->format('Y-m-d H:m')) ?></td>
                    <td><?= h($applicationUser->start_date_use->format('Y-m-d')) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
