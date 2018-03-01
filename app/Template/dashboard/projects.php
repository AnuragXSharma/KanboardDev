<?php if ($paginator->isEmpty()): ?>
    <p class="alert"><?= t('Your are not member of any project.') ?></p>
<?php else: ?>
    <div class="table-list">
        <?= $this->render('project_list/header', array('paginator' => $paginator)) ?>
        <?php foreach ($paginator->getCollection() as $project): ?>
            <div class="table-list-row table-border-left">
                <?= $this->render('project_list/project_title', array(
                    'project' => $project,
                )) ?>

                <?= $this->render('project_list/project_details', array(
                    'project' => $project,
                )) ?>

                <?= $this->render('project_list/project_icons', array(
                    'project' => $project,
                )) ?>
            </div>
        <?php endforeach ?>
    </div>

    <?= $paginator ?>
<?php endif ?>
