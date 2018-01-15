<div class="filter-box margin-bottom">
    <form method="get" action="<?= $this->url->dir() ?>" class="search">
        <?= $this->form->hidden('controller', array('controller' => 'SearchController')) ?>
        <?= $this->form->hidden('action', array('action' => 'index')) ?>

        <div class="input-addon">
            <?= $this->form->text('search', array(), array(), array('placeholder="'.t('Search').'"'), 'input-addon-field') ?>
            <div class="input-addon-item">
                <?= $this->render('app/filters_helper') ?>
            </div>
        </div>
    </form>
</div>

<?php if (! $project_paginator->isEmpty()): ?>
    <div class="table-list">
        <?= $this->render('project_list/header', array('paginator' => $project_paginator)) ?>
        <?php foreach ($project_paginator->getCollection() as $project): ?>
            <div class="table-list-row table-border-left">
                <div>
                    <?php if ($this->user->hasProjectAccess('ProjectViewController', 'show', $project['id'])): ?>
                        <?= $this->render('project/dropdown', array('project' => $project)) ?>
                    <?php else: ?>
                        <strong><?= '#'.$project['id'] ?></strong>
                    <?php endif ?>

                    <span class="table-list-title <?= $project['is_active'] == 0 ? 'status-closed' : '' ?>">
                        <?= $this->url->link($this->text->e($project['name']), 'BoardViewController', 'show', array('project_id' => $project['id'])) ?>
                    </span>

                    <?php if ($project['is_private']): ?>
                        <i class="fa fa-lock fa-fw" title="<?= t('Private project') ?>"></i>
                    <?php endif ?>
                </div>
                <div class="table-list-details">
                    <?php foreach ($project['columns'] as $column): ?>
                        <strong title="<?= t('Task count') ?>"><?= $column['nb_open_tasks'] ?></strong>
                        <small><?= $this->text->e($column['title']) ?></small>
                    <?php endforeach ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <?= $project_paginator ?>
<?php else: ?>
  <p class="alert"><?= t('There is nothing assigned to you.') ?></p>
<?php endif ?>


